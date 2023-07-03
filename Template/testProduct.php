<?php


 ob_start();?>
<div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-6  ">
                <div class="card border-0" style="overflow: hidden;">
                    <img class="card-img-top_css" src="img/pc product/ASUS ROG Zephyrus S.png" alt="">
                    <div class="card-body">
                        <h5 class="font-weight-normal"><?=htmlspecialchars($Product->nom)?></h5>
                        <p class="card-text"><?=htmlspecialchars($Product->descriptions)?></p>
                        <p class="card-text"><?=htmlspecialchars($Product->prix)?>$</p>


                        <button class="btn-primary btn-lg btn-block" style="padding: 10px;">  <a href="" class="font-weight-normal" style="color: white;"> </a>You ritch Buy it </button>


                    </div>

                </div>
            </div>
        </div>
</div>

<?php $content = ob_get_clean();?>
<?php require('Layout.php');?>