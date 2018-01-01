<?php defined('SYSPATH') OR die('No direct access allowed.');

//abstract
class Base extends Controller
{
	public $os;
	public $config;	//	maybe osConfig, and maybe only load it in controller if needed
	public $actions; // ??

	public $form = FALSE;	//	POST, GET etc requests
	public $query = FALSE;	//	POST, GET etc requests

	public $cache = FALSE;

	public $user = 'admin';	//	TODO


	//http://www.w3schools.com/cssref/css_colors.asp
	public $red = '#FFCCCC';
	public $green = '#CCFFFF';
	public $yellow = '#FFFFCC';

	public $request = FALSE;
	public $response = FALSE;


	//	public $data;

	//	public $auto_render = FALSE;
/*
	public function __construct(Request $request, Response $response)
	{
		Fire::info(__METHOD__);
	}
*/
	public function before()
	{
		//Fire::info(__METHOD__);
//ob_start();
		$this->cache = Kohana::$config->load('tango')->cache;

		//if(isset($_GET)) Fire::warn($_GET, 'GET');
		//if(isset($_POST)) Fire::warn($_POST, 'POST');
		//if(isset($_REQUEST)) Fire::warn($_POST, 'REQUEST');

		//	DEBUG REQUEST
		$request = array();
		if(isset($_GET) && count($_GET) > 0) $request['_GET'] = $_GET;
		if(isset($_POST) && count($_POST) > 0) $request['_POST'] = $_POST;
		if(isset($_REQUEST) && count($_REQUEST) > 0) $request['_REQUEST'] = $_REQUEST;
		if(count($request) > 0) Fire::warn($request, '$_REQUEST');

		if(count($this->request->query()) > 0) Fire::warn($this->request->query(), '$this->request->query()');
		if(count($this->request->post()) > 0) Fire::warn($this->request->post(), '$this->request->post()');


		/*
		$host = $this->request->param('host');

		if(!is_null($host))
		{
		    Fire::warn($host, 'REMOTE CALL TO');

		}
		*/
//var_dump($this->request->param('host'));

		//	DO SESSION CHECK
//print_r(Kohana::$config->load('users/admin')->passwd);
//exit;
		//$this->login = FALSE;

		//Fire::log(`id`);

		//Cache::instance('file')->set('os', 'deb');

		$os = Cache::instance('file')->get('os');

		Fire::warn('CACHE $os = ' . $os);

		if(is_null($os))
		{
			$os = Tango::detectOs();
		}
		//var_dump($os);

		//	SET OS

		//$os = OS;
		//$os = Tango::detectOs();
		//Fire::Warn($os);

		//$os = 'debian';

		$distro = 'Os_' . $os;
		//die($distro);

		//if(file_exists($filename))
		//{

$distro = 'Os_debian';


		//}

		$this->os = new $distro;

		$this->config = Kohana::$config->load('os/' . $os);


		//if($os['os'] == 'guess');

		//$this->os = new $os;

		//$this->config = Kohana::$config->load('os/' . OS);

		//	ACTIONS MENU

		$this->actions = $this->actions();

		//echo '<pre>';print_r($menus);

//echo get_parent_class($this);


//exit;

		$query = $this->request->query();

		if(count($query) > 0)
		{
			if(isset($query['eof']))	//	eof = end of form (the hidden field is automaticaly added by Form::close())
			{
				$this->form = $query;
			}
			else
			{
				$this->query = $query;
			}
		}
	}

	public function decorate($string, $style = FALSE)
	{
//echo __METHOD__;exit;
	    $decoration = '';

	    if(is_array($style))
	    {
	        foreach($style as $key => $val)
	        {
	            $decoration .= $key . ':' . $val . ';';
	        }

	        return '<div style="' . $decoration . '">' . $string . '</div>';
	    }
	    elseif(is_string($style))
	    {
	        return '<div style="' . $style . '">' . $string . '</div>';
	    }
	    else
	    {
	        return $string;
	    }
	}

	public function testSh()
	{

		//Kohana::$environment = Kohana::PRODUCTION;
		//echo Kohana::$log;

		//Fire::setEnabled(FALSE);
		//print_r(Kohana::$log);


		//exit;
		$this->response->send_headers();
		//$this->response->render();
		//ob_start();
		//	$this->response->send_headers();
		//$this->response->render();
		//		ob_end_flush();
		//	ob_flush();
		ob_end_clean();

		$size = ini_get('output_buffering');
		//Fire::warn('size ' . print_r($size, 1));
		var_dump($size);
		//echo $size;flush();exit;
		//echo str_pad('EXECUTING: <br />', $size);
		//flush();

		for($i = 0; $i < 4; $i++)
		{


			echo $i . '<br />' . "\n";
			/*
			 if($size > 0)
			 {
				echo str_pad($i . '<br />' . "\n", $size);

				}
				else
				{
				echo $i . '<br />' . "\n";
				}
				*/
			//ob_flush();
			flush();
			sleep (1);
		}

		//		ob_flush();
		//ob_end_clean();
		//echo '<hr>'.$size;
		//flush();
		//exit;

	}


	protected function sh($cmd, $replace = NULL)
	{

		Fire::info($cmd, __METHOD__);

		$this->response->send_headers()->body();

		ob_end_clean();
//ob_flush();
		//TODO switch off firePHP

		$hostname = $this->os->hostname();

		//$this->shRecursive($cmd, $hostname, $replace);

		$cmds = $this->shRecursive($cmd, $hostname);

		$total = count($cmds, 1);

		if($total > 0)
		{
			$progress = round(100 / $total);

			$totalProgress = 0;

			echo '<script>$("#progressBar").progressBar({ value: 0 })</script>';
			flush();

	//exit;
			foreach($cmds as $_cmd)
			{
				$this->shExec($_cmd, $hostname, $replace);

				$totalProgress = $totalProgress + $progress;

				echo '<script>$("#progressBar").progressBar({ value: ' . $totalProgress . ' })</script>';

				flush();
			}

		}
//$_cmd = $this->shRec($cmd);
//echo '<pre>';print_r($_cmd);
//flush();
	}

	public function recursive($datas, $clear = TRUE)
	{

		Fire::info(__METHOD__);
		Fire::log(func_get_args());

		$recursive = __FUNCTION__;

		if($clear)	// CLEAR PREVIOUS DATA FROM $this->recursiveData
		{
			$this->recursiveData = array();
		}

		if(is_array($datas))
		{

			foreach ($datas as $data)
			{
				if(is_array($data))
				{
					self::$recursive($data, FALSE);

				}
				else
				{

					$this->recursiveData[] = $data;

				}
			}
		}
		else
		{

			return array($datas);

		}


		return $this->recursiveData;

	}

	private function shRecursive($cmd, $hostname, $replace = '')
	{

		Fire::info($cmd, __METHOD__);

		if(is_array($cmd))
		{

			foreach ($cmd as $_cmd)
			{
				if(is_array($_cmd))
				{
					self::shRecursive($_cmd, $hostname, $replace);
				}
				else
				{
					$this->shExec($_cmd, $hostname, $replace);
				}
			}
		}
		else
		{
			$this->shExec($cmd, $hostname, $replace);
		}
//echo 'DONE';
		//ob_start();
	}

	private function shExec($cmd, $hostname = '', $replace)
	{

		//Fire::info($cmd, __METHOD__);

		$handle = popen($cmd . ' 2>&1', 'r');

		$size = ini_get('output_buffering');

		//echo `date '+%Y-%m-%d %H:%M:%S'`

		$prompt = '<div id="cmd">tango@' . $hostname . ':/$ ' . $cmd . '</div>' . "\n";

		if($size > 0)
		{
			echo str_pad($prompt, $size);

			flush();
			//ob_flush();

			while(!feof($handle))
			{

				if(is_array($replace))
				{
					$subject = fgets($handle);
					$subject = str_replace($replace['search'], $replace['replace'], $subject);
					echo str_pad(trim($subject) . "<br />\n", $size);
				}
				else
				{
					echo str_pad(trim(fgets($handle)) . "<br />\n", $size);
				}

				flush();
				//ob_flush();
			}

		}
		else
		{
			echo $prompt;

			flush();
			//ob_flush();

			while(!feof($handle))
			{

				if(is_array($replace))
				{
					$subject = fgets($handle);
					$subject = str_replace($replace['search'], $replace['replace'], $subject);
					echo trim($subject) . "<br />\n";	//	trim('<div id="out">' . fgets($handle)) . '</div>' . "\n";
				}
				else
				{
					echo trim(fgets($handle)) . "<br />\n";	//	trim('<div id="out">' . fgets($handle)) . '</div>' . "\n";
				}

				flush();
				//ob_flush();
			}

		}

		pclose($handle);

		///ob_start();

		/*
		$size = ini_get('output_buffering');

		if($size > 0)
		{
			echo '<div class="ui-widget">
				<div class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0 .7em;">
				<p>
					<span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
					<strong>EXECUTING</strong>
					' . $cmd . '
				</p>
				</div>
				</div>';
			//echo str_pad('EXECUTING: ' . $cmd . '<br />', $size);
		}
		else
		{
			echo '<div class="ui-widget">
				<div class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0 .7em;">
				<p>
					<span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
					<strong>EXECUTING</strong>
					' . $cmd . '
				</p>
				</div>
				</div>';
			//echo 'EXECUTING: ' . $cmd . '<br />';
		}

		flush();

		$handle = popen($cmd . ' 2>&1', 'r');

		while(!feof($handle))
		{
			$line = fgets($handle);

			if($size > 0)
			{
				$out = str_pad(trim($line) . '<br />' . "\n", $size);
			}
			else
			{
				$out = trim($line) . '<br />' . "\n";
			}

			echo $out;

			//ob_flush();
			flush();
		}
		pclose($handle);
		*/
	}

	/**
	 * TODO what to return ?
	 *
	 * @param unknown_type $command
	 * @return Ambigous <string>
	 */
	protected function exec($command)
	{

		Fire::info(__METHOD__ . ' ' . $command);

		$data = array();


		//	Zero is stdin
		//	One is stdout
		//	Two is stderr

		$command = 'sudo -u root ' . $command . ' 2>&1';

		//Fire::warn($command);

		$data['status'] = exec($command, $data['response'], $data['error']);
/*
		if($data['error'] == 0)
		{
			return $data['response'];
		}
		else
		{
			return 'error';
		}
*/
		return $data['response'];
	}

	protected function run($command)
	{

		Fire::info(__METHOD__ . ' ' . $command);

		return `sudo -u root $command 2>&1`;

	}

	/**
	 * RENDER
	 *
	 * @param array $data
	 * @param string $viewPath
	 *
	 * @return void
	 */
	public function render($data = array(), $viewPath = '')
	{

		$methods = array();
		$allMethods = get_class_methods(get_called_class());

		foreach($allMethods as $method)
		{
			//$data['methods'][]=$method;
			if(strpos($method, 'action_') !== FALSE)
			{
				$method = str_replace('action_', '', $method);
				$url = '/' . $this->request->directory() . '/' . $this->request->controller() . '/' . $method;
				$methods[$method] = $url;
			}
			//else $data['methods'][] = 'kkk';
		}

		//get_called_class()

		//Fire::info(__METHOD__);
		//Fire::info($data);

		//	IF REQUEST IS NOT DIRECT, JUST RETURN DATA
		//	HMVC
		if($this->request->is_initial() == FALSE) return $data;


		//	DIRECT REQUEST, RENDER PAGE
		if($viewPath != '' && file_exists(APPPATH . 'views/' . $viewPath . '.php'))	//	IF $viewPath IS SET AND VIEW FILE EXISTS, USE IT
		{

			$view = $viewPath;

			$autoView = 'not in use';	//	THIS IS JUST FOR DEBUG

		}
		else
		{

			$autoView = $this->request->directory() . '/' . $this->request->controller() . '/' . $this->request->action();	//	BUILD PATH TO THE VIEW FILE

			if($this->request->directory() == '') $autoView = substr($autoView, 1);

			$autoView = str_replace('index/index', 'index', $autoView);

			if(file_exists(APPPATH . 'views/' . $autoView . '.php'))	//	DOES THE VIEW FILE EXIST
			{

				$view = $autoView;	//	SET $view

			}
			else
			{

				$view = 'tmp';	//	SET $view TO tmp

			}

		}

		//	DEBUG INFO ON WHICH VIEW IS BEING RENDERED
		if($view == $autoView)
		{
			Fire::info(__METHOD__ . "(views/$autoView.php)");
		}
		else
		{
			Fire::info(__METHOD__ . "(views/$view.php)" . ' DEFAULT VIEW NOT FOUND @ views/' . $autoView . '.php, USING views/tmp.php');
		}


		//	IF REQUEST IS AJAX, RENDER JUST A VIEW FILE
		if($this->request->is_ajax())
		{
			$this->response->body(View::factory($view, array('data' => $data)));
		}
		else	//	RENDER TEMPLATE AND VIEW
		{

			$this->template = View::factory('template');

			//	METHODS
			$this->template->methods = $methods;

			//	MENU

			//	READ FROM CACHE


			//	ELSE GENERATE

			$menus = $this->menus();


			$this->template->menus = $menus;

			//	ACTION MENUS

			$this->template->actions = $this->actions;

			//	DISPLAY CLEAR CACHE BUTTON

			///if($this->cache) $data['cache'] = TRUE;

			//	CONTENT

			$this->template->content = View::factory($view, array('data' => $data));

			//	RENDER

			$this->response->body($this->template->render());

		}
	}

	public function menus()
	{

		if($this->cache)
		{
			$cache = Cache::instance('file')->get('menus');

			if(is_array($cache)) return $cache;
		}

		//	MENU

		$menu = array();

		$dirs = $this->exec('ls ' . APPPATH . 'classes/controller');

		foreach($dirs as $dir)
		{
			if($dir != 'welcome.php' && $dir != 'sh.php' && $dir != 'api.php')
			{
				$menus[] = $dir;
			}
		}

		//	SUB MENU

		foreach($menus as $subMenu)
		{
			$_subMenu = $this->exec('ls ' . APPPATH . 'classes/controller/' . $subMenu);

			foreach ($_subMenu as $__subMenu)
			{
				if(!is_array($__subMenu) && $__subMenu != 'index.php')
				{
					$__subMenu = substr($__subMenu, 0, -4);
					$menu[$subMenu][$__subMenu] = $__subMenu;
				}
			}
		}

		if($this->cache) Cache::instance('file')->set('menus', $menu);

		return $menu;
	}

	public function directories()
	{

		$menu = array();

		$dirs = $this->exec('ls ' . APPPATH . 'classes/controller');

		foreach($dirs as $dir)
		{
			if($dir != 'welcome.php' && $dir != 'sh.php')
			{
				$menus[] = $dir;
			}
		}

		return $menu;
	}

	public function controllers()
	{
		$menu = array();

		foreach($menus as $subMenu)
		{
			$_subMenu = $this->exec('ls ' . APPPATH . 'classes/controller/' . $subMenu);

			foreach ($_subMenu as $__subMenu)
			{
				if(!is_array($__subMenu) && $__subMenu != 'index.php')
				{
					$__subMenu = substr($__subMenu, 0, -4);
					$menu[$subMenu][$__subMenu] = $__subMenu;
				}
			}
		}

		return $menu;
	}

	public function dirContent($dir)
	{
		$dirs = scandir($dir);

		if($dirs[0] == '.') unset($dirs[0]);
		if($dirs[1] == '..') unset($dirs[1]);

		//if(isset($dirs['..'])) unset($dirs['..']);
//echo '<pre>';print_r($dirs);exit;
		return $dirs;
	}

	public function actions()
	{

		if($this->cache)
		{
			$cache = Cache::instance('file')->get(get_class($this));

			if(is_array($cache)) return $cache;
		}

		$menus = array();

		$methods = get_class_methods($this);

		foreach($methods as $method)
		{

			if(strpos($method, 'action_') !== FALSE && $method != 'action_methods')
			{
				$menu = str_replace('action_', '', $method);
				$menuName = str_replace('_', ' ', $menu);

				$menus[$menu] = $menuName;
			}

		}

		//Cache::instance(get_class($this))->set('actions', $menus);
Fire::warn(get_class($this));
		return $menus;

	}


	public function read($file, $advanced = FALSE)
	{
		Fire::info(__METHOD__ . ' $file ' . $file);

		if($advanced)
		{
			return $this->run('cat ' . $file);
		}
		else
		{
			return $this->exec('cat ' . $file);
		}
	}

	public function write($file, $data, $advanced = FALSE)
	{
		Fire::info(__METHOD__ . ' $file ' . $file);

		$date = Tango::getDate();//date('Ymd_His');
		$backup = $file . '.' . $date;
		$res = __('creating backup: ') . $backup . '<br />';
		$res .= $this->run('cp ' . $file . ' ' . $backup);
		//$r['f'] = $file;$r['b'] = $backup;
		//$r['s'] = exec('sudo cp ' . $file . ' ' . $backup, $r['r'], $r['e']);
		//$r['s'] = exec('sudo echo "' . $content . '" > ' . $file, $r['o'], $r['e']);
		//print_r($r);

		$res .= __('saving file') . '<br />';

		$content = '';

		//	IF DATA IS COMING IN FROM <TEXTAREA> SPLIT IT BY /n AND LATER trim() THE REST OF THE NEW LINE CHARS
		if(is_string($data))
		{
			$data = explode("\n", $data);
		}

		if(is_array($data))
		{
			foreach ($data as $line)
			{

				$content .= trim($line) . PHP_EOL;

			}
		}
		else
		{
			$content .= $data;
		}

		//$content .= "\n";

		//$cmd = 'echo \'' . $content . '\' > ' . $file;
		$res .= $this->run(" sh -c 'echo \"$content\" > $file'");
		#$r= $this->exec("echo $content > $file");
//print_r($r);

		/**
		 * TODO write to /current all config files
		 */

		//echo '<br />' . $cmd . '<br />';

		//echo `$cmd`;
		/*
		$last_line = system('sudo echo \'' . $content . '\' > ' . $file, $retval);
		echo '

<hr />Last line of the output: ' . $last_line . '
<hr />Return value: ' . $retval . '<hr>';
*/


		if($this->request->is_ajax())
		{

			//	maybe echo it ???
		}


		//$res .= `sudo echo "$content" > $file`;
		return $res;
	}


	public function userLog()
	{
		//if no file, create
		//log user action
	}

	/*
	 public function after()
	 {
		Fire::info(__METHOD__);
		}
		*/
}
//EOF