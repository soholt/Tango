<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller//Controller_Template
{

	public function before()
	{
		session_start();
if(isset($_GET['os']))
{


		$_SESSION = array();
		$_SESSION['os'] = array();

		$uname = strtolower(trim(`uname`));

		switch($uname)
		{
			case 'linux':

				$distribution = trim(`cat /etc/issue`);
				$distribution = explode(' ', $distribution);
				$distribution = strtolower($distribution[0]);

				$version = trim(`uname -r`);
				$version = explode('.', $version);
				$version = $version[0];

				$_SESSION['os']['type'] = $uname;
				$_SESSION['os']['name'] = $distribution;
				$_SESSION['os']['version'] = $version;
				$_SESSION['os']['hostname'] = trim(`hostname -s`);
				$_SESSION['os']['fqdn'] = trim(`hostname -f`);
				break;

			case 'darwin':	//	http://en.wikipedia.org/wiki/Darwin_(operating_system)#Kernel

				$version = trim(`uname -r`);
				$version = explode('.', $version);
				$major = $version[0];
				$minor = $version[1];

				//$nameMajor[8] = 'tiger';
				//$nameMajor[9] = 'leopard';
				$nameMajor[10] = 'snow_leopard';
				$nameMajor[11] = 'lion';
				$nameMajor[12] = 'mountain_lion';

				//$_SESSION['os']['sssstype'] = 'fghfghfgh';
				$_SESSION['os']['type'] = $uname;
				$_SESSION['os']['name'] = $nameMajor[$major];
				$_SESSION['os']['version'] = $version;
				//$_SESSION['os']['hostname'] = trim(`uname -n`);
				$_SESSION['os']['hostname'] = trim(`hostname -s`);
				$_SESSION['os']['fqdn'] = trim(`hostname -f`);
				break;


			default:
				//Fire::warn('default ' . $uname);
				//$_SESSION['os']['type'] = $uname;
				//die('your system is not supported yet');
				//echo 'uname '.$uname.'<hr/>';

		}
		Fire::warn($_SESSION, 'session');
		print_r($_SESSION['os']);
}

		$this->template = View::factory('template');
		//$_SESSION['host'] = 'localhost';


	}

	//	TODO clear all caches maybe
	//	TODO IF SESSION ALLOW MENU
	//	TODO after login forward to referrer
	//	TODO twitter rss feed on front page, donate button
	//	TODO show google ad maybe
	//	TODO packaging routine eg: clear config/users
	//	TODO get rid of tango.js so donate form works
	//	TODO LDAP LOGIN
	public function action_index()
	{

		$data = array('services');//, 'storage', 'system'

		if($this->auth())
		{

		}
		else
		{

		}

		//$this->response->body($view);
		//$this->template->content = View::factory('welcome/home', array('data' => $data));
		$this->template->content = View::factory('welcome/home')->set('data', $data);
		$this->response->body($this->template->render());

	}

	//FOR REMOTE MANAGEMENT
	public function action_info()
	{
		if($this->auth())
		{
			//TODO send headers
			//TODO SWITCH OFF FIREPHP
			$_SESSION['os']['type'] = 'linux';
			$_SESSION['os']['name'] = 'debian';
			$_SESSION['os']['version'] = '6';

			header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
			header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

			if(isset($_SESSION['os']['type'])) header('X-Tango-Os-Type:' . $_SESSION['os']['type']);
			if(isset($_SESSION['os']['name'])) header('X-Tango-Os-Name:' . $_SESSION['os']['name']);
			if(isset($_SESSION['os']['version'])) header('X-Tango-Os-Version:' . $_SESSION['os']['version']);

			//print_r($_SESSION['os']);

		}
	}

	//TODO AUTH
	public function auth()
	{
		return 1;
	}


	public function action_index_()
	{

		$this->response->body(View::factory('welcome/login'));
/*
		if(is_null(Tango::detectOs()))
		{
			//donate and request support for your os
			//change config if you know its supported
			$view = __METHOD__;
			$this->template->content = $view;
		}
		else
		{
			//cool
			$view = View::factory('welcome/login');
			$this->template->content = $view;
		}
*/
	}

	public function action_login()
	{

		$data = $this->request->query();

		$username = $this->request->query('username');

		if( ! is_null($username) )
		{

			$user = Kohana::$config->load('users/' . $username);

			Fire::warn('usename ' . $user);

		}

		Fire::warn($data);


		$view = __METHOD__;
		$this->template->content = $view;
	}

	public function action_register()
	{
Tango::DetectOs();
		$users = Tango::users();

		if(count($users) > 0)
		{

			print_r($users);
			//	for sec reasons cant create any more users
			// if you forgot your password, delete /config/users/YOUR_USERNAME.php (temporary remove other users files)

			$view = __METHOD__;
			$this->template->content = $view;
		}
		else
		{

			//	if theres a request with username/password,
			//	crete new user, redirect on success
			//	else
			//	show registration form

			$view = __METHOD__;
			$this->template->content = $view;

		}

	}

	public function action_controllers()
	{
		$this->auto_render = FALSE;

		$directory = $this->request->param('id');

	exec('ls ' . APPPATH . 'classes/controller/' . $directory, $_subMenu);

	$controllers = '';

			foreach ($_subMenu as $__subMenu)
			{
				if(!is_array($__subMenu) && $__subMenu != 'index.php')
				{
					$__subMenu = substr($__subMenu, 0, -4);
					//$menu[$__subMenu] = $__subMenu;
					$controllers .= '|<a href="#" onclick="ax(\'/' . $directory . '/' . $__subMenu . '/methods\',\'methods\')"> ' . $__subMenu . ' </a>|';

				}
			}

		echo $controllers;

	}


/*
$this->request->directory() . '/' . $this->request->controller() . '/' . $this->request->action()

// From within a controller:
$this->request->param('key_name');

// Can be used anywhere:
Request::current()->directory();
Request::current()->controller();
Request::current()->action();


*/

}//EOF