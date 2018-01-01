<?php defined('SYSPATH') or die('No direct script access.');

// zfs get all home
// zfs set atime=off home
// zfs set dedup=on home
class Controller_Storage_Zfs extends Base
{

	private $conf = NULL;

	public function before()
	{

		Fire::log(__METHOD__);

		parent::before();	//	MUST NEVER FORGET THIS
//parent::__controller();


		//if($this->login == TRUE) exit('add parent::before(); to ' . __METHOD__);//	TODO REDIRECT TO LOGIN

		$name = $this->request->controller();

		if(isset($this->config['storage'][$name]))
		{
			$this->conf = $this->config['storage'][$name];

//			if(!isset($this->conf['log'])) $this->conf['log'] = NULL;
		}
		//$this->end();
		//$this->response->render($this->template);
	}

	public function action_index()
	{
		//exec('lsmod | grep zfs', $mod);
		//echo count($mod);

		$this->render($this->run('zpool upgrade'));
	}

	//	zfs list -o space
/*
To list about pools:

    # zpool list
    NAME                    SIZE    USED   AVAIL    CAP  HEALTH  ALTROOT
    pool1                   136G   18.2G    118G    13%  ONLINE     -

To create a zfs filesystem:

    # zfs create pool1/fs.001

To set filesystem size:

    # zfs set quota=24g pool1/fs.001

The "zfs share -a" command makes all zfs filesystems that have the "sharenfs" property turned on automatically shared. It only has to be issued once and persists over a reboot. Alternatively, one can issue individual "zfs share" commands for specific filesystems:

    # zfs share -a

To make a filesystem sharable:

    # zfs set sharenfs=on pool1/fs.001

To list existing zfs filesystems:

    # zfs list
    NAME                   USED  AVAIL  REFER  MOUNTPOINT
    pool1                 18.2G   116G  26.5K  /export/data01
    pool1/fs.001          18.2G  5.85G  18.2G  /export/data01/fs.001

To list all properties of a specific filesystem:

    # zfs get all pool1/fs.001

zfs set sharenfs=rw,nosuid,root=192.168.2.10:192.168.2.20 data/nfs/vmware
 */
	public function action_list()
	{
		$this->render();
	}

	public function action_status()
	{
		$this->render();
	}

	public function action_create()
	{
		print_r($_REQUEST);
	}


	public function action_install()
	{
		//$data = $this->os->pkgInstall('build-essential gawk alien fakeroot linux-headers-$(uname -r) zlib1g-dev uuid-dev libblkid-dev libselinux-dev parted lsscsi');


		$cmd = array();

		if(array_key_exists('preInstall', $this->conf)) $cmd[] = $this->conf['preInstall'];

		if(array_key_exists('pkgInstall', $this->conf)) $cmd[] = $this->os->pkgInstall($this->conf['pkgInstall']);

		if(array_key_exists('postInstall', $this->conf)) $cmd[] = $this->conf['postInstall'];

		$this->sh($cmd);




		//print_r($data);
		//$this->render();
	}

	public function action_test()
	{
		$cmd[] = 'sudo modprobe splat';
		$cmd[] = 'sudo splat -ac';//sudo /usr/sbin/splat -a
		//$cmd[] = 'echo done';
		$this->sh($cmd, array('search' => 'Pass', 'replace' => '<font color="green"><b>Pass</b></font>'));
	}

	public function installSpl()
	{
		//wget
	}

	public function installZfs()
	{

	}

}//EOF