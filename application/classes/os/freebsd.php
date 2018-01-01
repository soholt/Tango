<?php defined('SYSPATH') OR die('No direct access allowed.');

class Os_freebsd// implements os
{

    //http://www.freebsd.org/doc/en_US.ISO8859-1/books/handbook/config-network-setup.html
    public static function networking($data = NULL)
    {

        if(is_null($data))//get
        {

        }
        else//set
        {
            //update config

            //restart networking
            exec('sudo /etc/rc.d/netif restart');
        }
    }

    //http://www.freebsd.org/doc/en_US.ISO8859-1/books/handbook/config-network-setup.html
    public static function defaultGateway($data = NULL)
    {

        if(is_null($data))
        {

        }
        else
        {
            //update config

            //restart networking
            exec('sudo /etc/rc.d/routing restart');
        }

    }

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
		//cd /usr/ports/misc/mc && make install distclean

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

	public static function hostname($returnCmd = FALSE)
	{
		Fire::info(__METHOD__);

		$cmd = 'cat /etc/hostname';

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

}//EOF