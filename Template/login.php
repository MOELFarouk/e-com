<?php ob_start();?>

<div class="container " style=" height: 500px;">
        <div class="row justify-content-center" style="margin-top: 60px;">
            <div class="col-lg-6 col-sm-12 col-md-12" id="col cont">
                <div class="card" style="margin-top: 100px">
                    <div class="card-body">

                        <form action="index.php?action=" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="text" name="Email" class="form-control w-100" placeholder="Email">

                                <br>
                                <label for="password ">password</label>
                                <input type="text " name="password " class="form-control" placeholder="password ">
                                <br>
                                <button type="submit" class="btn-primary btn-lg btn-block text-light">Envoyer</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

<?php $content = ob_get_clean();?>
<?php require('Layout.php');?>