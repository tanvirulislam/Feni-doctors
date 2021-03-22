@extends('front_end.master.master')

@section('title')
Doctor details
@endsection

@section('body')





<section class="content"  > 
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card" style="">
            <div class="card-header">
              <div class="row">
                <div class="col-md-3">
                  <!-- <a href="{{route('admin.doctor.create')}}" type="button" class="btn btn-success">Add </a> -->
                </div>
              </div>
            </div>
            <div class="card-body">
                <div class = "table-responsive">
              <table class="table table-bordered responsive" id="example1">
                <thead>
                  <tr>
                    <th scope="col">ক্রমিক সংখ্যা</th>
                    <th scope="col">নাম</th>
                    <th scope="col">বিভাগ</th>
                    <th scope="col">ডিগ্রি, পদবী, কর্মস্থল</th>
                    
                    <th scope="col">চেম্বার    </th>               
                  
                  </tr>
                </thead>
                <tbody >

                  @php($i=1)
                  @foreach($doctor as $doctors)
                  <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{$doctors->name}}</td>
                    <td>
                      @foreach($categories as $category)
                      @if($category->id == $doctors->category)
                      {{ $category->cat_name }}
                      @endif
                      @endforeach
                    </td>
                    <td>{{$doctors->degree}}{{$doctors->designation}}{{$doctors->working_place}}</td>
                   
                    <td>
                    @foreach($chamber as $chambers)
                    @if($chambers->doctor_id == $doctors->id)
                    {{$chambers->more_chamber}}
                    @endif
                    @endforeach
                    <b>{{$doctors->chamber}}</b><br>
                    {{$doctors->time}},<br>
                    {{$doctors->mobile}},<br>
                    {{$doctors->chamber_location}}

                    </td>
                    

                    
                  </tr>
                  @endforeach
                </tbody>
                
              </table>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  
@endsection