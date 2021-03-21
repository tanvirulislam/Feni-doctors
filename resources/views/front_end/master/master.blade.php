
<!DOCTYPE html>
<html lang="zxx">
<head>

    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Alleviating Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="{{asset('/')}}public/front_end/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('/')}}public/front_end/css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="{{asset('/')}}public/front_end/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
	<link href="{{asset('/')}}public/front_end/css/minimal-slider.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="{{asset('/')}}public/front_end/css/flexslider.css" type="text/css" media="screen" property="" />
    <!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet"><!-- //online-fonts -->
</head>

<body>
    @include('front_end.layout.header')

    @include('front_end.layout.banner')


    @yield('body')

    @include('front_end.layout.footer')

    
   
    
    <!-- js -->
    <script src="{{asset('/')}}public/front_end/js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
	<script src="{{asset('/')}}public/front_end/js/minimal-slider.js"></script>
<!-- flexSlider (for testimonials) -->
		<!-- Calendar -->
				<link rel="stylesheet" href="{{asset('/')}}public/front_end/css/jquery-ui.css" />
				<script src="{{asset('/')}}public/front_end/js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker" ).datepicker();
						  });
				  </script>
				<!-- //Calendar -->

	<script defer src="{{asset('/')}}public/front_end/js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider (for testimonials) -->

    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- start-smooth-scrolling -->
    <script src="{{asset('/')}}public/front_end/js/move-top.js"></script>
    <script src="{{asset('/')}}public/front_end/js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="{{asset('/')}}public/front_end/js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('/')}}public/front_end/js/bootstrap.js"></script>

</body>