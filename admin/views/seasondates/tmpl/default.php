<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_aps
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined ( '_JEXEC' ) or die ( 'Restricted Access' );
?>
<form action="index.php?option=com_reference&view=seasondates"
	method="post" id="adminForm" name="adminForm">
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
				<?php echo JText::_('COM_REFERENCE_WINTERRATES_YEAR') ;?>
			</th>
				<th width="30%">
				<?php echo JText::_('COM_REFERENCE_SEASONDATE_SEASONSTART_LABEL') ;?>
			</th>

				<th width="30%">
				<?php echo JText::_('COM_REFERENCE_SEASONDATE_SEASONEND_LABEL'); ?>
			</th>



			</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="5">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
				<?php
				
foreach ( $this->items as $i => $row ) :
					$link = JRoute::_ ( 'index.php?option=com_reference&task=seasondate.edit&id=' . $row->id );
					?>
					<tr>
				<td><?php echo $this->pagination->getRowOffset($i); ?></td>
				<td>
							<?php echo JHtml::_('grid.id', $i, $row->id); ?>
						</td>
				<td><a href="<?php echo $link; ?>"
					title="<?php echo JText::_('COM_REFERENCE_SEASONDATE_EDIT'); ?>">
								<?php echo $row->Year; ?>
                                                    </a></td>
				<td>
								<?php echo $row->seasonStart; ?>
						</td>

				<td>
								<?php echo $row->seasonEnd; ?>
						</td>




			</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
	<input type="hidden" name="task" value="" /> <input type="hidden"
		name="boxchecked" value="0" />
	<?php echo JHtml::_('form.token'); ?>
</div>
</form>