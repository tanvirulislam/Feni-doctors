@extends('front_end.master.master')

@section('title')
Ambulance
@endsection

@section('body')

<section class="content"> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="{{route('fireservice_create')}}" type="button" class=" btn btn-success">নতুন যোগ করুন </a>
                            </div>
                        </div>
                    </div>

                    <div class="row ">
                        <b class="card-title text-center text_gradient">Fire services</b>
                        @php($i=1)
                        @foreach($categories as $cat)
                        <div class="col-md-4 col-lg-3 pt-2 pb-2" >
                            <div class="card" style="font-family: bangla;">
                                <div class="card-body">
                                        <div class="row">
                                            <div class="col-5 col-md-5">
                                                <b class="text_gradient">নাম: </b>
                                            </div>
                                            <div class="col-7 col-md-7">
                                                {{$cat->name}}
                                            </div>
                                        </div>

                                        <div class="row">   
                                        <div class="col-5 col-md-5">
                                                <b class="text_gradient">মোবাইল: </b>
                                            </div> 
                                            <div class="col-7 col-md-7">
                                              
                                                {{$cat->mobile}}
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- <div class="row ">
                    <b class="card-title text-center">Ambulance services</b>
                    @php($i=1)
                    @foreach($categories as $cat)
                    <div class="col-md-4 pt-2 pb-2" >
                        <div class="card" style="">
                            <div class="card-body">
                                <ul class="list-group">
                                <li class="list-group-item">Name: {{$cat->name}}</li>
                                <li class="list-group-item">Phone: {{$cat->mobile}}</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    </div> -->

                </div>
            </div>
        </div>
    </div>

</section>

@endsection