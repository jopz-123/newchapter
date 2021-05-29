<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\userModel;

use App\Models\adminmodel;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;



class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function create()
    // {
    //     return view('user.index');

    // }



    // public function signup()
    // {
    //     return view('user.Login');

    // }





    public function fiction()
    {
        return view('books.fiction');
    }

    public function nonFict()
    {
        return view('books.nonFict');
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  



    public function Eng()
    {
        return view('movies.engMov');
    }

    
    public function Mal()
    {
        return view('movies.malMov');
    }



    public function book()  {

        return view('user.book');
    }


    
    


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
        $getuname=request('uname');
        $getusname=request('usname');
        $getuadd=request('uadd');
        $getuemail=request('uemail');
        $getusmob=request('usmob');
        $getugend=request('ugend');
        $getupass=request('upass');
        $getucpass=request('ucpass');

        
        $log=userModel::CheckData($getusname);

        if(count($log)>0)
        {
            ?>
                <script type="text/javascript">
                            alert("Username Already Exist..");
                            setTimeout(function(){window.location.href='/Login'},100);
                        </script>
       <?php
        }else{
                    if($getupass==$getucpass)
                    {
                        
                       $log=UserModel::InsertData($getuname,$getusname,$getuadd,$getuemail,$getusmob,$getugend,$getupass,$getucpass);
                        //return redirect('/clogin')->with('success','Registration Successfull');
                    
                        ?>
                        <script type="text/javascript">
                            alert("Registration Successfull..");
                            setTimeout(function(){window.location.href='/'},100);
                        </script>
                    <?php
                     }else{
                        ?>
                        <script type="text/javascript">
                        alert("Confirm Password Mismatch..");
                        setTimeout(function(){window.location.href='/Login'},100);
                    </script>
                     <?php
                    }
            }
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
