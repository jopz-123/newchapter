<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body background="https://images.unsplash.com/photo-1553095066-5014bc7b7f2d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bGlnaHRpbmd8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" style="height:100%; background-position: center; background-repeat: https://images.unsplash.com/photo-1553941884-f8947df6e0ba?ixid=MnwxMjA3fDB8MHxwaG90by1no-repeat; background-size: cover;">

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








<div class="container">
    <div class="row">
    <div class="col-md-6 col-md-offset-3" style="margin-top:50px">
   
    

    <form method="post">
    {{csrf_field()}}
    <center><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"><h4>Add Category</h4> </ul></center>
    <hr>
    <table  class="table table-borderless ">

        <tr><td><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Category</ul></td>
        <td><input type="text" required class="form-control" name="txtc" id="txtc" value="<?php if(isset($est)) echo $est;?>"></td></tr>
        
        <tr><td><input type="submit"  class="btn btn-primary" name="btn" value="Submit"></td>
            <td><input type="reset"  class="btn btn-primary" name="reset" value="Cancel"></td></tr>



    </table ></form>
    <br>
    <table border="1"  class="table table-hover">
        <tr>
                <th>Sl.No</th>
                <th>State</th>
                <th colspan="2" >Action</th>
        </tr>

        <tr>
                <?php
                    if(isset($category))
                    $i=0;
                    {
                        foreach($category as $st)
                        {

                            $i++;

                ?>
                <td><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"><?php echo $i;?></ul></td>
                <td><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"><?php echo $st->cat_name;?></ul></td>
                <td><a  class="btn btn-danger btn-xs" href="Category/<?php echo $st->cat_id;?>">Delete</a></td>
                <td><a  class="btn btn-primary btn-xs" href="Category?editid=<?php echo $st->cat_id;?>">Edit</a></td>
               
              
                
        </tr>

                <?php
                           }
                        }
    

                ?>
        <tr></tr>

    </table>







    

</div>

</div>
</div>


</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>



