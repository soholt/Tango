<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>jQuery UI Tabs - Content via Ajax</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <script>
    $(function() {
        $( "#menu" ).tabs({
            beforeLoad: function( event, ui ) {
                ui.jqXHR.error(function() {
                    ui.panel.html(
                        "Couldn't load this tab. We'll try to fix this as soon as possible. " +
                        "If this wouldn't be a demo." );
                });
            }
        });
    });
    </script>
</head>
<body>

<div id="menu">
    <ul>
        <li><a href="#tabs-1">services</a></li>
        <li><a href="/menu/services_menu">storage</a></li>
        <li><a href="/menu/storage">system</a></li>
        <li><a href="/menu/system">tango</a></li>
        <li><a href="ajax/content4-broken.php">sh</a></li>
        <li><select><option value="localhost">localhost</option></select></li>
        <li>cache<input type="checkbox" name="cache" value="cache"></li>


    </ul>

    <div id="tabs-1">
        <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
    </div>
</div>


</body>
</html>