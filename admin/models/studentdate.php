<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_reference
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/**
 * HelloWorld Model
 *
 * @since  0.0.1
 */
class ReferenceModelStudentDate extends JModelAdmin
{
	/**
	 * Method to get a table object, load it if necessary.
	 *
	 * @param   string  $type    The table name. Optional.
	 * @param   string  $prefix  The class prefix. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  JTable  A JTable object
	 *
	 * @since   1.6
	 */
	public function getTable($type = 'StudentDate', $prefix = 'ReferenceTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
 
	/**
	 * Method to get the record form.
	 *
	 * @param   array    $data      Data for the form.
	 * @param   boolean  $loadData  True if the form is to load its own data (default case), false if not.
	 *
	 * @return  mixed    A JForm object on success, false on failure
	 *
	 * @since   1.6
	 */
	public function getForm($data = array(), $loadData = true)
	{
		// Get the form.
		$form = $this->loadForm(
			'com_reference.studentdate',
			'studentdate',
			array(
				'control' => 'jform',
				'load_data' => $loadData
			)
		);
 
		if (empty($form))
		{
			return false;
		}
 
		return $form;
	}
 
	/**
	 * Method to get the script that have to be included on the form
	 *
	 * @return string	Script files
	 */
	//public function getScript()
	//{
	//	return 'administrator/components/com_reference/models/forms/summerrate.js';
	//}
	
	/**
	 * Method to get the data that should be injected in the form.
	 *
	 * @return  mixed  The data for the form.
	 *
	 * @since   1.6
	 */
	protected function loadFormData()
	{
		// Check the session for previously entered form data.
		$data = JFactory::getApplication()->getUserState(
			'com_reference.edit.studentdate.data',
			array()
		);
 
		if (empty($data))
		{
			$data = $this->getItem();
		}
 
		return $data;
	}
	
	protected function prepareTable(&$table)
	{
	
		$user = JFactory::getUser();
		$modname = $user->name;
	
		$monday = date('Y-m-d H:i:s', strtotime($table->Sunday . ' +1 day'));
		$tuesday= date('Y-m-d H:i:s', strtotime($table->Sunday . ' +2 day'));
		$wed = date('Y-m-d H:i:s', strtotime($table->Sunday . ' +3 day'));
		$thu = date('Y-m-d H:i:s', strtotime($table->Sunday . ' +4 day'));
		$table->Monday = $monday;
		$table->Tuesday = $tuesday;
		$table->Wednesday = $wed;
		$table->Thursday = $thu;
		$table->lastModifiedby = $modname;
	
	}
}
