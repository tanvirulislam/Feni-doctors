@extends('front_end.master.master')

@section('title')
Feni doctors
@endsection

@section('body')

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
                                    @foreach($category as $categories)
                                    <div class="col-md-4 col-lg-3 col-6">
                                    <div class="catrgory_box" style="margin-bottom: 9px;     ">
                                        <div class="card card_hover" style="height:190px;text-align: center;">
                                        <a href="{{route('category_details', $categories->id)}}" class="nav-link">

                                             <center><img class="img-fluid" style="    width: 87px;height: 89px;" src="{{asset('/')}}{{$categories->cat_img}}" alt="Card image cap"></center>
                                            
                                           
                                                <div class="card-body">
                                                    <h6 style=" color: #31c3d4;" class="card-title">{{$categories->cat_name}}</h6>
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

<!--//about-->

        <section class="departments">
             <div class="departments-1 py-lg-5">
                <div class="container py-5" style="box-shadow: 5px 10px 50px 2px; ">
                    <div class="text-center wthree-title pb-sm-5 pb-3">
                    <!-- <h3 class="w3l-sub text-black">Departments</h4>-->
                   
                    </div>
                    <div class="row " >
                        <div class="col-sm-4 w3-ab">
                            <div class="w3-ab-grid text-center">
                                <div class="w3-aicon p-4">
                                   <a href="{{route('fireservice')}}"><img src="{{asset('/')}}public/front_end/images/fire.png" alt="picture"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 w3-ab">
                            <div class="w3-ab-grid text-center">
                                <div class="w3-aicon p-4">
                                <a href="{{route('alloambulance')}}"><img src="{{asset('/')}}public/front_end/images/ambulance.png" alt="picture"></a>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 w3-ab">
                            <div class="w3-ab-grid text-center">
                                <div class="w3-aicon p-4">
                                <a href="{{route('hospital')}}"><img src="{{asset('/')}}public/front_end/images/hospital.png" alt="picture"></a>
                                   
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="row ">
                    <div class="col-md-2"></div>
                    <div class="col-md-4 text-center">
                            <div class="w3-ab-grid text-center">
                                <div class="w3-aicon  p-4">
                                <a href="{{route('police')}}"><img src="{{asset('/')}}public/front_end/images/police.png" alt="picture"></a>

                                </div>
                            </div>
                    </div>
                    <div class="col-md-4 text-center">
                            <div class="w3-ab-grid text-center">
                                <div class="w3-aicon p-4">
                                <a href="{{route('blood_group')}}"><img src="{{asset('/')}}public/front_end/images/blood.png" alt="picture"></a>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>

                </div>
            </div>
        </section>

 

 @endsection
