<div class="contenidos form">
<?php echo $this->Form->create('Contenido');?>
	<fieldset>
		<legend><?php __('Edit Contenido'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('enlace_url');
		echo $this->Form->input('img_url');
		echo $this->Form->input('video_url');
		echo $this->Form->input('categoria_id');
		echo $this->Form->input('estado_id');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Contenido.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Contenido.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contenidos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Categorias', true), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria', true), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>
	</ul>
</div>