<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-13 14:55:53 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/workspace/zend/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-13 14:55:53 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/workspace/zend/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/workspace/zend/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/workspace/zend/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('sudo -u root /e...', 'Base::shExec', 'INFO', Array)
#2 /home/gin/workspace/zend/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('sudo -u root /e...', 'Base::shExec', Array)
#3 /home/gin/workspace/zend/tango/application/classes/base.php(326): Fire_Helper::info('sudo -u root /e...', 'Base::shExec')
#4 /home/gin/workspace/zend/tango/application/classes/base.php(311): Base->shExec('sudo -u root /e...', 'deb6', '')
#5 /home/gin/workspace/zend/tango/application/classes/base.php(221): Base->shRecursive(Array, 'deb6')
#6 /home/gin/workspace/zend/tango/application/classes/controller/services/apache.php(277): Base->sh(Array)
#7 [internal function]: Controller_Services_Apache->action_sites()
#8 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#9 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#12 {main}
2012-11-13 14:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL services/a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-13 14:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL services/a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#3 {main}
2012-11-13 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.php/home/gin/workspace/zend/tango/application/classes/controller/api ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-13 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.php/home/gin/workspace/zend/tango/application/classes/controller/api ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#1 {main}
2012-11-13 15:01:10 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/workspace/zend/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-13 15:01:10 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/workspace/zend/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/workspace/zend/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/workspace/zend/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('sudo splat -ac', 'Base::shExec', 'INFO', Array)
#2 /home/gin/workspace/zend/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('sudo splat -ac', 'Base::shExec', Array)
#3 /home/gin/workspace/zend/tango/application/classes/base.php(326): Fire_Helper::info('sudo splat -ac', 'Base::shExec')
#4 /home/gin/workspace/zend/tango/application/classes/base.php(311): Base->shExec('sudo splat -ac', 'deb6', '')
#5 /home/gin/workspace/zend/tango/application/classes/base.php(221): Base->shRecursive(Array, 'deb6')
#6 /home/gin/workspace/zend/tango/application/classes/controller/storage/zfs.php(122): Base->sh(Array, Array)
#7 [internal function]: Controller_Storage_Zfs->action_test()
#8 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Storage_Zfs))
#9 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#12 {main}
2012-11-13 15:01:40 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/workspace/zend/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-13 15:01:40 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/workspace/zend/tango/application/classes/base.php on line 338. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/workspace/zend/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/workspace/zend/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('echo 2', 'Base::shExec', 'INFO', Array)
#2 /home/gin/workspace/zend/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('echo 2', 'Base::shExec', Array)
#3 /home/gin/workspace/zend/tango/application/classes/base.php(326): Fire_Helper::info('echo 2', 'Base::shExec')
#4 /home/gin/workspace/zend/tango/application/classes/base.php(311): Base->shExec('echo 2', 'deb6', '')
#5 /home/gin/workspace/zend/tango/application/classes/base.php(221): Base->shRecursive(Array, 'deb6')
#6 /home/gin/workspace/zend/tango/application/classes/controller/system/test.php(71): Base->sh(Array, Array)
#7 [internal function]: Controller_System_Test->action_sh()
#8 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_System_Test))
#9 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#12 {main}
2012-11-13 15:09:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: request ~ APPPATH/classes/base.php [ 55 ]
2012-11-13 15:09:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: request ~ APPPATH/classes/base.php [ 55 ]
--
#0 /home/gin/workspace/zend/tango/application/classes/base.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/gin/works...', 55, Array)
#1 /home/gin/workspace/zend/tango/application/classes/controller/storage/zfs.php(16): Base->before()
#2 [internal function]: Controller_Storage_Zfs->before()
#3 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Storage_Zfs))
#4 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#7 {main}
2012-11-13 15:10:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: request ~ APPPATH/classes/base.php [ 55 ]
2012-11-13 15:10:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: request ~ APPPATH/classes/base.php [ 55 ]
--
#0 /home/gin/workspace/zend/tango/application/classes/base.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/gin/works...', 55, Array)
#1 /home/gin/workspace/zend/tango/application/classes/controller/storage/zfs.php(16): Base->before()
#2 [internal function]: Controller_Storage_Zfs->before()
#3 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Storage_Zfs))
#4 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#7 {main}
2012-11-13 15:15:33 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/workspace/zend/tango/application/classes/base.php on line 348. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-13 15:15:33 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/workspace/zend/tango/application/classes/base.php on line 348. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/workspace/zend/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/workspace/zend/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('echo 2', 'Base::shExec', 'INFO', Array)
#2 /home/gin/workspace/zend/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('echo 2', 'Base::shExec', Array)
#3 /home/gin/workspace/zend/tango/application/classes/base.php(336): Fire_Helper::info('echo 2', 'Base::shExec')
#4 /home/gin/workspace/zend/tango/application/classes/base.php(321): Base->shExec('echo 2', 'deb6', '')
#5 /home/gin/workspace/zend/tango/application/classes/base.php(231): Base->shRecursive(Array, 'deb6')
#6 /home/gin/workspace/zend/tango/application/classes/controller/system/test.php(72): Base->sh(Array, Array)
#7 [internal function]: Controller_System_Test->action_sh()
#8 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_System_Test))
#9 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#12 {main}
2012-11-13 15:16:16 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/workspace/zend/tango/application/classes/base.php on line 348. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-13 15:16:16 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/workspace/zend/tango/application/classes/base.php on line 348. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/workspace/zend/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/workspace/zend/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('echo 2', 'Base::shExec', 'INFO', Array)
#2 /home/gin/workspace/zend/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('echo 2', 'Base::shExec', Array)
#3 /home/gin/workspace/zend/tango/application/classes/base.php(336): Fire_Helper::info('echo 2', 'Base::shExec')
#4 /home/gin/workspace/zend/tango/application/classes/base.php(321): Base->shExec('echo 2', 'deb6', '')
#5 /home/gin/workspace/zend/tango/application/classes/base.php(231): Base->shRecursive(Array, 'deb6')
#6 /home/gin/workspace/zend/tango/application/classes/controller/system/test.php(72): Base->sh(Array, Array)
#7 [internal function]: Controller_System_Test->action_sh()
#8 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_System_Test))
#9 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#12 {main}
2012-11-13 15:30:17 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/workspace/zend/tango/application/classes/base.php on line 348. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-13 15:30:17 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/workspace/zend/tango/application/classes/base.php on line 348. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/workspace/zend/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/workspace/zend/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb(Array, NULL, 'INFO', Array)
#2 /home/gin/workspace/zend/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info(Array, NULL, Array)
#3 /home/gin/workspace/zend/tango/application/classes/controller/services/apache.php(346): Fire_Helper::info(Array)
#4 [internal function]: Controller_Services_Apache->action_sites()
#5 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Services_Apache))
#6 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#9 {main}
2012-11-13 15:37:28 --- ERROR: RuntimeException [ 0 ]: SplFileInfo::openFile(/home/gin/workspace/zend/tango/application/cache/99/999a3419d9959d3c39b11dcc67d79c7888b4b765.cache): failed to open stream: Permission denied ~ MODPATH/cache/classes/kohana/cache/file.php [ 234 ]
2012-11-13 15:37:28 --- STRACE: RuntimeException [ 0 ]: SplFileInfo::openFile(/home/gin/workspace/zend/tango/application/cache/99/999a3419d9959d3c39b11dcc67d79c7888b4b765.cache): failed to open stream: Permission denied ~ MODPATH/cache/classes/kohana/cache/file.php [ 234 ]
--
#0 /home/gin/workspace/zend/tango/modules/cache/classes/kohana/cache/file.php(234): SplFileInfo->openFile('w')
#1 /home/gin/workspace/zend/tango/application/classes/tango.php(50): Kohana_Cache_File->set('os', 'debian')
#2 /home/gin/workspace/zend/tango/application/classes/base.php(84): Tango::detectOs()
#3 [internal function]: Base->before()
#4 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Storage_Smb))
#5 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#8 {main}
2012-11-13 15:38:23 --- ERROR: RuntimeException [ 0 ]: SplFileInfo::openFile(/home/gin/workspace/zend/tango/application/cache/ea/ea2c24e4c8a6ee7c05cbcc1b63023afdfca5edd7.cache): failed to open stream: Permission denied ~ MODPATH/cache/classes/kohana/cache/file.php [ 234 ]
2012-11-13 15:38:23 --- STRACE: RuntimeException [ 0 ]: SplFileInfo::openFile(/home/gin/workspace/zend/tango/application/cache/ea/ea2c24e4c8a6ee7c05cbcc1b63023afdfca5edd7.cache): failed to open stream: Permission denied ~ MODPATH/cache/classes/kohana/cache/file.php [ 234 ]
--
#0 /home/gin/workspace/zend/tango/modules/cache/classes/kohana/cache/file.php(234): SplFileInfo->openFile('w')
#1 /home/gin/workspace/zend/tango/application/classes/base.php(614): Kohana_Cache_File->set('menus', Array)
#2 /home/gin/workspace/zend/tango/application/classes/base.php(550): Base->menus()
#3 /home/gin/workspace/zend/tango/application/classes/controller/storage/smb.php(8): Base->render('TODO Controller...')
#4 [internal function]: Controller_Storage_Smb->action_index()
#5 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Storage_Smb))
#6 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#9 {main}
2012-11-13 17:37:17 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/workspace/zend/tango/application/classes/base.php on line 348. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-13 17:37:17 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/workspace/zend/tango/application/classes/base.php on line 348. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/workspace/zend/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/workspace/zend/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('Base::render VI...', NULL, 'INFO', Array)
#2 /home/gin/workspace/zend/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('Base::render VI...', NULL, Array)
#3 /home/gin/workspace/zend/tango/application/classes/base.php(546): Fire_Helper::info('Base::render VI...')
#4 /home/gin/workspace/zend/tango/application/classes/controller/system/groups.php(9): Base->render(NULL)
#5 [internal function]: Controller_System_Groups->action_index()
#6 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_System_Groups))
#7 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#10 {main}
2012-11-13 17:39:45 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/workspace/zend/tango/application/classes/base.php on line 348. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-13 17:39:45 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/workspace/zend/tango/application/classes/base.php on line 348. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/workspace/zend/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/workspace/zend/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('Base::render VI...', NULL, 'INFO', Array)
#2 /home/gin/workspace/zend/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('Base::render VI...', NULL, Array)
#3 /home/gin/workspace/zend/tango/application/classes/base.php(546): Fire_Helper::info('Base::render VI...')
#4 /home/gin/workspace/zend/tango/application/classes/controller/system/groups.php(9): Base->render(NULL)
#5 [internal function]: Controller_System_Groups->action_index()
#6 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_System_Groups))
#7 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#10 {main}
2012-11-13 17:39:49 --- ERROR: Exception [ 0 ]: Headers already sent in /home/gin/workspace/zend/tango/application/classes/base.php on line 348. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
2012-11-13 17:39:49 --- STRACE: Exception [ 0 ]: Headers already sent in /home/gin/workspace/zend/tango/application/classes/base.php on line 348. Cannot send log data to FirePHP. You must have Output Buffering enabled via ob_start() or output_buffering ini directive. ~ MODPATH/fire/vendor/FirePHPCore/FirePHP.class.php [ 1178 ]
--
#0 /home/gin/workspace/zend/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(757): FirePHP->newException('Headers already...')
#1 /home/gin/workspace/zend/tango/modules/fire/vendor/FirePHPCore/FirePHP.class.php(598): FirePHP->fb('Base::render VI...', NULL, 'INFO', Array)
#2 /home/gin/workspace/zend/tango/modules/fire/classes/fire/helper.php(41): FirePHP->info('Base::render VI...', NULL, Array)
#3 /home/gin/workspace/zend/tango/application/classes/base.php(546): Fire_Helper::info('Base::render VI...')
#4 /home/gin/workspace/zend/tango/application/classes/controller/system/groups.php(9): Base->render(NULL)
#5 [internal function]: Controller_System_Groups->action_index()
#6 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_System_Groups))
#7 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#10 {main}
2012-11-13 17:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-13 17:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#3 {main}
2012-11-13 17:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-13 17:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#3 {main}
2012-11-13 17:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-13 17:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#3 {main}
2012-11-13 17:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/id/6 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-13 17:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/id/6 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#3 {main}
2012-11-13 17:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/id/6 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-13 17:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/id/6 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#3 {main}
2012-11-13 17:57:20 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Request as array ~ APPPATH/classes/base.php [ 578 ]
2012-11-13 17:57:20 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Request as array ~ APPPATH/classes/base.php [ 578 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 18:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/jh was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-13 18:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/jh was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#3 {main}
2012-11-13 18:00:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/jh was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-13 18:00:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/jh was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#3 {main}
2012-11-13 18:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/groups/index/jh/tyutyu ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-13 18:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/groups/index/jh/tyutyu ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#1 {main}
2012-11-13 18:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/groups/index/jh/tyutyu ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-13 18:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/groups/index/jh/tyutyu ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#1 {main}
2012-11-13 18:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/asd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-13 18:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/asd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#3 {main}
2012-11-13 18:06:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/asd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-13 18:06:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/asd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#3 {main}
2012-11-13 18:06:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/asd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-13 18:06:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/asd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#3 {main}
2012-11-13 18:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/index_action was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-13 18:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/index_action was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#3 {main}
2012-11-13 18:12:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-13 18:12:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#3 {main}
2012-11-13 18:30:14 --- ERROR: ErrorException [ 1 ]: Cannot use string offset as an array ~ APPPATH/classes/controller/system/groups.php [ 79 ]
2012-11-13 18:30:14 --- STRACE: ErrorException [ 1 ]: Cannot use string offset as an array ~ APPPATH/classes/controller/system/groups.php [ 79 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 18:31:30 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/system/groups.php [ 79 ]
2012-11-13 18:31:30 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/system/groups.php [ 79 ]
--
#0 /home/gin/workspace/zend/tango/application/classes/controller/system/groups.php(79): Kohana_Core::error_handler(8, 'Array to string...', '/home/gin/works...', 79, Array)
#1 /home/gin/workspace/zend/tango/application/classes/controller/system/groups.php(46): Controller_System_Groups->groups('users')
#2 [internal function]: Controller_System_Groups->action_users()
#3 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_System_Groups))
#4 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#7 {main}
2012-11-13 18:32:38 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/system/groups.php [ 89 ]
2012-11-13 18:32:38 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/system/groups.php [ 89 ]
--
#0 /home/gin/workspace/zend/tango/application/classes/controller/system/groups.php(89): Kohana_Core::error_handler(8, 'Array to string...', '/home/gin/works...', 89, Array)
#1 /home/gin/workspace/zend/tango/application/classes/controller/system/groups.php(39): Controller_System_Groups->groups('all')
#2 [internal function]: Controller_System_Groups->action_all()
#3 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_System_Groups))
#4 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#7 {main}
2012-11-13 18:33:50 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/system/groups.php [ 90 ]
2012-11-13 18:33:50 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/system/groups.php [ 90 ]
--
#0 /home/gin/workspace/zend/tango/application/classes/controller/system/groups.php(90): Kohana_Core::error_handler(8, 'Array to string...', '/home/gin/works...', 90, Array)
#1 /home/gin/workspace/zend/tango/application/classes/controller/system/groups.php(39): Controller_System_Groups->groups('all')
#2 [internal function]: Controller_System_Groups->action_all()
#3 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_System_Groups))
#4 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#7 {main}
2012-11-13 18:38:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: _users ~ APPPATH/classes/controller/system/groups.php [ 73 ]
2012-11-13 18:38:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: _users ~ APPPATH/classes/controller/system/groups.php [ 73 ]
--
#0 /home/gin/workspace/zend/tango/application/classes/controller/system/groups.php(73): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/gin/works...', 73, Array)
#1 /home/gin/workspace/zend/tango/application/classes/controller/system/groups.php(39): Controller_System_Groups->groups('all')
#2 [internal function]: Controller_System_Groups->action_all()
#3 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_System_Groups))
#4 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#7 {main}
2012-11-13 19:03:13 --- ERROR: ErrorException [ 1 ]: Call to undefined method Os::userGroups() ~ APPPATH/classes/controller/system/groups.php [ 37 ]
2012-11-13 19:03:13 --- STRACE: ErrorException [ 1 ]: Call to undefined method Os::userGroups() ~ APPPATH/classes/controller/system/groups.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 19:03:32 --- ERROR: ErrorException [ 1 ]: Call to undefined method Os::userGroups() ~ APPPATH/classes/controller/system/groups.php [ 37 ]
2012-11-13 19:03:32 --- STRACE: ErrorException [ 1 ]: Call to undefined method Os::userGroups() ~ APPPATH/classes/controller/system/groups.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 19:35:03 --- ERROR: ErrorException [ 1 ]: Call to undefined method Os::userGroups() ~ APPPATH/classes/controller/system/groups.php [ 37 ]
2012-11-13 19:35:03 --- STRACE: ErrorException [ 1 ]: Call to undefined method Os::userGroups() ~ APPPATH/classes/controller/system/groups.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 19:35:20 --- ERROR: ErrorException [ 1 ]: Call to undefined method Os::userGroups() ~ APPPATH/classes/controller/system/groups.php [ 37 ]
2012-11-13 19:35:20 --- STRACE: ErrorException [ 1 ]: Call to undefined method Os::userGroups() ~ APPPATH/classes/controller/system/groups.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 19:35:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method Os::userGroups() ~ APPPATH/classes/controller/system/groups.php [ 37 ]
2012-11-13 19:35:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method Os::userGroups() ~ APPPATH/classes/controller/system/groups.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 19:35:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Os::userGroups() ~ APPPATH/classes/controller/system/groups.php [ 37 ]
2012-11-13 19:35:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Os::userGroups() ~ APPPATH/classes/controller/system/groups.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 19:36:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Os::userGroups() ~ APPPATH/classes/controller/system/groups.php [ 37 ]
2012-11-13 19:36:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Os::userGroups() ~ APPPATH/classes/controller/system/groups.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 19:38:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH/classes/controller/system/groups.php [ 37 ]
2012-11-13 19:38:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH/classes/controller/system/groups.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 19:47:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/user/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-13 19:47:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/groups/user/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#3 {main}
2012-11-13 19:52:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/groups/user/id/sdf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-13 19:52:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/groups/user/id/sdf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#1 {main}
2012-11-13 19:52:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/groups/user/id/sdf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-13 19:52:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/groups/user/id/sdf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/zend/tango/www/index.php(112): Kohana_Request->execute()
#1 {main}
2012-11-13 20:47:49 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$is_cli ~ MODPATH/fire/init.php [ 4 ] in :
2012-11-13 20:47:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-13 20:55:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Os_Debian::exec() ~ APPPATH/classes/os/debian.php [ 334 ]
2012-11-13 20:55:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Os_Debian::exec() ~ APPPATH/classes/os/debian.php [ 334 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 20:55:21 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/os/debian.php [ 336 ]
2012-11-13 20:55:21 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/os/debian.php [ 336 ]
--
#0 /home/gin/workspace/zend/tango/application/classes/os/debian.php(336): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/gin/works...', 336, Array)
#1 /home/gin/workspace/zend/tango/application/classes/controller/system/groups.php(37): Os_Debian->groups()
#2 [internal function]: Controller_System_Groups->action_index()
#3 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_System_Groups))
#4 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/gin/workspace/zend/tango/www/index.php(115): Kohana_Request->execute()
#7 {main}
2012-11-13 20:55:53 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/os/debian.php [ 336 ]
2012-11-13 20:55:53 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/os/debian.php [ 336 ]
--
#0 /home/gin/workspace/zend/tango/application/classes/os/debian.php(336): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/gin/works...', 336, Array)
#1 /home/gin/workspace/zend/tango/application/classes/controller/system/groups.php(37): Os_Debian->groups()
#2 [internal function]: Controller_System_Groups->action_index()
#3 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_System_Groups))
#4 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/gin/workspace/zend/tango/www/index.php(115): Kohana_Request->execute()
#7 {main}
2012-11-13 21:36:37 --- ERROR: ErrorException [ 2 ]: ksort() expects parameter 1 to be array, null given ~ APPPATH/classes/os/debian.php [ 407 ]
2012-11-13 21:36:37 --- STRACE: ErrorException [ 2 ]: ksort() expects parameter 1 to be array, null given ~ APPPATH/classes/os/debian.php [ 407 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'ksort() expects...', '/home/gin/works...', 407, Array)
#1 /home/gin/workspace/zend/tango/application/classes/os/debian.php(407): ksort(NULL)
#2 /home/gin/workspace/zend/tango/application/classes/controller/system/users.php(7): Os_Debian->groups()
#3 [internal function]: Controller_System_Users->action_index()
#4 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_System_Users))
#5 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/gin/workspace/zend/tango/www/index.php(115): Kohana_Request->execute()
#8 {main}
2012-11-13 22:00:44 --- ERROR: ErrorException [ 8 ]: Use of undefined constant System - assumed 'System' ~ APPPATH/views/welcome/login.php [ 23 ]
2012-11-13 22:00:44 --- STRACE: ErrorException [ 8 ]: Use of undefined constant System - assumed 'System' ~ APPPATH/views/welcome/login.php [ 23 ]
--
#0 /home/gin/workspace/zend/tango/application/views/welcome/login.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/gin/works...', 23, Array)
#1 /home/gin/workspace/zend/tango/system/classes/kohana/view.php(61): include('/home/gin/works...')
#2 /home/gin/workspace/zend/tango/system/classes/kohana/view.php(343): Kohana_View::capture('/home/gin/works...', Array)
#3 /home/gin/workspace/zend/tango/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/gin/workspace/zend/tango/application/views/template.php(98): Kohana_View->__toString()
#5 /home/gin/workspace/zend/tango/system/classes/kohana/view.php(61): include('/home/gin/works...')
#6 /home/gin/workspace/zend/tango/system/classes/kohana/view.php(343): Kohana_View::capture('/home/gin/works...', Array)
#7 /home/gin/workspace/zend/tango/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/gin/workspace/zend/tango/www/index.php(115): Kohana_Request->execute()
#13 {main}
2012-11-13 22:39:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-13 22:39:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(115): Kohana_Request->execute()
#3 {main}
2012-11-13 22:40:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-13 22:40:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(115): Kohana_Request->execute()
#3 {main}