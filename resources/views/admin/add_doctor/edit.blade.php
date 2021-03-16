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
        <form method="post" action="{{route('admin.doctor.update')}}">
            @csrf
            <input type="hidden" name="id" value="{{$doctor->id}}" class="form-control" id="exampleFormControlInput1">

            <div class="form-group">
                <label for="exampleFormControlInput1">নাম</label>
                <input type="text" name="name" value="{{$doctor->name}}" class="form-control" id="exampleFormControlInput1" placeholder="ডাক্তারের নাম লিখুন। যেমন: ডা. হুমায়ুন কবীর">
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">বিভাগ</label>

                <select name="category"  class="form-control" id="exampleFormControlSelect1">
                  <option value="" class="form-control">বিভাগ  বাছাই করুন</option>
                  @foreach($categories as $category)
                  <option value="{{$category->id}}"{{ $category->id == $doctor->category ? 'selected' : '' }}>{{$category->cat_name}}</option>
                  @endforeach
                  
                </select>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">ডিগ্রি</label>
                
                <textarea class="textarea" name="degree" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                {!!$doctor->degree!!}
                </textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">পদবী</label>
                
                <textarea class="textarea" name="designation" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                {!!$doctor->designation!!}
                </textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">কর্মস্থল</label>
                
                <textarea class="textarea" name="working_place" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                {!!$doctor->working_place!!}
                </textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">কোন বিষয়ে বিশেষজ্ঞ</label>
                
                <textarea class="textarea" name="specialist" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                {!!$doctor->specialist!!}
                </textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">বিএমডিসি রেজি. নং:</label>
                
                <textarea class="textarea" name="reg_no" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                {!!$doctor->reg_no!!}
                </textarea>
              </div>

              <div class="form-group" > 
                <label for="exampleFormControlInput1">চেম্বার</label>&nbsp <span><i class="fas fa-plus-square"onclick="createNewElement();"></i></span>
                
                 
                <textarea class="textarea" name="chamber" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                {!!$doctor->chamber!!}
                </textarea>
              </div>

              <!-- <div id="dynamicCheck">
                <input type="button" value="Create Element" onclick="createNewElement();" />
              </div> -->
              
                <div  id="newElementId">More Chamber</div>
                
              <br>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select name="status" class="form-control" id="exampleFormControlSelect1" >
                  <option value="1" {{ $doctor->status == 1 ? 'selected' : '' }}>Active</option>
                  <option value="0" {{ $doctor->status == 0 ? 'selected' : '' }}>Inactive</option>
                  
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