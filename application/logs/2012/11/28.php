<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-28 16:27:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: methods ~ APPPATH/views/template.php [ 97 ]
2012-11-28 16:27:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: methods ~ APPPATH/views/template.php [ 97 ]
--
#0 /home/gin/workspace/php/tango/application/views/template.php(97): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/gin/works...', 97, Array)
#1 /home/gin/workspace/php/tango/system/classes/kohana/view.php(61): include('/home/gin/works...')
#2 /home/gin/workspace/php/tango/system/classes/kohana/view.php(343): Kohana_View::capture('/home/gin/works...', Array)
#3 /home/gin/workspace/php/tango/application/classes/base.php(612): Kohana_View->render()
#4 /home/gin/workspace/php/tango/application/classes/controller/system/index.php(12): Base->render(Array)
#5 [internal function]: Controller_System_Index->action_index()
#6 /home/gin/workspace/php/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_System_Index))
#7 /home/gin/workspace/php/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/gin/workspace/php/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#10 {main}
2012-11-28 16:44:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ APPPATH/classes/base.php [ 533 ]
2012-11-28 16:44:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ APPPATH/classes/base.php [ 533 ]
--
#0 /home/gin/workspace/php/tango/application/classes/base.php(533): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/gin/works...', 533, Array)
#1 /home/gin/workspace/php/tango/application/classes/controller/services/apache.php(59): Base->render(Array, 'services/servic...')
#2 [internal function]: Controller_Services_Apache->action_index()
#3 /home/gin/workspace/php/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#4 /home/gin/workspace/php/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/gin/workspace/php/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#7 {main}
2012-11-28 16:51:47 --- ERROR: ErrorException [ 8 ]: Undefined index: serviceConfig ~ APPPATH/classes/controller/services/apache.php [ 143 ]
2012-11-28 16:51:47 --- STRACE: ErrorException [ 8 ]: Undefined index: serviceConfig ~ APPPATH/classes/controller/services/apache.php [ 143 ]
--
#0 /home/gin/workspace/php/tango/application/classes/controller/services/apache.php(143): Kohana_Core::error_handler(8, 'Undefined index...', '/home/gin/works...', 143, Array)
#1 [internal function]: Controller_Services_Apache->action_config()
#2 /home/gin/workspace/php/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#3 /home/gin/workspace/php/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/gin/workspace/php/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#6 {main}
2012-11-28 16:51:53 --- ERROR: ErrorException [ 2 ]: is_dir() expects parameter 1 to be string, array given ~ APPPATH/classes/tango.php [ 163 ]
2012-11-28 16:51:53 --- STRACE: ErrorException [ 2 ]: is_dir() expects parameter 1 to be string, array given ~ APPPATH/classes/tango.php [ 163 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'is_dir() expect...', '/home/gin/works...', 163, Array)
#1 /home/gin/workspace/php/tango/application/classes/tango.php(163): is_dir(Array)
#2 /home/gin/workspace/php/tango/application/views/backups.php(3): Tango::backups(Array)
#3 /home/gin/workspace/php/tango/system/classes/kohana/view.php(61): include('/home/gin/works...')
#4 /home/gin/workspace/php/tango/system/classes/kohana/view.php(343): Kohana_View::capture('/home/gin/works...', Array)
#5 /home/gin/workspace/php/tango/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /home/gin/workspace/php/tango/application/views/template.php(97): Kohana_View->__toString()
#7 /home/gin/workspace/php/tango/system/classes/kohana/view.php(61): include('/home/gin/works...')
#8 /home/gin/workspace/php/tango/system/classes/kohana/view.php(343): Kohana_View::capture('/home/gin/works...', Array)
#9 /home/gin/workspace/php/tango/application/classes/base.php(631): Kohana_View->render()
#10 /home/gin/workspace/php/tango/application/classes/controller/services/apache.php(125): Base->render(Array, 'backups')
#11 [internal function]: Controller_Services_Apache->action_backups()
#12 /home/gin/workspace/php/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#13 /home/gin/workspace/php/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /home/gin/workspace/php/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#16 {main}
2012-11-28 17:03:35 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/workspace/php/tango/application/classes/base.php on line 355. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-28 17:03:35 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/workspace/php/tango/application/classes/base.php on line 355. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/workspace/php/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/workspace/php/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('Base::render(vi...', NULL, 'INFO', Array)
#2 /home/gin/workspace/php/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('Base::render(vi...', NULL, Array)
#3 /home/gin/workspace/php/tango/application/classes/base.php(587): Fire_Helper::info('Base::render(vi...')
#4 /home/gin/workspace/php/tango/application/classes/controller/services/apache.php(121): Base->render()
#5 [internal function]: Controller_Services_Apache->action_service()
#6 /home/gin/workspace/php/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#7 /home/gin/workspace/php/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/gin/workspace/php/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#10 {main}
2012-11-28 17:03:38 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/workspace/php/tango/application/classes/base.php on line 355. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-28 17:03:38 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/workspace/php/tango/application/classes/base.php on line 355. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/workspace/php/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/workspace/php/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('Base::render(vi...', NULL, 'INFO', Array)
#2 /home/gin/workspace/php/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('Base::render(vi...', NULL, Array)
#3 /home/gin/workspace/php/tango/application/classes/base.php(587): Fire_Helper::info('Base::render(vi...')
#4 /home/gin/workspace/php/tango/application/classes/controller/services/apache.php(121): Base->render()
#5 [internal function]: Controller_Services_Apache->action_service()
#6 /home/gin/workspace/php/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#7 /home/gin/workspace/php/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/gin/workspace/php/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#10 {main}
2012-11-28 17:06:39 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/workspace/php/tango/application/classes/base.php on line 355. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-28 17:06:39 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/workspace/php/tango/application/classes/base.php on line 355. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/workspace/php/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/workspace/php/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb(Array, NULL, 'INFO', Array)
#2 /home/gin/workspace/php/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info(Array, NULL, Array)
#3 /home/gin/workspace/php/tango/application/classes/controller/services/apache.php(350): Fire_Helper::info(Array)
#4 [internal function]: Controller_Services_Apache->action_sites()
#5 /home/gin/workspace/php/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#6 /home/gin/workspace/php/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/gin/workspace/php/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#9 {main}