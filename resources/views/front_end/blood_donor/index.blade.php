@extends('front_end.master.master')

@section('title')
Blood donor
@endsection

@section('body')

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>রক্তদাতা যোগ করুন</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            
            <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
            <!-- <li class="breadcrumb-item active">hospital</li>  -->

          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content"> 
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card" style="font-family: bangla;">
            <div class="card-header">
              <div class="row">
                <div class="col-md-3">
                  <a href="{{route('blood_donate_create')}}" type="button" class="  btn btn-success">নতুন যোগ করুন </a>
                </div>
              </div>
            </div>

            
            <div class="row ">
              <b class="card-title text-center text_gradient">Blood Donor</b>
              @php($i=1)
              @foreach($categories as $categorie)
              <div class="col-md-4 col-lg-3 pt-2 pb-2" >
                <div class="card" style="font-family: bangla;">
                  <div class="card-body">

                    <div class="row">
                      <div class="col-5 col-md-5">
                        <b class="text_gradient">রক্তের গ্রুপ: </b>
                      </div>
                      <div class="col-7 col-md-7">
                      @foreach($blood_group as $b_group)
                        @if($b_group->id == $categorie->blood_group)
                        {{$b_group->name}}
                        @endif
                      @endforeach
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-5 col-md-5">
                        <b class="text_gradient">নাম: </b>
                      </div>
                      <div class="col-7 col-md-7">
                      {{ $categorie->name }}
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-5 col-md-5">
                        <b class="text_gradient">ঠিকানা: </b>
                      </div>
                      <div class="col-7 col-md-7">
                      {!!$categorie->address!!}
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-5 col-md-5">
                        <b class="text_gradient">মোবাইল: </b>
                      </div>
                      <div class="col-7 col-md-7">
                      {{$categorie->mobile}}
                      </div>
                    </div>


                    <!-- <ul class="list-group"> -->
                      <!-- <li class="list-group-item">রক্তের গ্রুপ: @foreach($blood_group as $b_group)
                        @if($b_group->id == $categorie->blood_group)
                        {{$b_group->name}}
                        @endif
                      @endforeach</li> -->

                      <!-- <li class="list-group-item">নাম: {{ $categorie->name }}</li> -->
                      <!-- <li class="list-group-item">ঠিকানা: {!!$categorie->address!!}</li> -->
                      <!-- <li class="list-group-item">মোবাইল: {{$categorie->mobile}}</li>

                    </ul> -->
                  </div>
                </div>
              </div>
              @endforeach
              
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