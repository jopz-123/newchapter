<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class UserReportModel extends Model
{  
    
    public static function ViewUsers()
    {
        $view=DB::table('user_models')
                            ->select('*')
                            ->get();
        return $view;
    }
    
}
