<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class BookingModel extends Model
{
    public static function BookingIns($uid,$bid)
    {
        $ins=DB::table('booking')->insert(['user_id'=>$uid,'book_id'=>$bid,'b_date'=>date('Y-m-d')]);
        return $ins;
    }

    public static function GridView($cid,$s=null)
    {
       

$s=0;
$mid=DB::table('booking')
                  ->where('user_id','=',$cid) 
                  ->max('b_id');

        $data=DB::table('booking')
         
        ->join('add_books','add_books.id','=','booking.book_id')
        ->join('user_models','user_models.id','=','booking.user_id')
        ->where('booking.b_id','=',$mid)
        ->where('booking.user_id','=',$cid,'and','booking.status','=',$s)
        ->select('*')

        ->get();
    
return $data;



    }


    public static function Viewallbooking($s=null)
    {
       

$s=0;


        $data=DB::table('booking')
         
        ->join('add_books','add_books.id','=','booking.book_id')
        ->join('user_models','user_models.id','=','booking.user_id')
    
        ->where('booking.status','=',$s)
        ->select('*')

        ->get();
    
return $data;



    }


    public static function UpDataA($s,$aid)
    {
        $ins=DB::table('booking')->where('b_id','=',$aid)->update(['status'=>$s,'return_date'=>date('Y-m-d')]);
        return $ins;
    }

    public static function ViewReturnbooking($s=null)
    {
       

$s=1;


        $data=DB::table('booking')
         
        ->join('add_books','add_books.id','=','booking.book_id')
        ->join('user_models','user_models.id','=','booking.user_id')
    
        ->where('booking.status','=',$s)
        ->select('*')

        ->get();
    
return $data;



    }
}
