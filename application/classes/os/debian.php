<?php defined('SYSPATH') OR die('No direct access allowed.');

//application/classes/os/debian

/**
 * Os_Debian
 *
 * @author Gin <gin@soho.lt>
 * @copyright Copyright (c) 2012, Gintaras Valatka
 */
class Os_Debian implements os
{

	/**
	 * Os_Debian - svcActions
	 *
	 * Lists available actions for the service
	 *
	 * @author gin@soho.lt
	 * @param string $service
	 * @return array
	 */
	public static function svcActions($service)
	{

		Fire::info(__METHOD__ . ' $service ' . $service);

		$actions = array();

		$list = `sudo /etc/init.d/$service 2>&1`;

		$string = strstr($list, '{');

		if($string !== FALSE)
		{

			$string = strstr($string, '}', TRUE);

			$string = substr($string, 1);

			$actions = explode('|', $string);

		}

		return $actions;
	}

	public static function svcAction($service, $action, $returnCmd = FALSE)
	{
		Fire::info(__METHOD__ . ' $service ' . $service . ' $action ' . $action);

		$cmd = 'sudo /etc/init.d/' . $service . ' ' . $action . ' 2>&1';

		if($returnCmd) return $cmd;

		return nl2br(`$cmd`);	//	EXEC
	}
/*
	public static function svcStop($service, $return = FALSE)
	{
		Fire::info(__METHOD__ . ' $service ' . $service);

		$cmd = 'sudo /etc/init.d/' . $service . ' stop 2>&1';

		if($return) return $cmd;

		return nl2br(`$cmd`);
	}

	public static function svcStart($service, $return = FALSE)
	{
		Fire::info(__METHOD__ . ' $service ' . $service);

		$cmd = 'sudo /etc/init.d/' . $service . ' start 2>&1';

		if($return) return $cmd;

		return nl2br(`$cmd`);
	}

	public static function svcRestart($service, $return = FALSE)
	{
		Fire::info(__METHOD__ . ' $service ' . $service);

		$cmd = 'sudo /etc/init.d/' . $service . ' restart 2>&1';

		if($return) return $cmd;

		return nl2br(`$cmd`);
	}
*/
	public static function svcStatus($service, $returnCmd = FALSE)
	{
		Fire::info(__METHOD__ . ' $service ' . $service);

		$svc = 'sudo /etc/init.d/' . $service . ' status  2>&1';

		if($returnCmd) return $svc;

		$svc = `$svc`;	//	EXEC

		//	APPARENTLY NOT ALL SERVICES HAVE STATUS....
		if(stripos($svc, 'Usage') !== FALSE) return __('status for ' . $service . ' is not available');

		return trim($svc);
	}

	public static function svcKill($service, $returnCmd = FALSE)
	{
		Fire::info(__METHOD__ . ' $service ' . $service);

		$cmd = 'sudo killall ' . $service . ' 2>&1';

		if($returnCmd) return $cmd;

		return `$cmd`;	//	EXEC

	}

	public static function pkgInstall($pkg, $returnCmd = FALSE)
	{
		Fire::info(__METHOD__ . ' $pkg ' . $pkg);

		$cmd = 'sudo apt-get -y install ' . $pkg . ' 2>&1';

		if($returnCmd) return $cmd;

		return `$cmd`;	//	EXEC

	}

	public static function pkgSearch($pkg, $returnCmd = FALSE)
	{
		Fire::info(__METHOD__ . ' $pkg ' . $pkg);

		$cmd = 'sudo apt-cache search ' . $pkg . ' 2>&1';

		if($returnCmd) return $cmd;

		return `$cmd`;	//	EXEC

	}

	public static function osUpdatePreview($returnCmd = FALSE)
	{
		Fire::info(__METHOD__);

		$cmd[] = 'sudo apt-get update 2>&1';
		$cmd[] = 'sudo apt-get dist-upgrade 2>&1';

		if($returnCmd) return $cmd;

		$up = `$cmd[0]`;
		$up .= `$cmd[1]`;

		return $up;
	}

	public static function osUpdate($returnCmd = FALSE)
	{
		Fire::info(__METHOD__);

		$cmd[] = 'sudo apt-get update 2>&1';
		$cmd[] = 'sudo apt-get -y dist-upgrade 2>&1';

		if($returnCmd) return $cmd;

		$up = `$cmd[0]`;
		$up .= `$cmd[1]`;

		return $up;
	}

	public static function lsmod($module = '', $returnCmd = FALSE)
	{
		Fire::info(__METHOD__ . ' module: ' . $module);
		return array();
	}

	/**
	 * TODO caching
	 *
	 * @param unknown_type $returnCmd
	 * @return string
	 */
	public static function hostname($returnCmd = FALSE)
	{
		Fire::info(__METHOD__);

		$cmd = 'cat /etc/hostname';

		if($returnCmd) return $cmd;

		return trim(`$cmd`);
	}

	public static function fqdn($returnCmd = FALSE)
	{
		Fire::info(__METHOD__);

		$cmd = 'cat /etc/hostname -f';

		if($returnCmd) return $cmd;

		return trim(`$cmd`);
	}

	public static function storageDevsss()
	{
		echo exec('sudo fdisk -l', $devs);

		$data = array();

		$_dev = '';

		foreach($devs as $dev)
		{
			echo $dev.'<br>';
			if(strpos($dev, 'Disk /') !== FALSE)
			{

				$_dev = substr($dev, 5, 8);
				$data[$_dev] = $dev;

			}
			else
			{
				$data[$_dev] = $dev;
			}
		}

		return $data;
	}

	public static function storageDevs()
	{
		exec('sudo fdisk -l', $devs);

		$data = array();

		$i = 0;

		//$_dev = '';

		foreach($devs as $dev)
		{
			//echo $dev.'<br>';
			if(strpos($dev, 'Disk /') !== FALSE)
			{

$i++;

				//$_dev = substr($dev, 5, 8);
				$data[$i]['dev'] = substr($dev, 5, 8);
				$data[$i]['info'][] = $dev;



			}
			else
			{
				$data[$i]['info'][] = $dev;
			}


		}

		unset($data[0]);

		return $data;
	}

	public static function storageDevInfo($device = '')
	{

		$data = array('info', 'partitions');

		echo exec('sudo fdisk -l ' . $device, $devs);

		foreach($devs as $dev)
		{
//TODO use another method to extract info
			if(strpos($dev, $device) !== FALSE && strpos($dev, $device . ':') === FALSE)
			{
				$data['partitions'][] = substr($dev, 0, 9);
			}
			//else
			//{
				$data['info'][] = $dev;
			//}
		}

		return $data;
	}

	public static function storageRaid()
	{
		$data = array();

		exec('sudo cat /proc/mdstat', $data);

		return $data;
	}

	public function userGroups($user = 'tango')
	{

		Fire::info(__METHOD__ . '(' . $user . ')');

		$groups = array();

		$cmd = `groups $user`;

		$_groups = explode(':', $cmd);

		if(isset($_groups[1]))
		{

			$_groups[1] = trim($_groups[1]);

			$groups = explode(' ', $_groups[1]);

		}

		return $groups;
	}
/*
	public function groupsUsers($scope = 'all')
	{

		$groups = array();
		$users = array();

		exec('cat /etc/group', $allGroups);
		//exec('cat /etc/passwd', $allUsers);



		foreach($allGroups as $group)
		{

			$_group = explode(':', $group);

			if(isset($_group[3]))	//	USERS
			{
				$_users = explode(',', $_group[3]);

				if($_users[0] != '') $users = $_users;

				unset($_users);
			}

			switch($scope)
			{
				case 'user':

					if($_group[2] >= 1000) $data['groups'][$_group[2]][$_group[0]] = $users;	//	FILTER WHERE GROUP ID >= 1000

					break;

				case 'all':
				default:

					$data['groups'][$_group[2]][$_group[0]] = $users;	//	ALL GROUPS

			}


		}

		ksort($data['groups']);

		return $data;

	}
*/
	public function groups($scope = 'all')
	{

		$groups = array();

		exec('cat /etc/group', $allGroups);

		foreach($allGroups as $_groups)
		{

			$_group = explode(':', $_groups);

			switch($scope)
			{
				case 'user':

					if($_group[2] >= 1000) $groups[$_group[2]] = $_group[0];	//	FILTER WHERE GROUP ID >= 1000

					break;

				case 'all':
				default:

					$groups[$_group[2]] = $_group[0];	//	ALL GROUPS

			}


		}

		ksort($groups);

		return $groups;

	}

	public function users($scope = 'all')
	{
		$users = array();

		exec('cat /etc/passwd', $allUsers);

		foreach($allUsers as $_users)
		{

			$_user = explode(':', $_users);

			switch($scope)
			{
				case 'users':
					if($_user[2] >= 1000) $users[$_user[2]] = $_user[0];	//	FILTER WHERE USER ID >= 1000
					break;

				case 'all':
				default:
					$users[$_user[2]] = $_user[0];	//	ALL USERS

			}

		}

		ksort($users);

		return $users;
	}

}//EOF