<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserReportModel;
class UserReportController extends Controller
{
    public function ViewUsers()
    {
        $data=UserReportModel::ViewUsers();
        return view('/UsersReport',['data'=>$data]);
       
    }
}
