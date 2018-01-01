<?php

if(is_array($data))
{
	echo '<div id="storage_menu">';
	echo '<ul>';

	foreach($data as $_data)
	{
		echo '<li><a href="/storage/' . $_data . '">' . $_data . '</a></li>';
	}

	echo '</ul>';
	echo '<select>ssss</select>';
	echo '</div>';
	echo '<script>$("#storage_menu").tabs()</script>';
}

/*
<div id="menu">
<ul>
<li><a href="#tabs-1">services</a></li>
<li><a href="/menu/services_menu">storage</a></li>
<li><a href="/menu/storage">system</a></li>
<li><a href="/menu/system">tango</a></li>
<li><a href="ajax/content4-broken.php">sh</a></li>
</ul>
<div id="tabs-1">
<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
</div>
</div>
*/