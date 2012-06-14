<div class="projects view">
<h2><?php  echo __('Project');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($project['Project']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Client']['name'], array('controller' => 'clients', 'action' => 'view', $project['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($project['Project']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($project['Project']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($project['Project']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($project['Project']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['User']['id'], array('controller' => 'users', 'action' => 'view', $project['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pstatus'); ?></dt>
		<dd>
			<?php echo h($project['Project']['pstatus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($project['Project']['created_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Assignments'), array('controller' => 'project_assignments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Assignment'), array('controller' => 'project_assignments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Project Assignments');?></h3>
	<?php if (!empty($project['ProjectAssignment'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Assigned Date'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['ProjectAssignment'] as $projectAssignment): ?>
		<tr>
			<td><?php echo $projectAssignment['id'];?></td>
			<td><?php echo $projectAssignment['project_id'];?></td>
			<td><?php echo $projectAssignment['user_id'];?></td>
			<td><?php echo $projectAssignment['assigned_date'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'project_assignments', 'action' => 'view', $projectAssignment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'project_assignments', 'action' => 'edit', $projectAssignment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'project_assignments', 'action' => 'delete', $projectAssignment['id']), null, __('Are you sure you want to delete # %s?', $projectAssignment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project Assignment'), array('controller' => 'project_assignments', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
