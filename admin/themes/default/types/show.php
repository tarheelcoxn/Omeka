<?php head();?>
<a href="<?php echo uri('types/edit/'.$type->id);?>">Edit</a>
<h2>Type: <?php echo $type->name;?></h2>
<p><?php echo $type->description; ?></p>
<?php foreach($type->Metafields as $metafield): ?>
<p><?php echo $metafield->name; ?></p>
<p><?php echo $metafield->description; ?></p>
<?php endforeach; ?>
<?php foot();?>