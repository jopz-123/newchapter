<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SearchbookModel;
use App\Models\Add_books;

class SearchbookController extends Controller
{
    public function CatView(Request $req)
    {
        $sta=Add_books::CatView();
        $un=$req->session()->get('username');
        return view('/SearchBook',['ct'=>$sta,'uname'=>$un]);
    }

 
    public function CView()
    {
        $sta=Add_books::CatView();
        return $sta;
       
    }
    public function ViewBooks(Request $req)
    {
        if(isset($_POST["btn"]))
        {
          $ddl=$req->ddl;
 
        $st=$this->CView();

        $data=SearchbookModel::ViewBooks($ddl);
        return view('/SearchBook',['data'=>$data,'ct'=>$st]);
        }
       
    }
    public function ViewBookDetail($bid=null)
    {
        if(isset($_GET["bid"])) $bid=$_GET["bid"];
        $data=SearchbookModel::ViewBookDetail($bid);
        return view('/viewbookdetail',['data'=>$data]);
       
    }
}
