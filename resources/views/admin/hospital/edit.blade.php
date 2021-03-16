@extends('admin.master.master')
@section('title')
হাসপাতাল
@endsection

@section('body')
<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>হাসপাতাল</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">হাসপাতাল</li> 

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
        <form method="post" action="{{route('admin.hospital.update')}}">
            @csrf

            <input type="hidden" name="id" value="{{$category->id}}" class="form-control" id="exampleFormControlInput1">

            <div class="form-group">
            <label for="exampleFormControlInput1">নাম</label>
            <input type="text" name="name" value="{{$category->name}}" class="form-control" id="exampleFormControlInput1" placeholder="নাম">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">ঠিকানা</label>
            <!-- <input type="text" name="address" class="form-control" id="exampleFormControlInput1" placeholder="ঠিকানা"> -->
            <textarea class="textarea" name="address"  placeholder="ঠিকানা" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
            {!!$category->address!!}
            </textarea>
          </div>

          
          <div class="form-group">
            <label for="exampleFormControlInput1">মোবাইল</label>
            <input type="text" name="mobile" value="{{$category->mobile}}" class="form-control" id="exampleFormControlInput1" placeholder="মোবাইল">
          </div>

          div class="form-group">
          <label for="exampleFormControlSelect1">অবস্থা</label>
          <select name="status" class="form-control" id="exampleFormControlSelect1">
            <option value="1" {{ $subcat->status == 1 ? 'selected' : '' }}>Active</option>
            <option value="0" {{ $subcat->status == 0 ? 'selected' : '' }}>Inctive</option>

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