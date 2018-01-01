<?php
//echo Tango::GetDate();
//echo '<pre>';print_r($data);exit;

//Fire::info(__FILE__);
Fire::warn($data);

$actions = '';
$configs = '';
$logs = '';

$url = '/' . Request::current()->directory() . '/' . Request::current()->controller() . '/';

//	ACTIONS

if(is_array($data['actions']))
{
	$actions .= '<b>' . $data['service'] . ': </b>' . "\n";

	$data['actions'][] = __('kill');	//	ADD KILL

	foreach($data['actions'] as $action)
	{
		$actions .= '| <input type="button" value="' . $action . '" onclick="shhh(\'' . $url . 'service/' . $action . '\')" /> |' . "\n";
	}

	$actions .= '<hr />' . "\n";
}

//	CONFIGS
if(isset($data['config']))
{
	/*
	 foreach ($data['config'] as $config)
	 {
		$c[] = Tango::configs($config);
		}
		echo '<pre>';
		print_r($c);
		*/

	$_configs = Tango::configs($data['config']);

	$__configs = array('logs' => __('logs'));

	foreach($_configs as $cKey => $cVal)
	{
		$__configs[$cKey] = $cVal . $cKey;
	}

	if(count($__configs) > 0)
	{
		//array_unshift($config, __('logs'));
		$configs = Form::select('logs', $__configs);
	}

}
//exit;
if(isset($data['aaconfig']))
{
	/*

	$config = Tango::configs($data['config']);

	$configs .= '<b>' . __('config') . ': </b>';

	if(is_array($config['file']))
	{


	foreach($config['file'] as $file)
	{
	$configs .= '| <a href="#" onclick="ax(\'' . $url . 'config/' . $config['file'] . '\')">' . $file . '</a> |';
	}

	//$serviceConfig .= '<hr />';
	}
	else
	{
	//$configs .= __('config') . ':
	$configs .= '| <a href="#" onclick="ax(\'' . $url . 'config/' . $config['file'] . '\')">' . $config['file'] . '</a> |';
	}
	*/

	/*
	 if(is_array($data['config']['file']))
	 {
	 $configs .= __('config') . ': ';

	 foreach($data['config']['file'] as $file)
	 {
		$configs .= '| <a href="#">' . $file . '</a> |';
		}

		//$serviceConfig .= '<hr />';
		}
		else
		{
		$configs .= __('config') . ': | <a href="#">' . $data['config']['file'] . '</a> |';
		}
		*/

	//$configs .= '| ' . __('advanced') . '<input id="config_advanced" alt="' . __('edit config files in advanced mode') . '" type="checkbox" name="advanced" value="1" /> |';
	$configs .= '| <input type="button" value="' . __('backups') . '" onclick="ax(\'' . $url . 'backups\', \'shStatus\')" /> |';
	//$configs .= '<hr />';

}


//	--logs

if(isset($data['log']))
{

	$logs .= '&nbsp&nbsp&nbsp&nbsp<b> ' . __('logs') . ': </b>';

	if(is_array($data['log']))
	{

		foreach($data['log'] as $_log)
		{

			if(is_dir($_log))
			{
				exec('sudo ls ' . $_log, $_logs);

				foreach($_logs as $log)
				{
					$logs .= '| ' . $log . ' |' . "\n";
				}

			}
			else
			{
				$log = explode('/', $data['log']);
				$logs .= array_pop($log);
			}
		}
	}

	//echo '<hr />';
}



echo $actions;
echo $configs;
echo $logs . '<hr />';

?>

<div id="shStatus">
<?php echo $data['status']; ?>
</div>
<div id="shOutput"></div>

<?php

//EOF
