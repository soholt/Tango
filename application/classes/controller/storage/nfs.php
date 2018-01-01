<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Storage_Nfs extends Base
{

	public function action_index()
	{

		$data = 'TODO ' . __METHOD__;

		if(isset($_REQUEST['host']))
		{
			$data = $this->available($_REQUEST['host']);
		}
		else
		{
			$data = $this->exec('sudo showmount -e ');
		}

		$this->render($data);

	}

	public function available($host)
	{
		return $this->exec('sudo showmount -e ' . $host);
	}

}//EOF