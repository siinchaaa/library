<?= $this->extend('layout/main') ?>
<?= $this->section('container') ?>
<!DOCTYPE html>
<head>
    <title>SignIn | Library</title>
    <style>
        h3{
    text-align: center;
}
form{
    padding: 20px;
    background-color: white;
    border-radius: 6px;
}
.forma{
    padding-top: 55px;  
}

body{
    background-color:#424242;
}


</style>
</head>
<body>
<div class="forma row justify-content-center" style="padding-top:50px" >
    <form class="form-horzontal col-4"  method="POST" action="\Signin\login">
            <div class="reg" style="text-align:center;">
                <h2>Ienākt</h2>
            </div>

            <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif;?>

            <div class="form-floating mb-3 ">
                <input type="email" class="form-control" id="email" name="email" placeholder="email">
                <label for="email">E-pasts</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Parole</label>
            </div>
            <div class="form-floating mb-1">
                <button type="submit" class="btn btn-danger">Ienākt</button>
            </div>
           
    </form>
</div>
</body>
<?= $this->endSection() ?>