@extends('front_end.master.master2')

@section('title')
Blood donor
@endsection

@section('body')

<div class="content-wrapper">



<section class="content"> 
  <div class="container-fluid">
    <div class="row">
     <div class="col-md-12">
      <div class="card" style="font-family: bangla;">
        <div class="card-body">
        <form method="post" action="{{route('blood_donate_store')}}" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <label for="exampleFormControlSelect1">রক্তের গ্রুপ</label>
            <select id="select" name="blood_group" class="form-control" id="exampleFormControlSelect1">
            <option style="font-family: bangla; font-size:20px"  data-image="{{asset('/')}}public/front_end/img/down_arrow.png" >রক্তের গ্রুপ বাছাই করুন </option>
              @foreach($blood_group as $catagory)
              <option style="font-family: bangla; font-size:20px" value="{{$catagory->id}}" >{{$catagory->name}}</option>
              @endforeach
              
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">নাম</label>
            <input type="text" name="name" required class="form-control" id="exampleFormControlInput1" placeholder="নাম">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">ঠিকানা</label>
            <textarea class="textarea" name="address" required placeholder="ঠিকানা" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
          </div>

          
          <div class="form-group">
            <label for="exampleFormControlInput1">মোবাইল</label>
            <input type="text" name="mobile" required class="form-control" id="exampleFormControlInput1" placeholder="মোবাইল">
          </div>

         
          <br>
          <button type="submit" class="btn btn-success">Submit</button>

          
        </form>
        </div>

      </div>
    </div>
  </div>
</div>

</section>

</div>

@endsection