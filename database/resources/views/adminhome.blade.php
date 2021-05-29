<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LIBRARY RENTAL APP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body background="https://images.unsplash.com/photo-1553941884-f8947df6e0ba?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1564&q=80" style="height:100%; background-position: center; background-repeat: no-repeat; background-size: cover;" >

<!--         
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">TODAYS AVAILABLE BOOKS</h5>
      <span class="text-muted">JAWS <br>
                                JOKER <br>
                                THE PRIEST<br>
                                GODZILLA <br>
                                NO TIME TO DIE </span>
    </div>
  </div> -->
  
  <nav class="navbar-dark navbar-dark bg-dark">
  Welcome <?php if(isset($name)) echo $name;?>
    <div class="container-fluid">
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
    </div>
  </nav>


<nav class="navbar navbar-light" style="background-color: #ffffff;" style="color: rgb(252, 247, 247);">
    <!-- Navbar content -->
    <div class="container-fluid" style="background-color: #0a0a0a;">
      <a class="navbar-brand" href="#"> Paging All Readers! <marquee><h1> <font style="font-family: 'Times New Roman', Times, serif ;color: rgb(253, 250, 250);"><b>A New Chapter Library Rental Service</b></font></h1></marquee></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span style="background-color: #0df3f3;" class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
           
            <a class="nav-link active" aria-current="page" href="adminhome" style="font-size: 20px;color: rgb(247, 252, 247);">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Category" style="font-size: 20px;color: rgb(247, 252, 247);">Add Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Addbook" style="font-size: 20px;color: rgb(247, 252, 247);">Add Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="UsersReport" style="font-size: 20px;color: rgb(247, 252, 247);">User Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewallbooking" style="font-size: 20px;color: rgb(247, 252, 247);">Book Issued Details</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="/" style="font-size: 20px;color: rgb(247, 252, 247);">Log Out</a>
          </li>
          
        </ul>
        
      </div>
    </div>
</nav>


<br>
<br>
<div class="container">
    <div class="row">
      <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 ">

<centre style="width:1000%">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" style="width:1000%">
    <div class="carousel-item active">
     
    <nav class="navbar navbar-rgb(7, 7, 7);" >
            <div class="container-fluid">
              <span class="navbar-text">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-sm-5 col-lg-5 col-md-5 col-xl-12 col-xxl-12" >
                            <div class="item active" id="video">
                                <video id="video" muted autoplay="autoplay" loop="loop" preload="auto">
                                  <source src="https://ak.picdn.net/shutterstock/videos/1057332370/preview/stock-footage-letters-flying-out-of-an-open-book.webm"></source>
                                </video>
                              </div>
                    </div>
                </div>
              </span>
            </div>
          </nav>

    </div>
    <div class="carousel-item">
      
    <nav class="navbar navbar-rgb(7, 7, 7);" >
            <div class="container-fluid">
              <span class="navbar-text">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-sm-5 col-lg-5 col-md-5 col-xl-12 col-xxl-12" >
                            <div class="item active" id="video">
                                <video id="video" muted autoplay="autoplay" loop="loop" preload="auto">
                                  <source src="https://media.istockphoto.com/videos/woman-hand-finding-a-book-on-bookshelf-in-the-library-video-id690241152"></source>
                                </video>
                              </div>
                    </div>
                </div>
              </span>
            </div>
          </nav>

    </div>
    <div class="carousel-item">
      
    <nav class="navbar navbar-rgb(7, 7, 7);" >
            <div class="container-fluid">
              <span class="navbar-text">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-sm-5 col-lg-5 col-md-5 col-xl-12 col-xxl-12" >
                            <div class="item active" id="video">
                                <video id="video" muted autoplay="autoplay" loop="loop" preload="auto">
                                  <source src="https://ak.picdn.net/shutterstock/videos/1058250559/preview/stock-footage-closeup-book-sheets-with-english-text-camera-moving-between-book-pages-dolly-shot-open-book.webm"></source>
                                </video>
                              </div>
                    </div>
                </div>
              </span>
            </div>
          </nav>


    </div>
    
    <div class="carousel-item">
     
    <nav class="navbar navbar-rgb(7, 7, 7);" >
            <div class="container-fluid">
              <span class="navbar-text">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-sm-5 col-lg-5 col-md-5 col-xl-12 col-xxl-12" >
                            <div class="item active" id="video">
                                <video id="video" muted autoplay="autoplay" loop="loop" preload="auto">
                                  <source src="https://ak.picdn.net/shutterstock/videos/8022535/preview/stock-footage-text-flows-from-a-book-page-to-a-phone-digital-smartphone-e-book-concept.webm"></source>
                                </video>
                              </div>
                    </div>
                </div>
              </span>
            </div>
          </nav>
    </div>
    
  </div>




  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next"  type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    
    <span class="visually-hidden">Next</span>
  </button>
</div>
</centre>


      
       


         
         
      </div>
       <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 ">
       </div>
      


       <h2 style="color:red">Welcome Admin</h2>


       
      
          
          </div>
          </div>

        
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>




