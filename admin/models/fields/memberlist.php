<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_lockers
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
JFormHelper::loadFieldClass('list');
 
/**
 * HelloWorld Form Field class for the HelloWorld component
 *
 * @since  0.0.1
 */
class JFormFieldMemberList extends JFormFieldList
{
	/**
	 * The field type.
	 *
	 * @var         string
	 */
	protected $type = 'MemberList';
 
	/**
	 * Method to get a list of options for a list input.
	 *
	 * @return  array  An array of JHtml options.
	 */
	protected function getOptions()
	{
		$db    = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id,concat(memberfirstname," ",membersurname," <",membertype,">") as membername, memberfirstname, membersurname');
		$query->from('oscmembers as m');  
        $query->order('memberfirstname ASC'); // sort by firstname, then surname
        $query->order('membersurname ASC'); // sort by firstname, then surname
        //$app = JFactory::getApplication ();
        //$app->enqueueMessage('Query = '.$query.';');
        $db->setQuery((string) $query);
		$messages = $db->loadObjectList();
		$options  = array();
 
		if ($messages)
		{
			foreach ($messages as $message)
			{
				$options[] = JHtml::_('select.option', $message->id, $message->membername);
			}
		}
 
		$options = array_merge(parent::getOptions(), $options);
 
		return $options;
	}
}