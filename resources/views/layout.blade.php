
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>toMyDear</title>
<link rel="stylesheet" href="{{ URL::asset('css/StyleSheet1.css') }}" type="text/css">
<link rel="icon" href="{{ asset('Images/favicon.ico') }}" type="image/x-icon">
<script type="text/javascript" src="{{ asset('jss/effects.js') }}"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js">
</script>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('jss/css/style.css') }}" />
	<!-- End WOWSlider.com HEAD section -->
   
<script>
   $("[logo]").tooltip();
</script>
</head>
<body>

<div id="header">
<div class="logo">
<br/>
<a href="{{ URL::to('/') }}" >
		<img id="logo" title="Home page" src="{{asset('Images/faviconmodified.jpg')}}" alt="My logo" height="80" width="80" />
		</a>
</div>

<div class="top-menu">
<ul>
		<li><a href="{{ URL::to('AboutUs') }}">About Us</a></li>
                <li><a href="{{ URL::to('Howtoorder') }}">Howtoorder</a></li>

		<li><a href="{{ URL::to('Destinations') }}">Destinations</a></li>
		<li><a href="{{ URL::to('FAQ') }}">FAQ</a></li>
		<li><a href="{{ URL::to('Testinomials') }}">Testinomials</a></li>
		<li><a href="{{ URL::to('Feedback') }}">Feedback</a></li>
		<li><a href="{{ URL::to('ContactUs') }}">Contact Us</a></li>
		<li><a class="last" href="{{ URL::to('LoginPage') }}">Login</a></li>

</ul>
		<?php
//Start session
session_start();
 
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) == '')) {?>
<?php
	//header("location: index.php");
	//exit();
}
else{
?>
<li><a class="last" href="{{ URL::to('/') }}">Logout</a></li><?php
echo "<li><h4>Welcome ".$_SESSION['sess_username']."</h4></li>";
}
?>
		
	</ul>
</div>
</div>

<div id="main-page">
<div class="left-menu">
<ul>
		<li><a href="{{ URL::to('Gifts') }}">BirthdayGifts</a></li>
		<li><a href="{{ URL::to('Gifts') }}">Wedding gifts</a></li>
                <li><a href="{{ URL::to('Gifts') }}">Cakes and Flowers</a></li>
		<li><a href="{{ URL::to('Gifts') }}">valentine day Gifts</a></li>
		<li><a href="{{ URL::to('Gifts') }}">Christams Gifts</a></li>		
		<li><a href="{{ URL::to('Gifts') }}">Toys</a></li>
		<li><a href="{{ URL::to('Gifts') }}">Anniversary Gifts</a></li>
	</ul>
</div>


@yield('content')




<div id="footer">
<div class="footer-menu">
 <ul>

     <li><a href="{{ URL::to('AboutUs') }}">About Us</a></li>
                <li><a href="{{ URL::to('Howtoorder') }}">Howtoorder</a></li>

                <li><a href="{{ URL::to('FAQ') }}">FAQ</a></li>
                <li><a href="{{ URL::to('Testinomials') }}">Testinomials</a></li>
                <li><a href="{{ URL::to('Feedback') }}">Feedback</a></li>

                <li><a class="last" href="{{ URL::to('ContactUs') }}">Contact Us</a></li>

	</ul>
</div>
<div class="footer-content">
<p> &copy; 2013 toMyDear all rights reserved.<br/>
			Suggestions to:<a>info@gmail.com</a>
		</p>
</div>
</div>

</body>
</head>
