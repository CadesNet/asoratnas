<div class="imagesRecipes index">
	<h2><?php echo __('Images Recipes'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo ('filename',array('label'=>'Nombre archivo')); ?></th>
			<th><?php echo ('dir',array('label'=>'Direccion')); ?></th>
			<th><?php echo ('description',array('label'=>'Descripcion')); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($imagesRecipes as $imagesRecipe): ?>
	<tr>
		<td><?php echo $this->Html->image('images_recipe/filename/'.h($imagesRecipe['ImagesRecipe']['filename'])); ?>&nbsp;</td>
		<td><?php echo h($imagesRecipe['ImagesRecipe']['dir']); ?>&nbsp;</td>
		<td><?php echo h($imagesRecipe['ImagesRecipe']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $imagesRecipe['ImagesRecipe']['id'],$id_receta),array('class' => 'ok btn btn-info btn-large')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $imagesRecipe['ImagesRecipe']['id'],$id_receta),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $imagesRecipe['ImagesRecipe']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New imagen Recipe'), array('action' => 'add',$id_receta),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>