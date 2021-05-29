<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Add_books;

class AddBookController extends Controller
{

    public function InsertBook(Request $req)
    {
        $catid=$req->ddl;
        $bname=$req->bname;
        $aname=$req->aname;
        $phouse=$req->phouse;  
        $pyear=$req->pyear;
        $bdesc=$req->bdesc;
        $bprice=$req->bprice;
       
        $photo=$req->cfile;
        
    //    $destination=public_path().'/storage/BookImages';
       
    //    $photo->move($destination,$photo->getClientOriginalName());
    

        if(isset($_POST["submit"]))
        

            $insert=Add_books::InsertData($catid,$bname,$aname,$phouse,$pyear,$bdesc,$bprice,$photo);
       
            return  redirect('Addbook');

     
       
    }





    public function GridView()
    {
        
        $st=Add_books::CatView();
        $sta=Add_books::GridView();
        return view('Addbook',['ct'=>$st,'book'=>$sta]);
    }

    public function DeleteBook($did)
    {
        $delt=Add_books::DelData($did);
        return redirect('Addbook');
    }


}
