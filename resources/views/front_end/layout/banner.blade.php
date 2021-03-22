<div class="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
            <br><br>
            <h3 style="color:#0294CD; font-weight: 600;">
                আপনার ডাক্তার খোঁজ করুন এখানেই
            </h3>
            </div>
        </div>
        <div class="row">
        <div class="col-md-12 ">
          <br>
            <form method="get" action="{{route('search_doctor')}}">
                    <div class="row ">
                    <div class="col-md-2"></div>
                        <div class="col-md-7">
                            <select style="background-color: #E2F1F6;box-shadow: 0px 1px 3px 0px grey;" name="search" class="form-select form-control" aria-label="Default select example">
                            <option selected>বিভাগ  বাছাই করুন</option>
                            
                                @foreach($category as $categories)
                                <option value="{{$categories->id}}">{{$categories->cat_name}}</option>
                                @endforeach
                            
                            </select>
                        </div>
                    
                        <div class="col-md-1">
                        <center>
                        <button style="background: transparent; color:black; border-color: #0ab8cb;
                        background-color: #E1EFF2;" type="submit" 
                        class="btn btn-primary">
                        <i style="color: #0399CC; " class="fas fa-search"></i>
                        </button>
                    </center>
                        </div>
                    <div class="col-md-2"></div>
    
                    </div>
    
            </form>
      </div>
        </div>
    </div>

</div>