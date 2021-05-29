<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body style="background-color:  rgb(7, 7, 7);">

<nav class="navbar navbar-light" style="background-color: #ffffff;" style="color: rgb(252, 247, 247);">
    <!-- Navbar content -->
    <div class="container-fluid" style="background-color: #0a0a0a;">
      <a class="navbar-brand" href="#">Paging All Readers! <marquee><h1> <font style="font-family: 'Times New Roman', Times, serif ;color: rgb(253, 250, 250);"><b>A New Chapter Library Rental Service</b></font></h1></marquee></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span style="background-color: #0df3f3;" class="navbar-toggler-icon"></span>
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
            <a class="nav-link" href="" style="font-size: 20px;color: rgb(247, 252, 247);">Books</a>
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
    <div class="col-md-6 col-md-offset-3" style="margin-top:50px">
   
      <hr>

      
   @if(Session::get('success'))
       <div class="alert alert-success">
              {{Session::get('success')}}
       </div>
       @endif  
       
       
       @if(Session::get('fail'))
       <div class="alert alert-danger">
              {{Session::get('fail')}}
       </div>
       @endif 



      <form action="{{route('update')}}" method="post">

      @csrf

        <input type="hidden"  name="cid" value="{{ $Info->id}}">

        <table class="table table-borderless ">
          <center><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"><h4> Edit Books </h4> </ul></center>
           
          <tr>
            <td><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Book Name </ul> </td>
            <td><input name="bname" type="text" class="form-control" placeholder="Book Name" value="{{$Info->bname}}"></td>
            <span style="color:red">@error('name'){{$message}} @enderror</span>
        </tr>
        <tr>
            <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Author name</ul> </td>
            <td><input name="Aname" type="text" class="form-control" placeholder="Author name" value="{{$Info->Aname}}"></td>
            <span style="color:red">@error('name'){{$message}} @enderror</span>
        </tr>

        <tr>
            <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Publishing House</ul> </td>
            <td><input name="phouse" type="text" class="form-control" placeholder="Author name" value="{{$Info->phouse}}"></td>
            <span style="color:red">@error('name'){{$message}} @enderror</span>
        </tr>

        <tr>
            <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Publishing Year</ul> </td>
            <td><input name="pyear" type="text" class="form-control" placeholder="Author name" value="{{$Info->pyear}}"></td>
            <span style="color:red">@error('name'){{$message}} @enderror</span>
        </tr>
        
        <tr>
                           <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Book desciption</ul></td>
                           <td> 
                            <textarea name="bdesc" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Book desciption" value="{{$Info->bdesc}}"></textarea>
                            <span style="color:red">@error('name'){{$message}} @enderror</span>
                           </div></td>
                       </tr>
        
        <tr>
            <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"> Book price </ul></td>
            <td><input name="bprice" type="text" class="form-control" placeholder="Book price" value="{{$Info->bprice}}"></td>
            <span style="color:red">@error('name'){{$message}} @enderror</span>
        </tr>
        <tr>
            <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"> Books category </ul></td>
            <td><input name="bcat" type="text" class="form-control" placeholder="books category" value="{{$Info->bcat}}"></td>
            <span style="color:red">@error('name'){{$message}} @enderror</span>
        </tr>
        
        
         <tr>
           <td><button type="submit" class="btn btn-primary">Update</button></td>
         </tr>
         
           </table>
           </form>


        
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>



 