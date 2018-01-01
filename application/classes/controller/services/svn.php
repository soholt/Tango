<?php defined('SYSPATH') or die('No direct script access.');
//http://www.howtoforge.com/debian_subversion_websvn
//http://www.tc.umn.edu/~brams006/selfsign.html
//http://www.abbeyworkshop.com/howto/misc/svn01/
//http://queens.db.toronto.edu/~nilesh/linux/subversion-howto/
class Controller_Services_Svn extends Base
{

	private $conf = NULL;

	public function before()
	{

		Fire::log(__METHOD__);

		parent::before();	//	MUST NEVER FORGET THIS
//parent::__controller();

		//if($this->login == TRUE) exit('add parent::before(); to ' . __METHOD__);//	TODO REDIRECT TO LOGIN

		$svcName = $this->request->controller();

		if(isset($this->config['services'][$svcName]))
		{
			$this->conf = $this->config['services'][$svcName];

//			if(!isset($this->conf['log'])) $this->conf['log'] = NULL;
		}
		//$this->end();
		//$this->response->render($this->template);
	}

	public function action_new()
	{

		if(isset($_REQUEST['repo']))
		{
			//mkdir /var/svn-repos/
			//$this->'svnadmin create --fs-type fsfs /var/svn-repos/' . $repo;

			$svnPath = $this->conf['path'];
			$svnName = $_REQUEST['repo'];

			//$cmd[] = 'mkdir -p ' . $this->conf['path'];
			$cmd[] = 'svnadmin create --fs-type fsfs ' . $svnPath . $svnName;
			$cmd[] = 'chown -R www-data:subversion ' . $svnPath . $svnName . '/*';
			$cmd[] = 'chmod -R 770 ' . $svnPath . $svnName . '/*';
			$cmd[] = 'svn mkdir -m "creating default directory structure" http://127.0.0.1/svn/' . $svnName . '/trunk http://127.0.0.1/svn/' . $svnName . '/tags http://127.0.0.1/svn/' . $svnName . '/branches';
//svn co file:///home/svn/juliadating/trunk /home/gin/www/juliadating
			//$this->render($cmd);

			$this->sh($cmd);
		}
	}

	public function action_groups()
	{

		//FIRST USER
		//htpasswd /etc/apache2/svn.juliadating.passwd john

		//OTHER USERS
		//htpasswd /etc/apache2/svn.juliadating.passwd john
	}

	public function action_index()
	{

		$data = array();

		//	CANT DO ANYTHING AS THERE IS NO CONFIG FOR THIS DISTRO

		if(is_null($this->conf))
		{
			$this->render(__('not available for your system yet'));
		}

		//	LOAD SHARED SERVICE VIEW

		if(isset($this->conf['service']))
		{

			$data = $this->conf;

			//	ADD SERVICE ACTIONS
			$data['actions'] = $this->os->svcActions($this->conf['service']);

			//	ADD STATUS
			$data['status'] = $this->os->svcStatus($this->conf['service']);

			//	RENDER
			$this->render($data, $this->request->directory() . '/service');	//	CHANGE IT FOR CUSTOM SETUPS

		}
		else	//	SHARED(DEFAULT) INSTALL VIEW
		{

			$this->render($data, $this->request->directory() . '/install');

			//	FOR directory/controller/install VIEW
			//$this->render($data, $this->request->directory() . '/' . $this->request->controller() . '/install');
		}

	}

	public function action_service()
	{

		$action = $this->request->param('id');

		Fire::info(__METHOD__ . ' ' . $action);

		switch($action)
		{
			case 'install':

				$cmd = array();

				if(array_key_exists('packagePre', $this->conf))
				{
					$cmd[] = $this->conf['packagePre'];
				}

				if(array_key_exists('packageName', $this->conf))
				{
					$cmd[] = $this->os->pkgInstall($this->conf['packageName']);
				}

				if(array_key_exists('packagePost', $this->conf))
				{
					$cmd[] = $this->conf['packagePost'];
				}

				$this->sh($cmd);

				break;

			case 'status':
				echo $this->os->svcStatus($this->conf['service']);
				break;

			case 'kill':
				$sh[] = $this->os->svcKill($this->conf['service'], TRUE);
				$sh[] = $this->os->svcStatus($this->conf['service'], TRUE);
				$this->sh($sh);
				break;

			default:
				$sh[] = $this->os->svcAction($this->conf['service'], $action, TRUE);
				$sh[] = $this->os->svcStatus($this->conf['service'], TRUE);
				$this->sh($sh);
		}

	}

	public function action_backups()
	{
		$this->render($this->conf['config'], 'backups');
	}

	//AJAX
	/**
	 *
	 *
	 * No get/post '?file=name' is needed, if the serviceConfig is_file()
	 * If the serviceConfig is not a file, but a dir with many config files
	 * You guessed it, 1 param is needed - ?file=name...
	 *
	 */
	public function action_config()
	{
		$level = $this->request->param('id');

		//	IF ITS A FILE, OPEN IT FOR EDITING

		if(is_file($this->conf['serviceConfig']))
		{
			if($level == 'advanced')
			{
				$this->render($this->read($this->conf['serviceConfig'], TRUE));
			}
			else
			{
				$this->render($this->read($this->conf['serviceConfig'], TRUE));
			}
		}
		else	//	ITS A DIR ?file=name must be present
		{

			$file = $this->request->query('file');

			if(!is_null($file))
			{
				if($level == 'advanced')
				{
					$this->render($this->read($this->conf['serviceConfig'] . '/' . $file, TRUE));
				}
				else
				{
					$this->render($this->read($this->conf['serviceConfig'] . '/' . $file, TRUE));
				}
			}

		}

	}

	public function action_save()
	{


		//echo '<pre>'; print_r($_REQUEST);

		if(isset($_REQUEST['config']))
		{
			$config = $_REQUEST['config'];
			/*
			 $config = '';

			 foreach ($_REQUEST['config'] as $line)
			 {

				//$config .= str_replace(array(chr(10), chr(13)), "\n", $line);
				//$config .= "\n";
				//$config .= trim($line) . "\n";

				}
				*/
			echo $this->write($this->conf['config'], $config);
			//echo $this->write($this->read($this->config['services']['nfs']['config'], '');
		}
	}

}//EOF
