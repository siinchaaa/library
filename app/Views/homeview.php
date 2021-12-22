<?= $this->extend('layout/main') ?>
<?= $this->section('container') ?>
<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> Sākums | Library </title>
   
</head>

<?= $this->include('layout/footer') ?>
    
<style>
    .carousel-inner 
    {
        padding: 2em;
    }

    .card 
    {
        min-height: 100%;
        margin: 1 0.5em;
        box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
        border: none;
        transition:.2s;
    }
    

    .carousel-control-prev,
    .carousel-control-next 
    {
        background-color: #e1e1e1;
        width: 6vh;
        height: 6vh;
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
    }
    @media (min-width: 768px) 
    {
        .carousel-item 
        {
            margin-right: 0;
            flex: 0 0 12%; /* This is where you change the amount of items you have at any one time in the carousel (20% * 5 = 100%, so 5 items are displayed at a time right now) */
            display: block;
        }
        .carousel-inner 
        {
            display: flex;
        }
    }

    .card .img-wrapper 
    {
        max-width: 100%;
        height: 12em; /* Changes size of the image */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .img-wrapper
    {
        max-width: 100%;
        height: 10rem; 
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card img 
    {
        max-height: 100%;
    }
    
    @media (max-width: 767px) 
    {
        .card .img-wrapper 
        {
            height: 17em;
        }
    }
    .card-title{
       font-size: 1rem;
       color:black;
       text-decoration: none;
    }
  
  a{
    text-decoration: none;
  }
  body{
    background-image:url("https://www.curiousegg.com/wp-content/uploads/2016/05/Bookshelf-Wallpaper-Black-main.jpg");
    }
   
    .card:hover{
        transform: scale(1.2); 
    }
</style>

<body>
 


    <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
        <div class="carousel-inner 1">
        <?php foreach ($data->getResult() as $book) {?>   
        <a href="/book/show/<?=$book->book_id?>" class="carousel-item active">
                <div class="card">
                    <div class="card-body">
                        <div class="img-wrapper"><img src="<?=base_url('images/'.$book->image)?>" class="d-block w-100" alt="..."> </div>
                        <h5 class="card-title"><?=$book->bookname?> </h5>

                    </div>
                </div>
        </a>
            <?php } ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div id="bookCarousel" class="carousel" data-bs-ride="carousel">
        <div class="carousel-inner 2">
        <?php foreach ($data->getResult() as $book) {?> 
            <a href="/book/show/<?=$book->book_id?>" class="carousel-item active">
                <div class="card">
                    <div class="card-body">
                        <div class="img-wrapper"><img src="<?=base_url('images/'.$book->image)?>" class="d-block w-100" alt="..."> </div>
                        <h5 class="card-title"><?=$book->bookname?></h5>
               
                    </div>
                </div>
            </a>   
            <?php } ?> 
            </div>
            
        <button class="carousel-control-prev" type="button" data-bs-target="#bookCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#bookCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    var multipleCardCarousel = document.querySelector("#carouselExampleControls");

    if (window.matchMedia("(min-width: 768px)").matches) {
        var carousel = new bootstrap.Carousel(multipleCardCarousel, {
            interval: false,
        });
        var carouselWidth = $('.carousel-inner')[0].scrollWidth;
        console.log(carouselWidth);
        var cardWidth = $(multipleCardCarousel).find(".carousel-item").width();
        var scrollPosition = 0;
        var itemCount = $(multipleCardCarousel).find(".carousel-item").length;

        $("#carouselExampleControls .carousel-control-next").on("click", function () {
            if (scrollPosition < carouselWidth - cardWidth * itemCount)
            {
                scrollPosition += cardWidth; // Increase this (add *2 or higher multipliers after cardWidth) to scroll through multiple books on click
                $("#carouselExampleControls .carousel-inner").animate(
                { scrollLeft: scrollPosition },
                300
                );
            }
        });

        $("#carouselExampleControls .carousel-control-prev").on("click", function () {
            if (scrollPosition > 0) 
            {
                scrollPosition -= cardWidth; // Increase this (add *2 or higher multipliers after cardWidth) to scroll through multiple books on click
                $("#carouselExampleControls .carousel-inner").animate(
                    { scrollLeft: scrollPosition },
                    300
                );
            }
        });
    } 
    else 
    {
        $(multipleCardCarousel).addClass("slide");
    }

    var multipleBookCarousel = document.querySelector("#bookCarousel");

    if (window.matchMedia("(min-width: 768px)").matches) {
        var carousel = new bootstrap.Carousel(multipleBookCarousel, {
            interval: false,
        });
        var carouselWidth2 = $('.carousel-inner')[1].scrollWidth;
        var cardWidth2 = $(multipleBookCarousel).find(".carousel-item").width();
        var scrollPosition2 = 0;
        var itemCount2 = $(multipleBookCarousel).find(".carousel-item").length;

        $("#bookCarousel .carousel-control-next").on("click", function () {
            if (scrollPosition2 < carouselWidth2 - cardWidth2 * itemCount2)
            {
                scrollPosition2 += cardWidth2; // Increase this (add *2 or higher multipliers after cardWidth2) to scroll through multiple books on click
                $("#bookCarousel .carousel-inner").animate(
                { scrollLeft: scrollPosition2 },
                300
                );
            }
        });

        $("#bookCarousel .carousel-control-prev").on("click", function () {
            if (scrollPosition2 > 0) 
            {
                scrollPosition2 -= cardWidth2; // Increase this (add *2 or higher multipliers after cardWidth2) to scroll through multiple books on click
                $("#bookCarousel .carousel-inner").animate(
                    { scrollLeft: scrollPosition2 },
                    300
                );
            }
        });
    } 
    else 
    {
        $(multipleBookCarousel).addClass("slide");
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</html>
<?= $this->endSection() ?>