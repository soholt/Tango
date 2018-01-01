
<form id="create" action="/storage/zfs/create" method="post" accept-charset="utf-8">
<?php

//$action = '/' . Request::current()->directory() . '/' . Request::current()->controller() . '/' . Request::current()->action();
//$action = '/storage/zfs/create';
//echo Form::open($action);

if(is_array($data))
{

	foreach($data as $devs)
	{

		echo '<hr>' . "\n";

		echo Form::checkbox('dev[]', $devs['dev']);
		//echo $devs['dev'];

		if(is_array($devs['info']))
		{
			foreach($devs['info'] as $info)
			{
				//echo $info . '<br />';
			}
		}

	}

}

echo '<input type="button" value="c" onclick="alert($(\'input:checkbox:checked\').val())" />';

echo Form::submit('create', 'create');

echo '<input type="button" name="hardware" value="ssssss" onclick="formax($(\'#create\').serialize(),\'/storage/zfs/create\',$(\'#create\').method,this.name)" />';

echo Form::close();