<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
   <style>
       
       .vr {
            color: #dc3545;
            border: 0.05em solid currentColor;
            height: 1.5em;
            margin-top: 0.5em;
            margin-right: 0.6em;
        }
        
        body{
            background-color:#424242;
        }
        #opt:hover {
        color:#dc3545;
      }
    </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"  >
   <div class="container-fluid ">
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent" >
            <ul class="navbar-nav mb-2 mb-lg-0 container-fluid ">
                <li class="nav-item"  >
                    <a class=" nav-link me-2" href="/home" >Sākums</a>
                </li>
                <li class="nav-item dropdown me-auto">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategorijas
                        </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php  {?>                         
                        <li><a class="dropdown-item" href="/categories/show/kids">Bērnu</a></li>
                        <li><a class="dropdown-item" href="/categories/show/teens">Pusaudžu</a></li>
                        <li><a class="dropdown-item" href="/categories/show/adults">Pieaugušo</a></li>
                    <?php } ?>
                    </ul>
                </li>
                <?php if (session()->get('isLoggedIn')): ?>
                <li class="nav-item  "  >
                    <a class=" nav-link me-2 " href="/Add" >Pievienot grāmatu</a>
                </li>
                <div class="vr d-none d-sm-block"></div>

                <?php endif; ?>
                
                   
               
                <?php if (session()->get('isLoggedIn')): ?>
                            <li class="nav-item justify-content-end">
                            <a class="nav-link me-2" href="/ProfileController">Mans profils</a>
                            </li> 
                            <div class="vr d-none d-sm-block"></div>
                            <li class="nav-item justify-content-end" >
                                <a class=" nav-link me-2" id="opt" href="/SignOut" >Iziet</a>
                            </li>
                            
                     <?php else: ?>
                    
                        <li class=" nav-item justify-content-end">
                            <a class=" nav-link me-2" id="opt" href="/SignUp">Reģistrēties</a>
                         </li>
                         <div class="vr d-none d-sm-block "></div>
                        <li class=" nav-item justify-content-end">
                            <a class=" nav-link me-2" id="opt" href="/SignIn">Ienākt</a>
                        </li>
                     
                <?php endif; ?>

            </ul>
        </div>
    </div>   
</nav>
    <div class="container" style="align-center;">
       
            <?= $this->renderSection('container') ?>
       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <?= $this->renderSection('scripts') ?>
</body>

</html>