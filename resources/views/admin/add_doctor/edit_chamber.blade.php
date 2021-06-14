@extends('admin.master.master')
@section('title')
চেম্বার
@endsection

@section('body')
<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>ডাক্তার</h1> <br>
        <span><a href="#" class="btn btn-primary" type="button">Chamber</a></span>
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
        <form method="post" action="{{route('admin.update_chember')}}">
            @csrf
            <input type="hidden" name="id" value="{{$chamber_one->id}}" class="form-control" id="exampleFormControlInput1">
            <input type="hidden" name="doctor_id" value="{{$doctor_id}}" class="form-control" id="exampleFormControlInput1">

            

              <div class="form-group" > 
                <label for="exampleFormControlInput1">চেম্বার</label>
                 
                <textarea class="textarea" name="chamber" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                    {!!$chamber_one->chamber!!}
                    
                </textarea>
              </div>
 
              <div class="form-group" > 
                <label for="exampleFormControlInput1"> চেম্বার </label>
                @foreach($chamber_more as $chambers)
                <textarea class="textarea" name="more_chamber[]" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                      
                   
                   
                    {!!$chambers->more_chamber!!}
                  
                    
                </textarea>
                @endforeach

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