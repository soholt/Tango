<?php defined('SYSPATH') OR die('No direct access allowed.');

$data = array();

//  ------------------------------------------------------------   README !!!   ------------------
//  ['config'] - PATH TO CONFIG FILE OR DIRETORY -------------------------------------------------
//  ['packageName'] = 'build-essential checkinstall'; etc. CAN BE MANY PACKAGES SEPARATED BY SPACE
//  YOU CAN ALSO HAVE PRE AND POST ACTIONS(DOWNLOAD EXTRACT, INSTALL BUILD TOOLS, BUILD & INSTALL)
//  ['packagePre'] & ['packagePost'] = array('./configure', 'checkinstall');CAN BE STRING OR ARRAY


exec('sudo find /etc -name apache*', $apacheConfig);	//	ApacheConfig
exec('sudo find /var/log -name apache*', $apacheLog);	//	ApacheLog


$data['services']['apache']['config'][] = $apacheConfig;

$data['services']['apache']['service'] = 'apache2';

$data['services']['apache']['log'] = $apacheLog;

return $data;
//EOF