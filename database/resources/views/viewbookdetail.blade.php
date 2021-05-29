<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body background="https://media.istockphoto.com/photos/eyeglasses-on-books-and-pens-on-white-table-on-blurred-library-picture-id688537402" style="height:100%; background-position: center; background-repeat: https://images.unsplash.com/photo-1553941884-f8947df6e0ba?ixid=MnwxMjA3fDB8MHxwaG90by1no-repeat; background-size: cover;">

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
          
            <a class="nav-link active" aria-current="page" href="Userhome" style="font-size: 20px;color: rgb(247, 252, 247);">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="SearchBook" style="font-size: 20px;color: rgb(247, 252, 247);">Search Books</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="" style="font-size: 20px;color: rgb(247, 252, 247);">Inventory</a>
          </li> -->
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="font-size: 20px;color: rgb(247, 252, 247);">
             Login
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item"  href="/" style="font-size: 20px;color: rgb(8, 8, 8);"> Customer</a></li>
              <li><a class="dropdown-item"  href="/admin/login" style="font-size: 20px;color: rgb(20, 20, 20);" >Admin</a></li>
              <li><a class="dropdown-item" href="#" style="font-size: 20px;color: rgb(243, 237, 237);"></a></li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="/clogout" style="font-size: 20px;color: rgb(247, 252, 247);">Log Out</a>
          </li>
        </ul>
        <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">
          <li>Phone: 91 - 484 - 2660601</li>
          <li>Fax: 91 - 484 - 2426578</li>
      </ul>
        
      </div>
    </div>
</nav>






<center><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"><h4>Book Details</h4> </ul></center>
    <hr>
    <form method="post">
    {{csrf_field()}}
<div class="container">
    <div class="row">
    <div class="col-md-6 col-md-offset-3" style="margin-top:50px">
   
    

    <br>
    <table class="table" align="center" cellpadding="15" cellspacing="15" style="background-color:#C0C0C0;margin-left:300px">
    
    <?php
     $i=0;$j=0;
     if(isset($data))
    {
    foreach($data as $book)
    {
    
    ?>
    
    <tr> 
        <td align="center" colspan=2>
        <img src="<?php  echo $book->bimage?>" height="200" width="200"><br>
             <b><?php  echo $book->bname ?></b><br>
             Rate:Rs. <?php  echo $book->bprice ?>/-<br></td></tr>
          <tr>   <th>Author Name</th><td> <?php  echo $book->Aname ?></td></tr>
          <tr>   <th>Publishing House</th><td> <?php  echo $book->phouse ?></td></tr>
          <tr>   <th>Publishing Year</th><td> <?php  echo $book->pyear ?></td></tr>
          <tr>   <th>Desciption</th><td> <?php  echo $book->bdesc ?>
              <input type="hidden" name="hid" value="<?php echo $book->id?>" ></td></tr>
          <tr><td colspan='2' align='center'><button type="submit" name="submit" class="btn btn-success">Buy Now</button></td></tr>
       
     	
<?php 

    }
    }
?>
    </table>
</form>






    

</div>

</div>
</div>

<script type="text/javascript">

function preventBack() { window.history.forward(); }
setTimeout("preventBack()", 0);
window.onunload = function () { null };

</script>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>



