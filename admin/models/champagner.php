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
class ReferenceModelChampagner extends JModelAdmin
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
	public function getTable($type = 'Champagner', $prefix = 'ReferenceTable', $config = array())
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
			'com_reference.champagner',
			'champagner',
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
			'com_reference.edit.champagner.data',
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
	
		// Add one day to Friday
		$saturday= date('Y-m-d H:i:s');
		$table->lastModified = $saturday;
		
		$table->lastModifiedby = $modname;
	
	}
	
	function delete() {
		$cids = JRequest::getVar( 'cid', array(0), 'post', 'array' );
		$row =& $this->getTable();
		if (count( $cids )) {
			foreach($cids as $cid) {
				/*$msg = "Removing this cid:".$cid;
				$application = JFactory::getApplication();
				$application->enqueueMessage($msg);*/
				if (!$row->delete( $cid )) {
					$this->setError( $row->getError() );
					return false;
				} 
			}
		}
		return true;
	}
}
