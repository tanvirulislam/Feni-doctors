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
                </div>
              </div>
            </div>


           
            <div class="row ">
                    <b style="font-family: bangla;" class="card-title text-center  mt-2">    
                    {{$departmentName}}
                              </b>
                    @php($i=1)
                    @foreach($doctor as $doctors)
                    <div class="col-md-4 col-lg-3 pt-2 pb-2" >
                        <div class="card" style="">
                            <div class="card-body" style="font-family: bangla; line-height: 1;">

                              <div class="row">
                                  <div class="col-3 col-md-4">
                                       <b class="text_gradient">নাম: {{$doctors->dr}}</b>
                                     </div>
                                    <div class="col-9 col-md-8">
                                       <p class="doc_info_p" ><b>{{$doctors->name}}</b> </p>
                                      </div>
                                </div>
                               

                                <div class="row">
                                  <div class="col-3 col-md-4">
                                      <b class="text_gradient">ডিগ্রি,<br>পদবী ও<br>কর্মস্থল: </b>
                                     </div>
                                    <div class="col-9 col-md-8">
                                      <p class="doc_info_p">  {!!$doctors->degree!!}</p> <p class="doc_info_p">  {{$doctors->designation}} </p>
                                      <p class="doc_info_p">  {!!$doctors->working_place!!} </p>
                                      <p class="doc_info_p"><b>{!!$doctors->specialist!!}</b></p> <p class='doc_info_p'>{{$doctors->reg_no}}</p>
                                    </div>
                                </div>

                                <div class="row">
                                  <div class="col-3 col-md-4">
                                       <b class="text_gradient">চেম্বার: </b>
                                     </div>
                                    <div class="col-9 col-md-8">
                                    @foreach($chamber as $chambers)
                                    @if($chambers->doctor_id == $doctors->id)
                                    {!!$chambers->more_chamber!!}
                                    @endif
                                    @endforeach
                                    <p class="doc_info_p"> {!!$doctors->chamber!!}</p>
                                    <p class="doc_info_p"> {{$doctors->time}}</p>
                                    <p class="doc_info_p"> {{$doctors->mobile}}</p>
                                    <p class="doc_info_p"> {{$doctors->chamber_location}}</p>
                                      </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>


          </div>
        </div>
      </div>
    </div>

  </section>

  
@endsection