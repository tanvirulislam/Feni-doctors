@extends('admin.master.master')
@section('title')
Customize doctor list
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
            <li class="breadcrumb-item active">Doctor list</li> 

          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content"  > 
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card" style="font-family: bangla;">
            <div class="card-header">
              <div class="row">
                <b>Search doctor</b> &nbsp; &nbsp;
                <form action="{{route('admin.search')}}">
                <input type="text" name="search" class="form-control">
                </form>
              </div>
            </div>
            <table class="table table-bordered responsive" id="example1">
            <div class="card-body">
            <h4 class="header-title">Doctor List</h4>
                <ul class="sort_menu list-group">
                @foreach ($doctor as $key => $cat)
                <li class="list-group-item" data-id="{{$cat->id}}">
                    <span class="handle"></span>
                    <b>SL-{{$key}}</b> &nbsp; &nbsp;
                    <b>DR-{{$cat->dr}}</b> &nbsp; &nbsp;
                    <h6>{{$cat->name}}</h6>
                </li>
                @endforeach
            </ul>
            </div>
            </table>
          </div>
        </div>
      </div>
    </div>

    <style>
    .list-group-item {
        display: flex;
        align-items: center;
    }

    .highlight {
        background: #f7e7d3;
        min-height: 30px;
        list-style-type: none;
    }

    .handle {
        min-width: 18px;
        background: #607D8B;
        height: 15px;
        display: inline-block;
        cursor: move;
        margin-right: 10px;
    }
</style>
<script>
    $(document).ready(function(){

      function updateToDatabase(idString){
         $.ajaxSetup({ headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'}});
        
         $.ajax({
              url:'{{url('/admin/update-items')}}',
              method:'POST',
              data:{ids:idString},
              success:function(){
                 alert('Successfully updated')
                 //do whatever after success
              }
           })
      }

        var target = $('.sort_menu');
        target.sortable({
            handle: '.handle',
            placeholder: 'highlight',
            axis: "y",
            update: function (e, ui){
               var sortData = target.sortable('toArray',{ attribute: 'data-id'})
               updateToDatabase(sortData.join(','))
            }
        })
        
    })
</script>



  </section>


</div>

@endsection