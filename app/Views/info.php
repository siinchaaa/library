<?= $this->extend('layout/main') ?>
<?= $this->section('container') ?>

<!DOCTYPE html>
<head>
    <style>
       .info{
          margin-top:50px;
          color:#ededed;
          font-size:20px;
       }
       #profile{
          color:#dc3545;
       }
     
       a{
         color:#ededed;
         text-decoration:none;
       }
       a:hover{
         color:#dc3545;

       }
    </style>
</head>
<?= $this->include('layout/profile_info') ?>
<?= $this->include('layout/footer') ?>
<div class="info">
                <p>Vārds: <?php echo session()->get('name')?></p> 
                <p>Uzvārds: <?php echo session()->get('surname')?></p> 
                <p>E-pasts: <?php echo session()->get('email')?></p>
                <a href="http://localhost:8080/forms/change_password">Mainīt paroli</a>
    </div>
<?= $this->endSection() ?>