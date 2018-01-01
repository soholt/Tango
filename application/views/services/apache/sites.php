<?php

foreach ($data['enabled'] as $key => $val)
{
	echo '<a href="?disable=' . $val . '">DISABLE ' . $val . '</a><br />';
}

echo '<hr />';

foreach ($data['disabled'] as $key => $val)
{
	echo '<a href="?enable=' . $val . '">ENABLE ' . $val . '</a><br />';
}

if(isset($data['result'])) print_r($data['result']);