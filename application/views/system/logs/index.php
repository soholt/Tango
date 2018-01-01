<script>
$("#logs").one('click', function () {
      //$(this).height(30)
             //.css({cursor:"auto", backgroundColor:"green"});
    });
//$('#logs').height(30)


</script>

<?php

exec('sudo find /var/log -type f', $allLogs);

sort($allLogs);

foreach($allLogs as $log)
{
	$logData[$log] = $log;
}

//$opts['onchange'] = "ax(\'' . $uri . '?q=' . $log . '\',\'log\')";

$url = '/' . Request::current()->directory() . '/' . Request::current()->controller() . '/log';
$form['id'] = 'logs';
//$form['method'] = 'get';
//$form['name'] = 'logs';

echo Form::open($url, $form);

//$logs['onchange'] = "ax('/system/logs/log?q='+this.value, 'shOutput')";
$logs['onchange'] = '$("form").submit()';
echo Form::select('log', $logData, null, $logs);

$nowrap['onchange'] = '$("form").submit()';
echo Form::label('nowrap', ' | ' . __('nowrap'));
echo Form::checkbox('nowrap', 1, TRUE, $nowrap);

$decorate['onchange'] = '$("form").submit()';
echo Form::label('decorate', ' | ' . __('decorate'));
echo Form::checkbox('decorate', 1, TRUE, $decorate);

$reverse['onchange'] = '$("form").submit()';
echo Form::label('reverse', ' | ' . __('reverse'));
echo Form::checkbox('reverse', 1, TRUE, $reverse);

//echo Form::button('refresh', __('refresh'));
echo Form::submit('submit', __('refresh'));

echo Form::close();

/*<input type="button" value="<?php echo __('refresh') ?>" onclick="$('#shOutput').css('height','600px')" />*/