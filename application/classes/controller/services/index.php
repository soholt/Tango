<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Services_Index extends Base
{

	public function action_index()
	{
		$this->render('TODO ' . __METHOD__);
	}

}//EOF