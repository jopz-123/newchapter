<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class SearchbookModel extends Model
{
    public static function ViewBooks($cid)
    {
        $view=DB::table('add_books')
                          ->where(['cat_id'=>$cid])
                            ->get();
        return $view;
    }
    public static function ViewBookDetail($id)
    {
        $data=DB::table('add_books')->where(['id'=>$id])->get();
        return $data;
    }
}
