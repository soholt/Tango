<?php defined('SYSPATH') OR die('No direct access allowed.');

class Tango
{

	//TODO add version
	public static function detectOs()
	{

		$os = Cache::instance('file')->get('os');

		if( ! is_null($os) )
		{
			return $os;
		}
		//echo Cache::instance('file')->set('os', 'deb');

		//	try cache first, if not, then detect

		$os = NULL;

		//	check if defined in config
		//else try to detect

		//	scan os dir and build array

		exec('ls ' . APPPATH . 'classes/os', $oses);

		//	FIND OUT OS

		foreach($oses as $_os)
		{

			$_os = substr($_os, 0, -4);	//	CHOP .php

			//	get some info

			if(is_file('/etc/issue'))
			{
				$info = `cat /etc/issue`;
			}
			else
			{
				$info = `uname -a`;
			}

			if(stripos($info, $_os) !== FALSE)
			{

				Cache::instance('file')->set('os', $_os);

				Fire::Log(__METHOD__ . ' | ' . $_os);

				return $_os;

			}
		}

		Fire::Log(__METHOD__ . ' | ' . $os);
		return $os;
	}

	public static function users()
	{

		Fire::info(__METHOD__);

		$users = array();

		$path = APPPATH . 'config/users';

		//	scan dir for users

		exec('ls ' . $path, $data);

		//	remove .php

		if(count($data) > 0)
		{
			foreach($data as $user)
			{
				$users[] = substr($user, 0, -4);
			}
		}

		return $users;

	}

	public static function clearCache()
	{

	}

	public $a = array();

	public static function arrayRecursive($array, $data = array())
	{
		Fire::info(__METHOD__);

		//$data = array();

		//if(count($array) >= 1)
		//{

		Fire::warn($array);
		Fire::info($data);

		if(is_array($array))
		{
			foreach($array as $val)
			{
				if(is_array($val))
				{
					self::arrayRecursive($val, $data);
				}
				else
				{
					//$this->a = $val;
					$data[] = $val;
				}


			}
		}
		else
		{

		}

		Fire::error($data);

		//Tango::a = array();
		//}
		//else
		//{
		//if(count($array) == 0)
		//{
		//Fire::error($data);
		//}
		//return $data;
		//}
	}

	public static function dirRecursive()
	{

	}

	/**
	 * Get backup file/files
	 * Enter description here ...
	 * @param string $path
	 * @return array
	 */
	public static function backups($path)
	{

		Fire::info(__METHOD__ . ' $path ' . $path);

		$data['files'] = array();

		if(is_dir($path))	//	MANY CONFIGS ['file'] will be array
		{
			$data['path'] = $path;

			//$files = $this->exec('ls ' . $this->conf['config']);
			exec('ls ' . $path, $files);

			foreach($files as $file)
			{
				//	CHECK IF ITS BACKUP FILE
				if(strpos($file, '20') !== FALSE)	//	SHOULD WORK `TIL YEAR 2100 :D
				{
					$data['files'][] = $file;
				}
			}
		}
		else
		{

			$_path = explode('/', $path);

			$file = array_pop($_path);
			$backupPath = implode('/', $_path) . '/';

			//$cmd = 'find ' . $path . ' -name \'' . $file . '.*\' -printf %f\\\n';

			$cmd = "find $backupPath -name '$file'.* -printf %f\\\\n";

			$data['path'] = $backupPath;

			//$data['files'] = $this->exec($cmd);
			exec($cmd, $data['files']);

		}

		return $data;

	}

	/**
	 * Get config file/files that are not backups
	 * Enter description here ...
	 * @param string $path
	 * @return array
	 */
	public static function configs($path)
	{

		Fire::info(__METHOD__ . ' $path ' . $path);
		/*
		 if(is_array($path))
		{
		foreach ($path as $_path)
		{

		}
		}
		*/

		return array('dfs'=>'ddddd');

		if(is_dir($path))	//	MANY CONFIGS IN DIR
		{
			//$data['path'] = $path;

			exec('ls ' . $path, $files);

			foreach($files as $file)
			{
				//	FILTER OUT BACKUP FILES
				if(strpos($file, '20') === FALSE)	//	SHOULD WORK `TIL YEAR 2100 :D
				{
					$data[$file] = $path;
				}
			}
		}
		else	//	SINGLE CONFIG FILE
		{
			$_path = explode('/', $path);

			$_file = array_pop($_path);
			$_path = implode('/', $_path) . '/';
			$data[$_file] = $_path;

		}

		return $data;
	}

	public static function logs($mixed)
	{
		$data = array();

		if(is_array($mixed))
		{

			foreach($mixed as $_log)
			{

				if(is_dir($_log))
				{
					exec('sudo ls ' . $_log, $_logs);

					foreach($_logs as $log)
					{
						$data[] = $log;
					}

				}
				else
				{
					$log = explode('/', $mixed);
					$logs .= array_pop($log);
				}
			}
		}

		return $data;
	}

	/*
	 public static function dirs($path, $recursive = FALSE, $decorate = FALSE)
	{

	$dirs = array();

	$R = '';
	if($recursive) $R = 'R';


	exec('sudo ls -1m' . $R . ' ' . $path, $dirs);

	print_r($dirs);

	if($decorate && is_array($dirs))
	{
	return Tngo::decorte($dirs);
	}

	return $dirs;
	}
	*/
	public static function getDate()
	{
		return date('Ymd_His');
	}

	public static function fromDate($date)
	{
		$year = substr($date, -15, 4);
		$month = substr($date, -11, 2);
		$day = substr($date, -9, 2);
		$hour = substr($date, -6, 2);
		$min = substr($date, -4, 2);
		$sec = substr($date, -2);

		return "$year-$month-$day $hour:$min:$sec";
	}

	public static function newUser($username, $password)
	{

	}

}
//EOF