<?php

if(isset($data) && is_array($data))
{
	echo '<div id="main_menu">';
	echo '<ul>';

	foreach($data as $_data)
	{
		echo '<li><a href="/' . $_data . '">' . $_data . '</a></li>';
	}

        echo '<h1><a href="/services">--->Tango</a></h1>';
        
	echo '<li><select><option value="localhost">localhost</option></select></li>';
    echo '<li>cache<input type="checkbox" name="cache" value="cache"></li>';
    echo '<li><button id="console_button" type="button">console</button></li>';
	echo '</ul>';
	echo '</div>';
	echo '<script>$("#main_menu").tabs()</script>';
        
        echo '<hr /><a href="http://www.youtube.com/watch?v=S-mkR-KoPts">Watch some tango..</a><hr />';


echo `uname -a`;
echo '<br />' . `hostname -f && uptime`;
echo '<hr />free: ' . nl2br(`free`);
//echo '<br />' . php_uname();	//	http://uk3.php.net/manual/en/function.php-uname.php
//echo '<br />' . php_uname('s');

}