<?php ob_start();?>

<div class="row">
<?php
 foreach ($Products as $Product) {
    ?>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?=htmlspecialchars($Product->name);?></h5>
        <p class="card-text"><?=htmlspecialchars($Product->descriptions) ?></p>
        <p class="card-text"><?=htmlspecialchars($Product->price) ?></p>
        <a href="index.php?action=prod&id=<?= urlencode($Product->prod_id)?>" class="btn btn-primary">View more </a>
     
      </div>
    </div>
  </div>
  <?php
 }
 ?>
 <button class="btn btn-primary"><a href="Template\form_test.php" style="color:black">Ajout un produit ??</a></button>
</div>


    


<?php $content = ob_get_clean();?>
<?php require('Layout.php'); ?>