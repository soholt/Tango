<?php defined('SYSPATH') or die('No direct script access.');

class Form extends Kohana_Form
{
	/**
	 * Creates the closing form tag and adds eof=1
	 * to make sure that comlete form is received.
	 * If eof=1 is missing, no actions will be taken.
	 *
	 *     echo Form::close();
	 *
	 * @return  string
	 */
	public static function close()
	{
		return '<input type="hidden" name="eof" value="1" />
</form>' . "\n";
	}

}//EOF