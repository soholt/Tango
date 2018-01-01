<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Services_Openldap extends Base
{

	public function before()
	{
		parent::before();
	}

	public function action_index()
	{
		$this->render();
	}

}//EOF