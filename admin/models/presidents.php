<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_aps
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/**
 * HelloWorldList Model
 *
 * @since  0.0.1
 */
class ReferenceModelPresidents extends JModelList
{
    
        public function __construct($config = array())
	{
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
				'id','p.id',
				'year','p.year'	
			);
		}
 
		parent::__construct($config);
	}
	
	protected function populateState($ordering = null, $direction = null)
	{
		// Initialise variables.
		$app = JFactory::getApplication('administrator');
		
		// Other code goes here
		
		$year = $app->getUserStateFromRequest($this->context . 'filter.year', 'filter_year', '', 'string');
		$this->setState('filter.year', $year);
		
		// Other code goes here
		
		// List state information.
		parent::populateState('p.id', 'asc');
	}
	
	/**
	 * Method to build an SQL query to load the list data.
	 *
	 * @return      string  An SQL query
	 */
	protected function getListQuery()
	{
		// Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
 
		// Create the base select statement.
		$query->select('p.*,concat(m.MemberFirstname,\' \',m.MemberSurname) as membername');
        $query->from('presweekend AS p');
        $query->leftJoin('members AS m ON p.MemberID = m.MemberID'); // Use new member table
        //$query->order('Year DESC');
        //$query->leftJoin('apsschools AS s ON v.schoolid = s.id');  
        // Create the base select statement.
        // Filter by year
        $year = $this->getState('filter.year');
        
        if (is_numeric($year))
        {
        	$query->where('p.Year = '.(int) $year);
        }
       
        
 
		return $query;
	}
}