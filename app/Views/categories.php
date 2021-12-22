<?= $this->extend('layout/main') ?>
<?= $this->section('container') ?>

<style>

.card-title{
 
    color:black;
    
}
    a{
        text-decoration:none;
    }
    .card{
        width: 10rem;
        float:left;
        margin:.25rem;
        padding: 0.5rem;
        min-height: 20rem;
    }

    .container{
        margin-top:40px;
    }
</style>
<title>Kategorijas </title>

<?= $this->include('layout/footer') ?>

<?php foreach ($categories->getResult() as $book) {?>   
<div class = "container"> 
    <a href="/book/show/<?=$book->book_id?>">
        <div class="card mh-55 ">
                <img src="<?=base_url('images/'.$book->image)?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$book->bookname?> </h5>
                </div>
        </div>
    </a>
</div> 
<?php } ?>    
<?= $this->endSection() ?>