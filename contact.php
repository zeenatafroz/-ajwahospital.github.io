<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-fluid"> 
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
         <a href="index.php"><img src="gallery/ajwahosp.png" alt="" height="100px;" width="30%" class="img-responsive ml-auto"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> 
        </div>
        <div class="col-lg-6 col-md-6 col-12 text-right social">
         <a class="facebook" href="#" target="_blank"><i class="fa fa-2x fa-facebook"></i></a>
         <a class="twitter" href="#" target="_blank"><i class="fa fa-2x fa-twitter"></i></a>
         <a class="linkedin" href="#" target="_blank"><i class="fa fa-2x fa-linkedin"></i></a>
        </div>
    </div>
  </div>
     <nav class="navbar navbar-expand-lg navbar-light bg-info container-fluid">
  <!-- <a class="navbar-brand text-white" href="index.php"><h2>AJWAHOSPITAL</h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <div class="collapse navbar-collapse container" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="index.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="gallery.php">GALLERY</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="services.php">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="specialities.php">SPECIALITIES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="contact.php">CONTACT US</a>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
 <section class="my-2">
      <div class="py-2">
       <h4 class="text-center">Contact Us</h4>
      </div>
       <hr>
      <div class="w-50 m-auto container">
       <form action="contactinfo.php" method="post">
        <div class="form-group">
          <label for="username">Your name :</label><br/>
          <input type="text" name="username" id="username" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label for="username">Email :</label><br/>
          <input type="text" name="password" id="password" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label for="username">Your message :</label><br/>
          <textarea class="form-control" id="message" placeholder="Enter Your Message"></textarea>
        <br/><br/>
        </div>
        <button type="submit" id="contact-btn" class="btn btn-primary">Send Email</button>
        </div>
      </form>
    </div>
  </section>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>