
<script src="{{url('public/front/js')}}/jquery-1.11.3.min.js"></script>
<script src="{{url('public/front/js')}}/bootstrap.min.js"></script>
<script src="{{url('public/front/js')}}/lightbox.js"></script>
<script src="{{url('public/front/js')}}/owl.carousel.min.js"></script>
<script src="{{url('public/front/js')}}/wow.min.js"></script>
<script src="{{url('public/front/js')}}/jquery.scrollUp.js"></script>
<script src="{{url('public/front/js')}}/jquery.nav.js"></script>
<script src="{{url('public/front/js')}}/main.js"></script>
<script src="{{url('public/front/js')}}/video.popup.js"></script>
<script src="{{url('public/front/js')}}/jquery.flexslider.js"></script>
<script src="{{url('public/front/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/front/js/additional-methods.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{ url('public/front/js/bootbox.min.js') }}"></script>
<script src="{{ url('public/front/scripts/app.js') }}"></script>
<script src="{{ url('public/front/scripts/push_notification.js') }}"></script>
<script src="https://js.pusher.com/4.1/pusher.min.js"></script>
<script src="{{ url('public/front/scripts/main.js') }}"></script>
@yield('js')


<script type="text/javascript" src="{{url('public/front/js')}}/jquery-1.10.2.min.js"></script>
<script src="{{url('public/front/js')}}/bootstrap.min.js"></script>
<script src="{{url('public/front/js')}}/jquery.easing.1.3.js"></script>
<script src="{{url('public/front/js')}}/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="{{url('public/front/js')}}/jquery.cookie.js"></script> <!-- jQuery cookie --> 
<script src="{{url('public/front/js')}}/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="{{url('public/front/js')}}/jquery.smartmenus.min.js"></script>
<script type="text/javascript" src="{{url('public/front/js')}}/jquery.smartmenus.bootstrap.min.js"></script>
<script type="text/javascript" src="{{url('public/front/js')}}/jquery.jcarousel.js"></script>
<script type="text/javascript" src="{{url('public/front/js')}}/jflickrfeed.js"></script>
<script type="text/javascript" src="{{url('public/front/js')}}/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="{{url('public/front/js')}}/jquery.isotope.min.js"></script>
<script type="text/javascript" src="{{url('public/front/js')}}/swipe.js"></script>


<script src="{{url('public/front/js')}}/main.js"></script>

<script>
	$(window).load(function(){
		$('.slider').fractionSlider({
			'fullWidth': 			true,
			'controls': 			true,
			'responsive': 			true,
			'dimensions': 			"1920,450",
			'timeout' :             5000,
			'increase': 			true,
			'pauseOnHover': 		true,
			'slideEndAnimation': 	false,
			'autoChange':           true
		});
	});
</script>

@yield('js')