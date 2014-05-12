<div class="estados view">
<h2><?php  __('Estado');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estado['Estado']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estado['Estado']['nombre']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estado', true), array('action' => 'edit', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Estado', true), array('action' => 'delete', $estado['Estado']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contenidos', true), array('controller' => 'contenidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contenido', true), array('controller' => 'contenidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Contenidos');?></h3>
	<?php if (!empty($estado['Contenido'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Titulo'); ?></th>
		<th><?php __('Descripcion'); ?></th>
		<th><?php __('Enlace Url'); ?></th>
		<th><?php __('Img Url'); ?></th>
		<th><?php __('Video Url'); ?></th>
		<th><?php __('Categoria Id'); ?></th>
		<th><?php __('Estado Id'); ?></th>
		<th><?php __('Created By'); ?></th>
		<th><?php __('Modified By'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($estado['Contenido'] as $contenido):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $contenido['id'];?></td>
			<td><?php echo $contenido['titulo'];?></td>
			<td><?php echo $contenido['descripcion'];?></td>
			<td><?php echo $contenido['enlace_url'];?></td>
			<td><?php echo $contenido['img_url'];?></td>
			<td><?php echo $contenido['video_url'];?></td>
			<td><?php echo $contenido['categoria_id'];?></td>
			<td><?php echo $contenido['estado_id'];?></td>
			<td><?php echo $contenido['created_by'];?></td>
			<td><?php echo $contenido['modified_by'];?></td>
			<td><?php echo $contenido['created'];?></td>
			<td><?php echo $contenido['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'contenidos', 'action' => 'view', $contenido['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'contenidos', 'action' => 'edit', $contenido['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'contenidos', 'action' => 'delete', $contenido['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contenido['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contenido', true), array('controller' => 'contenidos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
