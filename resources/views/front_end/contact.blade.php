@extends('front_end.master.master')

@section('title')
Blood donor
@endsection

@section('body')

<div class="content-wrapper">


    <section class="content"> 
<br>

    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <div class="card" style="background-image: linear-gradient(to right, #008BCC, #10D2CA);">
            <div class="card-header">
            <div class="row">
            <div class="col-md-12 text-center">
           <h4> Contact Information</h4>
            </div>
        </div>
        </div>
        <div class="card-body">
       <div class="row " >
          <div class="col-md-12 text-center ">

          <a style="" href="https://www.facebook.com/fenidoctors.info"><img class="contact_socal_link" src="{{ asset('/')}}public/front_end/img/fb.png" alt="image"></a>
          <a style=" " href="tel:01878072344"><img class="contact_socal_link" src="{{ asset('/')}}public/front_end/img/call.png" alt="image"></a>
          <a style=" " href = "mailto:  fenidoctors.info@gmail.com"><img class="contact_socal_link" src="{{ asset('/')}}public/front_end/img/mail.png" alt="image"></a>

         
          </div>
      </div>
        </div>
    </div>
    </div>
    </div>
    </div>
<br>
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