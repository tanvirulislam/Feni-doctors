@extends('front_end.master.master')

@section('title')
Blood group
@endsection

@section('body')

<section class="content"> 
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <div class="card" style="font-family: bangla;" >
            <div class="card-header">
            <h3>আপনি কোন গ্রুপের রক্ত খুঁজছেন ?</h3>
            <div class="row">
            <!-- <div class="col-md-3">
            <a href="{{route('hospital_create')}}" type="button" class="btn btn-success">নতুন যোগ করুন </a>
            </div> -->
        </div>
        </div>
        <div class="card-body">
        <div class="row">
       
               
                @foreach($categories as $cat)
                <div class="col-3 col-md-3" style="background:red; border:1px solid white">
                <a style="color: white;text-decoration: none;" href="{{route('groupwise_blood_donate', $cat->id)}}">{{ $cat->name }}</a>
                </div>
                @endforeach
                
                <!-- <tr >
                    <td></td>
                </tr> -->
              
                </div>
        <p>আপনে কি রক্ত দানে ইচ্ছুক ? তাহলে এখানে       <a href="{{route('blood_donate_create')}}">  ক্লিক করুন</a></p>
        </div>
    </div>
    </div>
    </div>
    </div>

    </section>

@endsection