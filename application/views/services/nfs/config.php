<form method="post" action="/services/nfs/save">

<?php
/*
echo '<pre>';
print_r($data);
echo '<hr>';
*/
if(is_array($data))	//	simple editing mode
{
	echo parse($data);

	echo addNew();
}
else	//	advanced
{
	echo '<textarea name="config">' . $data . '</textarea>';
}

?>

<input type="hidden" name="action" value="save" />
<input type="submit" value="save" />

</form>

<?php
function parse($data)
{

	$form = '';

	foreach($data as $line)
	{

		$line = trim($line);

		if(strpos($line, '#') === 0)
		{
			$form .= '<input type="hidden" name="config[]" value="' . $line . '" />';
		}
		elseif($line != '')
		{
			$form .= '<input type="text" name="config[]" value="' . $line . '" size="100" />' . "<br />\n";

		}

		//$form .= "<br />\n";

		//$form

		//$config .= $line;

	}

	return $form;

}

function addNew()
{
	$form = '<hr />';
	$form .= '<input type="text" name="config[]" value="/" size="100" />' . '<a href="#">browse</a>' . "<br />\n";
	$form .= '<hr />';

	return $form;
}
//EOF