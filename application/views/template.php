<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/ui-lightness/jquery-ui-1.8.16.custom.css" type="text/css">
        <link rel="stylesheet" href="/css/jqueryslidemenu.css" type="text/css">
        <link rel="stylesheet" href="/css/tango.css" type="text/css">
        <script type="text/javascript" src="/js/jquery-1.6.4.min.js"></script>
        <script type="text/javascript" src="/js/jquery-ui-1.8.16.custom.min.js"></script>
        <script type="text/javascript" src="/js/jqueryslidemenu.js"></script>
        <script type="text/javascript" src="/js/js.js"></script>
        <title>gin</title>
    </head>
    <body>
        <?php
//
//
//
//	DISPLAY MENUS IF CONTROLLER IS NOT CALLED 'welcome'

        if (Request::current()->controller() != 'welcome'): //	TODO no session

            echo '<div id="myslidemenu" class="jqueryslidemenu">';
            echo '<ul>';

            foreach ($menus as $menu => $subMenus) {
                echo '<li><a href="/' . $menu . '">' . __($menu) . '</a>';

                if (is_array($subMenus)) {
                    echo '<ul>';

                    foreach ($subMenus as $subMenu) {
                        echo '<li><a href="/' . $menu . '/' . $subMenu . '">' . __($subMenu) . '</a></li>';
                    }

                    echo '</ul>';
                }

                echo '</li>';
            }

            echo '</ul>';
            echo '</div>' . ' todo:display [ClearCache] if TRUE in config';

            echo '<hr />';

            echo '<div>';

            $dir = Request::current()->directory();
            $controller = Request::current()->controller();

            if (is_array($actions) && $dir != 'services') { //	SWITCH OFF MENUS FOR services
                echo '<b> ' . $dir . ' > ' . $controller . ':</b> ';

                foreach ($actions as $action => $menuName) {
                    echo '| <a href="/' . $dir . '/' . Request::current()->controller() . '/' . $action . '">' . __($menuName) . '</a> |';
                }
            } else {
                echo '<br />';
            }

            echo '</div>';

        endif;

//$clearCache = "axAppend('/system/index/cache_delete/" . $dir . "_" . $controller . "', 'shOutput')";
//echo '<input id="clearCache" type="button" value="' . __('CACHE') . '" onclick="' . $clearCache . '" />';

        /*
          exec('ls ' . APPPATH . 'classes/controller', $dirs);

          $directories = '';

          foreach($dirs as $dir)
          {
          if($dir != 'welcome.php' && $dir != 'sh.php')
          {
          $directories .= '|<a href="#" onclick="ax(\'/welcome/controllers/' . $dir . '\',\'controllers\')"> ' . $dir . ' </a>|';
          }
          }

          echo $directories;
         */
        ?>

        <div id="controllers"></div>
        <?php
        if (isset($methods)) {

            echo '<div id="methods"><h3>';
            foreach ($methods as $name => $url) {
                echo '| <a href="' . $url . '">' . $name . '</a> |';
            }
            echo '</h3></div>';
        }
        ?>
        <hr />
        <div id="content"><?php echo $content ?>
            <div id="shStatus"></div>
        </div>
        <div id="shOutput"></div>
        <div id="progressBar"></div>
        <div id="console">console</div>
        <div id="consolea"title="console">consoleA</div>

    </body>
</html>
