<?php

if(isset($data))
{
	if((is_array($data) && count($data) > 0) || is_object($data))
	{
		echo '<pre>';
		print_r($data);
		echo '</pre>';
	}
	else
	{
		print_r($data);
	}
}
