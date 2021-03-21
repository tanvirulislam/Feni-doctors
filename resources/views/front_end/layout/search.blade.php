<div class="about">
    <div class="abt-layer" style="margin-top: -52px;">
        <div class="container">
            <div class="about-main">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="
                        color: #ffab67;
                        text-align: center;
                      
                        margin-bottom: 19px;
                        text-shadow: 3px 9px 10px black;
                        ">আপনার ডাক্তার খোঁজ করুন এখানেই</h2>
                        <form method="get" action="{{route('search_doctor')}}">
                            <div class="row">
                                <div class="col-md-10">
                                    <select name="search" class="form-select form-control" aria-label="Default select example">
                                        <option selected>বিভাগ  বাছাই করুন</option>
                                        @foreach($category as $categories)
                                        <option value="{{$categories->id}}">{{$categories->cat_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="col-md-2">
                                    
								<button style="background: transparent;" type="submit" class="btn btn-primary">
								<span><i style="color: #ffab61;" class="fas fa-search"></i> </span>
								</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>