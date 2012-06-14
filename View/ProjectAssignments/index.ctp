<div class="projectAssignments index">
	<h2><?php echo __('Project Assignments');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('project_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('assigned_date');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($projectAssignments as $projectAssignment): ?>
	<tr>
		<td><?php echo h($projectAssignment['ProjectAssignment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($projectAssignment['Project']['name'], array('controller' => 'projects', 'action' => 'view', $projectAssignment['Project']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($projectAssignment['User']['first_name'].' '. $projectAssignment['User']['last_name'], array('controller' => 'users', 'action' => 'view', $projectAssignment['User']['id'])); ?>
		</td>
		<td><?php echo h($projectAssignment['ProjectAssignment']['assigned_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $projectAssignment['ProjectAssignment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $projectAssignment['ProjectAssignment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $projectAssignment['ProjectAssignment']['id']), null, __('Are you sure you want to delete # %s?', $projectAssignment['ProjectAssignment']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Project Assignment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
