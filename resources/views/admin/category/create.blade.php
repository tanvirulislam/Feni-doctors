@extends('admin.master.master')
@section('title')
Category add
@endsection

@section('body')

<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>বিভাগ</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">বিভাগ</li> 

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
        <form method="post" action="{{route('admin.category.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="exampleFormControlInput1">বিভাগ</label>
            <input type="text" name="cat_name" class="form-control" id="exampleFormControlInput1" placeholder="বিভাগ">
          </div>

        
                <div class="form-group">
                    <label for="exampleFormControlFile1">ছবি</label>
                    <input type="file" name="cat_img" class="form-control-file" id="exampleFormControlFile1">
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