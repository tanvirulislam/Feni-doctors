@extends('admin.master.master')
@section('title')
পুলিশ  সার্ভিস
@endsection

@section('body')

<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>পুলিশ  সার্ভিস</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">পুলিশ  সার্ভিস</li> 

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
        <form method="post" action="{{route('admin.police.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="exampleFormControlInput1">নাম</label>
            <input type="text" name="name" required class="form-control" id="exampleFormControlInput1" placeholder="নাম">
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