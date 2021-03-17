@extends('admin.master.master')
@section('title')
বিভাগ
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
        <form method="post" action="{{route('admin.banner.update')}}">
            @csrf

            <input type="hidden" name="id" value="{{$category->id}}" class="form-control" id="exampleFormControlInput1">

          
                    <div class="form-group">
                        <label for="exampleFormControlFile1">ছবি</label>
                        <input type="file" name="image" value="{{$category->image}}" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <div class="form-group">
          <label for="exampleFormControlSelect1">অবস্থা</label>
          <select name="status" class="form-control" id="exampleFormControlSelect1">
            <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Active</option>
            <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Inctive</option>

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