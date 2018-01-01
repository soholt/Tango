<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Services_Netatalk extends Base
{

	private $conf = NULL;

	public function before()
	{

		Fire::log(__METHOD__);

		parent::before();	//	MUST NEVER FORGET THIS
//parent::__controller();


		//if($this->login == TRUE) exit('add parent::before(); to ' . __METHOD__);//	TODO REDIRECT TO LOGIN

		$name = $this->request->controller();

		if(array_key_exists($name, $this->config['services']))
		{
			$this->conf = $this->config['services'][$name];

			if(!isset($this->conf['log'])) $this->conf['log'] = NULL;
		}
		//$this->end();
		//$this->response->render($this->template);
	}


	public function action_index()
	{

		$data = array();

		//	CANT DO ANYTHING AS THERE IS NO CONFIG FOR THIS DISTRO

		if(is_null($this->conf))
		{
			$this->render(__('not available for your system yet'));
		}

		if(isset($this->conf['config']) && file_exists($this->conf['config']))
		{

			$data['service'] = $this->conf['service'];

			$data['config'] = $this->conf['config'];

			$data['log'] = (isset($this->conf['log'])) ? $this->conf['log'] : NULL;

			$data['actions'] = $this->os->svcActions($this->conf['service']);

			$data['status'] = $this->os->svcStatus($this->conf['service']);

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

			default:
				echo $this->os->svcAction($this->conf['service'], $action);
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
			echo $this->write($this->config['services']['nfs']['config'], $config);
			//echo $this->write($this->read($this->config['services']['nfs']['config'], '');
		}
	}

}//EOF
