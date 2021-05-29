<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LIBRARY RENTAL APP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body background="https://cdn.wallpapersafari.com/23/46/SeJHTD.jpg" style="height:100%; background-position: center; background-repeat: no-repeat; background-size: cover;">

        
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">TODAYS AVAILABLE BOOKS</h5>
      <span class="text-muted">JAWS <br>
                                JOKER <br>
                                THE PRIEST<br>
                                GODZILLA <br>
                                NO TIME TO DIE </span>
    </div>
  </div>
  
  <nav class="navbar-dark navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>


<nav class="navbar navbar-light" style="background-color: #ffffff;" style="color: rgb(252, 247, 247);">
    <!-- Navbar content -->
    <div class="container-fluid" style="background-color: #0a0a0a;">
      <a class="navbar-brand" href="#">Paging All Readers! <marquee><h1> <font style="font-family: 'Times New Roman', Times, serif ;color: rgb(253, 250, 250);"><b>A New Chapter Library Rental Service</b></font></h1></marquee></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span style="background-color: #db1919;" class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <a class="nav-link active" aria-current="page" href="Index.html" style="font-size: 20px;color: rgb(247, 252, 247);">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" style="font-size: 20px;color: rgb(247, 252, 247);">Vehicles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" style="font-size: 20px;color: rgb(247, 252, 247);">Shopping</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" style="font-size: 20px;color: rgb(247, 252, 247);">Inventory</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="font-size: 20px;color: rgb(247, 252, 247);">
              My Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item"  href="" style="font-size: 20px;color: rgb(8, 8, 8);"> Login</a></li>
              <li><a class="dropdown-item"  href="" style="font-size: 20px;color: rgb(20, 20, 20);" >Register</a></li>
              <li><a class="dropdown-item" href="#" style="font-size: 20px;color: rgb(243, 237, 237);"></a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="Gallery.html" tabindex="-1" aria-disabled="true" style="font-size: 20px;color: rgb(247, 252, 247);">Photo Gallery</a>
          </li>
        </ul>
        <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">
          <li>Phone: 91 - 484 - 2660601</li>
          <li>Fax: 91 - 484 - 2426578</li>
      </ul>
        
      </div>
    </div>
</nav>




<div class="container">
<div class="row">
 <div class="col-12 sm-4 lg-4 md-4 xl-4 xxl-4"></div>
   

<div class="card" style="width: 18rem;">
  <img src="https://i.pinimg.com/originals/0d/f9/0f/0df90fb803aff4d8e757046305791b6a.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">The Road <br>
        Novel by Cormac McCarthy</h5>
    <p class="card-text">Five teenage mutants -- Mirage, Wolfsbane, Cannonball, Sunspot and Magik -- undergo treatments at a secret institution that will cure them of their dangerous powers. </p>
    <a href="#" class="btn btn-primary">Book Now</a>
  </div>
</div>


<br>
<br>
<br>
<br>






    <div class="col-md-6 col-md-offset-3" style="margin-top:50px">

      
        


        <table class="table table-borderless ">
            <center><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"><h4> Display Books </h4> </ul></center>
             
            <tr>
              <td><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Book Name </ul> </td>
              <td><input name="bname" type="text" class="form-control" placeholder="Book Name " value="{{ $user->bname }}"></td>
              
          </tr>
          <tr>
              <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Author name</ul> </td>
              <td><input name="Aname" type="text" class="form-control" placeholder="Author name" value="{{ $user->Aname }}" ></td>
             
          </tr>
  
          <tr>
              <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Publishing House</ul> </td>
              <td><input name="phouse" type="text" class="form-control" placeholder="Author name"  value="{{ $user->phouse }}"></td>
              
          </tr>
  
          <tr>
              <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Publishing Year</ul> </td>
              <td><input name="pyear" type="text" class="form-control" placeholder="Author name" value="{{ $user->pyear }}"></td>
             
          </tr>
          
          <tr>
                             <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Book desciption</ul></td>
                             <td> 
                              <textarea name="bdesc" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Book desciption" value="{{ $user->bdesc }}"></textarea>
                              
                             </div></td>
                         </tr>
          
          <tr>
              <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"> Book price </ul></td>
              <td><input name="bprice" type="text" class="form-control" placeholder="Book price" value="{{ $user->bprice }}"></td>
             
          </tr>
          <tr>
              <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"> Books category </ul></td>
              <td><input name="bcat" type="text" class="form-control" placeholder="books category" value="{{ $user->bcat }}"></td>
             
          </tr>
          
          
           <tr>
             <td><button type="submit" class="btn btn-primary">Submit</button></td>
           </tr>
           

         




</div>
</div>
</div>
</div>


</div>









  



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>







