<?php
jimport('joomla.form.formfield');

/**
 * Supports an HTML form field
*/
class JFormFieldLastModified extends JFormField
{
	/**
	 * The form field type.
	 *
	 * @var        string
	 * @since    1.6
	 */
	protected $type = 'lastmodifiedby';

	/**
	 * Method to get the field input lastmodified.
	 *
	 */
	protected function getInput()
	{
		// Initialize variables.
		$html = array();
		
		//$user = JFactory::getUser();
		
		//$updatedby = $user->username;
		$updatedby = "Geoff";
		
		$html = '<input type="hidden" name="'.$this->name.'" value="'.$updatedby.'" />';

		return $html;
	}
}

?>