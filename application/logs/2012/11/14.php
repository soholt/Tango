<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-14 00:29:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Response::response() ~ APPPATH/classes/controller/api.php [ 20 ]
2012-11-14 00:29:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Response::response() ~ APPPATH/classes/controller/api.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-14 00:29:58 --- ERROR: ErrorException [ 8 ]: Undefined property: Response::$response ~ APPPATH/classes/controller/api.php [ 20 ]
2012-11-14 00:29:58 --- STRACE: ErrorException [ 8 ]: Undefined property: Response::$response ~ APPPATH/classes/controller/api.php [ 20 ]
--
#0 /home/gin/workspace/zend/tango/application/classes/controller/api.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/gin/works...', 20, Array)
#1 [internal function]: Controller_Api->action_index()
#2 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#3 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/gin/workspace/zend/tango/www/index.php(115): Kohana_Request->execute()
#6 {main}
2012-11-14 00:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/groupsdd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-14 00:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/groupsdd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/application/classes/controller/api.php(20): Kohana_Request->execute()
#3 [internal function]: Controller_Api->action_index()
#4 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#5 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/gin/workspace/zend/tango/www/index.php(115): Kohana_Request->execute()
#8 {main}
2012-11-14 00:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/dfsdf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-14 00:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/dfsdf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(115): Kohana_Request->execute()
#3 {main}
2012-11-14 01:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/sd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-14 01:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/sd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(115): Kohana_Request->execute()
#3 {main}
2012-11-14 01:15:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/sd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-14 01:15:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/sd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(115): Kohana_Request->execute()
#3 {main}
2012-11-14 01:16:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-14 01:16:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(115): Kohana_Request->execute()
#3 {main}
2012-11-14 01:17:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-14 01:17:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(115): Kohana_Request->execute()
#3 {main}
2012-11-14 01:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-14 01:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(115): Kohana_Request->execute()
#3 {main}
2012-11-14 01:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-14 01:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(115): Kohana_Request->execute()
#3 {main}
2012-11-14 01:19:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-14 01:19:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(115): Kohana_Request->execute()
#3 {main}
2012-11-14 01:19:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-14 01:19:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/gin/workspace/zend/tango/www/index.php(115): Kohana_Request->execute()
#3 {main}
2012-11-14 01:20:45 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/welcome.php [ 29 ]
2012-11-14 01:20:45 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/welcome.php [ 29 ]
--
#0 /home/gin/workspace/zend/tango/application/classes/controller/welcome.php(29): Kohana_Core::error_handler(2048, 'Creating defaul...', '/home/gin/works...', 29, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/gin/workspace/zend/tango/www/index.php(115): Kohana_Request->execute()
#6 {main}
2012-11-14 02:39:43 --- ERROR: ErrorException [ 8192 ]: Call-time pass-by-reference has been deprecated ~ APPPATH/views/welcome/login.php [ 36 ]
2012-11-14 02:39:43 --- STRACE: ErrorException [ 8192 ]: Call-time pass-by-reference has been deprecated ~ APPPATH/views/welcome/login.php [ 36 ]
--
#0 /home/gin/workspace/zend/tango/system/classes/kohana/view.php(61): Kohana_Core::error_handler(8192, 'Call-time pass-...', '/home/gin/works...', 36, Array)
#1 /home/gin/workspace/zend/tango/system/classes/kohana/view.php(61): Kohana_View::capture()
#2 /home/gin/workspace/zend/tango/system/classes/kohana/view.php(343): Kohana_View::capture('/home/gin/works...', Array)
#3 /home/gin/workspace/zend/tango/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/gin/workspace/zend/tango/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/gin/workspace/zend/tango/application/classes/controller/welcome.php(18): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 /home/gin/workspace/zend/tango/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /home/gin/workspace/zend/tango/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/gin/workspace/zend/tango/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/gin/workspace/zend/tango/www/index.php(115): Kohana_Request->execute()
#11 {main}