<?php defined('SYSPATH') or die('No direct script access.');

class Controller_System_Groups extends Base
{
/*
	public function before()
	{
		$param = $this->request->param('id');
		$param = 'sddsf';
		if(method_exists($this, $param))
		{
			echo $param;
		}
		else
		{
			echo 'method does not exists';
		}
		//echo __CLASS__;
		exit;
	}

	public function __call($name, $arguments)
	{
		// Note: value of $name is case sensitive.
		echo "Calling object method '$name' "
		. implode(', ', $arguments). "\n";
	}
*/
	public function action_index()
	{
		//$param = $this->request->param('id','value is null');
		//print_r($param);
		//$this->action_list($param);

		$data = array();

		$data['groups'] = $this->os->groups();
		//print_r($this->os);

		$this->render($data);
	}

	public function action_all()
	{

		$this->render($this->groups('all'));

	}

	public function action_user()
	{

		$data = array();

		//TODO get :id
		$user = $this->request->param('id','tango');

		$data['groups'] = $this->os->userGroups($user);

		$this->render($data);

	}

	public function action_users()
	{

		$this->render($this->groups('users'));

	}

	/**
	 * TODO make sure it works on all systems
	 *
	 * @param unknown_type $param
	 * @return multitype:unknown Ambigous <>
	 */
	public function groups($param = 'all')
	{

		$groups = array();
		$users = array();

		$allGroups = $this->exec('cat /etc/group');

		foreach($allGroups as $group)
		{

			$_group = explode(':', $group);

			if(isset($_group[3]))
			{
				$users = explode(',', $_group[3]);

				//if($_users[0] == '') unset($_users);

				//echo '<hr>count: ' . count($_users);

				//print_r($_users);

				//unset($_users);
			}

			switch($param)
			{
				case 'users':

					//if($_group[2] >= 1000) $groups[$_group[2]] = $_group[0];

					if($_group[2] >= 1000) $groups[$_group[2]][$_group[0]] = $users;

					//if(isset($_group[3])) $groups[$_group[2]][$_group[0]] = $_users;//$_group[3];


					break;

				case 'all':
				default:

					//$groups[$_group[2]] = $_group[0];

					$groups[$_group[2]][$_group[0]] = $users;

					//if(isset($_group[3])) $groups[$_group[2]][$_group[0]] = $_users;

			}


		}

		ksort($groups);

		return $groups;

	}

}//EOF