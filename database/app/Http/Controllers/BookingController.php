<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingModel;

class BookingController extends Controller
{
    public function BookingIns(Request $req)
    {

        $uid=session()->get('uid');


        $bid=$req->bid;
       


      if(isset($_POST["submit"]))
      {
          $apins=BookingModel::BookingIns($uid,$bid);

          return redirect('viewcbooking');
      }

    }

    public function Viewbooking(Request $req,$ci=null)
    {
      
     
        $ci=$req->session()->get('uid');

        $sta1=BookingModel::GridView($ci);
        return view('viewcbooking',['booking'=>$sta1]);
       

    }

    public function Viewallbooking()
    {
      
        $sta1=BookingModel::Viewallbooking();
        $sta=BookingModel::ViewReturnbooking();

        if(isset($_GET["aid"]))
        {
         $s=1;
        $aid=$_GET["aid"];
       
            $upQ=BookingModel::UpDataA($s,$aid);
            return redirect('viewallbooking');
          
        }
        return view('viewallbooking',['booking'=>$sta1,'book'=>$sta]);
       

    }


}
