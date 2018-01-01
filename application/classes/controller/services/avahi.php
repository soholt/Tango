<?php defined('SYSPATH') or die('No direct script access.');

//http://www.zaphu.com/2008/04/29/ubuntu-guide-configure-avahi-to-broadcast-services-via-bonjour-to-mac-os-x/
//http://www.kremalicious.com/2008/06/ubuntu-as-mac-file-server-and-time-machine-volume/
/*
 *
 * http://holyarmy.org/2008/01/advertising-linux-services-via-avahibonjour/
 *
 *
RackMac (same as Xserve), PowerBook, PowerMac, Macmini, iMac, MacBook, MacBookPro, MacBookAir, MacPro, AppleTV1,1, AirPort

In short you have to allow communications over port 548 and 5353.
Enable "Multicast DNS (mDNS)  5353/udp" in your firewall configuration:

NFS fix http://hints.macworld.com/article.php?story=20071116042238744

sudo gedit /etc/hosts

Add the following two lines at the very top of the file.

127.0.0.1 localhost
127.0.1.1 Rockhopper.local Rockhopper




iPhoto uses dpap at port 8770. Once this is set up, one can browse shared photos via iPhoto or Front Row on a Mac, or from an Apple TV. Don't forget to enable the jpeg USE flag on media-libs/imlib2.
http://en.gentoo-wiki.com/wiki/Avahi



# cat - > /etc/avahi/services/nfs_home.service <<EOF
<?xml version="1.0" standalone='no'?>
<!DOCTYPE service-group SYSTEM "avahi-service.dtd">
<service-group>
<name replace-wildcards="yes">NFS Shares on %h: /home</name> ## Display Name
<service>
       <type>_nfs._tcp</type>
       <port>2049</port>
       <txt-record>path=/home</txt-record> ## path to NFS mountpoint
</service>
</service-group>
EOF



 *
 */

class Controller_Services_Avahi extends Base
{

	public function before()
	{

		parent::before();

		//$this->render();

	}

	public function action_index()
	{

		$cpu = $this->exec('cat /proc/cpuinfo');

		$this->render($cpu);



		//$this->render();

	}

	public function action_install()
	{
		if(isset($_REQUEST['install']))
		{
			$cmd[] = $this->os->pkgInstall('cpufrequtils powernowd', 1);
			$cmd[] = 'cat /proc/cpuinfo';
			$this->sh($cmd);
			//echo $cmd;
		}
	}
}//EOF
