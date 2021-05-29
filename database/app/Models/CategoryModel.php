<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class CategoryModel extends Model
{
    public static function CategoryData($st)
    {
        $ins=DB::table('tbl_category')->insert(['cat_name'=>$st]);
        return $ins;
    }

    public static function GridView()
    {
        $st=DB::table('tbl_category')->get();
        return $st;
    }


    public static function DelData($did)
    {
        $del=DB::table('tbl_category')->where(['cat_id'=>$did])->delete();
        return $del;
    }
    public static function EditCategory($edid)
    {
        $edit=DB::table('tbl_category')->where(['cat_id'=>$edid])->get();
        return $edit;
    }

    
    public static function UpData($st,$edid)
    {
        $ins=DB::table('tbl_category')->where('cat_id','=',$edid)->update(['cat_name'=>$st]);
        return $ins;
    }


}
