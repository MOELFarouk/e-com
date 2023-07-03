<?php ob_start() ?>
<!--banner area-->
<div class="card mb-6  border-0" id="banner">
    <img class="card-img" src="img/banerHP 2.png" alt="" id="banner-img">
</div>

<!--end of banner area-->
<!-- Info Area -->
<div class="card text-center border-0 mt-5" style="padding: 15px;">
    <h1 class="card-title" style="font-weight: 300;"> Nos qualiter </h1>
    <p>
        Voila nos point fort et pourquoi nous choisire
    </p>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 justify-content-center">
            <div class="card text-center border-0">

                <div class="card-body justify-content-center">
                    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                    <lord-icon src="https://cdn.lordicon.com/mjmrmyzg.json" trigger="hover"
                        colors="primary:#eee966,secondary:#e83a30" style="width:250px;height:250px">
                    </lord-icon>
                    <h1 class="card-title">
                        Service Client
                    </h1>
                    <p class="card-text align-content-center">
                        Service client active a tout moment et de qualiter.

                    </p>

                </div>
            </div>

        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 justify-content-center">
            <div class="card text-center border-0">
                <div class="card-body justify-content-center">
                    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                    <lord-icon src="https://cdn.lordicon.com/kxoxiwrf.json" trigger="hover"
                        colors="primary:#eee966,secondary:#e83a30" style="width:250px;height:250px">
                    </lord-icon>
                    <h1 class="card-title">
                        Livraison a Domicile
                    </h1>
                    <p class="card-text align-content-center">
                        Tout produit livrer gratuitement a domicile.

                    </p>

                </div>
            </div>

        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 justify-content-center">
            <div class="card text-center border-0">
                <div class="card-body justify-content-center">
                    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                    <lord-icon src="https://cdn.lordicon.com/ivhjpjsw.json" trigger="hover"
                        colors="primary:#eee966,secondary:#e83a30" style="width:250px;height:250px">
                    </lord-icon>
                    <h1 class="card-title">
                        Produit neuf

                    </h1>
                    <p class="card-text align-content-center">
                        Produit neuf de qualiter avec des prix incroyale.

                    </p>

                </div>
            </div>

        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 justify-content-center">
            <div class="card text-center border-0">
                <div class="card-body justify-content-center">
                    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                    <lord-icon src="https://cdn.lordicon.com/lpddubrl.json" trigger="hover"
                        colors="primary:#eee966,secondary:#e83a30" style="width:250px;height:250px">
                    </lord-icon>
                    <h1 class="card-title">
                        E-com experience
                    </h1>
                    <p class="card-text align-content-center">
                        Tout se service avec la meilleur experience de navigation
                    </p>

                </div>
            </div>

        </div>

    </div>
</div>
<!-- End info area -->

<!-- Product area -->
<div class="card text-center border-0" style="padding: 15px;">
    <h1 class="card-title" style="font-weight: 300;"> Produit recents </h1>
    <p class="card-text wt-3">
        Voici nos dernier produit a joure
    </p>
</div>
<div class="container">
    <div class="row">
        <?php
        foreach ($Products as $Product) {
            ?>
            <div class="col-lg-4 col-md-12 col-sm-12 ">
                <div class="card  w-100" style="overflow: hidden;">
                    <img class="card-img-top_css" src="img/pc product/Best Gaming Monitors Under $300 (Top 10) (1).png"
                        alt="">
                    <div class="card-body ">
                        <h1 class="font-weight-normal_css ">
                            <?= htmlspecialchars($Product->nom) ?>
                        </h1>
                        <p class="card-text_css">
                            <?= htmlspecialchars($Product->descriptions) ?>
                        </p>
                        <p class="card-text_css font-weight-large">
                            <?= htmlspecialchars($Product->prix) ?>$
                        </p>
                        <button class="btn-primary btn-lg btn-block" style="padding: 10px;"> <a
                                href="index.php?action=prod&id=<?= urlencode($Product->prod_id) ?>"
                                style="color: white;">View more </a></button>
                        <button class="btn-primary btn-lg btn-block" style="padding: 10px;"> <a href=""
                                class="font-weight-normal" style="color: white;"> You ritch Buy it</a> </button>


                    </div>

                </div>
            </div>
        <?php } ?>

    </div>
</div>
<!--End Product area -->
<!--Sponsore area -->
<div class="card text-center border-0" style="padding: 15px;">
    <h1 class="card-title" style="font-weight: 300;"> Sponsore </h1>
    <p class="card-text mt-3">
        Voici les marques qui nous soutienes et fais confience a notre qualiter de service
    </p>
</div>
<div class="container">
    <div class="row">
        <div class="col" id="logos">
            <img class="sponsor-img" src="img\sponsor\01-nvidia-logo-horiz-500x200-2c50-p_2x-removebg-preview.png"
                alt="">
            <img class="sponsor-img" src="img\sponsor\Dell_logo_2016.svg.png" alt="">
            <img class="sponsor-img" src="img\sponsor\Intel-logo.png" alt="">
            <img class="sponsor-img" src="img\sponsor\MSI-Logo.png" alt="">
            <img class="sponsor-img" src="img\sponsor\png-transparent-asus-rog-hd-logo-thumbnail-removebg-preview.png"
                alt="">
        </div>

    </div>


</div>

<?php $content = ob_get_clean() ?>
<?php require('Layout.php') ?>