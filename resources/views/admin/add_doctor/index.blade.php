@extends('admin.master.master')
@section('title')
Add doctor
@endsection

@section('body')

<div class="content-wrapper" style="width: fit-content;" >

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Doctor</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Doctor</li> 

          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content"  > 
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card" style="">
            <div class="card-header">
              <div class="row">
                <div class="col-md-3">
                  <a href="{{route('admin.doctor.create')}}" type="button" class="btn btn-success">Add </a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered responsive" id="example1">
                <thead>
                  <tr>
                    <th scope="col">ক্রমিক সংখ্যা</th>
                    <th scope="col">নাম</th>
                    <th scope="col">বিভাগ</th>
                    <th scope="col">ডিগ্রি</th>
                    <th scope="col">পদবী</th>
                    <th scope="col">কর্মস্থল</th>
                    <th scope="col">কোন বিষয়ে বিশেষজ্ঞ</th>
                    <th scope="col">বিএমডিসি রেজি. নং:</th>
                    <th scope="col">পরিচালনা</th>
                  </tr>
                </thead>
                <tbody >

                  @php($i=1)
                  @foreach($doctor as $doctors)
                  <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{$doctors->name}}</td>
                    <td>
                      @foreach($categories as $category)
                      @if($category->id == $doctors->category)
                      {{ $category->cat_name }}
                      @endif
                      @endforeach
                    </td>
                    <td>{{$doctors->degree}}</td>
                    <td>{{$doctors->designation}}</td>
                    <td>{{$doctors->working_place}}</td>
                    <td>{{$doctors->specialist}}</td>
                    <td>{{$doctors->reg_no}}</td>
                    

                    <td>
                      <button  type="button" class="btn btn-danger text-light" onclick="deleteTag({{ $doctors->id }})"><i class="fas fa-trash-alt"></i></button>
                      <form id="delete-form-{{ $doctors->id }}" action="{{ route('admin.doctor.delete',$doctors->id) }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                      <a href="{{ route('admin.doctor.edit',$doctors->id) }}" type="button" class="btn btn-info text-light"><i class="fas fa-edit"></i></a>

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