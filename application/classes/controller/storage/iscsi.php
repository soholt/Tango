<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Storage_Iscsi extends Base
{

	public function action_index()
	{
		$this->render('TODO ' . __METHOD__);
	}

	public function action_actions()
	{
		$this->render($this->actions());
	}

	public function action_test()
	{



//Fire::warn($menus);
	//	return $menus;
	$this->render($this->actions);
//echo __CLASS__;
	}
}//EOF