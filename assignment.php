
<!DOCTYPE html>

<html>
<title>Sharva</title>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  </head>
  <body>
  
    <section id="header">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-image: linear-gradient(to top,#33ccff,#e6f9ff)";>
        <a class="navbar-brand" href="assignment.php"><img class="rounded" src="logo1.png" alt="logo" height="50px" width="45px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto pr-4" id="con">
            <li class="nav-item  pr-4">
              <a class="nav-link font-weight-bold" href="login.php" id="text1">Browse Fundarise</a>
            </li>
            <li class="nav-item  pr-4">
              <a class="nav-link font-weight-bold" href="login.php" data-toggle="modal" data-target="#myModal" id="text2">Fundarise For</a>
            </li>
          </ul>
            <ul class="navbar-nav ml-auto" id="con">
               <li class="nav-link pr-4">
              <a href="login.php" class="btn btn-primary btn-lg active font-weight-bold" role="button" aria-pressed="true">login</a>
          </li></ul>
        </div>
      </nav>
    </section>
    <section id="carousel1">
    
      <div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel" data-interval="2500" data-pause="hover">
        
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="coursel images/coursel2.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="coursel images/corsel3.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="coursel images/coursel3.png" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="coursel images/coursel4.png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        
        
      </div>

    </section>
    
    <div class="row align-items-center text-center ">
      <div class="col">
        <div class="card border-primary rounded" style="width: 18rem;">
        <img class="card-img-top" src="card/card2.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Needs Funds To Pay For Disaster</h5>
          <p class="card-text font-weight-bold">₹150000</p>
          <a href="login.php"><button type="button"  class="btn btn-primary btn-lg">Donate</button></a>
          
        </div>
      </div>
    </div>
      <div class="col">
        <div class="card border-primary rounded" style="width: 18rem;">
          <img class="card-img-top" src="card/card3.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Needs Funds To Pay For Disaster</h5>
            <p class="card-text font-weight-bold">₹150000</p>
            <a href="login.php"><button type="button"  class="btn btn-primary btn-lg">Donate</button></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-primary rounded" style="width: 18rem;">
          <img class="card-img-top" src="card/card2.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Needs Funds To Pay For Disaster</h5>
            <p class="card-text font-weight-bold">₹150000</p>
            <a href="login.php"><button type="button"  class="btn btn-primary btn-lg">Donate</button></a>
          </div>
        </div>
      </div>
      <div class="col"><div class="card border-primary rounded" style="width: 18rem;">
        <img class="card-img-top" src="card/card3.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Needs Funds To Pay For Disaster</h5>
          <p class="card-text font-weight-bold">₹150000</p>
          <a href="login.php"><button type="button"  class="btn btn-primary btn-lg">Donate</button></a>
        </div>
      </div>
    </div>
    </div>
  
    </div>
    
        
        </section>

    <section></section>  
  </body>
</html>