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

  <div class="about">
    <div class="abt-layer" style="margin-top: -52px;">
        <div class="container-fluid">
            <div class="about-main" style="background: none;">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="
                        color: #31c3d4;
                        text-align: center;
                        margin-bottom: 19px;
                        text-shadow: 0px 1px 3px #777;
                        ">আপনার ডাক্তার খোঁজ করুন এখানেই</h2>
                      
                            <div class="row">
                                        @foreach($categories as $cat)
                                        <div class="col-md-4 col-lg-3 col-6">
                                    <div class="catrgory_box" style="margin-bottom: 9px;     ">
                                        <div class="card card_hover" style="height:190px;text-align: center;">
                                        <a href="{{route('category_details', $cat->id)}}" class="nav-link">

                                             <center><img class="img-fluid" style="    width: 87px;height: 89px;" src="{{asset('/')}}{{$cat->cat_img}}" alt="Card image cap"></center>
                                            
                                           
                                                <div class="card-body">
                                                    <h6 style=" color: #31c3d4;" class="card-title">{{$cat->cat_name}}</h6>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                    </div>
                                        @endforeach
                                  
                                </div>
                                
                                
                            </div>

                    
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection