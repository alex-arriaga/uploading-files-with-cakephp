<div class="contenidos form">
<?php //echo $this->Form->create('Contenido', array('enctype'=>"multipart/form-data"));
	echo $this->Form->create('Contenido', array('type'=>'file'));
?>
	<fieldset>
		<legend><?php __('Agregar Contenido'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('categoria_id');
		echo $this->Form->input('estado_id');
		echo $this->Form->file('File.img_url');
		echo $this->Form->input('img_url');
		echo $this->Form->input('enlace_url');
		echo $this->Form->input('video_url');

/*  estos dos campos deben tomar el Id del usuario automatico y estar ocultos.
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');*/

	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Contenidos', true), array('action' => 'index'));?></li>
	</ul>
</div>
