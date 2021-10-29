@extends('layout.main')

@section('title', 'Data Jalan Keseluruhan')



@section('content')
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">

                <div class="card-tools">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                        Tambah Data
                    </button>
                </div>
                <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                        <form method="POST" action="{{url('simpandatasurvey') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tambah Data Jalan</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
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
                                                                <input name="kondisibaik" type="number" class="form-control" id="kondisibaik">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="kondisisedang" class="col-6">Sedang</label>
                                                            <div class="col-6">
                                                                <input name="kondisisedang" type="number" class="form-control" id="kondisisedang">
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
                                                                <input name="kondisirusakringan" type="number" class="form-control" id="kondisirusakringan">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="kondisirusakberat" class="col-6">Rusak Berat</label>
                                                            <div class="col-6">
                                                                <input name="kondisirusakberat" type="number" class="form-control" id="kondisirusakberat">
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
                                                                <input name="jalanrusakberat" type="number" class="form-control" id="jalanrusakberat">
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
                                                                <input name="jalanrusaksedang" type="number" class="form-control" id="jalanrusaksedang">
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
                                                                <input name="jalanrusakringan" type="number" class="form-control" id="jalanrusakringan">
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
                                                                <input name="jalanaspal" type="number" class="form-control" id="jalanaspal">
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
                                                                <input name="jalanrigid" type="number" class="form-control" id="jalanrigid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div>
                                                            <br>
                                                            <br>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="jalanrtanah" class="col-6">Tanahn</label>
                                                            <div class="col-6">
                                                                <input name="jalantanah" type="number" class="form-control" id="jalantanah">
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
                                                                <input name="jalanmantap" type="number" class="form-control" id="jalanmantap">
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
                                                                <input name="jalantidakmantap" type="number" class="form-control" id="jalantidakmantap">
                                                            </div>
                                                        </div>
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
                                                    <label for="lhr" class="col-3">Lalu Lintas Harian</label>
                                                    <div class="col-9">
                                                        <input name="lhr" type="number" class="form-control" id="lhr" placeholder="">
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- /.card-body -->

                                            <div class="card-footer">

                                            </div>
                                        </div>
                                        <!-- /.card -->

                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                        <!-- /.modal-content -->
                    </div>

                </div>
            </div>
            <div class="card-body p-0">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            No.
                        </th>
                        <th style="width: 20%">
                            Nama Jalan
                        </th>
                        <th>
                            LHR
                        </th>
                        <th>
                            Akses
                        </th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($survey as $value)

                        <tr>
                            <td>{{$loop -> iteration}}</td>
                            <td>{{$value->nama_jalan}}</td>
                            <td>{{$value->lhr}}</td>
                            <td>{{$value->akses_jalan}}</td>



                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{url('/editsurvey/'.$value->id_survey)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="{{url('/hapusdatasurvey/'.$value->id_survey)}}" onclick="return confirm('Hapus Data Survey ini??');">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>

                        </tr>


                    @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
@endsection
