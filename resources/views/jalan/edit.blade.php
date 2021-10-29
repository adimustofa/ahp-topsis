@extends('layout.main')

@section('title', 'Edit Data Jalan')



@section('content')
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <form method="POST" action="{{url('updatedatajalan/'.$dataedit->id_jalan) }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label for="noruasjalan" class="col-3">No Ruas Jalan</label>
                        <div class="col-9">
                            <input name="noruasjalan" type="number" class="form-control" id="noruasjalan" value="{{$dataedit->no_ruas_jalan}}" placeholder="{{$dataedit->no_ruas_jalan}}">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="namajalan" class="col-3">Nama Jalan</label>
                        <div class="col-9">
                            <input name="namajalan" type="text" class="form-control" id="nama"  value="{{$dataedit->nama_jalan}}" placeholder="{{$dataedit->nama_jalan}}">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-6">
                            <div class="form-group row">
                                <label for="panjangjalan" class="col-6">Panjang </label>
                                <div class="col-6">
                                    <input name="panjangjalan" type="number" step="0.01" class="form-control" id="panjangjalan" value="{{$dataedit->panjang_jalan}}" placeholder="{{$dataedit->panjang_jalan}}">
                                </div>
                            </div>
                            <div>
                                <b>Kondisi Jalan :</b>
                                <br>
                                <br>
                            </div>
                            <div class="form-group row">
                                <label for="kondisibaik" class="col-6">Baik</label>
                                <div class="col-6">
                                    <input name="kondisibaik" type="number" class="form-control" id="kondisibaik" value="{{$dataedit->kondisi_jalan_baik}}" placeholder="${{$dataedit->kondisi_jalan_baik}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kondisisedang" class="col-6">Sedang</label>
                                <div class="col-6">
                                    <input name="kondisisedang" type="number" class="form-control" id="kondisisedang" value="{{$dataedit->kondisi_jalan_sedang}}" placeholder="{{$dataedit->kondisi_jalan_sedang}}">
                                </div>
                            </div>
                            <div>
                                <b>Perkerasan Jalan :</b>
                                <br>
                                <br>
                            </div>
                            <div class="form-group row">
                                <label for="semenisasiaspal" class="col-6">Aspal</label>
                                <div class="col-6">
                                    <input name="semenisasiaspal" type="number" class="form-control" id="ksemenisasiaspal" value="{{$dataedit->semenisasi_jalan_aspal}}" placeholder="{{$dataedit->semenisasi_jalan_aspal}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="semenisasirigid" class="col-6">Rigid</label>
                                <div class="col-6">
                                    <input name="semenisasirigid" type="number" class="form-control" id="semenisasirigid" value="{{$dataedit->semenisasi_jalan_rigid}}" placeholder="{{$dataedit->semenisasi_jalan_rigid}}">
                                </div>
                            </div>
                            <div>
                                <b>Kemantapan Jalan :</b>
                                <br>
                                <br>
                            </div>
                            <div class="form-group row">
                                <label for="jalanmantap" class="col-6">Jalan Mantap</label>
                                <div class="col-6">
                                    <input name="jalanmantap" type="number" class="form-control" id="jalanmantap" value="{{$dataedit->kemantapan_jalan_mantap}}" placeholder="">
                                </div>
                            </div>


                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                                <label for="lebarjalan" class="col-6">Lebar </label>
                                <div class="col-6">
                                    <input name="lebarjalan" type="number" class="form-control" id="lebarjalan" value="{{$dataedit->lebar_jalan}}" placeholder="{{$dataedit->lebar_jalan}}" >
                                </div>
                            </div>
                            <div>
                                <br>
                                <br>
                            </div>
                            <div class="form-group row">
                                <label for="kondisirusakringan" class="col-6">Rusak Ringan</label>
                                <div class="col-6">
                                    <input name="kondisirusakringan" type="number" class="form-control" id="kondisirusakringan" value="{{$dataedit->kondisi_jalan_rusak_ringan}}" placeholder="{{$dataedit->kondisi_jalan_rusak_ringan}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kondisirusakberat" class="col-6">Rusak Berat</label>
                                <div class="col-6">
                                    <input name="kondisirusakberat" type="number" class="form-control" id="kondisirusakberat" value="{{$dataedit->kondisi_jalan_rusak_berat}}" placeholder="{{$dataedit->kondisi_jalan_rusak_berat}}">
                                </div>
                            </div>
                            <div>
                                <br>
                                <br>
                            </div>
                            <div class="form-group row">
                                <label for="semenisasitanah" class="col-6">Tanah</label>
                                <div class="col-6">
                                    <input name="semenisasitanah" type="number" class="form-control" id="semenisasitanah" value="{{$dataedit->semenisasi_jalan_tanah}}" placeholder="{{$dataedit->semenisasi_jalan_tanah}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="semenisasibelumtembus" class="col-6">Belum Tembus</label>
                                <div class="col-6">
                                    <input name="semenisasibelumtembus" type="number" class="form-control" id="semenisasibelumtembus" value="{{$dataedit->semenisasi_jalan_belum_tembus}}" placeholder="{{$dataedit->semenisasi_jalan_belum_tembus}}">
                                </div>
                            </div>
                            <div>
                                <br>
                                <br>
                            </div>
                            <div class="form-group row">
                                <label for="tidakmantap" class="col-6">Tidak Mantap</label>
                                <div class="col-6">
                                    <input name="tidakmantap" type="number" class="form-control" id="tidakmantap" value="{{$dataedit->kemantapan_jalan_tidak}}" placeholder="{{$dataedit->kemantapan_jalan_tidak}}">
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="form-group row">
                        <label for="lhr" class="col-3">Lalu Lintas Harian</label>
                        <div class="col-9">
                            <input name="lhr" type="number" class="form-control" id="lhr" value="{{$dataedit->lhr}}" placeholder="{{$dataedit->lhr}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="aksesjalan" class="col-3">Akses Jalan</label>
                        <div class="col-9">
                            <select name="aksesjalan" class="form-control" >
                                <option value="N">N</option>
                                <option value="P">P</option>
                                <option value="K">K</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keterangan" class="col-3">Keterangan</label>
                        <div class="col-9">
                            <input name="keterangan" type="text" class="form-control" id="keterangan" value="{{$dataedit->keterangan}}" placeholder="{{$dataedit->keterangan}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-10"> </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </section>
@endsection
