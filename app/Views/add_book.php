<?= $this->extend('layout/main') ?>
<?= $this->section('container') ?>
<head>
<style>
        h3{
    text-align: center;
}
form{
    padding: 10px;
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
    <form class="form-horzontal col-4"  method="POST" action="\Add\addBook" enctype="multipart/form-data">
        <fieldset>
            <div class="addbook" style="text-align:center;">
               
            </div>
            <div class="form-floating mb-3 ">
                <input type="input" class="form-control" id="bookname" name="bookname" placeholder="bookname" required>
                <label for="bookname">Grāmatas nosaukums</label>
            </div>
            <div class="form-floating mb-3 ">
                <input type="input" class="form-control" id="author" name="author" placeholder="author"required>
                <label for="author">Autors</label>
            </div>
          
            <div class="form-floating mb-3">
                 <textarea class="form-control" placeholder="description" name="description" id="description" style="height: 100px" required></textarea>
                 <label for="description">Apraksts</label>
            </div>
            <div class=" mb-3">
      <label class="form-label" for="exampleFormControlContinent">Kategorija</label>
      <select class="form-select" name='category' id="inputGroupSelect01" required>
        <option value="1">kids</option>
        <option value="2">teens</option>
        <option value="3">adults</option>
       
      </select>
    </div>
            
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="image" name="image" required>
                <label class="image" for="image"></label>
            </div>
            <div class="form-floating mb-1">
                <button type="submit" class="btn btn-danger">Pievienot</button>
            </div>
        </fieldset>
    </form>
</div>
</body>
           
<?= $this->endSection() ?>