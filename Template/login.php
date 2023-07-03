<?php


 ob_start();?>

<div class="container" style="margin-bottom: 100px;">
        <div class="row justify-content-center" style="margin-top: 60px;">
            <div class="col-lg-4 col-sm-8 col-md-8" id="col cont">
                <div class="card">
                    <div class="card-body">

                        <form action="index.php?action=" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="text" name="Email" class="form-control w-100" placeholder="Email">

                                <br>
                                <label for="password ">password</label>
                                <input type="text " name="password " class="form-control" placeholder="password ">
                                <br>
                                <button type="submit" class="btn-primary btn-lg btn-block">Envoyer</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

<?php $content = ob_get_clean();?>
<?php require('Layout.php');?>