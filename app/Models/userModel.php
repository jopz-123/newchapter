<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class userModel extends Model
{
 public static function CheckData($un)
    {
        $sel=DB::table('user_models')->where(['usname'=>$un])->get();
        return $sel;
    }

    public static function InsertData($getuname,$getusname,$getuadd,$getuemail,$getusmob,$getugend,$getupass,$getucpass)
    {
        $ins=DB::table('user_models')->insert(['uname'=>$getuname,'usname'=> $getusname,'uadd'=> $getuadd,'uemail'=>$getuemail,'usmob'=>$getusmob,'ugend'=>$getugend,'upass'=>$getupass,'ucpass'=>$getucpass]);
        return $ins;
    }

}
