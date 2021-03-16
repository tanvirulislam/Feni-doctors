@extends('admin.master.master')
@section('title')
Doctor add
@endsection

@section('body')

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>ডাক্তার</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">ডাক্তার</li> 

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
            <form method="post" action="{{route('admin.doctor.store')}}" enctype="multipart/form-data">
              @csrf

              <div class="form-group">
                <label for="exampleFormControlInput1">নাম</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="ডাক্তারের নাম লিখুন। যেমন: ডা. হুমায়ুন কবীর">
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">বিভাগ</label>

                <select name="category" class="form-control" id="exampleFormControlSelect1">
                  <option value="" class="form-control">বিভাগ  বাছাই করুন</option>
                  @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->cat_name}}</option>
                  @endforeach
                  
                </select>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">ডিগ্রি</label>
                <textarea rows="" cols=""  name="degree" class="form-control" id="exampleFormControlInput1" placeholder="বিএমডিসি অনুমোদিত ডিগ্রি এবং কোর্সের নাম লিখুন। যেমন: এমবিবিএস; এমডি (কার্ডিওলজি)..."></textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">পদবী</label>
                <textarea rows="" cols=""  name="designation" class="form-control" id="exampleFormControlInput1" placeholder="মেডিকেল অফিসার / কনসালট্যান্ট / সহকারী অধ্যাপক... (না থাকলে খালি রাখুন)"></textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">কর্মস্থল</label>
                <textarea rows="" cols=""  name="working_place" class="form-control" id="exampleFormControlInput1" placeholder="কর্মস্থলের নাম লিখুন। যেমন: ২৫০ শয্যা বিশিষ্ট আধুনিক সদর হাসপাতাল, ফেনী। (না থাকলে খালি রাখুন)"></textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">কোন বিষয়ে বিশেষজ্ঞ</label>
                <textarea rows="" cols=""  name="specialist" class="form-control" id="exampleFormControlInput1" placeholder="যেমন: হৃদরোগ বিশেষজ্ঞ / জেনারেল ফিজিশিয়ান..."></textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">বিএমডিসি রেজি. নং:</label>
                <textarea rows="" cols=""  name="reg_no" class="form-control" id="exampleFormControlInput1" placeholder="বিএমডিসি রেজি. নং:"></textarea>
              </div>

              <div class="form-group" > 
                <label for="exampleFormControlInput1">চেম্বার</label>&nbsp <span><i class="fas fa-plus-square"onclick="createNewElement();"></i></span>
                <textarea rows="" cols=""  name="chamber" class="form-control" id="exampleFormControlInput1" placeholder="চেম্বারের নাম লিখুন। যেমন: ভাইটাল রিসার্চ ইউনিট-২"></textarea>
              </div>

              <!-- <div id="dynamicCheck">
                <input type="button" value="Create Element" onclick="createNewElement();" />
              </div> -->
              
                <div  id="newElementId">More Chamber</div>
                
              <br>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select name="Status" class="form-control" id="exampleFormControlSelect1" >
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

<script type="text/JavaScript">
function createNewElement() {
    // First create a DIV element.
	var txtNewInputBox = document.createElement('div');

    // Then add the content (a new input box) of the element.
	txtNewInputBox.innerHTML = "<input type='text' id='newInputBox' class='form-control' placeholder='Add another chamber' >";


    // Finally put it where it is supposed to appear.
	document.getElementById("newElementId").appendChild(txtNewInputBox);
}
</script>

@endsection