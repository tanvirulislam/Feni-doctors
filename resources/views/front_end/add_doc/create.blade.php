@extends('front_end.master.master2')

@section('title')
Add doctor
@endsection

@section('body')

<section class="content"> 
    <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="card" style="font-family: bangla;">
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
                  <label for="exampleFormControlInput1">ডিগ্রি </label>
                  <textarea  name="degree" class="form-control" placeholder="বিএমডিসি অনুমোদিত ডিগ্রি এবং কোর্সের নাম লিখুন। যেমন: এমবিবিএস; এমডি (কার্ডিওলজি)..." id="txtarea1" cols="50" rows="8" class="form-control1" style="width:100%;height:100px;" ></textarea>
              </div>
              

              
              <div class="form-group">
                <label for="exampleFormControlTextarea1">পদবী</label><br>
                
                <textarea name="designation" class="form-control" id="exampleFormControlTextarea1" placeholder="মেডিকেল অফিসার / কনসালট্যান্ট / সহকারী অধ্যাপক... (না থাকলে খালি রাখুন)" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">কর্মস্থল</label><br>
                
                <textarea name="working_place" class="form-control" id="exampleFormControlTextarea1" placeholder="মেডিকেল অফিসার / কনসালট্যান্ট / সহকারী অধ্যাপক... (না থাকলে খালি রাখুন)" rows="3"></textarea>
                
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">কোন বিষয়ে বিশেষজ্ঞ</label><br>
                <textarea name="specialist" class="form-control" id="exampleFormControlTextarea1" placeholder="যেমন: হৃদরোগ বিশেষজ্ঞ / জেনারেল ফিজিশিয়ান..." rows="3"></textarea>
                
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">বিএমডিসি রেজি. নং:</label><br>
                <textarea name="reg_no" class="form-control" id="exampleFormControlTextarea1" placeholder="" rows="3">বিএমডিসি রেজি. নং এ- &nbsp;</textarea>
                
            </div>

            <div class="form-group" > 
                <label for="exampleFormControlInput1">চেম্বার:</label>&nbsp  <br>
                
                <textarea name="chamber[]" class="form-control " id="exampleFormControlTextarea1" placeholder="চেম্বারের নাম,&#10ঠিকানা,&#10রোগী দেখার সময় ও সিরিয়াল দেয়ার নাম্বার লিখুন" rows="4"></textarea>

            </div>

            
            <span  id="newElementId">More Chamber</span> <span><i class="fas fa-plus-square"onclick="createNewElement();"></i></span>
            
            <br>
          <!--  <div class="form-group">-->
          <!--      <label for="exampleFormControlSelect1">Status</label>-->
          <!--      <select name="status" class="form-control" id="exampleFormControlSelect1" >-->
          <!--        <option value="1">Active</option>-->
          <!--        <option value="0">Inactive</option>-->
                  
          <!--    </select>-->
          <!--</div>-->
          <!--<br>-->
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
    txtNewInputBox.innerHTML = '<br><textarea class="form-control" name="chamber[]" placeholder="চেম্বারের নাম,&#10ঠিকানা,&#10রোগী দেখার সময় ও সিরিয়াল দেয়ার নাম্বার লিখুন " rows="4">'
    
    '</textarea>';


    // Finally put it where it is supposed to appear.
    document.getElementById("newElementId").appendChild(txtNewInputBox);
}
</script>



@endsection