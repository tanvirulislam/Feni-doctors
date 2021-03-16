@extends('admin.master.master')
@section('title')
Category
@endsection

@section('body')

<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>category</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">category</li> 

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
            <a href="{{route('admin.category.create')}}" type="button" class="btn btn-success">Add </a>
            </div>
        </div>
        </div>
        <div class="card-body">
        <table class="table table-bordered" id="example1">
            <thead>
            <tr>
                <th scope="col">ক্রমিক সংখ্যা</th>
                <th scope="col">বিভাগ</th>
                <th scope="col">ছবি</th>
                <th scope="col">পরিচালনা</th>
            </tr>
            </thead>
            <tbody >

                @php($i=1)
                @foreach($categories as $categorie)
                <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $categorie->cat_name }}</td>
                <td><img src="{{asset('/')}}{{$categorie->cat_img}}" width="70px" height="70px"></td>

                <td>
                    <button  type="button" class="btn btn-danger text-light" onclick="deleteTag({{ $categorie->id }})"><i class="fas fa-trash-alt"></i></button>
                    <form id="delete-form-{{ $categorie->id }}" action="{{ route('admin.category.delete',$categorie->id) }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                    <a href="{{ route('admin.category.edit',$categorie->id) }}" type="button" class="btn btn-info text-light"><i class="fas fa-edit"></i></a>

                </td>
                </tr>
                @endforeach
            </tbody>
        
        </table>
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