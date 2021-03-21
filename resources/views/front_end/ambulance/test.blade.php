@extends('front_end.master.master')

@section('title')
Ambulance
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
                                <div class="col-md-10">
                                    <select name="search" class="form-select form-control" aria-label="Default select example">
                                        <option selected>বিভাগ  বাছাই করুন</option>
                                        @foreach($Doctorcategory as $doccat)
                                        <option value="{{$doccat->id}}">{{$doccat->cat_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="col-md-2">
                                    
								<center><button style="background: transparent;" type="submit" class="btn btn-primary">
								<span><i style="color: #ffab61;" class="fas fa-search"></i> </span>
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
<section class="content"> 
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <div class="card" style="">
            <div class="card-header">
            <div class="row">
            <div class="col-md-3">
            <a href="{{route('ambulance_create')}}" type="button" class="btn btn-success">নতুন যোগ করুন </a>
            </div>
        </div>
        </div>
        <div class="card-body">
            <div class = "table-responsive">
<table class="table table-bordered" id="example1">
            <thead>
            <tr>
                <th scope="col">ক্রমিক সংখ্যা</th>
                <th scope="col">নাম</th>
                <th scope="col">মোবাইল</th>
              
            </tr>
            </thead>
            <tbody >

                @php($i=1)
                @foreach($categories as $cat)
                <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $cat->name }}</td>
                <td>{{$cat->mobile}}</td>
                

                
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