<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-27 14:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-27 14:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/gin/workspace/php/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/php/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#3 {main}
2012-11-27 14:19:27 --- ERROR: ErrorException [ 8 ]: Undefined index: cmd ~ APPPATH/classes/controller/sh.php [ 11 ]
2012-11-27 14:19:27 --- STRACE: ErrorException [ 8 ]: Undefined index: cmd ~ APPPATH/classes/controller/sh.php [ 11 ]
--
#0 /home/gin/workspace/php/tango/application/classes/controller/sh.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/home/gin/works...', 11, Array)
#1 [internal function]: Controller_Sh->action_index()
#2 /home/gin/workspace/php/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Sh))
#3 /home/gin/workspace/php/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/gin/workspace/php/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#6 {main}
2012-11-27 15:20:03 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/workspace/php/tango/application/classes/base.php on line 355. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-27 15:20:03 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/workspace/php/tango/application/classes/base.php on line 355. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/workspace/php/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/workspace/php/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb(Array, NULL, 'INFO', Array)
#2 /home/gin/workspace/php/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info(Array, NULL, Array)
#3 /home/gin/workspace/php/tango/application/classes/controller/services/apache.php(346): Fire_Helper::info(Array)
#4 [internal function]: Controller_Services_Apache->action_sites()
#5 /home/gin/workspace/php/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#6 /home/gin/workspace/php/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/gin/workspace/php/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#9 {main}