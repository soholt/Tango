<?php defined('SYSPATH') or die('No direct script access.');

class Controller_System_Users extends Base
{
	public function action_index()
	{
		$data['groups'] = $this->os->groups();
		$data['users'] = $this->os->users();

		$this->render($data);
	}

}//EOF