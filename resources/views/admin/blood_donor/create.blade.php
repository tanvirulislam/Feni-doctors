@extends('admin.master.master')
@section('title')
রক্তদাতা
@endsection

@section('body')

<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>রক্তদাতা</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">রক্তদাতা</li> 

        </ol>
      </div>
    </div>
  </div>
</section>

<section class="content"> 
  <div class="container-fluid">
    <div class="row">
     <div class="col-md-12">
      <div class="card" style="">
        <div class="card-body">
        <form method="post" action="{{route('admin.blood_donor.store')}}" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <label for="exampleFormControlSelect1">রক্তের গ্রুপ</label>
            <select name="blood_group" class="form-control" id="exampleFormControlSelect1">
              @foreach($blood_group as $catagory)
              <option value="{{$catagory->id}}">{{$catagory->name}}</option>
              @endforeach
              
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">নাম</label>
            <input type="text" name="name" required class="form-control" id="exampleFormControlInput1" placeholder="নাম">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">ঠিকানা</label>
            <textarea class="textarea" name="address" required placeholder="ঠিকানা" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
          </div>

          
          <div class="form-group">
            <label for="exampleFormControlInput1">মোবাইল</label>
            <input type="text" name="mobile" required class="form-control" id="exampleFormControlInput1" placeholder="মোবাইল">
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">অবস্থা</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1">
              <option value="1">Active</option>
              <option value="0">Inactive</option>
              
            </select>
          </div>
          
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