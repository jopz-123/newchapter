<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;

class LoginController extends Controller
{
    public function CustomerLog(Request $req,$pid=null,$un=null)
    {
       
        $un=$req->usname;
        $pw=$req->upass;

        $log=LoginModel::LogData($un,$pw);

        if(count($log)>0)
        {


foreach($log as $row)
{
    $pid=$row->id;
    $un=$row->uname;
}

            $req->session()->put('username',$un);
            $req->session()->put('uid',$pid);
            $uid=$req->session()->get('uid');
            
            return redirect("Userhome");
            
        }
      
        else
        {
            //echo "<script> alert ('Invalid')</script>";
            ?>
            <script type="text/javascript">
            alert("Invalid User..");
            setTimeout(function(){window.location.href='/'},100);
        </script>
<?php
        }
    }

    public function ViewName(Request $req)
    {
        $un=$req->session()->get('username');
      
       
        return view('Userhome',['uname'=>$un]);
      
    }

    
    public function AdminLog(Request $req)
    {
        $un=$req->usname;
        $pw=$req->upass;

        $log=LoginModel::LogAdmin($un,$pw);

        if(count($log)>0)
        {
            $req->session()->put('Name',$un);
            
            return redirect("adminhome");
        }
        else
        {
            //echo "<script> alert ('Invalid')</script>";
            ?>
            <script type="text/javascript">
            alert("Invalid Username/Password..");
            setTimeout(function(){window.location.href='/login'},100);
        </script>
<?php
        }
        
    }
 
        public function logout(Request $req)
        {
            $req->session()->forget('username');
            $req->session()->forget('uid');
           
            //echo "Data has been removed from session.";
            ?>
            <script type="text/javascript">
            alert("please login to sign in.");
            setTimeout(function(){window.location.href='/'},100);
         </script>
         <?php
                
        }
    



}
