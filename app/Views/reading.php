<?= $this->extend('layout/main') ?>
<?= $this->section('container') ?>

<!DOCTYPE html>
<head>
    <style>
       .info{
          margin-top:50px;
       }
       #reading{
          color:#dc3545;
       }

  .btn{
       float:right;
      
       
   }
   .card{
      max-height:70px;
   }

a{
   color:black;
   text-decoration:none;
}
a:hover{
   color:black;
}
.card-body{
   display:inline-block;
}
    </style>
</head>
<?= $this->include('layout/profile_info') ?>
<?= $this->include('layout/footer') ?>

<body>

<?php foreach ($data->getResult() as $book) {?>   
  
                <div class="card mb-1">
                    <div class="card-body">
                        <a href="/book/show/<?=$book->book_id?>">
                           <h6 class="bookname"><?=$book->bookname?></a><button type="button" onclick="delete_data(<?=$book->id ?>)" class="btn btn-danger btn-sm">Noņemt</button> 
                        </h6> 
                    </div>
                </div>

<?php } ?>

</body>  
<script>

   function delete_data(id){
      if(confirm("Vai tiešām vēlaties noņemt šo grāmatu?")){
         window.location.href="<?php echo base_url(); ?>/selected_books/delete/"+id;
      }
      return false;
   }
</script>
<?= $this->endSection() ?>