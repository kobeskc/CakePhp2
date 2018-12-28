<p><?php echo $this->Html->link("Ajouter une page",array('action'=>'edit'));?> </p>

<table>
<tr>
    <th>Liste de l'article</th>
</tr>
<?php foreach($pages as $k=>$v): $v=current($v); ?>
<tr>
    <td><?php echo json_encode($v);?></td>
    <td>
    <?php echo $this->Html->link("Editer",array('action'=>'edit',$v['id'])); ?>
    <?php echo $this->Html->link("Supprimer",array('action'=>'delete',$v['id'])); ?>
    </td>
    
</tr>
<?php endforeach ?>
</table>