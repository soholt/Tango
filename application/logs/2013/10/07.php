<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-10-07 10:49:49 --- ERROR: ErrorException [ 8 ]: Undefined index: cmd ~ APPPATH/classes/controller/sh.php [ 11 ]
2013-10-07 10:49:49 --- STRACE: ErrorException [ 8 ]: Undefined index: cmd ~ APPPATH/classes/controller/sh.php [ 11 ]
--
#0 /Users/gin/NetBeansProjects/tango-kh/application/classes/controller/sh.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/gin/NetB...', 11, Array)
#1 [internal function]: Controller_Sh->action_index()
#2 /Users/gin/NetBeansProjects/tango-kh/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Sh))
#3 /Users/gin/NetBeansProjects/tango-kh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/gin/NetBeansProjects/tango-kh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/gin/NetBeansProjects/tango-kh/www/index.php(128): Kohana_Request->execute()
#6 {main}
2013-10-07 16:30:41 --- ERROR: ErrorException [ 2 ]: scandir(/etc/apache2/sites-available): failed to open dir: No such file or directory ~ APPPATH/classes/base.php [ 730 ]
2013-10-07 16:30:41 --- STRACE: ErrorException [ 2 ]: scandir(/etc/apache2/sites-available): failed to open dir: No such file or directory ~ APPPATH/classes/base.php [ 730 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'scandir(/etc/ap...', '/Users/gin/NetB...', 730, Array)
#1 /Users/gin/NetBeansProjects/tango-kh/application/classes/base.php(730): scandir('/etc/apache2/si...')
#2 /Users/gin/NetBeansProjects/tango-kh/application/classes/controller/services/apache.php(247): Base->dirContent('/etc/apache2/si...')
#3 [internal function]: Controller_Services_Apache->action_sites()
#4 /Users/gin/NetBeansProjects/tango-kh/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#5 /Users/gin/NetBeansProjects/tango-kh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/gin/NetBeansProjects/tango-kh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/gin/NetBeansProjects/tango-kh/www/index.php(128): Kohana_Request->execute()
#8 {main}