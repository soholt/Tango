<?php

$url = '/' . Request::current()->directory() . '/' . Request::current()->controller() . '/service/install';

?>
<input type="button" value="<?php echo __('install'); ?>" onclick="shhh('<?php echo $url ?>')" />
<div id="shStatus"></div>
<div id="shOutput"></div>