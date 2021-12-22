<?= $this->extend('layout/main') ?>
<?= $this->section('container') ?>

<!DOCTYPE html>

<style>
       .info{
          margin-top:50px;
       }
       #history{
          color:#dc3545;
       }
       .card{
      max-height:70px;
   }

   .date {
      float:right;
   }
     .date, .bookname{
        display:inline;
     }
</style>
<?= $this->include('layout/profile_info') ?>
<?= $this->include('layout/footer') ?>
<body>

<?php foreach ($data->getResult() as $book) {?>   
                <div class="card mb-1">
                    <div class="card-body ">

                        <h6 class="bookname "><?=$book->bookname?></h6>
                     <span class="date"><?=$book->removed_at?></span>
                    </div>
                </div>
       
       
<?php } ?>

</body> 



<?= $this->endSection() ?>