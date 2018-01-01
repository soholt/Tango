<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Storage_Index extends Base
{

	public function action_index()
	{

		$path = APPPATH . 'classes/controller/storage';

		$files = $this->exec('ls ' . $path);

		foreach ($files as $file)
		{

			$pathName = substr($file, 0, -4);

			switch($pathName)
			{
				case 'index':
					break;

				case 'lvm':	//	only applicable to linux
				case 'raid':

					if(0)	//	TODO $os != linux
					{
						break;
					}

				default:
					$data[] = $pathName;
			}


			//TODO if os !linux unser raid
		}

		$this->render($data);

		//echo `ls`;
		//TODO in view file, if string, echo unavailable for your system
		//$data['dev'] = $this->os->storageDevs();
		//$data['info'] = $this->os->storageDevInfo('/dev/sda');
		//$data['raid'] = $this->os->storageRaid();
		//$this->render($data);
	}

	public function action_hardware()
	{
		$this->render($this->os->storageDevs(), 'storage/index/hardware');
	}

}//EOF