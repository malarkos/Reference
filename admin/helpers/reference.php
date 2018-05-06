<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_reference
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

class ReferenceHelper extends JHelperContent
{
    public static function addSubmenu($vName)
    {
        JHtmlSidebar::addEntry(
            JText::_('COM_REFERENCE_MEMBER_RATES'),
            'index.php?option=com_reference&view=memberrates',
            $vName == 'memberrates'
        );
        JHtmlSidebar::addEntry(
        		JText::_('COM_REFERENCE_SUMMER_RATES'),
        		'index.php?option=com_reference&view=summerrates',
        		$vName == 'summerrates'
        );
        JHtmlSidebar::addEntry(
        		JText::_('COM_REFERENCE_WINTER_RATES'),
        		'index.php?option=com_reference&view=winterrates',
        		$vName == 'winterrates'
        );
        JHtmlSidebar::addEntry(
        		JText::_('COM_REFERENCE_STUDENT_DATES'),
        		'index.php?option=com_reference&view=studentdates',
        		$vName == 'studentdates'
        );
        JHtmlSidebar::addEntry(
        		JText::_('COM_REFERENCE_PRES_DATES'),
        		'index.php?option=com_reference&view=presdates',
        		$vName == 'presdates'
        );
        JHtmlSidebar::addEntry(
        		JText::_('COM_REFERENCE_CHAPAGNE_DATES'),
        		'index.php?option=com_reference&view=champdates',
        		$vName == 'champdates'
        		);
        JHtmlSidebar::addEntry(
        		JText::_('COM_REFERENCE_SEASON_DATES'),
        		'index.php?option=com_reference&view=seasondates',
        		$vName == 'seasondates'
        );
        JHtmlSidebar::addEntry(
        		JText::_('COM_REFERENCE_CHAMPAGNERS'),
        		'index.php?option=com_reference&view=champagners',
        		$vName == 'champagners'
        );
        JHtmlSidebar::addEntry(
        		JText::_('COM_REFERENCE_PRESIDENTS'),
        		'index.php?option=com_reference&view=presidents',
        		$vName == 'presidents'
        		);
    }
}