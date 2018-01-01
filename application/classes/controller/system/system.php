<?php defined('SYSPATH') or die('No direct script access.');

class Controller_System_System extends Base
{

	//	TODO rsync

	public function action_index()
	{
		//$data = this->run('uname -a');
$data = array('test');
		$this->render($data);
	}

	public function action_cache_delete_all()
	{
		Cache::instance('file')->delete_all();
	}

	public function action_cache_delete()
	{
		$cache = $this->request->param('id');

		$deleted = Cache::instance('file')->delete($cache);

		echo 'deleting ' . $cache . ' cache<br />';

		if($deleted)
		{
			echo __('cache deleted');
		}
		else
		{
			echo __('there was no cache');
		}

		echo '<br />';
	}

	public function action_download_configs()
	{

	}

	public function action_shell()
	{
		if($this->query)
		{
			$this->sh($this->query['cmd']);
		}
		else
		{
			$this->render();
		}
	}

}//EOF