@extends('front_end.master.master')

@section('title')
Feni doctors
@endsection

@section('body')

<div class="about">
    <div class="abt-layer" style="margin-top: -52px;">
        <div class="container">
            <div class="about-main">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="
                        color: #ffab67;
                        text-align: center;
                      
                        margin-bottom: 19px;
                        text-shadow: 3px 9px 10px black;
                        ">আপনার ডাক্তার খোঁজ করুন এখানেই</h2>
                        <form method="get" action="{{route('search_doctor')}}">
                            <div class="row">
                                <div class="col-md-12">
                                    <select name="search" class="form-select form-control" aria-label="Default select example">
                                        <option selected>বিভাগ  বাছাই করুন</option>
                                        @foreach($category as $categories)
                                        <option value="{{$categories->id}}">{{$categories->cat_name}}<img src="{{asset('/')}}{{$categories->cat_img}}" width="70px" height="70px"></option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="col-md-12 mt-2">
                                    
								<center><button style="background: transparent;" type="submit" class="btn btn-primary">
								Search
								</button></center>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!--//about-->

<section class="departments">
    <div class="departments-1 py-lg-5">
        <div class="container py-5" style="box-shadow: 5px 10px 50px 2px;
    ">
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
