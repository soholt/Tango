<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Services_Powernowd extends Base
{

	public function before()
	{

		parent::before();

		//$this->render();

	}

	public function action_index()
	{

		$cpu = $this->exec('cat /proc/cpuinfo');

		$this->render($cpu);



		//$this->render();

	}

	public function action_install()
	{
		if(isset($_REQUEST['install']))
		{
			$cmd[] = $this->os->pkgInstall('cpufrequtils powernowd', 1);
			$cmd[] = 'cat /proc/cpuinfo';
			$this->sh($cmd);
			//echo $cmd;
		}
	}
}//EOF
