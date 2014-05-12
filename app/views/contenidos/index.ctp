<div class="contenidos index">
	<h2><?php __('Contenidos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('titulo');?></th>
			<th><?php echo $this->Paginator->sort('descripcion');?></th>
			<th><?php echo $this->Paginator->sort('enlace_url');?></th>
			<th><?php echo __('Imagen');// echo $this->Paginator->sort('img_url');?></th>
<!--			<th><?php echo $this->Paginator->sort('video_url');?></th>
			<th><?php echo $this->Paginator->sort('categoria_id');?></th>
			<th><?php echo $this->Paginator->sort('estado_id');?></th>
			<th><?php echo $this->Paginator->sort('created_by');?></th>
			<th><?php echo $this->Paginator->sort('modified_by');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>-->
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($contenidos as $contenido):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $contenido['Contenido']['id']; ?>&nbsp;</td>
		<td><?php echo $contenido['Contenido']['titulo']; ?>&nbsp;</td>
		<td><?php echo $contenido['Contenido']['descripcion']; ?>&nbsp;</td>
		<td><?php echo $contenido['Contenido']['enlace_url']; ?>&nbsp;</td>
		<td><?php echo $this->Html->image($contenido['Contenido']['img_url']); ?>&nbsp;</td>
<!--		<td><?php echo $contenido['Contenido']['video_url']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contenido['Categoria']['nombre'], array('controller' => 'categorias', 'action' => 'view', $contenido['Categoria']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($contenido['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $contenido['Estado']['id'])); ?>
		</td>
		<td><?php echo $contenido['Contenido']['created_by']; ?>&nbsp;</td>
		<td><?php echo $contenido['Contenido']['modified_by']; ?>&nbsp;</td>
		<td><?php echo $contenido['Contenido']['created']; ?>&nbsp;</td>
		<td><?php echo $contenido['Contenido']['modified']; ?>&nbsp;</td>-->
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $contenido['Contenido']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $contenido['Contenido']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $contenido['Contenido']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contenido['Contenido']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Contenido', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias', true), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria', true), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>
	</ul>
</div>
