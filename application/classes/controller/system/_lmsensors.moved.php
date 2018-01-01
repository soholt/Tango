<?php defined('SYSPATH') or die('No direct script access.');

//http://ubuntuforums.org/showthread.php?t=2780
class Controller_System_Lmsensors extends Base
{
	public function action_index()
	{
		$sensors = $this->exec('which sensors');

		if(count($sensors) > 0)
		{
			$this->render($this->exec('sudo sensors'));
		}
		else
		{
			$this->render(array(), 'services/install');
		}
	}

	public function action_service()
	{
		$install[] = $this->os->pkgInstall('lm-sensors', TRUE);

		$install[] = 'echo "' . __('LOGIN INTO THE SERVER AS ROOT AND RUN') . ' sensors-detect"';

		$this->sh($install);
	}

}//EOF