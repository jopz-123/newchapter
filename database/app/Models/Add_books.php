<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Add_books extends Model
{
    public static function CatView()
    {
        $st=DB::table('tbl_category')->get();
        return $st;
    }

    public static function InsertData($catid,$bname,$aname,$phouse,$pyear,$bdesc,$bprice,$photo)
    {
        $ins=DB::table('add_books')->insert(['cat_id'=>$catid,'bname'=>$bname,'Aname'=>$aname,'phouse'=>$phouse,'pyear'=>$pyear,'bdesc'=>$bdesc,'bprice'=>$bprice,'bimage'=>$photo]);
        return $ins;
    }
    public static function GridView()
    {
        $st=DB::table('add_books')->get();
        return $st;
    }

    public static function DelData($did)
    {
        $del=DB::table('add_books')->where(['id'=>$did])->delete();
        return $del;
    }
}
