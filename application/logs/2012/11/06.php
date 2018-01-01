<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-06 14:38:00 --- ERROR: RuntimeException [ 0 ]: SplFileInfo::openFile(/home/gin/www/tango/application/cache/99/999a3419d9959d3c39b11dcc67d79c7888b4b765.cache): failed to open stream: Permission denied ~ MODPATH/cache/classes/kohana/cache/file.php [ 234 ]
2012-11-06 14:38:00 --- STRACE: RuntimeException [ 0 ]: SplFileInfo::openFile(/home/gin/www/tango/application/cache/99/999a3419d9959d3c39b11dcc67d79c7888b4b765.cache): failed to open stream: Permission denied ~ MODPATH/cache/classes/kohana/cache/file.php [ 234 ]
--
#0 /home/gin/www/tango/modules/cache/classes/kohana/cache/file.php(234): SplFileInfo->openFile('w')
#1 /home/gin/www/tango/application/classes/tango.php(50): Kohana_Cache_File->set('os', 'debian')
#2 /home/gin/www/tango/application/classes/base.php(74): Tango::detectOs()
#3 [internal function]: Base->before()
#4 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_System_Phpinfo))
#5 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#8 {main}
2012-11-06 14:38:45 --- ERROR: RuntimeException [ 0 ]: SplFileInfo::openFile(/home/gin/www/tango/application/cache/99/999a3419d9959d3c39b11dcc67d79c7888b4b765.cache): failed to open stream: Permission denied ~ MODPATH/cache/classes/kohana/cache/file.php [ 234 ]
2012-11-06 14:38:45 --- STRACE: RuntimeException [ 0 ]: SplFileInfo::openFile(/home/gin/www/tango/application/cache/99/999a3419d9959d3c39b11dcc67d79c7888b4b765.cache): failed to open stream: Permission denied ~ MODPATH/cache/classes/kohana/cache/file.php [ 234 ]
--
#0 /home/gin/www/tango/modules/cache/classes/kohana/cache/file.php(234): SplFileInfo->openFile('w')
#1 /home/gin/www/tango/application/classes/tango.php(50): Kohana_Cache_File->set('os', 'debian')
#2 /home/gin/www/tango/application/classes/base.php(74): Tango::detectOs()
#3 [internal function]: Base->before()
#4 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_System_Phpinfo))
#5 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#8 {main}
2012-11-06 14:39:16 --- ERROR: RuntimeException [ 0 ]: SplFileInfo::openFile(/home/gin/www/tango/application/cache/99/999a3419d9959d3c39b11dcc67d79c7888b4b765.cache): failed to open stream: Permission denied ~ MODPATH/cache/classes/kohana/cache/file.php [ 234 ]
2012-11-06 14:39:16 --- STRACE: RuntimeException [ 0 ]: SplFileInfo::openFile(/home/gin/www/tango/application/cache/99/999a3419d9959d3c39b11dcc67d79c7888b4b765.cache): failed to open stream: Permission denied ~ MODPATH/cache/classes/kohana/cache/file.php [ 234 ]
--
#0 /home/gin/www/tango/modules/cache/classes/kohana/cache/file.php(234): SplFileInfo->openFile('w')
#1 /home/gin/www/tango/application/classes/tango.php(50): Kohana_Cache_File->set('os', 'debian')
#2 /home/gin/www/tango/application/classes/base.php(74): Tango::detectOs()
#3 [internal function]: Base->before()
#4 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_System_Phpinfo))
#5 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#8 {main}
2012-11-06 14:41:27 --- ERROR: ErrorException [ 1 ]: Call to undefined function php_info() ~ APPPATH/views/system/phpinfo/index.php [ 2 ]
2012-11-06 14:41:27 --- STRACE: ErrorException [ 1 ]: Call to undefined function php_info() ~ APPPATH/views/system/phpinfo/index.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-06 14:49:15 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_System_Test::shRec() ~ APPPATH/classes/base.php [ 219 ]
2012-11-06 14:49:15 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_System_Test::shRec() ~ APPPATH/classes/base.php [ 219 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-06 14:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/todo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-06 14:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/todo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#3 {main}
2012-11-06 15:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/todo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-06 15:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/todo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#3 {main}
2012-11-06 15:13:03 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Services_Apache::dirContent() ~ APPPATH/classes/controller/services/apache.php [ 204 ]
2012-11-06 15:13:03 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Services_Apache::dirContent() ~ APPPATH/classes/controller/services/apache.php [ 204 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-06 15:14:29 --- ERROR: ErrorException [ 8 ]: Undefined index: serviceConfig ~ APPPATH/classes/controller/services/apache.php [ 141 ]
2012-11-06 15:14:29 --- STRACE: ErrorException [ 8 ]: Undefined index: serviceConfig ~ APPPATH/classes/controller/services/apache.php [ 141 ]
--
#0 /home/gin/www/tango/application/classes/controller/services/apache.php(141): Kohana_Core::error_handler(8, 'Undefined index...', '/home/gin/www/t...', 141, Array)
#1 [internal function]: Controller_Services_Apache->action_config()
#2 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#3 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#6 {main}
2012-11-06 15:15:39 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Services_Apache::shRec() ~ APPPATH/classes/base.php [ 219 ]
2012-11-06 15:15:39 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Services_Apache::shRec() ~ APPPATH/classes/base.php [ 219 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-06 15:21:56 --- ERROR: View_Exception [ 0 ]: The requested view servers/apache/modules could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-11-06 15:21:56 --- STRACE: View_Exception [ 0 ]: The requested view servers/apache/modules could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/gin/www/tango/system/classes/kohana/view.php(137): Kohana_View->set_filename('servers/apache/...')
#1 /home/gin/www/tango/system/classes/kohana/view.php(30): Kohana_View->__construct('servers/apache/...', Array)
#2 /home/gin/www/tango/application/classes/base.php(542): Kohana_View::factory('servers/apache/...', Array)
#3 /home/gin/www/tango/application/classes/controller/services/apache.php(257): Base->render(Array, 'servers/apache/...')
#4 [internal function]: Controller_Services_Apache->action_modules()
#5 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#6 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#9 {main}
2012-11-06 15:24:45 --- ERROR: View_Exception [ 0 ]: The requested view servers/apache/modules could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-11-06 15:24:45 --- STRACE: View_Exception [ 0 ]: The requested view servers/apache/modules could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/gin/www/tango/system/classes/kohana/view.php(137): Kohana_View->set_filename('servers/apache/...')
#1 /home/gin/www/tango/system/classes/kohana/view.php(30): Kohana_View->__construct('servers/apache/...', Array)
#2 /home/gin/www/tango/application/classes/base.php(542): Kohana_View::factory('servers/apache/...', Array)
#3 /home/gin/www/tango/application/classes/controller/services/apache.php(257): Base->render(Array, 'servers/apache/...')
#4 [internal function]: Controller_Services_Apache->action_modules()
#5 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#6 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#9 {main}
2012-11-06 15:29:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/controller/services/apache.php [ 237 ]
2012-11-06 15:29:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/controller/services/apache.php [ 237 ]
--
#0 /home/gin/www/tango/application/classes/controller/services/apache.php(237): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/gin/www/t...', 237, Array)
#1 [internal function]: Controller_Services_Apache->action_modules()
#2 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#3 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#6 {main}
2012-11-06 15:42:48 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/services/apache.php [ 281 ]
2012-11-06 15:42:48 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/services/apache.php [ 281 ]
--
#0 /home/gin/www/tango/application/classes/controller/services/apache.php(281): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/gin/www/t...', 281, Array)
#1 [internal function]: Controller_Services_Apache->action_sites()
#2 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#3 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#6 {main}
2012-11-06 15:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/apache/sites/dissable/site=sdfgdsfg.sdfg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 15:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/apache/sites/dissable/site=sdfgdsfg.sdfg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#1 {main}
2012-11-06 15:54:21 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/classes/controller/services/apache.php [ 269 ]
2012-11-06 15:54:21 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/classes/controller/services/apache.php [ 269 ]
--
#0 /home/gin/www/tango/application/classes/controller/services/apache.php(269): Kohana_Core::error_handler(8, 'Undefined index...', '/home/gin/www/t...', 269, Array)
#1 [internal function]: Controller_Services_Apache->action_sites()
#2 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#3 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#6 {main}
2012-11-06 16:11:53 --- ERROR: ErrorException [ 1 ]: Call to private method Base::shExec() from context 'Controller_Services_Apache' ~ APPPATH/classes/controller/services/apache.php [ 283 ]
2012-11-06 16:11:53 --- STRACE: ErrorException [ 1 ]: Call to private method Base::shExec() from context 'Controller_Services_Apache' ~ APPPATH/classes/controller/services/apache.php [ 283 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-06 16:14:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH/views/template.php [ 45 ]
2012-11-06 16:14:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH/views/template.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-06 16:15:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL services/a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-06 16:15:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL services/a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#3 {main}
2012-11-06 16:27:03 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Services_Apache::shRec() ~ APPPATH/classes/base.php [ 219 ]
2012-11-06 16:27:03 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Services_Apache::shRec() ~ APPPATH/classes/base.php [ 219 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-06 16:27:32 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Base::shRecursive(), called in /home/gin/www/tango/application/classes/base.php on line 219 and defined ~ APPPATH/classes/base.php [ 293 ]
2012-11-06 16:27:32 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Base::shRecursive(), called in /home/gin/www/tango/application/classes/base.php on line 219 and defined ~ APPPATH/classes/base.php [ 293 ]
--
#0 /home/gin/www/tango/application/classes/base.php(293): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/gin/www/t...', 293, Array)
#1 /home/gin/www/tango/application/classes/base.php(219): Base->shRecursive(Array)
#2 /home/gin/www/tango/application/classes/controller/services/apache.php(283): Base->sh(Array)
#3 [internal function]: Controller_Services_Apache->action_sites()
#4 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#5 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#8 {main}
2012-11-06 16:29:52 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 331. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-06 16:29:52 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 331. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('Base::render VI...', NULL, 'INFO', Array)
#2 /home/gin/www/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('Base::render VI...', NULL, Array)
#3 /home/gin/www/tango/application/classes/base.php(510): Fire_Helper::info('Base::render VI...')
#4 /home/gin/www/tango/application/classes/controller/services/apache.php(341): Base->render(Array)
#5 [internal function]: Controller_Services_Apache->action_sites()
#6 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#7 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#10 {main}
2012-11-06 16:30:44 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 331. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-06 16:30:44 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 331. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('Base::render VI...', NULL, 'INFO', Array)
#2 /home/gin/www/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('Base::render VI...', NULL, Array)
#3 /home/gin/www/tango/application/classes/base.php(510): Fire_Helper::info('Base::render VI...')
#4 /home/gin/www/tango/application/classes/controller/services/apache.php(341): Base->render(Array)
#5 [internal function]: Controller_Services_Apache->action_sites()
#6 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#7 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#10 {main}
2012-11-06 16:31:26 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 331. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-06 16:31:26 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 331. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('Base::render VI...', NULL, 'INFO', Array)
#2 /home/gin/www/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('Base::render VI...', NULL, Array)
#3 /home/gin/www/tango/application/classes/base.php(510): Fire_Helper::info('Base::render VI...')
#4 /home/gin/www/tango/application/classes/controller/services/apache.php(341): Base->render(Array)
#5 [internal function]: Controller_Services_Apache->action_sites()
#6 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#7 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#10 {main}
2012-11-06 16:49:56 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/base.php [ 653 ]
2012-11-06 16:49:56 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/base.php [ 653 ]
--
#0 /home/gin/www/tango/application/classes/base.php(653): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/gin/www/t...', 653, Array)
#1 /home/gin/www/tango/application/classes/controller/services/apache.php(291): Base->dirContent('/etc/apache2/si...')
#2 [internal function]: Controller_Services_Apache->action_sites()
#3 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#4 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#7 {main}
2012-11-06 16:51:34 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-06 16:51:34 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('Base::shExec su...', NULL, 'INFO', Array)
#2 /home/gin/www/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('Base::shExec su...', NULL, Array)
#3 /home/gin/www/tango/application/classes/base.php(326): Fire_Helper::info('Base::shExec su...')
#4 /home/gin/www/tango/application/classes/base.php(311): Base->shExec('sudo -u root /e...', 'deb6', '')
#5 /home/gin/www/tango/application/classes/base.php(221): Base->shRecursive(Array, 'deb6')
#6 /home/gin/www/tango/application/classes/controller/services/apache.php(276): Base->sh(Array)
#7 [internal function]: Controller_Services_Apache->action_sites()
#8 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#9 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#12 {main}
2012-11-06 16:52:59 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-06 16:52:59 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('Base::shExec su...', NULL, 'INFO', Array)
#2 /home/gin/www/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('Base::shExec su...', NULL, Array)
#3 /home/gin/www/tango/application/classes/base.php(326): Fire_Helper::info('Base::shExec su...')
#4 /home/gin/www/tango/application/classes/base.php(311): Base->shExec('sudo -u root /e...', 'deb6', '')
#5 /home/gin/www/tango/application/classes/base.php(221): Base->shRecursive(Array, 'deb6')
#6 /home/gin/www/tango/application/classes/controller/services/apache.php(276): Base->sh(Array)
#7 [internal function]: Controller_Services_Apache->action_sites()
#8 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#9 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#12 {main}
2012-11-06 16:53:31 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-06 16:53:31 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('Base::shExec su...', NULL, 'INFO', Array)
#2 /home/gin/www/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('Base::shExec su...', NULL, Array)
#3 /home/gin/www/tango/application/classes/base.php(326): Fire_Helper::info('Base::shExec su...')
#4 /home/gin/www/tango/application/classes/base.php(311): Base->shExec('sudo -u root /e...', 'deb6', '')
#5 /home/gin/www/tango/application/classes/base.php(221): Base->shRecursive(Array, 'deb6')
#6 /home/gin/www/tango/application/classes/controller/services/apache.php(276): Base->sh(Array)
#7 [internal function]: Controller_Services_Apache->action_sites()
#8 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#9 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#12 {main}
2012-11-06 16:53:46 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-06 16:53:46 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('Base::shExec su...', NULL, 'INFO', Array)
#2 /home/gin/www/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('Base::shExec su...', NULL, Array)
#3 /home/gin/www/tango/application/classes/base.php(326): Fire_Helper::info('Base::shExec su...')
#4 /home/gin/www/tango/application/classes/base.php(311): Base->shExec('sudo -u root /e...', 'deb6', '')
#5 /home/gin/www/tango/application/classes/base.php(221): Base->shRecursive(Array, 'deb6')
#6 /home/gin/www/tango/application/classes/controller/services/apache.php(276): Base->sh(Array)
#7 [internal function]: Controller_Services_Apache->action_sites()
#8 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#9 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#12 {main}
2012-11-06 16:54:26 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-06 16:54:26 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('Base::shExec su...', NULL, 'INFO', Array)
#2 /home/gin/www/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('Base::shExec su...', NULL, Array)
#3 /home/gin/www/tango/application/classes/base.php(326): Fire_Helper::info('Base::shExec su...')
#4 /home/gin/www/tango/application/classes/base.php(311): Base->shExec('sudo -u root /e...', 'deb6', '')
#5 /home/gin/www/tango/application/classes/base.php(221): Base->shRecursive(Array, 'deb6')
#6 /home/gin/www/tango/application/classes/controller/services/apache.php(276): Base->sh(Array)
#7 [internal function]: Controller_Services_Apache->action_sites()
#8 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#9 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#12 {main}
2012-11-06 16:54:57 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-06 16:54:57 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('Base::shExec su...', NULL, 'INFO', Array)
#2 /home/gin/www/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('Base::shExec su...', NULL, Array)
#3 /home/gin/www/tango/application/classes/base.php(326): Fire_Helper::info('Base::shExec su...')
#4 /home/gin/www/tango/application/classes/base.php(311): Base->shExec('sudo -u root /e...', 'deb6', '')
#5 /home/gin/www/tango/application/classes/base.php(221): Base->shRecursive(Array, 'deb6')
#6 /home/gin/www/tango/application/classes/controller/services/apache.php(276): Base->sh(Array)
#7 [internal function]: Controller_Services_Apache->action_sites()
#8 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#9 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#12 {main}
2012-11-06 16:55:35 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-06 16:55:35 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('sudo -u root /e...', 'Base::shExec', 'INFO', Array)
#2 /home/gin/www/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('sudo -u root /e...', 'Base::shExec', Array)
#3 /home/gin/www/tango/application/classes/base.php(326): Fire_Helper::info('sudo -u root /e...', 'Base::shExec')
#4 /home/gin/www/tango/application/classes/base.php(311): Base->shExec('sudo -u root /e...', 'deb6', '')
#5 /home/gin/www/tango/application/classes/base.php(221): Base->shRecursive(Array, 'deb6')
#6 /home/gin/www/tango/application/classes/controller/services/apache.php(276): Base->sh(Array)
#7 [internal function]: Controller_Services_Apache->action_sites()
#8 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#9 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#12 {main}
2012-11-06 16:57:54 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-06 16:57:54 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('sudo -u root /e...', 'Base::shExec', 'INFO', Array)
#2 /home/gin/www/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('sudo -u root /e...', 'Base::shExec', Array)
#3 /home/gin/www/tango/application/classes/base.php(326): Fire_Helper::info('sudo -u root /e...', 'Base::shExec')
#4 /home/gin/www/tango/application/classes/base.php(311): Base->shExec('sudo -u root /e...', 'deb6', '')
#5 /home/gin/www/tango/application/classes/base.php(221): Base->shRecursive(Array, 'deb6')
#6 /home/gin/www/tango/application/classes/controller/services/apache.php(276): Base->sh(Array)
#7 [internal function]: Controller_Services_Apache->action_sites()
#8 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#9 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#12 {main}
2012-11-06 17:09:19 --- ERROR: RuntimeException [ 0 ]: SplFileInfo::openFile(/home/gin/www/tango/application/cache/ea/ea2c24e4c8a6ee7c05cbcc1b63023afdfca5edd7.cache): failed to open stream: Permission denied ~ MODPATH/cache/classes/kohana/cache/file.php [ 234 ]
2012-11-06 17:09:19 --- STRACE: RuntimeException [ 0 ]: SplFileInfo::openFile(/home/gin/www/tango/application/cache/ea/ea2c24e4c8a6ee7c05cbcc1b63023afdfca5edd7.cache): failed to open stream: Permission denied ~ MODPATH/cache/classes/kohana/cache/file.php [ 234 ]
--
#0 /home/gin/www/tango/modules/cache/classes/kohana/cache/file.php(234): SplFileInfo->openFile('w')
#1 /home/gin/www/tango/application/classes/base.php(604): Kohana_Cache_File->set('menus', Array)
#2 /home/gin/www/tango/application/classes/base.php(540): Base->menus()
#3 /home/gin/www/tango/application/classes/controller/services/apache.php(261): Base->render(Array)
#4 [internal function]: Controller_Services_Apache->action_modules()
#5 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#6 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#9 {main}
2012-11-06 17:09:29 --- ERROR: RuntimeException [ 0 ]: SplFileInfo::openFile(/home/gin/www/tango/application/cache/ea/ea2c24e4c8a6ee7c05cbcc1b63023afdfca5edd7.cache): failed to open stream: Permission denied ~ MODPATH/cache/classes/kohana/cache/file.php [ 234 ]
2012-11-06 17:09:29 --- STRACE: RuntimeException [ 0 ]: SplFileInfo::openFile(/home/gin/www/tango/application/cache/ea/ea2c24e4c8a6ee7c05cbcc1b63023afdfca5edd7.cache): failed to open stream: Permission denied ~ MODPATH/cache/classes/kohana/cache/file.php [ 234 ]
--
#0 /home/gin/www/tango/modules/cache/classes/kohana/cache/file.php(234): SplFileInfo->openFile('w')
#1 /home/gin/www/tango/application/classes/base.php(604): Kohana_Cache_File->set('menus', Array)
#2 /home/gin/www/tango/application/classes/base.php(540): Base->menus()
#3 /home/gin/www/tango/application/classes/controller/services/apache.php(261): Base->render(Array)
#4 [internal function]: Controller_Services_Apache->action_modules()
#5 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#6 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#9 {main}
2012-11-06 17:09:32 --- ERROR: RuntimeException [ 0 ]: SplFileInfo::openFile(/home/gin/www/tango/application/cache/ea/ea2c24e4c8a6ee7c05cbcc1b63023afdfca5edd7.cache): failed to open stream: Permission denied ~ MODPATH/cache/classes/kohana/cache/file.php [ 234 ]
2012-11-06 17:09:32 --- STRACE: RuntimeException [ 0 ]: SplFileInfo::openFile(/home/gin/www/tango/application/cache/ea/ea2c24e4c8a6ee7c05cbcc1b63023afdfca5edd7.cache): failed to open stream: Permission denied ~ MODPATH/cache/classes/kohana/cache/file.php [ 234 ]
--
#0 /home/gin/www/tango/modules/cache/classes/kohana/cache/file.php(234): SplFileInfo->openFile('w')
#1 /home/gin/www/tango/application/classes/base.php(604): Kohana_Cache_File->set('menus', Array)
#2 /home/gin/www/tango/application/classes/base.php(540): Base->menus()
#3 /home/gin/www/tango/application/classes/controller/services/apache.php(261): Base->render(Array)
#4 [internal function]: Controller_Services_Apache->action_modules()
#5 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#6 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#9 {main}
2012-11-06 17:09:34 --- ERROR: RuntimeException [ 0 ]: SplFileInfo::openFile(/home/gin/www/tango/application/cache/ea/ea2c24e4c8a6ee7c05cbcc1b63023afdfca5edd7.cache): failed to open stream: Permission denied ~ MODPATH/cache/classes/kohana/cache/file.php [ 234 ]
2012-11-06 17:09:34 --- STRACE: RuntimeException [ 0 ]: SplFileInfo::openFile(/home/gin/www/tango/application/cache/ea/ea2c24e4c8a6ee7c05cbcc1b63023afdfca5edd7.cache): failed to open stream: Permission denied ~ MODPATH/cache/classes/kohana/cache/file.php [ 234 ]
--
#0 /home/gin/www/tango/modules/cache/classes/kohana/cache/file.php(234): SplFileInfo->openFile('w')
#1 /home/gin/www/tango/application/classes/base.php(604): Kohana_Cache_File->set('menus', Array)
#2 /home/gin/www/tango/application/classes/base.php(540): Base->menus()
#3 /home/gin/www/tango/application/classes/controller/services/apache.php(261): Base->render(Array)
#4 [internal function]: Controller_Services_Apache->action_modules()
#5 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#6 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#9 {main}
2012-11-06 17:09:36 --- ERROR: RuntimeException [ 0 ]: SplFileInfo::openFile(/home/gin/www/tango/application/cache/ea/ea2c24e4c8a6ee7c05cbcc1b63023afdfca5edd7.cache): failed to open stream: Permission denied ~ MODPATH/cache/classes/kohana/cache/file.php [ 234 ]
2012-11-06 17:09:36 --- STRACE: RuntimeException [ 0 ]: SplFileInfo::openFile(/home/gin/www/tango/application/cache/ea/ea2c24e4c8a6ee7c05cbcc1b63023afdfca5edd7.cache): failed to open stream: Permission denied ~ MODPATH/cache/classes/kohana/cache/file.php [ 234 ]
--
#0 /home/gin/www/tango/modules/cache/classes/kohana/cache/file.php(234): SplFileInfo->openFile('w')
#1 /home/gin/www/tango/application/classes/base.php(604): Kohana_Cache_File->set('menus', Array)
#2 /home/gin/www/tango/application/classes/base.php(540): Base->menus()
#3 /home/gin/www/tango/application/classes/controller/services/apache.php(261): Base->render(Array)
#4 [internal function]: Controller_Services_Apache->action_modules()
#5 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#6 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#9 {main}
2012-11-06 17:27:31 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-06 17:27:31 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('sudo -u root /e...', 'Base::shExec', 'INFO', Array)
#2 /home/gin/www/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('sudo -u root /e...', 'Base::shExec', Array)
#3 /home/gin/www/tango/application/classes/base.php(326): Fire_Helper::info('sudo -u root /e...', 'Base::shExec')
#4 /home/gin/www/tango/application/classes/base.php(311): Base->shExec('sudo -u root /e...', 'deb6', '')
#5 /home/gin/www/tango/application/classes/base.php(221): Base->shRecursive(Array, 'deb6')
#6 /home/gin/www/tango/application/classes/controller/services/apache.php(277): Base->sh(Array)
#7 [internal function]: Controller_Services_Apache->action_sites()
#8 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#9 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#12 {main}
2012-11-06 17:27:44 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-06 17:27:44 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/www/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/www/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('sudo -u root /e...', 'Base::shExec', 'INFO', Array)
#2 /home/gin/www/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('sudo -u root /e...', 'Base::shExec', Array)
#3 /home/gin/www/tango/application/classes/base.php(326): Fire_Helper::info('sudo -u root /e...', 'Base::shExec')
#4 /home/gin/www/tango/application/classes/base.php(311): Base->shExec('sudo -u root /e...', 'deb6', '')
#5 /home/gin/www/tango/application/classes/base.php(221): Base->shRecursive(Array, 'deb6')
#6 /home/gin/www/tango/application/classes/controller/services/apache.php(285): Base->sh(Array)
#7 [internal function]: Controller_Services_Apache->action_sites()
#8 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#9 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#12 {main}
2012-11-06 17:37:23 --- ERROR: ErrorException [ 8 ]: Undefined index: cmd ~ APPPATH/classes/controller/sh.php [ 11 ]
2012-11-06 17:37:23 --- STRACE: ErrorException [ 8 ]: Undefined index: cmd ~ APPPATH/classes/controller/sh.php [ 11 ]
--
#0 /home/gin/www/tango/application/classes/controller/sh.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/home/gin/www/t...', 11, Array)
#1 [internal function]: Controller_Sh->action_index()
#2 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Sh))
#3 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#6 {main}
2012-11-06 17:40:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/views/template.php [ 24 ]
2012-11-06 17:40:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/views/template.php [ 24 ]
--
#0 /home/gin/www/tango/application/views/template.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/gin/www/t...', 24, Array)
#1 /home/gin/www/tango/system/classes/kohana/view.php(61): include('/home/gin/www/t...')
#2 /home/gin/www/tango/system/classes/kohana/view.php(343): Kohana_View::capture('/home/gin/www/t...', Array)
#3 /home/gin/www/tango/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/gin/www/tango/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Api))
#6 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#9 {main}
2012-11-06 17:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/dfg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-06 17:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/dfg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/gin/www/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/www/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/www/tango/www/index.php(112): Kohana_Request->execute()
#3 {main}