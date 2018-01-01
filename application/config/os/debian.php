<?php defined('SYSPATH') OR die('No direct access allowed.');

$data = array();

//  ------------------------------------------------------------   README !!!   ------------------
//  ['config'] - PATH TO CONFIG FILE OR DIRETORY -------------------------------------------------
//  ['packageName'] = 'build-essential checkinstall'; etc. CAN BE MANY PACKAGES SEPARATED BY SPACE
//  YOU CAN ALSO HAVE PRE AND POST ACTIONS(DOWNLOAD EXTRACT, INSTALL BUILD TOOLS, BUILD & INSTALL)
//  ['packagePre'] & ['packagePost'] = array('./configure', 'checkinstall');CAN BE STRING OR ARRAY

$data['services']['netatalk']['config'] = '/etc/netatalk';
$data['services']['netatalk']['service'] = 'netatalk';
$data['services']['netatalk']['packagePre'][] = 'echo "a installing netatalk"';
$data['services']['netatalk']['packagePre'][] = 'echo "b installing netatalk"';
$data['services']['netatalk']['packagePre'][] = 'echo "c installing netatalk"';
$data['services']['netatalk']['packageName'] = 'netatalk';
$data['services']['netatalk']['packagePost'] = 'echo "done"';

$data['services']['nfs']['config'][] = '/etc/exports';
$data['services']['nfs']['config'][] = '/etc/default/nfs-kernel-server';
$data['services']['nfs']['packageName'] = 'nfs-kernel-server';
$data['services']['nfs']['service'] = 'nfs-kernel-server';
//

$data['services']['iscsitarget']['config'] = '/etc/iet';
$data['services']['iscsitarget']['install'][] = 'sudo apt-get -y install iscsitarget-dkms iscsitarget';
$data['services']['iscsitarget']['install'][] = 'sudo sh -c \'echo "ISCSITARGET_ENABLE=true" > /etc/default/iscsitarget\'';
$data['services']['iscsitarget']['install'][] = 'sudo /etc/init.d/iscsitarget start';
$data['services']['iscsitarget']['service'] = 'iscsitarget';



$data['services']['svn']['path'] = '/home/svn/';	//	must have trailing slash
$data['services']['svn']['packageName'] = 'subversion';


//$data['storage']['zfs']['pkgInstall'] = 'build-essential fakeroot alien linux-headers-$(uname -r) zlib1g-dev uuid-dev libblkid-dev libselinux-dev gawk parted mdadm lsscsi xfsprogs xfsdump xfslibs-dev libattr1-dev libacl1-dev';

$spl = 'spl-0.6.0-rc6';
$zfs = 'zfs-0.6.0-rc6';
$zfsfs = TANGO . 'src/zfsfs';	// full path
$data['storage']['zfs']['postInstall'][] = "if [ ! -d $zfsfs ]; then mkdir -p $zfsfs; fi";
//	TODO get master from github
$data['storage']['zfs']['postInstall'][] = 'wget -O- http://github.com/downloads/zfsonlinux/spl/' . $spl . '.tar.gz | tar zxv -C ' . $zfsfs;
//$data['storage']['zfs']['postInstall'][] = 'wget -O- http://github.com/downloads/zfsonlinux/zfs/' . $zfs . '.tar.gz | tar zxv -C ' . $zfsfs;

$data['storage']['zfs']['postInstall'][] = "cd $zfsfs/$spl && ./configure";
$data['storage']['zfs']['postInstall'][] = "cd $zfsfs/$spl && make deb";

$data['storage']['zfs']['postInstall'][] = "cd $zfsfs/$spl && sudo dpkg -i *_amd64.deb";

$data['storage']['zfs']['postInstall'][] = "cd $zfsfs/$zfs && ./configure";
$data['storage']['zfs']['postInstall'][] = "cd $zfsfs/$zfs && make deb";
$data['storage']['zfs']['postInstall'][] = "cd $zfsfs/$zfs && sudo dpkg -i *_amd64.deb";
$data['storage']['zfs']['postInstall'][] = 'echo done';





/*
$data['services']['apache']['config'][] = '/etc/apache2';
$data['services']['apache']['config'][] = '/etc/default/apache2';

$data['services']['apache']['service'] = 'apache2';

$data['services']['apache']['log'] = '/var/log/apache2';
*/
exec('sudo find /etc -name apache*', $apacheConfig);	//	ApacheConfig
exec('sudo find /var/log -name apache*', $apacheLog);	//	ApacheLog


$data['services']['apache']['config'] = $apacheConfig;

$data['services']['apache']['service'] = 'apache2';

$data['services']['apache']['log'] = $apacheLog;



exec('sudo find /etc -name cpufreq*', $_cpufreqd);
$data['services']['cpufreqd']['config'] = $_cpufreqd;



$data['services']['dnsmasq']['config'] = '/etc/dnsmasq.conf';
$data['services']['dnsmasq']['service'] = 'dnsmasq';
$data['services']['dnsmasq']['install'] = 'sudo apt-get install -y dnsmasq';


$data['services']['template']['config'][] = '/etc/lighttpd/lighttpd.conf';
$data['services']['template']['config'][] = '/etc/lighttpd/lighttpd.confaaa';
$data['services']['template']['service'] = 'lighttpd';
//$data['services']['template']['log'] = '/var/log/lighttpd';


//	TO DEFINE 'CONFIG' AND 'LOG' DIR/FILE PATHS USE ['dir'] OF ['file']

//	['service name']['conf']['dir'] = '/path/to/the/dir'
//	['service name']['conf']['file'] = '/path/to/the/file.conf'

//	ARRAY OF MULTIPLE FILES OR DIRS CAN ALSO BE USED

//	['service name']['conf']['dir'][] = '/path/to/the/dir1'
//	['service name']['conf']['dir'][] = '/path/to/the/dir2'
//	['service name']['conf']['file'][] = '/path/to/the/file.conf'
/*
$data['services']['apache']['service'] = 'apache2';	//	service name
$data['services']['apache']['conf']['dir'] = '/etc/apache2';
$data['services']['apache']['log']['dir'] = '/var/log/apache2';

$data['services']['dnsmasq']['conf']['file'] = '/etc/dnsmasq.conf';

//$data['services']['squid'] = array();
*/

/*
$data['services']['nfs']['config'] = '/etc/exports';
$data['services']['nfs']['pkg'] = 'nfs-kernel-server';
$data['services']['nfs']['svc'] = 'nfs-kernel-server';

$data['services']['netatalk']['config'] = '/etc/netatalk';
$data['services']['netatalk']['svc'] = 'netatalk';
$data['services']['netatalk']['pkgPre'] = 'echo "installing netatalk"';
$data['services']['netatalk']['pkg'] = 'netatalk';
$data['services']['netatalk']['pkgPost'] = 'echo "done"';
*/


return $data;//EOF
