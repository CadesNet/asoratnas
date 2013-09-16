<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Por favor ingrese su usuario y clave'); ?></legend>
        <?php echo $this->Form->input('username',array('label'=>'Nombre de usuario'));
        echo $this->Form->input('password',array('label'=>'Clave'));
    ?>
    </fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Ingresar&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>