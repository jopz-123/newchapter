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
                              return redirect('/Category');
                             }
                             else
                             {
                                $upQ=CategoryModel::UpData($st,$edid);
                                return redirect('/Category');
                             }
        
                             $sta=CategoryModel::GridView();
       

    }

   

    public function DeleteCategory($did)
    {
        $delt=CategoryModel::DelData($did);
        return redirect('/Category');
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
