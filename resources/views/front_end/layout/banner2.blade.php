
<div class="banner" style="font-family: 'Open Sans', sans-serif;">
    <img class="banner_img" src="{{asset('/')}}public/front_end/img/banner.jpg" alt="Snow" style="width:100%;">
    <div class="container-fluid">
        <div class="img_text_small">
            <div class="small_screen_text" >
                
                <div class="row">
                    <div class="col-1 col-md-4"></div>
                    <div class="col-9 col-md-6 ">
                       
                            <img class="img-fluid text_img_one" src="{{asset('/')}}public/front_end/img/1.png" alt="text-img">
                            <br>
                            <img class=" img-fluid text_img_two" src="{{asset('/')}}public/front_end/img/2.png" alt="text-img">
                       
                    </div>
                    <div class="col-2 col-md-2 "> </div>
                 

                </div>
            </div>
        </div>

        <!-- <div class="img_text">
            <div class="big_screen_text">
                <div class="row">
                    <div class="col-md-2"></div>
                        <div class="col-md-7 mt-5">
                            <img class="img-fluid" src="{{asset('/')}}public/front_end/img/1.png" alt="">
                            <img class="img-fluid" src="{{asset('/')}}public/front_end/img/2.png" alt="">
                        </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div> -->


        <div class="search">
            <div class="row">
                <div class="col-md-12 ">
                  <br>
                  <form method="get" action="{{route('search_doctor')}}">
                    <div class="row " style="font-family: 'Open Sans', sans-serif;">
                        <div class="col-1 col-md-2"></div>
                        <div class="col-7 col-md-7 small_screen_padding">
                            <select id="select" name="search" style="font-family: bangla;background-color: #E2F1F6 !impotant;box-shadow: 0px 1px 3px 0px grey;"  class="form-select form-control select_width_samll_device" aria-label="Default select example">
                                <option data-description="">&nbsp;বিভাগ  বাছাই করুন </option>
                                @foreach($banner as $categories)
                                <option style="font-family: bangla; font-size:20px"  data-image="{{asset('/')}}{{$categories->cat_img}}" value="{{$categories->id}}">{{$categories->cat_name}}</option>

                                @endforeach
                                
                            </select>
                        </div>
                        
                        <div class="col-1 col-md-1">
                            <center>
                                <button style="background: transparent; color:black; border-color: #0ab8cb;
                                background-color: #E1EFF2;opacity:.5" type="submit" 
                                class="btn btn-primary search_btn">
                                <i style="color: #0399CC; " class="fas fa-search"></i>
                            </button>
                        </center>
                    </div>
                    <div class="col-3 col-md-2"></div>
                    
                </div>
                
            </form>
        </div>
    </div>
</div>


</div>

</div>