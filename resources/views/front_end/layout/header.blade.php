<header style="background-image: linear-gradient(to right, #008BCC, #10D2CA); color:white;font-family: 'Open Sans', sans-serif;" >
   <div class="content_weapper container">
    <div class="row">
      <div class="col-md-12">
        <div class="social_icon">

          <a style="color:white !important" href="https://www.facebook.com/fenidoctors.info/"><img class="header_social_icon" src="{{ asset('/')}}public/front_end/img/fb.png" alt="image"></a>
          <a style="color:white !important" href = "mailto:  fenidoctors.info@gmail.com"><img class="header_social_icon" src="{{ asset('/')}}public/front_end/img/mail.png" alt="image"></a>
          <a style="color:white !important" href="tel:123"><img class="header_social_icon" src="{{ asset('/')}}public/front_end/img/call.png" alt="image"></a>
          
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light" >
    <div class="container">
      <a style="color:white !important; font-weight: 900;" class="navbar-brand" href="{{route('index')}}">FENI DOCTORS <span style="font-weight: 100;">INFO</span></a>
      <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" ></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
          <li class="nav-item">
            <a style="color:white !important" class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a style="color:white !important" class="nav-link" href="{{ route('contact') }}">Contact</a>
          </li>
          <li class="nav-item">
            <a style="color:white !important" class="nav-link" href="{{route('add_doctor')}}">Add doctors</a>
          </li>
          
          
        </ul>
        
      </div>
    </div>
  </nav>
</header>
