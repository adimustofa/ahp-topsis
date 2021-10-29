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
                        <form method="POST" action="{{url('simpandata') }}" enctype="multipart/form-data">
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
                                                    <label for="noruasjalan" class="col-3">No Ruas Jalan</label>
                                                    <div class="col-9">
                                                        <input name="noruasjalan" type="number" class="form-control" id="noruasjalan" placeholder="Masukan No Ruas Jalan">
                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <label for="namajalan" class="col-3">Nama Jalan</label>
                                                    <div class="col-9">
                                                        <input name="namajalan" type="text" class="form-control" id="nama" placeholder="Masukan Nama Jalan">
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <div class="form-group row">
                                                            <label for="panjangjalan" class="col-6">Panjang </label>
                                                            <div class="col-6">
                                                                <input name="panjangjalan" type="number" step="0.01" class="form-control" id="panjangjalan">
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
                                                                <input name="kondisibaik" type="number" class="form-control" id="kondisibaik">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="kondisisedang" class="col-6">Sedang</label>
                                                            <div class="col-6">
                                                                <input name="kondisisedang" type="number" class="form-control" id="kondisisedang">
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
                                                                <input name="semenisasiaspal" type="number" class="form-control" id="ksemenisasiaspal">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="semenisasirigid" class="col-6">Rigid</label>
                                                            <div class="col-6">
                                                                <input name="semenisasirigid" type="number" class="form-control" id="semenisasirigid">
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
                                                                <input name="jalanmantap" type="number" class="form-control" id="jalanmantap">
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group row">
                                                            <label for="lebarjalan" class="col-6">Lebar </label>
                                                            <div class="col-6">
                                                                <input name="lebarjalan" type="number" class="form-control" id="lebarjalan" >
                                                            </div>
                                                        </div>
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
                                                        <div>
                                                            <br>
                                                            <br>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="semenisasitanah" class="col-6">Tanah</label>
                                                            <div class="col-6">
                                                                <input name="semenisasitanah" type="number" class="form-control" id="semenisasitanah">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="semenisasibelumtembus" class="col-6">Belum Tembus</label>
                                                            <div class="col-6">
                                                                <input name="semenisasibelumtembus" type="number" class="form-control" id="semenisasibelumtembus">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <br>
                                                            <br>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="tidakmantap" class="col-6">Tidak Mantap</label>
                                                            <div class="col-6">
                                                                <input name="tidakmantap" type="number" class="form-control" id="tidakmantap">
                                                            </div>
                                                        </div>

                                                    </div>


                                                </div>
                                                <div class="form-group row">
                                                    <label for="lhr" class="col-3">Lalu Lintas Harian</label>
                                                    <div class="col-9">
                                                        <input name="lhr" type="number" class="form-control" id="lhr" placeholder="">
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
                                                        <input name="keterangan" type="text" class="form-control" id="keterangan" placeholder="">
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
                            Panjang
                        </th>
                        <th>
                            Lebar
                        </th>

                        <th>
                            Keterangan
                        </th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($jalan as $value)

                        <tr>
                            <td>{{$loop -> iteration}}</td>
                            <td>{{$value->nama_jalan}}</td>
                            <td>{{$value->panjang_jalan}}</td>
                            <td>{{$value->lebar_jalan}}</td>
                            <td>{{$value->keterangan}}</td>


                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{url('/editjalan/'.$value->id_jalan)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="{{url('/hapusdatajalan/'.$value->id_jalan)}}" onclick="return confirm('Hapus Data ini??');">
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
