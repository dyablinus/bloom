<h3>Your file was successfully uploaded!</h3>

<ul>
<?php foreach ($result->result() as $rows) :?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>

<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>
