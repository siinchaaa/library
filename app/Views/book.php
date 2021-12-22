<?= $this->extend('layout/main') ?>
<?= $this->section('container') ?>
<!DOCTYPE html>

<style>
.desc, .img{
  padding-top:45px;
}
img{
  max-width:500px;
  max-height:500px;
}
.btn{
  margin-top:50px;
}
h3, .desc{
  color:#ededed
}
</style>

<div class="container">
  <div class="row">
    <div class="col">
    <div class="img ">
    <h3><?=$book->bookname?></h3>
    <img src="<?=base_url('images/'.$book->image)?>">
    </div>
  </div>
    <div class="col">
      <div class="desc"><?=$book->description?></div>
      <?php if (session()->get('isLoggedIn')): ?>
      <a type="submit" class="btn btn-danger" href="../../selected_books/reading/<?=$book->book_id?>">Lasīt</a>
      <?php endif; ?>
    </div>
    
</div>
</div>

<?= $this->endSection() ?>