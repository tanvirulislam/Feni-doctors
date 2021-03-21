@extends('front_end.master.master')

@section('title')
Add doctor
@endsection

@section('body')

  <section class="content"> 
    <div class="container-fluid">
      <div class="row">
       <div class="col-md-12">
        <div class="card" style="">
          <div class="card-body">
            <form method="post" action="{{route('doctor_store')}}" enctype="multipart/form-data">
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
                  <label>ডিগ্রি </label>
                  <textarea name="degree" id="txtarea1" cols="50" rows="8" class="form-control1" style="width:100%;height:100px;" placeholder="বিএমডিসি অনুমোদিত ডিগ্রি এবং কোর্সের নাম লিখুন। 
যেমন: এমবিবিএস; এমডি (কার্ডিওলজি)..."></textarea>
              </div>
             

              <div class="form-group">
                <label for="exampleFormControlInput1">পদবী</label><br>
                <small>মেডিকেল অফিসার / কনসালট্যান্ট / সহকারী অধ্যাপক... 
(না থাকলে খালি রাখুন)</small>
                <textarea  name="designation" placeholder="মেডিকেল অফিসার / কনসালট্যান্ট / সহকারী অধ্যাপক... 
(না থাকলে খালি রাখুন)" id="txtarea1" cols="50" rows="8" class="form-control1" style="width:100%;height:100px;">
                </textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">কর্মস্থল</label><br>
                <small>কর্মস্থলের নাম লিখুন। যেমন: ২৫০ শয্যা বিশিষ্ট আধুনিক সদর হাসপাতাল, ফেনী। 
(না থাকলে খালি রাখুন)</small>
                <textarea class="textarea" name="working_place" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                </textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">কোন বিষয়ে বিশেষজ্ঞ</label><br>
                <small>যেমন: হৃদরোগ বিশেষজ্ঞ / জেনারেল ফিজিশিয়ান...</small>
                <textarea class="textarea" name="specialist" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                </textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">বিএমডিসি রেজি. নং:</label><br>
                <small>বিএমডিসি রেজি. নং
 </small>
                <textarea class="textarea" name="reg_no" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                </textarea>
              </div>

              <div class="form-group" > 
                <label for="exampleFormControlInput1">চেম্বার</label>&nbsp  <span><i class="fas fa-plus-square"onclick="createNewElement();"></i></span><br>
                <small>রোগী দেখার দিন ও সময় লিখুন। যেমন:শনি-বৃহস্পতিবার বিকাল ৩টা-রাত ৯টা। শুক্রবার বন্ধ</small>
                <small>চেম্বারের নাম লিখুন। যেমন: ভাইটাল রিসার্চ ইউনিট-২</small>
                <small>চেম্বারের ঠিকানা লিখুন। যেমন: সৈয়দ মার্কেট, এস.এস.কে রোড, ফেনী।</small>
                <small>সিরিয়ালের জন্য কোন নাম্বারে ডায়াল করতে হবে তা উল্লেখ করুন। যেমন: 
০৩৩২৫-৮০২২, 
০১৮১২-৩৪৫৬৭৮</small>
               
                <textarea class="textarea" name="chamber[]" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                </textarea>
              </div>

              
                <div  id="newElementId">More Chamber</div>
                
              <br>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select name="status" class="form-control" id="exampleFormControlSelect1" >
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
	txtNewInputBox.innerHTML = '<textarea class="textarea" name="chamber[]" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">'
               
                '</textarea>';


    // Finally put it where it is supposed to appear.
	document.getElementById("newElementId").appendChild(txtNewInputBox);
}
</script>

@endsection