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
          <li class="breadcrumb-item"><a href="#">Home</a></li>
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
        <div class="card" style="">
            <div class="card-header">
            <div class="row">
            <div class="col-md-3">
            <a href="{{route('blood_donate_create')}}" type="button" class="btn btn-success">নতুন যোগ করুন </a>
            </div>
        </div>
        </div>
        <div class="card-body">
            <div class = "table-responsive">
        <table class="table table-bordered" id="example1">
            <thead>
            <tr>
                <th scope="col">ক্রমিক সংখ্যা</th>
                <th scope="col">রক্তের গ্রুপ</th>
                <th scope="col">নাম</th>
                <th scope="col">ঠিকানা</th>
                <th scope="col">মোবাইল</th>
                
            </tr>
            </thead>
            <tbody >

                @php($i=1)
                @foreach($categories as $categorie)
                <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>
                @foreach($blood_group as $b_group)
                @if($b_group->id == $categorie->blood_group)
                {{$b_group->name}}
                @endif
                @endforeach
                </td>
                <td>{{ $categorie->name }}</td>
                <td>{!!$categorie->address!!}</td>
                <td>{{$categorie->mobile}}</td>
                

                
                </tr>
                @endforeach
            </tbody>
        
        </table>
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