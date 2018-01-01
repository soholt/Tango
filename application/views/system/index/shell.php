
<input type="button" value="clear" onclick="$('#shOutput').html('')" />
<?php
//echo Form::open();
//echo Form::input('cmd');
//echo Form::submit('run', 'run');
//echo Form::button('run', 'run', array('onclick' => "sh('ls /etc')"));

//echo Form::close();

?>
<input id="cmd" type="text" name="cmd" value="" />
<input id="run" type="button" value="<?php echo __('run'); ?>" onclick="shhh('/system/index/shell?cmd='+$('#cmd').val())" />
<input type="button" value="<?php echo __('append'); ?>" onclick="axAppend('/system/index/shell?cmd='+$('#cmd').val(), 'shOutput')" />
(you can use sudo)
<?php
