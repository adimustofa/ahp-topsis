<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataSurveyController extends Controller
{
    public function index(){
        $data['survey'] = DB::table('data_survey')
            ->get();
        $data['jalan'] =DB::table('data_jalan')
            ->get();
        return view('survey/index',$data);
    }
    public function deletesurvey($id){
        DB::table('data_survey')->where('id_survey',$id)->delete();
        return redirect('/datasurvey');
    }
    public function edit($id){
        $data['jalan'] =DB::table('data_jalan')
            ->get();
        $data['dataedit']= DB::table('data_survey')->where('id_survey',$id)->first();

        return view('survey/edit',$data);

    }
    public function submiteditsurvey(Request $request, $id){
        $data['namajalan'] =DB::table('data_jalan')
            ->where('id_jalan','=',$request->input('namajalan'))
            ->first();
        DB::table('data_survey')
            ->where('id_survey', '=', $id)
            ->update([
                    'id_jalan' => $request->input('namajalan'),
                    'nama_jalan' => $data['namajalan']->nama_jalan,
                    'kondisi_jalan_baik' => $request->input('kondisibaik'),
                    'kondisi_jalan_rusak_sedang' => $request->input('kondisisedang'),
                    'kondisi_jalan_rusak_ringan' => $request->input('kondisirusakringan'),
                    'kondisi_jalan_rusak_berat' => $request->input('kondisirusakberat'),
                    'pj_rusak_berat' => $request->input('jalanrusakberat'),
                    'pj_rusak_sedang' => $request->input('jalanrusaksedang'),
                    'pj_rusak_ringan' => $request->input('jalanrusakringan'),
                    'perkerasan_jalan_aspal' => $request->input('jalanaspal'),
                    'perkerasan_jalan_rigid' => $request->input('jalanrigid'),
                    'perkerasan_jalan_tanah' => $request->input('jalantanah'),
                    'kemantapan_jalan_mantap' => $request->input('jalanmantap'),
                    'kemantapan_jalan_tidak' => $request->input('jalantidakmantap'),
                    'lhr' => $request->input('lhr'),
                    'akses_jalan' => $request->input('aksesjalan')]);
        return redirect('/datasurvey');

    }
    public function insert(Request $request){
        $data['namajalan'] =DB::table('data_jalan')
            ->where('id_jalan','=',$request->input('namajalan'))
            ->first();
        $datajalan=[
            'id_jalan' => $request->input('namajalan'),
            'nama_jalan' => $data['namajalan']->nama_jalan,
            'kondisi_jalan_baik' => $request->input('kondisibaik'),
            'kondisi_jalan_rusak_sedang' => $request->input('kondisisedang'),
            'kondisi_jalan_rusak_ringan' => $request->input('kondisirusakringan'),
            'kondisi_jalan_rusak_berat' => $request->input('kondisirusakberat'),
            'pj_rusak_berat' => $request->input('jalanrusakberat'),
            'pj_rusak_sedang' => $request->input('jalanrusaksedang'),
            'pj_rusak_ringan' => $request->input('jalanrusakringan'),
            'perkerasan_jalan_aspal' => $request->input('jalanaspal'),
            'perkerasan_jalan_rigid' => $request->input('jalanrigid'),
            'perkerasan_jalan_tanah' => $request->input('jalantanah'),
            'kemantapan_jalan_mantap' => $request->input('jalanmantap'),
            'kemantapan_jalan_tidak' => $request->input('jalantidakmantap'),
            'lhr' => $request->input('lhr'),
            'akses_jalan' => $request->input('aksesjalan'),


        ];

        DB::table('data_survey')->insert($datajalan);
        return redirect('/datasurvey');


        return redirect('/datajalan');

    }
}
