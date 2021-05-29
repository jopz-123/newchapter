<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Add_books;

class AddBookController extends Controller
{

    public function InsertBook(Request $req,$editid=null)
    {
        $catid=$req->ddl;
        $bname=$req->bname;
        $aname=$req->aname;
        $phouse=$req->phouse;  
        $pyear=$req->pyear;
        $bdesc=$req->bdesc;
        $bprice=$req->bprice;
       
        $photo=$req->cfile;
        
        if(isset($_GET["editid"]))
        $editid=$_GET["editid"];

    //    $destination=public_path().'/storage/BookImages';
       
    //    $photo->move($destination,$photo->getClientOriginalName());
    

        if(isset($_POST["submit"]))
        {
            if(isset($_GET["editid"])){

            $upQ=Add_books::UpdateData($editid,$catid,$bname,$aname,$phouse,$pyear,$bdesc,$bprice,$photo);
            ?>
                <script type="text/javascript">
                            alert("Book Updated Successfully..");
                            setTimeout(function(){window.location.href='Addbook'},100);
                        </script>
       <?php

            }else{

                $insert=Add_books::InsertData($catid,$bname,$aname,$phouse,$pyear,$bdesc,$bprice,$photo);
            
                ?>
                <script type="text/javascript">
                            alert("Book Inserted Successfully..");
                            setTimeout(function(){window.location.href='Addbook'},100);
                        </script>
       <?php
            }
                //return  redirect('Addbook');
               

        }

     
       
    }





    public function GridView($editid=null)
    {
        if(isset($_GET["editid"]))  $editid=$_GET["editid"];

        $st=Add_books::CatView();
        $sta=Add_books::GridView();
        // if(isset($_GET["editid"])){

         $sel=Add_books::EditView($editid);

        
   
        //return view('Addbook',['ct'=>$st,'book'=>$sta,'bname'=>$bname,'aname'=>$aname,'phouse'=>$phouse,'pyear'=>$pyear,'bprice'=>$bprice,'bimage'=>$bimage,'bdesc'=>$bdesc,'catid'=>$catid]);
      
   // }else{
      
        return view('Addbook',['ct'=>$st,'book'=>$sta,'sel'=>$sel]);
       // }
    }

    public function DeleteBook($did)
    {
        $delt=Add_books::DelData($did);
        //return redirect('Addbook');
        ?>
        <script type="text/javascript">
                    alert("Book Deleted Successfully..");
                    setTimeout(function(){window.location.href='Addbook'},100);
                </script>
<?php

    }

   

}
