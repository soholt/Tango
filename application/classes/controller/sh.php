<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Sh extends Base
{

	public function action_index()
	{

		if(isset($_REQUEST))
		{
			$cmd = $_REQUEST['cmd'];

			if(!isset($_REQUEST['params']))
			{
				$params = '';
			}
			else
			{
				$params = ' ' . $_REQUEST['params'];
			}

$this->sh($cmd . $params);

			switch($cmd)
			{
				case 'pkgSearch':
					$this->sh($this->os->pkgSearch($params));
					break;

				case 'osUpdate':
					$this->sh($this->os->osUpdate());
					break;
			}
			//$this->sh($_REQUEST['cmd']);
		}

	}

//	public function after()
	//{
		//echo '<hr>after';
		//parent::after();
	//}

	/*

// From within a controller:
$this->request->action();
$this->request->controller();
$this->request->directory();

// Can be used anywhere:
Request::current()->action();
Request::current()->controller();
Request::current()->directory();

// From within a controller:
$this->request->param('key_name');

// Can be used anywhere:
Request::current()->param('key_name');

	 */

}//EOF