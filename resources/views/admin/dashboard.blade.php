@extends('admin.master.master')

@section('title')
Home | Feni Doctor
@endsection


@section('body')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <!-- <h3>150</h3> -->

                <p>Ambulance</p> 
                &nbsp;  <b style="color:white">{{$ambulance}}</b>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
               
              </div>
              <a href="{{ route('admin.ambulance') }}" class="small-box-footer">Click Here For Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <!-- <h3>53<sup style="font-size: 20px">%</sup></h3> -->

                <p>Hospital</p>
                &nbsp;  <b style="color:white">{{$hospital}}</b>

              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ route('admin.hospital') }}" class="small-box-footer">Click Here For Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <!-- <h3>44</h3> -->

                <p>Blood</p>
                &nbsp;  <b style="color:black">{{$blooddonor}}</b>

              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ route('admin.blood_donor') }}" class="small-box-footer">Click Here For Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <!-- <h3>65</h3> -->

                <p>Police</p>
                &nbsp;  <b style="color:white">{{$police}}</b>

              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ route('admin.police') }}" class="small-box-footer">Click Here For Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <!-- <h3>53<sup style="font-size: 20px">%</sup></h3> -->

                <p>Fire Servece</p>
                &nbsp;  <b style="color:white">{{$fireservice}}</b>

              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ route('admin.fire-service') }}" class="small-box-footer">Click Here For Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <!-- <h3>53<sup style="font-size: 20px">%</sup></h3> -->

                <p>Doctor</p>
                &nbsp;  <b style="color:white">{{$doctor}}</b>

              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ route('admin.doctor') }}" class="small-box-footer">Click Here For Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
       
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection