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
<form action="index.php?option=com_reference&view=summerrates" method="post" id="adminForm" name="adminForm">
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
				<?php echo JText::_('COM_REFERENCE_SUMMERRATES_YEAR') ;?>
			</th>
			<th width="20%">
				<?php echo JText::_('COM_REFERENCE_SUMMERRATES_MEMBERADULT') ;?>
			</th>
                        
			<th width="20%">
				<?php echo JText::_('COM_REFERENCE_SUMMERRATES_MEMBERCHILD'); ?>
			</th>
			<th width="20%">
				<?php echo JText::_('COM_REFERENCE_SUMMERRATES_GUESTADULT'); ?>
			</th>
			<th width="20%">
				<?php echo JText::_('COM_REFERENCE_SUMMERRATES_GUESTCHILD'); ?>
			</th>
			
                       
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="8">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) :
					$link = JRoute::_('index.php?option=com_reference&task=summerrate.edit&id=' . $row->id);
				?>
					<tr>
						<td><?php echo $this->pagination->getRowOffset($i); ?></td>
						<td>
							<?php echo JHtml::_('grid.id', $i, $row->id); ?>
						</td>
                                                <td>
                                                    <a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_REFERENCE_EDIT_SUMMERRATE'); ?>">
								<?php echo $row->Year; ?>
                                                    </a>
						</td>
						<td>
								<?php echo $row->MemberAdult; ?>
						</td>
                                                
                        <td>
								<?php echo $row->MemberChild; ?>
						</td>
						<td>
								<?php echo $row->GuestAdult; ?>
						</td>
						<td>
								<?php echo $row->GuestChild; ?>
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