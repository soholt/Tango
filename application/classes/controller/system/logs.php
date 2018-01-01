<?php defined('SYSPATH') or die('No direct script access.');

class Controller_System_Logs extends Base
{


	public function action_index()
	{



		//$this->render($this->exec('ls -1R ' . '/var/log'), 'tmp');
$this->render();
		//$this->render($this->exec('ls -1R ' . '/var/log'));
		//$this->decoratedPath('/var/log');
	}

	public function action_log()
	{

		if(isset($_REQUEST['log']))
		{
			$file = $_REQUEST['log'];

			$_file = explode('.', $file);

			$type = array_pop($_file);

			if(isset($type) && $type == 'gz')
			{
				//$log = nl2br($this->run('zcat -d ' . $file));
				$logs = $this->exec('zcat -d ' . $file);
			}
			else
			{
			    //$log = nl2br($this->run('cat ' . $file));
			    $logs = $this->exec('cat ' . $file);
			}

			if(isset($_REQUEST['reverse']))
			{
			    krsort($logs);
			}

			$theLog = '';

			foreach($logs as $log)
			{
			    if(isset($_REQUEST['decorate']))
			    {
    			    if(strpos($log, 'error') !== FALSE)
    			    {
    			        $theLog .= $this->decorate($log, array('background-color' => $this->red));
    			    }
    			    elseif(strpos($log, 'notice') !== FALSE)
    			    {
    			        $theLog .= $this->decorate($log, array('background-color' => $this->yellow));
    			    }
    			    else
    			    {
    			        $theLog .= $log . '<br />';
    			    }
			    }
			    else
			    {
			        $theLog .= $log . '<br />';
			    }
			    //$theLog .= '<br />';
			}

//			$theLog = $this->decorate('aaa', array('background-color' => $this->red,'aa'=>'ff'));
			//$theLog = $this->red;


			//echo $theLog;
			//echo '<pre>';
			//print_r($log);

			if(isset($_REQUEST['nowrap']))
			{
			    $this->render('<div id="log" style="white-space:nowrap">' . $theLog . '</div>');
			}
			else
			{
			    $this->render('<div id="log">' . $theLog . '</div>');
			}

		}
	}


/*
public function decoratedPath($path)
	{

		$dirs = array_diff(scandir($path), Array( '.', '..' ));

		$data = array();

		$data[] = '<ul>';

		foreach($dirs as $dir)
		{
			if(is_dir($path . "/" . $dir))
			{
			//	$_dir = self::decoratedPath($path . '/' . $dir);

				$data[] = '<li><span class="toggle">' . self::decoratedPath($path . '/' . $dir) . '</span></li>' . "\n";
			}
			else
			{
				//$data .= '<li><a href="' . $path . '/' . $dir . '">' . $dir . '</a></li>' . "\n";
				$data[] = '<li>' . $dir . '</li>' . "\n";
			}
		}

		$data[] = '</ul>' . "\n";
echo '<pre>'; print_r($data); exit;
		return $data;
	}
*/
}//EOF