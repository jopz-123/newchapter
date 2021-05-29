<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\adminmodel;

use App\Models\Add_books;

use DB;

class admincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view ('Admin_log');
    }

    public function register()
    {
        return view ('Admin_reg');
    }


    public function book()
    {
        $data = array( 'list'=> DB::table('add_books')->get());

        
        return view ('admin.Addbook',$data);
    }



    public function  edit($id)  {

       $row = DB::table('add_books')
              ->where('id',$id)
              ->first();
        
        $data = [
            'Info'=>$row,
            'Title'=>'Edit'

        ];
        
        
        return view('admin.edit',$data);


        
    }




    public function update(Request $request)    {
        $request->validate([

            'bname'=>'required',
            'Aname'=>'required',
            'phouse'=>'required',
            'pyear'=>'required',
            'bdesc'=>'required',
            'bprice'=>'required',
            'bcat'=> 'required'

        ]);

        $updating = DB::table('add_books')
                    ->where('id', $request->input('cid'))
                    
                    ->update([

                        'bname'=>$request->input('bname'),
                        'Aname'=>$request->input('Aname'),
                        'phouse'=>$request->input('phouse'),
                        'pyear'=>$request->input('pyear'),
                        'bdesc'=>$request->input('bdesc'),
                        'bprice'=>$request->input('bprice'),
                        'bcat'=>$request->input('bcat')

                    ]);
                        
                    if($updating){

                        echo "success";
                    }


                    else{

                        echo "fail";
                    }


               

                  //  return redirect('/addbook');

    }



    

    public function upgrade()
    {
        return view('admin.upgrade');

    }


    public function delete($id)
    {

        $delete = DB::table('add_books')
                ->where('id', $id)
                ->delete();

        return redirect('/addbook');      

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        
        

        $user=new adminmodel();
        $user->uname=$getuname;
        $user->usname=$getusname;
        $user->uemail= $getuemail;
        $user->upass=$getupass;
        

        $user->save();
    }



    public function addbook()
    
    {

        $getbname=request('bname');
        $getAname=request('Aname');
        $getphouse=request('phouse');
        $getpyear=request('pyear');
        $getbdesc=request('bdesc');
        $getbprice=request('bprice');
        $getbcat=request('bcat');
       
        
        $user=new Add_books();
        $user->bname=$getbname;
        $user->Aname=$getAname;
        $user->phouse= $getphouse;
        $user->pyear=$getpyear;
        $user->bdesc=$getbdesc;
        $user->bprice=$getbprice;
        $user->bcat=$getbcat;


        $user->save();


        if($user){
            echo "sucess";
        }


        else{

            echo "fail";
        }

    
    }


    
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

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
