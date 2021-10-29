@extends('layout.main')

@section('title', 'Edit Data SUrvey')



@section('content')
    <section class="content">

        <!-- Default box -->

            <form method="POST" action="{{url('/updatedatasurvey/'.$dataedit->id_survey) }}" enctype="multipart/form-data">
                @csrf
                <div >
                    <div class="modal-body">
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">


                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="namajalan" class="col-3">Nama Jalan</label>
                                        <div class="col-9">
                                            <select name="namajalan" class="form-control" >
                                                @foreach ($jalan as $value)
                                                    <option value="{{$value->id_jalan}}">{{$value->nama_jalan}}</option>
                                                @endforeach

                                            </select>

                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-6">
                                            <div>
                                                <b>Kondisi Jalan :</b>
                                                <br>
                                                <br>
                                            </div>
                                            <div class="form-group row">
                                                <label for="kondisibaik" class="col-6">Baik</label>
                                                <div class="col-6">
                                                    <input name="kondisibaik" type="number" class="form-control" id="kondisibaik" value="{{$dataedit->kondisi_jalan_baik}}" placeholder="{{$dataedit->kondisi_jalan_baik}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="kondisisedang" class="col-6">Sedang</label>
                                                <div class="col-6">
                                                    <input name="kondisisedang" type="number" class="form-control" id="kondisisedang" value="{{$dataedit->kondisi_jalan_rusak_sedang}}" placeholder="{{$dataedit->kondisi_jalan_rusak_sedang}}" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">

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
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-4">
                                            <div>
                                                <b>Panjang Jalan Rusak :</b>
                                                <br>
                                                <br>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jalanrusakberat" class="col-6">Berat</label>
                                                <div class="col-6">
                                                    <input name="jalanrusakberat" type="number" class="form-control" id="jalanrusakberat value" value="{{$dataedit->pj_rusak_berat}}" placeholder="{{$dataedit->pj_rusak_berat}}">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-4">
                                            <div>
                                                <br>
                                                <br>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jalanrusaksedang" class="col-6">Sedang</label>
                                                <div class="col-6">
                                                    <input name="jalanrusaksedang" type="number" class="form-control" id="jalanrusaksedang" value="{{$dataedit->pj_rusak_sedang}}" placeholder="{{$dataedit->pj_rusak_sedang}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div>
                                                <br>
                                                <br>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jalanrusakringan" class="col-6">Ringan</label>
                                                <div class="col-6">
                                                    <input name="jalanrusakringan" type="number" class="form-control" id="jalanrusakringan" value="{{$dataedit->pj_rusak_ringan}}" placeholder="{{$dataedit->pj_rusak_ringan}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-4">
                                            <div>
                                                <b>Perkerasan Jalan :</b>
                                                <br>
                                                <br>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jalanaspal" class="col-6">Aspal</label>
                                                <div class="col-6">
                                                    <input name="jalanaspal" type="number" class="form-control" id="jalanaspal" value="{{$dataedit->perkerasan_jalan_aspal}}" placeholder="{{$dataedit->perkerasan_jalan_aspal}}">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-4">
                                            <div>
                                                <br>
                                                <br>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jalanrigid" class="col-6">Rigid</label>
                                                <div class="col-6">
                                                    <input name="jalanrigid" type="number" class="form-control" id="jalanrigid" value="{{$dataedit->perkerasan_jalan_rigid}}" placeholder="{{$dataedit->perkerasan_jalan_rigid}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div>
                                                <br>
                                                <br>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jalanrtanah" class="col-6">Tanah</label>
                                                <div class="col-6">
                                                    <input name="jalantanah" type="number" class="form-control" id="jalantanah" value="{{$dataedit->perkerasan_jalan_tanah}}" placeholder="{{$dataedit->perkerasan_jalan_tanah}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-6">
                                            <div>
                                                <b>Kemantapan Jalan:</b>
                                                <br>
                                                <br>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jalanmantap" class="col-6">Jalan Mantap</label>
                                                <div class="col-6">
                                                    <input name="jalanmantap" type="number" class="form-control" id="jalanmantap" value="{{$dataedit->kemantapan_jalan_mantap}}" placeholder="{{$dataedit->kemantapan_jalan_mantap}}">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-6">

                                            <div>
                                                <br>
                                                <br>
                                            </div>

                                            <div class="form-group row">
                                                <label for="jalantidakmantap" class="col-6">Tidak Mantap</label>
                                                <div class="col-6">
                                                    <input name="jalantidakmantap" type="number" class="form-control" id="jalantidakmantap" value="{{$dataedit->kemantapan_jalan_tidak}}" placeholder="{{$dataedit->kemantapan_jalan_tidak}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="aksesjalan" class="col-3">Akses Jalan</label>
                                        <div class="col-9">
                                            <select name="aksesjalan" class="form-control" >
                                                <option value="N" @if($value->akses_jalan=='N')
                                                    selected="selected "@endif>N</option>
                                                <option value="P" @if($value->akses_jalan=='P')
                                                selected="selected "@endif>P</option>
                                                <option value="K"@if($value->akses_jalan=='K')
                                                selected="selected "@endif>K</option>
                                            </select>

                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="lhr" class="col-3">Lalu Lintas Harian</label>
                                        <div class="col-9">
                                            <input name="lhr" type="number" class="form-control" id="lhr" value="{{$dataedit->lhr}}" placeholder="{{$dataedit->lhr}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-10"></div>
                                        <div class="col-2"> <div class="col 2"><button type="submit" class="btn btn-primary">Simpan</button></div></div>

                                    </div>

                                </div>
                                <!-- /.card-body -->


                            </div>

                            <!-- /.card -->

                        </div>


                    </div>


                </div>



            </form>

        <!-- /.card -->

    </section>
@endsection
