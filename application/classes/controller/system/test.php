<?php defined('SYSPATH') or die('No direct script access.');

class Controller_System_Test extends Base
{

	public function action_index()
	{

		$this->render();
		//$this->sh($a);
/*
		if(isset($_REQUEST['content']))
		{
			$save = $this->os->write($_REQUEST['file'], $_REQUEST['content']);
			print_r($save);
		}

		$file = '/home/g/index.php';
		$content = $this->os->read($file);
		//$content = '';

		echo '<hr>';
		echo Form::open();
		echo Form::textarea('content', $content, array('rows'=>40,'cols'=>80));
		echo Form::hidden('file', $file);
		echo Form::button('save', 'Save', array('type' => 'submit'));
		echo Form::close();
		*/

		//$this->sh('/home/g/www/term');

	}
	
	public function action_recursive()
	{
		
		Fire::info(__METHOD__);
		
		$a[0][] = 'x';
		$a[0][] = 'xx';
		$a[0][] = 'xxx';
		$a[] = 'echo "one"';
		$a[] = 'echo "two"';
		$a[][] = 'echo "three"';

Fire::info($a);

		//$aa = Tango::arrayRecursive($a);
		$aa[1] = $this->recursive($a);
		
		$aa[2] = $this->recursive($a);
		
		$aa[3] = $this->recursive('dsfsdfsdfsd');
		
//Fire::info($aa);

		$this->render($aa);
	}

	public function action_sh()
	{
		$cmd = array();

		for($i = 1; $i <= 99; $i++)
		{
			$cmd[] = 'echo ' . $i;
		}

		$output['search'] = '98';
		$output['replace'] = '<font color="green"><b>98 THIS IS GREEN !!!</b></font>';

		$this->sh($cmd, $output);

	}


	public function action_dirs($path='/var/log')
	{
		exec('sudo find ' . $path, $dirs);

		$root = array_shift($dirs);

		$data['data'] = array();

		foreach($dirs as $dir)
		{

			$dir = str_replace($path, '', $dir);
			//echo $dir.'<br>';

			$_dir = explode('/', $dir);

			//echo count($_dir) . '<hr>';

			$val = array_pop($_dir);

if(count($_dir) == 1)
{
	$data['data'][] = $val;
}
else
{
	$key = implode("']['", $_dir);
	$key = substr($key, 4);// . "']";
	echo $data['data'][$key] = $val;//	.'<hr>';
	/*
	foreach($_dir as $v)
	{
		$data['data'][$v] = $val;
	}
	*/
}
			//echo count($_dir).'<br>';
/*
			while(count($_dir))
			{
				$d = array_shift($_dir);
				$data['data'][$d] = '';
	//			echo $d . ' ';
			}
			*/
//echo '<hr>';
			//for()
			//while(is_array())
			//{
				// ! is_null($d = array_shift(_dir)
				//echo $d . '<br>';
			//}
			//$data['data'][$_dir] = $val;
			//array_push($data, $_dir, $val);
			//while($d = array_shift)
			//{
				//array $data
			//}
/*
			$_dir = explode('/', $dir);

			$val = array_pop($_dir);
			$key = array_pop($_dir);

			$data[$key][] = $val;
*/
		}

		$this->render($data['data']);

	}

	public function action_dirsv1($path='/var/log')
	{
		exec('sudo find ' . $path . ' -type f', $dirs);

		//array_shift($dirs);

		$data = array();

		foreach($dirs as $dir)
		{

			$dir = str_replace($path . '/', '', $dir);

			$_dir = explode('/', $dir);

			//print_r($dir);echo'<hr>';
print_r($_dir);echo $dir . ' ' . count($_dir) . '<hr>';

			if(count($_dir) == 2)
			{
				$val = array_pop($_dir);
				$key = array_pop($_dir);

				$data[$key] = $val;
				//
				//$data[] = $this->arrayToKeys($_dir);
				//array_push($data[$val], $_dir);
				/*
				$val = array_pop($_dir);
				$key = array_pop($_dir);

				$data[$key][] = $val;
				*/
				//$data[$key][] = $dir;
			}
			elseif(count($_dir) > 2)
			{

			}
			else
			{
				//$val = array_pop($_dir);
				//$key = array_pop($_dir);

				//$data[] = $val;
				$data[] = $dir;
			}
		}
ksort($data);
		$this->render($data);

	}

	public function action_a()
	{

		$array = array('a', 'b', 'c', 'd', 'e');

		Fire::warn($array);

		krsort($array);

		Fire::warn($array);

		$data = $this->action_b($array);

		Fire::error($data);
	}

	public function action_b($array, $data = array())
	{
		//$data = array();

		//krsort

		//$array = array('a', 'b', 'c', 'd', 'e');

		if(count($array) > 1 )
		{

			$key = array_pop($array);

			Fire::log($key);

			$data[$key] = array();
Fire::log($data);
			self::action_b($array, $data);
		}
		else
		{
			return $data[] = $array;
		}

		/*

		foreach($a as $aa)
		{

			echo $aa;

		}
		*/
	}

	function arrayToKeys($array, $data = array())
	{

		//$data = array();
		Fire::warn($array);
		foreach($array as $a)
		{

		}
//$a = a b c d e
/*
		$count = count($array);

		if($count > 2)
		{
			$key = array_shift($array);
			$data[$key] = array();
			self::arrayToKeys($array, $data)
//return $data[$array[0]] = $array[1];
		}
		*/
		/*elseif($count == 2)
		{
			$val = array_pop($array);

			self::arrayToKeys($array, $data);
		}
		*/
/*
		else
		{
			return $data;
		}
*/
		/*
		$d = array();
		$s = explode('/', $string);
		if(couunt($s) > 1)
		{
			$ss = array_shift($s);
			$d[$ss];
		}
		else
		{
			return $d;
		}
		*/
	}

	public function dirsRec($path)
	{

		$dirs = array_diff( scandir($path), Array( ".", ".." ) );

		$data = Array();

		foreach($dirs as $dir)
		{
			if(is_dir($path . "/" . $dir))
			{
				$data[$dir] = self::dirs($path . "/" . $dir);
			}
			else
			{
				$data[$dir] = $dir;
			}
		}

		return $data;
	}

	public function decoratedPath($path)
	{

		$dirs = array_diff(scandir($path), Array( '.', '..' ));

		$data = '';

		foreach($dirs as $dir)
		{
			if(is_dir($path . "/" . $dir))
			{
			//	$_dir = self::decoratedPath($path . '/' . $dir);

				$data .= '<li><span class="toggle">' . self::decoratedPath($path . '/' . $dir) . '</span></li>' . "\n";
			}
			else
			{
				//$data .= '<li><a href="' . $path . '/' . $dir . '">' . $dir . '</a></li>' . "\n";
				$data .= '<li>' . $dir . '</li>' . "\n";
			}
		}

		return $data;
	}

}