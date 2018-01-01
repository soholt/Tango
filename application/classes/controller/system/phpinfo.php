<?php defined('SYSPATH') or die('No direct script access.');

class Controller_System_Phpinfo extends Base
{

	public function action_index()
	{
		//phpinfo();
		$this->render();
	}

}//EOF