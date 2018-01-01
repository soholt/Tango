<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-01-06 12:22:54 --- ERROR: ErrorException [ 8 ]: Undefined index: cmd ~ APPPATH/classes/controller/sh.php [ 11 ]
2013-01-06 12:22:54 --- STRACE: ErrorException [ 8 ]: Undefined index: cmd ~ APPPATH/classes/controller/sh.php [ 11 ]
--
#0 /home/gin/workspace/php/tango/application/classes/controller/sh.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/home/gin/works...', 11, Array)
#1 [internal function]: Controller_Sh->action_index()
#2 /home/gin/workspace/php/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Sh))
#3 /home/gin/workspace/php/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/gin/workspace/php/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#6 {main}
2013-01-06 13:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 13:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 13:35:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content1.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 13:35:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content1.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 13:35:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content2.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 13:35:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content2.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 13:35:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content3-slow.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 13:35:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content3-slow.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 13:35:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content2.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 13:35:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content2.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 13:35:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content1.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 13:35:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content1.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 13:35:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content4-broken.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 13:35:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content4-broken.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 13:36:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content1.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 13:36:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content1.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 13:37:28 --- ERROR: ErrorException [ 8 ]: Undefined index: cmd ~ APPPATH/classes/controller/sh.php [ 11 ]
2013-01-06 13:37:28 --- STRACE: ErrorException [ 8 ]: Undefined index: cmd ~ APPPATH/classes/controller/sh.php [ 11 ]
--
#0 /home/gin/workspace/php/tango/application/classes/controller/sh.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/home/gin/works...', 11, Array)
#1 [internal function]: Controller_Sh->action_index()
#2 /home/gin/workspace/php/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Sh))
#3 /home/gin/workspace/php/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/gin/workspace/php/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#6 {main}
2013-01-06 13:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/sh was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-06 13:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/sh was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/gin/workspace/php/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/php/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#3 {main}
2013-01-06 13:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 13:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 13:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 13:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 13:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content1.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 13:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content1.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 13:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content2.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 13:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content2.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 13:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content3-slow.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 13:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content3-slow.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 13:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content1.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 13:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content1.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 13:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 13:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 13:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content4-broken.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 13:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content4-broken.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 13:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content4-broken.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 13:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content4-broken.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 13:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 13:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 13:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content4-broken.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 13:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content4-broken.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 14:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 14:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 14:11:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content4-broken.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 14:11:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content4-broken.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 14:26:05 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/storage/index.php [ 2 ]
2013-01-06 14:26:05 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/storage/index.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-06 15:07:21 --- ERROR: ErrorException [ 1 ]: Call to undefined function pam_auth() ~ APPPATH/views/welcome/login.php [ 38 ]
2013-01-06 15:07:21 --- STRACE: ErrorException [ 1 ]: Call to undefined function pam_auth() ~ APPPATH/views/welcome/login.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-06 15:09:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: logData ~ APPPATH/views/system/logs/index.php [ 33 ]
2013-01-06 15:09:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: logData ~ APPPATH/views/system/logs/index.php [ 33 ]
--
#0 /Users/gin/workspace/php/tango/application/views/system/logs/index.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/gin/work...', 33, Array)
#1 /Users/gin/workspace/php/tango/system/classes/kohana/view.php(61): include('/Users/gin/work...')
#2 /Users/gin/workspace/php/tango/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/gin/work...', Array)
#3 /Users/gin/workspace/php/tango/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/gin/workspace/php/tango/application/views/template.php(97): Kohana_View->__toString()
#5 /Users/gin/workspace/php/tango/system/classes/kohana/view.php(61): include('/Users/gin/work...')
#6 /Users/gin/workspace/php/tango/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/gin/work...', Array)
#7 /Users/gin/workspace/php/tango/application/classes/base.php(630): Kohana_View->render()
#8 /Users/gin/workspace/php/tango/application/classes/controller/system/logs.php(13): Base->render()
#9 [internal function]: Controller_System_Logs->action_index()
#10 /Users/gin/workspace/php/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_System_Logs))
#11 /Users/gin/workspace/php/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/gin/workspace/php/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#14 {main}
2013-01-06 15:11:45 --- ERROR: ErrorException [ 1 ]: Class 'Os_' not found ~ APPPATH/classes/base.php [ 105 ]
2013-01-06 15:11:45 --- STRACE: ErrorException [ 1 ]: Class 'Os_' not found ~ APPPATH/classes/base.php [ 105 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-06 15:11:59 --- ERROR: ErrorException [ 1 ]: Class 'Os_' not found ~ APPPATH/classes/base.php [ 105 ]
2013-01-06 15:11:59 --- STRACE: ErrorException [ 1 ]: Class 'Os_' not found ~ APPPATH/classes/base.php [ 105 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-06 15:12:01 --- ERROR: ErrorException [ 1 ]: Class 'Os_' not found ~ APPPATH/classes/base.php [ 105 ]
2013-01-06 15:12:01 --- STRACE: ErrorException [ 1 ]: Class 'Os_' not found ~ APPPATH/classes/base.php [ 105 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-06 15:12:02 --- ERROR: ErrorException [ 1 ]: Class 'Os_' not found ~ APPPATH/classes/base.php [ 105 ]
2013-01-06 15:12:02 --- STRACE: ErrorException [ 1 ]: Class 'Os_' not found ~ APPPATH/classes/base.php [ 105 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-06 15:12:08 --- ERROR: ErrorException [ 1 ]: Class 'Os_' not found ~ APPPATH/classes/base.php [ 105 ]
2013-01-06 15:12:08 --- STRACE: ErrorException [ 1 ]: Class 'Os_' not found ~ APPPATH/classes/base.php [ 105 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-06 15:12:39 --- ERROR: ErrorException [ 1 ]: Call to undefined function pam_auth() ~ APPPATH/views/welcome/login.php [ 38 ]
2013-01-06 15:12:39 --- STRACE: ErrorException [ 1 ]: Call to undefined function pam_auth() ~ APPPATH/views/welcome/login.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-06 15:15:21 --- ERROR: ErrorException [ 1 ]: Class 'Os_' not found ~ APPPATH/classes/base.php [ 105 ]
2013-01-06 15:15:21 --- STRACE: ErrorException [ 1 ]: Class 'Os_' not found ~ APPPATH/classes/base.php [ 105 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-06 15:30:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 15:30:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 15:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 15:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 15:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 15:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 15:32:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 15:32:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 15:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content4-broken.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 15:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content4-broken.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 15:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content4-broken.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 15:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/content4-broken.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 15:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 15:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 15:37:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 15:37:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 15:39:23 --- ERROR: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-06 15:39:23 --- STRACE: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/gin/workspace/php/tango/system/classes/kohana/view.php(137): Kohana_View->set_filename('welcome')
#1 /home/gin/workspace/php/tango/system/classes/kohana/view.php(30): Kohana_View->__construct('welcome', NULL)
#2 /home/gin/workspace/php/tango/application/classes/controller/welcome.php(18): Kohana_View::factory('welcome')
#3 [internal function]: Controller_Welcome->action_index()
#4 /home/gin/workspace/php/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /home/gin/workspace/php/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/gin/workspace/php/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#8 {main}
2013-01-06 15:42:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/welcome/welcome.php [ 3 ]
2013-01-06 15:42:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/welcome/welcome.php [ 3 ]
--
#0 /home/gin/workspace/php/tango/application/views/welcome/welcome.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/gin/works...', 3, Array)
#1 /home/gin/workspace/php/tango/system/classes/kohana/view.php(61): include('/home/gin/works...')
#2 /home/gin/workspace/php/tango/system/classes/kohana/view.php(343): Kohana_View::capture('/home/gin/works...', Array)
#3 /home/gin/workspace/php/tango/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/gin/workspace/php/tango/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/gin/workspace/php/tango/application/classes/controller/welcome.php(18): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 /home/gin/workspace/php/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /home/gin/workspace/php/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/gin/workspace/php/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#11 {main}
2013-01-06 17:30:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH/classes/controller/welcome.php [ 65 ]
2013-01-06 17:30:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH/classes/controller/welcome.php [ 65 ]
--
#0 /home/gin/workspace/php/tango/application/classes/controller/welcome.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/gin/works...', 65, Array)
#1 [internal function]: Controller_Welcome->action_t()
#2 /home/gin/workspace/php/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /home/gin/workspace/php/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/gin/workspace/php/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#6 {main}
2013-01-06 17:30:41 --- ERROR: View_Exception [ 0 ]: The requested view welcome/welcome could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-06 17:30:41 --- STRACE: View_Exception [ 0 ]: The requested view welcome/welcome could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/gin/workspace/php/tango/system/classes/kohana/view.php(137): Kohana_View->set_filename('welcome/welcome')
#1 /home/gin/workspace/php/tango/system/classes/kohana/view.php(30): Kohana_View->__construct('welcome/welcome', Array)
#2 /home/gin/workspace/php/tango/application/classes/controller/welcome.php(65): Kohana_View::factory('welcome/welcome', Array)
#3 [internal function]: Controller_Welcome->action_t()
#4 /home/gin/workspace/php/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /home/gin/workspace/php/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/gin/workspace/php/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#8 {main}
2013-01-06 17:31:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: methods ~ APPPATH/views/template.php [ 95 ]
2013-01-06 17:31:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: methods ~ APPPATH/views/template.php [ 95 ]
--
#0 /home/gin/workspace/php/tango/application/views/template.php(95): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/gin/works...', 95, Array)
#1 /home/gin/workspace/php/tango/system/classes/kohana/view.php(61): include('/home/gin/works...')
#2 /home/gin/workspace/php/tango/system/classes/kohana/view.php(343): Kohana_View::capture('/home/gin/works...', Array)
#3 /home/gin/workspace/php/tango/application/classes/controller/welcome.php(69): Kohana_View->render()
#4 [internal function]: Controller_Welcome->action_t()
#5 /home/gin/workspace/php/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/gin/workspace/php/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/gin/workspace/php/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#9 {main}
2013-01-06 17:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tango.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-06 17:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tango.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/gin/workspace/php/tango/www/index.php(115): Kohana_Request->execute()
#1 {main}
2013-01-06 18:48:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH/classes/base.php [ 105 ]
2013-01-06 18:48:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH/classes/base.php [ 105 ]
--
#0 /Users/gin/workspace/php/tango/application/classes/base.php(105): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/gin/work...', 105, Array)
#1 [internal function]: Base->before()
#2 /Users/gin/workspace/php/tango/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_System_Index))
#3 /Users/gin/workspace/php/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/gin/workspace/php/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/gin/workspace/php/tango/www/index.php(128): Kohana_Request->execute()
#6 {main}
2013-01-06 18:49:21 --- ERROR: ErrorException [ 1 ]: Class 'Os_' not found ~ APPPATH/classes/base.php [ 113 ]
2013-01-06 18:49:21 --- STRACE: ErrorException [ 1 ]: Class 'Os_' not found ~ APPPATH/classes/base.php [ 113 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-06 19:09:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/controller/welcome.php [ 22 ]
2013-01-06 19:09:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/controller/welcome.php [ 22 ]
--
#0 /home/gin/workspace/php/tango/application/classes/controller/welcome.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/gin/works...', 22, Array)
#1 [internal function]: Controller_Welcome->before()
#2 /home/gin/workspace/php/tango/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /home/gin/workspace/php/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/gin/workspace/php/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/gin/workspace/php/tango/www/index.php(128): Kohana_Request->execute()
#6 {main}