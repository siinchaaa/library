<?= $this->extend('layout/main') ?>
<?= $this->section('container') ?>
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

<body>
<body>
<div class="forma row justify-content-center" style="padding-top:50px" >
    <form class="form-horzontal col-4"  method="POST" action="\Signup\Register">
        <fieldset>
            <div class="reg" style="text-align:center;">
                <h2>Mainīt paroli</h2>
            </div>
           
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="old_password" placeholder="Password" required>
                <label for="floatingPassword">Vecā parole</label>
            </div>
			<div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="new_password" placeholder="Password" required>
                <label for="floatingPassword">Jaunā parole</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm Password" required>
                <label for="password_confirm">Apstiprināt paroli</label>
            </div>
            <div class="form-floating mb-1">
                <button type="submit" class="btn btn-danger">Mainīt</button>
            </div>
        </fieldset>
    </form>
</div>
</body>
</html>

<?= $this->endSection() ?>