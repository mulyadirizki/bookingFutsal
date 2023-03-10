<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Graha Futsal</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="{{ url('assets/front/css/linearicons.css') }}">
	<link rel="stylesheet" href="{{ url('assets/front/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ url('assets/front/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ url('assets/front/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ url('assets/front/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ url('assets/front/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ url('assets/front/css/nouislider.min.css') }}">
	<link rel="stylesheet" href="{{ url('assets/front/css/ion.rangeSlider.css') }}" />
	<link rel="stylesheet" href="{{ url('assets/front/css/ion.rangeSlider.skinFlat.css') }}" />
	<link rel="stylesheet" href="{{ url('assets/front/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ url('assets/front/css/main.css') }}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
	@stack('css')
</head>

<body>

	<!-- Start Header Area -->
	@include('pemain.partials.header')
	<!-- End Header Area -->

	<!-- Content Area -->
    @yield('content')
    <!-- Content Area -->

	<!-- start footer Area -->
	@include('pemain.partials.footer')
	<!-- End footer Area -->

	<script src="{{ url('assets/front/js/vendor/jquery-2.2.4.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{ url('assets/front/js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{ url('assets/front/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ url('assets/front/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ url('assets/front/js/jquery.sticky.js') }}"></script>
	<script src="{{ url('assets/front/js/nouislider.min.js') }}"></script>
	<script src="{{ url('assets/front/js/countdown.js') }}"></script>
	<script src="{{ url('assets/front/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ url('assets/front/js/owl.carousel.min.js') }}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{ url('assets/front/js/gmaps.min.js') }}"></script>
	<script src="{{ url('assets/front/js/main.js') }}"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	@stack('script')
</body>

</html>