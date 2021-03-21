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
<h3>ফায়ার সার্ভিস যোগ করুন</h3>
        <div class="card-body">
        <form method="post" action="{{route('fireservice_store')}}" enctype="multipart/form-data">
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
</div>

</section>

@endsection