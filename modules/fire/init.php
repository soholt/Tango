<?php defined('SYSPATH') or die('No direct script access.');

// Disable in CLI
if (Kohana::$is_cli)
	return;

// Find and include the vendor
require_once Kohana::find_file('vendor/FirePHPCore','FirePHP.class');

$fire_logger = new Fire_Log(array(

));

// Attach a Fire_Log writer to Kohana
Kohana::$log->attach($fire_logger);

// Disable FirePHP logging in production phase
if (Kohana::$environment === Kohana::PRODUCTION)
{
	$fire_logger->writer()->setEnabled(FALSE);
}