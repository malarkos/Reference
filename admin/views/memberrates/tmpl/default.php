<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_aps
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<form action="index.php?option=com_reference&view=memberrates" method="post" id="adminForm" name="adminForm">
	<div id="j-sidebar-container" class="span2">
    <?php echo $this->sidebar; ?>
	</div>
	<div id="j-main-container" class="span10">
	<table class="table table-striped table-hover">
		<thead>
		<tr>
	 		<th width="1%"><?php echo JText::_('COM_REFERENCE_NUM'); ?></th>
			<th width="2%">
				<?php echo JHtml::_('grid.checkall'); ?>
			</th>  
			
            <th width="10%">
				<?php echo JText::_('COM_REFERENCE_MEMBERRATES_YEAR') ;?>
			</th>
			<th width="10%">
				<?php echo JText::_('COM_REFERENCE_MEMBERRATES_GRADUATE') ;?>
			</th>
                        
			<th width="10%">
				<?php echo JText::_('COM_REFERENCE_MEMBERRATES_SPOUSE'); ?>
			</th>
			<th width="10%">
				<?php echo JText::_('COM_REFERENCE_MEMBERRATES_STUDENT'); ?>
			</th>
			<th width="10%">
				<?php echo JText::_('COM_REFERENCE_MEMBERRATES_CHILD'); ?>
			</th>
			<th width="10%">
				<?php echo JText::_('COM_REFERENCE_MEMBERRATES_SUMMER'); ?>
			</th>
			<th width="10%">
				<?php echo JText::_('COM_REFERENCE_MEMBERRATES_LOCKER'); ?>
			</th>
                       
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="7">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) :
					$link = JRoute::_('index.php?option=com_reference&task=memberrate.edit&id=' . $row->id);
				?>
					<tr>
						  
						<td><?php echo $this->pagination->getRowOffset($i); ?></td>
						<td>
							<?php echo JHtml::_('grid.id', $i, $row->id); ?>
						</td>
						
                                                <td>
                                                    <a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_REFERENCE_EDIT_MEMBERRATE'); ?>">
								<?php echo $row->Year; ?>
                                                    </a>
						</td>
						<td>
								<?php echo $row->Graduate; ?>
						</td>
                                                
                        <td>
								<?php echo $row->Spouse; ?>
						</td>
						<td>
								<?php echo $row->Student; ?>
						</td>
						<td>
								<?php echo $row->Child; ?>
						</td>
                         <td>
								<?php echo $row->Summer; ?>
						</td>
						<td>
								<?php echo $row->Locker; ?>
						</td>                      
                                                

					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
        <input type="hidden" name="task" value=""/>
	<input type="hidden" name="boxchecked" value="0"/>
	<?php echo JHtml::_('form.token'); ?>
</div>
</form>