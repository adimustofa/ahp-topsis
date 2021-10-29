<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $jumlah['jumlahdata']=[
          'jalan'=>DB::table('data_jalan')->count(),
          'survey'=>DB::table('data_survey')->count()
        ];

        return view('dashboardahptopsis',$jumlah);
    }


}
