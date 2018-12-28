<p>Editer une page</p>
<?php echo $this->Form->create('Post'); ?>
    <?php echo $this->Form->input('name',array('label'=>'Titre')); ?>
    <?php echo $this->Form->input('content',array('label'=>'Contenu')); ?>
    <?php echo $this->Form->input('id'); ?>
    <?php echo $this->Form->input('type',array('value'=>'page','type'=>'hidden')); ?>
<?php echo $this->Form->end('Envoyer');?>