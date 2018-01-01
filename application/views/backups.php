<?php

$backup = Tango::backups($data);


if(is_array($backup['files']) && count($backup['files']) > 0)
{
	rsort($backup['files']);

	foreach($backup['files'] as $file)
	{
		$exploded = explode('.', $file);

		$date = array_pop($exploded);

		$created = Tango::fromDate($date);

		echo '<a href="#">' . $exploded[0] . ' | ' . $created . '</a><br />' . "\n";
	}
}
else
{
	echo __('there are no backup files');
}

//EOF