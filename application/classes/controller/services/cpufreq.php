<?php defined('SYSPATH') or die('No direct script access.');

//http://en.gentoo-wiki.com/wiki/CPU_Frequency_Scaling

class Controller_Services_Cpufreq extends Base
{
	public function action_index()
	{
		$sensors = $this->exec('which cpufreq-info');

		$data['cpuinfo'] = $this->run('cat /proc/cpuinfo');

		if(count($sensors) > 0)
		{
			$data['cpufreq'] = $this->exec('sudo cpufreq-info');

			$this->render($data);
		}
		else
		{
			$this->render($data, 'services/install');
		}
	}

	public function action_service()
	{
		$install = $this->os->pkgInstall('cpufreqd cpufrequtils', TRUE);

		//$install[] = 'echo "' . __('LOGIN INTO THE SERVER AS ROOT AND RUN') . ' sensors-detect"';

		$this->sh($install);
	}

}//EOF