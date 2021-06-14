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
                <input type="text" name="name" class="form-control"  id="exampleFormControlInput1" placeholder="ডাক্তারের নাম লিখুন। যেমন: ডা. হুমায়ুন কবীর">
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
                <textarea class="textarea" name="degree" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                </textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">পদবী</label>
                <textarea class="textarea" name="designation" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                </textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">কর্মস্থল</label>
                <textarea class="textarea" name="working_place" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                </textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">কোন বিষয়ে বিশেষজ্ঞ</label>
                <textarea class="textarea" name="specialist" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                </textarea>
              </div>

              <div class="form-group">
                <!--<label for="exampleFormControlInput1">বিএমডিসি রেজি. নং:</label>-->
                <textarea class="textarea" name="reg_no" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">বিএমডিসি রেজি. নং এ- &nbsp;</textarea>
              </div>

              <div class="form-group" > 
                <label for="exampleFormControlInput1">চেম্বার</label>&nbsp 
                <span><i class="fas fa-plus-square"onclick="createNewElement();"></i></span>
                <textarea class="textarea" name="chamber[]" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                </textarea>
              </div>

              
                <div  id="newElementId">More Chamber</div>
                
              <br>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select name="status" class="form-control" id="exampleFormControlSelect1" >
                  <option value="1">Active</option>
                  <option value="0">Pending</option>
                  
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
	txtNewInputBox.innerHTML = '<textarea class="textarea" name="chamber[]" placeholder="Place some text here" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">'
               
                '</textarea>';


    // Finally put it where it is supposed to appear.
	document.getElementById("newElementId").appendChild(txtNewInputBox);
}
</script>

@endsection