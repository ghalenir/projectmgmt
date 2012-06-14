<div class="projects form">
<?php echo $this->Form->create('Project');?>
	<fieldset>
		<legend><?php echo __('Add Project'); ?></legend>
	<?php
		echo $this->Form->input('client_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('user_id');
		echo $this->Form->input('pstatus');
		echo $this->Form->input('created_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Assignments'), array('controller' => 'project_assignments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Assignment'), array('controller' => 'project_assignments', 'action' => 'add')); ?> </li>
	</ul>
</div>
