<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api extends Controller//Base
{

	//	TODO clear all caches maybe

	//	TODO after login forward to referrer
	//	TODO twitter rss feed on front page, donate button
	//	TODO show google ad maybe
	//	TODO packaging routine eg: clear config/users

	public function action_index()
	{

		echo '<pre>';

		$request = Request::factory('system/groups');

		$data = $request->execute();

		print_r($data);

	}

	public function action_login()
	{

		//	TODO redirect to prev page if login expired ?

		print_r($_REQUEST);


	}

	public function login($user, $pass)
	{
		$login = FALSE;
		return $login;
	}

	public function __call($method,$arguments)
    {
        $id=(int) $method;
        $this->view($id);
    }

    public function view($id)
    {
        echo $id;
        // you'd retrieve the article from the database here normally
    }


}//EOF