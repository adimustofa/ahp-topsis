@extends('layout.main')

@section('title', 'Data Jalan Keseluruhan')



@section('content')
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">

                <div class="card-tools">
                    <a class="btn btn-success" href="{{url('jalan/create')}}">

                        </i>
                        Tambah Data
                    </a>
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
                                <a class="btn btn-info btn-sm" href="">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#" onclick="return confirm('Hapus pelatihan ini??');">
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
