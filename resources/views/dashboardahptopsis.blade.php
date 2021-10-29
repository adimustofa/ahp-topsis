@extends('layout.main')

@section('title', 'Dashboard')



@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
         <div class="row">
             <div class="col-lg-12 col-12">
                 <br>
                 <br>
                 <h2 class="text-center" >Prioritas Perbaikan Jalan</h2>
                 <br>
                 <br>

             </div>
         </div>
            <div class="row">

                <div class="col-lg-3 col-6"></div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$jumlahdata['jalan']}}</h3>

                            <p>Jalan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>{{$jumlahdata['survey']}}</h3>

                            <p>Survey</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>

        </div><!-- /.container-fluid -->
    </section>

@endsection
