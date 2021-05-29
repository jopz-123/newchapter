<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class LoginModel extends Model
{
    //use HasFactory;

    public static function LogData($un,$pw)
    {
        $sel=DB::table('user_models')->where(['usname'=>$un,'upass'=>$pw])->get();
        return $sel;

      
    }
    public static function LogAdmin($un,$pw)
    {
        $sel=DB::table('admin_model')->where(['admin_username'=>$un,'admin_password'=>$pw])->get();
        return $sel;
    }
}
