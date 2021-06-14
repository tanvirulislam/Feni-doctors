<!DOCTYPE html>
<head>

    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Alleviating Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	  SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />

    <meta property="og:url"           content="http://fenidoctors.info/"/>
    <meta property="og:type"          content="fenidoctors.info–"/>
    <meta property="og:title"         content="fenidoctors.info-"/>
    <meta property="og:image"         content="http://fenidoctors.info/public/front_end/img/banner.jpg"/>
    <meta property="og:image:width" content="720"/>
    <meta property="og:image:height" content="720"/>




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{asset('/')}}public/front_end/font/SirajeeSheikh/ANSI V1/Li Sirajee Sheikh Unicode Italic.ttf"> -->
    <link rel="stylesheet" href="{{asset('/')}}public/front_end/font/SutonnyMJ Regular/SutonnyMJ Regular.ttf">
<!-- select option link -->
    <link rel="stylesheet" href="{{asset('/')}}public/front_end/css/msdropdown/sample.css" />
    <script src="{{asset('/')}}public/front_end/js/jquery/jquery-1.9.0.min.js"></script>
    <!-- <msdropdown> -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}public/front_end/css/msdropdown/dd.css" />
    <script src="{{asset('/')}}public/front_end/js/msdropdown/jquery.dd.js"></script>
    <!-- </msdropdown> -->

    <link rel="stylesheet" type="text/css" href="{{asset('/')}}public/front_end/css/msdropdown/skin2.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}public/front_end/css/msdropdown/flags.css" />
  <!-- end -->

  <!-- carosol start -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

  <!---carosol ends -->

    <link rel="stylesheet" href="{{asset('/')}}public/front_end/css/style.css">

  <style>
   
  @import url('{{asset('/')}}public/front_end/font/SirajeeSheikh/ANSI V1/Li Sirajee Sheikh ANSI V1.ttf');

  </style>

</head>

<body>
    @include('front_end.layout.header')

    @include('front_end.layout.banner')


    @yield('body')

    @include('front_end.layout.footer')
    
    <!-- js -->
 


 
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="" async defer></script>

<script>
            $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
        </script>

<script>
function createByJson() {
	var jsonData = [					
					{description:'Choos your payment gateway', value:'', text:'Payment Gateway'},					
					{image:'public/upload/cardiologist.png',  value:'amex', text:'heart'},
					
					];
	$("#byjson").msDropDown({byJson:{data:jsonData, name:'search'}}).data("dd");
}
$(document).ready(function(e) {		
	//no use
	try {
		var pages = $("#pages").msDropdown({on:{change:function(data, ui) {
												var val = data.value;
												if(val!="")
													window.location = val;
											}}}).data("dd");

		var pagename = document.location.pathname.toString();
		pagename = pagename.split("/");
		pages.setIndexByValue(pagename[pagename.length-1]);
		$("#ver").html(msBeautify.version.msDropdown);
	} catch(e) {
		//console.log(e);	
	}
	
	$("#ver").html(msBeautify.version.msDropdown);
		
	//convert
	$("select").msDropdown({roundedBorder:false});
	createByJson();
	$("#tech").data("dd");
});
function showValue(h) {
	console.log(h.name, h.value);
}
$("#tech").change(function() {
	console.log("by jquery: ", this.value);
})
//


</script>

</body>