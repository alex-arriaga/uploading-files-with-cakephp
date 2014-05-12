<div class="categorias form">
<?php echo $this->Form->create('Categoria');?>
	<fieldset>
		<legend><?php __('Add Categoria'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categorias', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Contenidos', true), array('controller' => 'contenidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contenido', true), array('controller' => 'contenidos', 'action' => 'add')); ?> </li>
	</ul>
</div>