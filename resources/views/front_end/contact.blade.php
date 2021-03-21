@extends('front_end.master.master')

@section('title')
Blood donor
@endsection

@section('body')

<div class="content-wrapper">



    <section class="content"> 
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <div class="card" style="">
            <div class="card-header">
            <div class="row">
            <div class="col-md-12">
            <center>Contact Information</center>
            </div>
        </div>
        </div>
        <div class="card-body">
       <div class="row">
          <div class="col-sm-4 col-xs-12">
            
          </div>
           <div class="col-sm-4 col-xs-12" style="margin-top:10px;margin-bottom:10px;">
           
            <h4 style="padding:5px;box-shadow:0 0 2px 3px gray;border-radius:5px;"> <span class="fa fa-google"></span> fenidoctors.info@gmail.com</h4>
             <h4 style="padding:5px;box-shadow:0 0 2px 3px gray;border-radius:5px;margin-top: 8px;"><a href="https://www.facebook.com/fenidoctors.info/" style="color:black"><span class="fa fa-facebook"></span> www.facebook.com/fenidoctors.info</a></h4>
            
          </div>
           <div class="col-sm-4 col-xs-12">
              
          </div>
      </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    </section>

<script type="text/javascript">
  function deleteTag(id) {
    swal({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel!',
      confirmButtonClass: 'btn btn-success',
      cancelButtonClass: 'btn btn-danger',
      buttonsStyling: false,
      reverseButtons: true
    }).then((result) => {
      if (result.value) {
        event.preventDefault();
        document.getElementById('delete-form-'+id).submit();
      } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                    ) {
        swal(
          'Cancelled',
          'Your data is safe 🙂',
          'error'
          )
      }
    })
  }
</script>

</div>

@endsection