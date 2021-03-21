<!-- header -->
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
    <h1>
      <a class="navbar-brand text-white" href="{{route('index')}}">
       Feni Doctors
     </a>
   </h1>
   <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
   aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav ml-lg-auto text-center">
    <li class="nav-item active  mr-3 mt-lg-0 mt-3">
      <a class="nav-link" href="{{route('index')}}">Home
        <span class="sr-only">(current)</span>
      </a>
    </li>
   
    
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
  </li>
  <li>
    <a href="{{route('add_doctor')}}" style="background-color: transparent;border-color: #ed914a;" type="button" class="btn btn-primary">Add doctor</a>
  </li>
</ul>
</div>
</nav>
</header>