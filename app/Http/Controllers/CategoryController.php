<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CategoryModel;

class CategoryController extends Controller
{
    
    public function InsertCategory(Request $req,$edid=null)
    {
        $st=$req->txtc;

        if(isset($_GET["editid"]))
        $edid=$_GET["editid"];
        
                 if(isset($_POST["btn"]))
               
                      if($edid=="")
                             {
         
                              $insQ=CategoryModel::CategoryData($st);
                              //return redirect('/Category');
                              ?>
                              <script type="text/javascript">
                                          alert("BookCategory Inserted Successfully..");
                                          setTimeout(function(){window.location.href='/Category'},100);
                                      </script>
                     <?php
                             }
                             else
                             {
                                $upQ=CategoryModel::UpData($st,$edid);
                                //return redirect('/Category');
                                ?>
                              <script type="text/javascript">
                                          alert("BookCategory Updated Successfully..");
                                          setTimeout(function(){window.location.href='/Category'},100);
                                      </script>
                     <?php
                             }
        
                             $sta=CategoryModel::GridView();
       

    }

   

    public function DeleteCategory($did)
    {
        $delt=CategoryModel::DelData($did);
        //return redirect('/Category');
        ?>
                              <script type="text/javascript">
                                          alert("BookCategory Deleted Successfully..");
                                          setTimeout(function(){window.location.href='/Category'},100);
                                      </script>
                     <?php
    }



    public function ViewCategory(Request $req,$edid=null,$edst=null)
    {
        if(isset($_GET["editid"]))
        $edid=$_GET["editid"];

        $edt=CategoryModel::EditCategory($edid);
            foreach($edt as $ed)
            {
                $edst=$ed->cat_name;
            }
      

        $sta=CategoryModel::GridView();
        return view('/Category',['category'=>$sta,'est'=>$edst]);
    }



}
