<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body background="https://img.wallpapersafari.com/desktop/800/450/73/82/0zuld2.jpg" style="height:100%; background-position: center; background-repeat: https://images.unsplash.com/photo-1553941884-f8947df6e0ba?ixid=MnwxMjA3fDB8MHxwaG90by1no-repeat; background-size: cover;">

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





<div class="card-body">

    
  </div>

  <div class="card-body">

      </div>
</div>
</div>


<!--   
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"> -->
<h1 style='color:white'>Book Issued Details</h1>
<br>
<br>
<br>


<table class="table table-bordered" style="width:100%;">
<tr>
 <th style='color:white'>Issue id</th>
 <th style='color:white'>Issue Date</th>
 <th style='color:white'>Book Name</th>
 <th style='color:white'>Name</th>
 <th style='color:white'>Address</th>
 <th style='color:white'>Contact</th>


</tr>
 <tr>
                <?php
                    if(isset($booking))
                    $i=0;
                    {
                        foreach($booking as $st1)
                        {

                            $i++;

                ?>
                 <td style='color:white'><?php echo $st1->b_id ;?></td>
                <td style='color:white'><?php echo $st1->b_date;?></td>
                <td style='color:white'><?php echo $st1->bname;?></td>
                <td style='color:white'><?php echo $st1->uname;?></td>
                <td style='color:white'><?php echo $st1->uadd;?></td>
                <td style='color:white'><?php echo $st1->usmob;?></td>
                <td><a href="viewallbooking?aid=<?php echo $st1->b_id;?>">Book Return</a></td>
               
                
              
                
        </tr>

                <?php
                           }
                        }
    

                ?>


</table>

<!-- </div> -->
<h1 style='color:white'>Book Returned Details</h1>
<br>
<br>
<br>


<table class="table table-bordered" style="width:100%;">
<tr>
 <th style='color:white'>Issue Id</th>
 <th style='color:white'>Issue Date</th>
 <th style='color:white'>Return Date</th>
 <th style='color:white'>Book Name</th>
 <th style='color:white'>Name</th>
 <th style='color:white'>Address</th>
 <th style='color:white'>Contact</th>


</tr>
 <tr>
                <?php
                    if(isset($book))
                    $i=0;
                    {
                        foreach($book as $st1)
                        {

                            $i++;

                ?>
                 <td style='color:white'><?php echo $st1->b_id ;?></td>
                <td style='color:white'><?php echo $st1->b_date;?></td>
                <td style='color:white'><?php echo $st1->return_date;?></td>
                <td style='color:white'><?php echo $st1->bname;?></td>
                <td style='color:white'><?php echo $st1->uname;?></td>
                <td style='color:white'><?php echo $st1->uadd;?></td>
                <td style='color:white'><?php echo $st1->usmob;?></td>
              
               
                
              
                
        </tr>

                <?php
                           }
                        }
    

                ?>


</table>

<!-- </div> -->

</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>



