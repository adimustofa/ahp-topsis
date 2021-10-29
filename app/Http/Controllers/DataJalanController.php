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
    public function insert(Request $request){
        $datajalan=[
            'no_ruas_jalan' => $request->input('noruasjalan'),
            'nama_jalan' => $request->input('namajalan'),
            'panjang_jalan' => $request->input('panjangjalan'),
            'lebar_jalan' => $request->input('lebarjalan'),
            'kondisi_jalan_baik' => $request->input('kondisibaik'),
            'kondisi_jalan_sedang' => $request->input('kondisisedang'),
            'kondisi_jalan_rusak_ringan' => $request->input('kondisirusakringan'),
            'kondisi_jalan_rusak_berat' => $request->input('kondisirusakberat'),
            'semenisasi_jalan_aspal' => $request->input('semenisasiaspal'),
            'semenisasi_jalan_rigid' => $request->input('semenisasirigid'),
            'semenisasi_jalan_tanah' => $request->input('semenisasitanah'),
            'semenisasi_jalan_belum_tembus' => $request->input('semenisasibelumtembus'),
            'kemantapan_jalan_mantap' => $request->input('jalanmantap'),
            'kemantapan_jalan_tidak' => $request->input('tidakmantap'),
            'lhr' => $request->input('lhr'),
            'akses_jalan' => $request->input('aksesjalan'),
            'keterangan' => $request->input('keterangan ')

        ];
        DB::table('data_jalan')->insert($datajalan);
        return redirect('/datajalan');
    }
    public function edit($id){
       $data['dataedit']= DB::table('data_jalan')->where('id_jalan',$id)->first();

        return view('jalan/edit',$data);

    }

    public function deletejalan($id){
        DB::table('data_jalan')->where('id_jalan',$id)->delete();
        return redirect('/datajalan');
    }
    public function submiteditjalan(Request $request, $id){
        DB::table('data_jalan')
            ->where('id_jalan', '=', $id)
            ->update([
                'no_ruas_jalan' => $request->input('noruasjalan'),
                'nama_jalan' => $request->input('namajalan'),
                'panjang_jalan' => $request->input('panjangjalan'),
                'lebar_jalan' => $request->input('lebarjalan'),
                'kondisi_jalan_baik' => $request->input('kondisibaik'),
                'kondisi_jalan_sedang' => $request->input('kondisisedang'),
                'kondisi_jalan_rusak_ringan' => $request->input('kondisirusakringan'),
                'kondisi_jalan_rusak_berat' => $request->input('kondisirusakberat'),
                'semenisasi_jalan_aspal' => $request->input('semenisasiaspal'),
                'semenisasi_jalan_rigid' => $request->input('semenisasirigid'),
                'semenisasi_jalan_tanah' => $request->input('semenisasitanah'),
                'semenisasi_jalan_belum_tembus' => $request->input('semenisasibelumtembus'),
                'kemantapan_jalan_mantap' => $request->input('jalanmantap'),
                'kemantapan_jalan_tidak' => $request->input('tidakmantap'),
                'lhr' => $request->input('lhr'),
                'akses_jalan' => $request->input('aksesjalan'),
                'keterangan' => $request->input('keterangan')]);


        return redirect('/datajalan');
    }


}
