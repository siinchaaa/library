<?= $this->extend('layout/main')?>
<?= $this->section('container')?>
<!DOCTYPE html>
<head>
<title>SignUp | Library</title>
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
    background-color: #424242;
}



    </style>
</head>
<body>
<div class="forma row justify-content-center" style="padding-top:50px" >
    <form class="form-horzontal col-4"  method="POST" action="\Signup\Register">
        <fieldset>
            <div class="reg" style="text-align:center;">
                <h2>Reģistrācija</h2>
            </div>
            <div class="form-floating mb-3 ">
                <input type="input" class="form-control" id="name" name="name" placeholder="Name" required>
                <label for="name">Vārds</label>
            </div>
            <div class="form-floating mb-3 ">
                <input type="input" class="form-control" id="surname" name="surname" placeholder="Surname"required>
                <label for="surname">Uzvārds</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                <label for="email">E-pasts</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                <label for="floatingPassword">Parole</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm Password" required>
                <label for="password_confirm">Apstiprināt paroli</label>
            </div>
            <div class="form-floating mb-1">
                <button type="submit" class="btn btn-danger">Reģistrēties</button>
            </div>
        </fieldset>
    </form>
</div>
</body>
<?= $this->endSection() ?>