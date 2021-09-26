<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataJalanController extends Controller
{
    public function index(){
        $data['jalan'] = DB::table('data_jalan')
            ->get();
        return view('jalan/index',$data);
    }
}
