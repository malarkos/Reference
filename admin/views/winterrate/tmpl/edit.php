<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_reference
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access
defined('_JEXEC') or die('Restricted access');
JHTML::_('behavior.formvalidator');
 
?>
<form action="<?php echo JRoute::_('index.php?option=com_reference&layout=edit&id=' . (int) $this->item->id); ?>"
    method="post" name="adminForm" id="adminForm" class="form-validate">
    <div class="form-horizontal">
        <fieldset class="adminform">
            <legend><?php echo JText::_('COM_REFERENCE_WINTERRATE_DETAILS'); ?></legend>
            <div class="row-fluid">
            <?php echo $this->form->renderFieldset('general'); ?>
               
                    <table class="table table-striped table-hover">
                    	<tr>
                    		<th>Adult</th><th>Young Adult</th><th>Child</th><th>Infant</th>
                    	</tr>
                    	<tr>
                    		
                    		<td><?php echo $this->form->renderFieldset('adult'); ?></td>
                    		<td><?php echo $this->form->renderFieldset('youngadult'); ?></td>
                    		<td><?php echo $this->form->renderFieldset('child'); ?></td>
                    		<td><?php echo $this->form->renderFieldset('infant'); ?></td>
                    	</tr>
                    	
                    </table>
                
            </div>
        </fieldset>
     
    </div>
    <input type="hidden" name="task" value="winterrate.edit" />
    <?php echo JHtml::_('form.token'); ?>
</form>