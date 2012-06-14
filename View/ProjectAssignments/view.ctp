<div class="projectAssignments view">
<h2><?php  echo __('Project Assignment');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($projectAssignment['ProjectAssignment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projectAssignment['Project']['name'], array('controller' => 'projects', 'action' => 'view', $projectAssignment['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projectAssignment['User']['id'], array('controller' => 'users', 'action' => 'view', $projectAssignment['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assigned Date'); ?></dt>
		<dd>
			<?php echo h($projectAssignment['ProjectAssignment']['assigned_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project Assignment'), array('action' => 'edit', $projectAssignment['ProjectAssignment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project Assignment'), array('action' => 'delete', $projectAssignment['ProjectAssignment']['id']), null, __('Are you sure you want to delete # %s?', $projectAssignment['ProjectAssignment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Assignments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Assignment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
