@extends('admin.master.master')
@section('title')
Banner
@endsection

@section('body')

<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>ব্যানার</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">ব্যানার</li> 

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
        <form method="post" action="{{route('admin.banner.store')}}" enctype="multipart/form-data">
          @csrf
          
                <div class="form-group">
                    <label for="exampleFormControlFile1">ছবি</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
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