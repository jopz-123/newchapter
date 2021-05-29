<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script type="text/javascript">

function preventBack() { window.history.forward(); }
setTimeout("preventBack()", 0);
window.onunload = function () { null };

</script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body background="https://images.unsplash.com/photo-1595862678508-419e703a5645?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTM1fHxibGFjayUyMCUyMGRlc2lnbiUyMG9mJTIwYm9va3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" style="height:100%; background-position: center; background-repeat: https://images.unsplash.com/photo-1553941884-f8947df6e0ba?ixid=MnwxMjA3fDB8MHxwaG90by1no-repeat; background-size: cover;">

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
   
   <?php 
 
 if(isset($sel))
 {
  foreach($sel as $se)
  {
    $bname=$se->bname;
    $aname=$se->Aname;
    $phouse=$se->phouse;
    $pyear=$se->pyear;
    $bprice=$se->bprice;
    $bdesc=$se->bdesc;
    $catid=$se->cat_id;
    $bimage=$se->bimage;

  }
 }
   ?>


      <form method="post" enctype="multipart/form-data">

      {{csrf_field()}}

        <table class="table table-borderless ">
          <center><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"><h4>Add New Books </h4> </ul></center>
          <hr>
          <tr>
            <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"> Books category </ul></td>
            <td><select required class="form-select" aria-label="Default select example" name="ddl" >
  <option value="">Select Category</option>
  <?php
                        if(isset($ct))
                        {
                            foreach($ct as $s)
                            {
                             
                               

                           
                    ?>
                    
                    <option value="<?php echo $s->cat_id;?>" ><?php echo $s->cat_name;?></option>
                    
                        <?php
                                }
                            }
    
                    ?>
  
</select></td>
           
        </tr>
          <tr>
            <td><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Book Name </ul> </td>
            <td><input name="bname" value="<?php if(isset($bname))echo $bname;?>"  required type="text" class="form-control" placeholder="Book Name "></td>
        
        </tr>
        <tr>
            <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Author name</ul> </td>
            <td><input name="aname" value="<?php if(isset($aname))echo $aname;?>" required type="text" class="form-control" placeholder="Author name"></td>
          
        </tr>

        <tr>
            <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Publishing House</ul> </td>
            <td><input name="phouse" value="<?php if(isset($phouse))echo $phouse;?>" required type="text" class="form-control" placeholder="Author name"></td>
            
        </tr>

        <tr>
            <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Publishing Year</ul> </td>
            <td><input name="pyear" value="<?php if(isset($pyear))echo $pyear;?>" required type="text" class="form-control" placeholder="Author name"></td>
          
        </tr>
        
        <tr>
                           <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Book desciption</ul></td>
                           <td> 
                            <textarea name="bdesc" required class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Book desciption"><?php if(isset($bname))echo $bname;?></textarea>
                        
                           </div></td>
                       </tr>
        
        <tr>
            <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"> Book price </ul></td>
            <td><input name="bprice" value="<?php if(isset($bprice))echo $bprice;?>" required type="text" class="form-control" placeholder="Book price"></td>
           
        </tr>
        
        <tr>
            <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"> Book Image </ul></td>
            <td><input name="files" id="files"  type="file" class="form-control" placeholder="Book price">
            <img src="<?php  if(isset($bimage))echo $bimage;?>" height="100" width="150"></td>
            <input type="hidden" id="cfile" name="cfile" value="<?php  if(isset($bimage))echo $bimage;?>" />
        </tr>
      
        
        
         <tr>
           <td><button type="submit" name="submit" class="btn btn-primary">Add</button></td>
         </tr>
         
           </table>
           </form>

           <br>

           <table class="table table-hover">

           <thead>
           <th><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Sl.No</ul></td></th>
             <th><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Book Name</ul></td></th>
             <th><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Book Image</ul></td></th>
             <th><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Author name</ul></td></th>
             <th><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Publishing House</ul></td></th>
             <th><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Publishing Year</ul></td></th>
             <th><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Book desciption</ul></td></th>
             <th><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Book price</ul></td></th>
      

          
            </thead>

            <tbody>
            <?php  $i=0;
                    if(isset($book))
                  
                    {
                        foreach($book as $st)
                        {

                            $i++;

                ?>
         
               <tr>
               <td><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"><?php echo $i;?></ul></td>
                <td><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"><?php echo $st->bname;?></ul></td>
                <td><img src="<?php echo $st->bimage?>" height="100" width="150" alt="<?php  echo $st->bimage?>">
                <td><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"><?php echo $st->Aname;?></ul></td>
                <td><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"><?php echo $st->phouse;?></ul></td>
                <td><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"><?php echo $st->pyear;?></ul></td>
                <td><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"><?php echo $st->bdesc;?></ul></td>
                <td><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"><?php echo $st->bprice;?></ul></td>
 
             <td>
                    <div class="btn-group">
                      <a href="Addbook/<?php echo $st->id;?>" class="btn btn-danger btn-xs">Delete</a>
                      <a href="Addbook?editid=<?php echo $st->id;?>" class="btn btn-danger btn-xs">Edit</a>

                    </div>

              </td> 
            </tr>
            <?php
                           }
                        }
    

                ?>
         
            </tbody>

           </table>

           
           </div>
          
          </div>
          </div>

        
      </div>
    </div>
  </div>
  <script>
	// Check for the File API support.
if (window.File && window.FileReader && window.FileList && window.Blob) {
  document.getElementById('files').addEventListener('change', handleFileSelect, false);
} else {
  alert('The File APIs are not fully supported in this browser.');
}

function handleFileSelect(evt) {
  var f = evt.target.files[0]; // FileList object
  var reader = new FileReader();
  // Closure to capture the file information.
  reader.onload = (function(theFile) {
    return function(e) {
      var binaryData = e.target.result;
      //Converting Binary Data to base 64
      var base64String = window.btoa(binaryData);
      //showing file converted to base64
      document.getElementById('cfile').value = 'data:image/jpeg;base64,'+base64String;

      //var url = 'data:image/jpeg;base64,'+base64String;

      
	//	img.src=url;
		//document.body.img.appendChild(img);
      
    };
  })(f);
  // Read in the image file as a data URL.
  reader.readAsBinaryString(f);
}
</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>



