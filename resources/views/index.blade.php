@extends('layout')

@section('content')


<div class="content">

<div class="advertisements">
<h2>Welcome to MyDear</h2>

<h4> We value your emotiond here amd deliver your gifts on behalf of you.</h4>
<div id='makeMeScrollable'>
<!-- Start WOWSlider.com BODY section -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="{{asset('Images/data1/images/adimage1.jpg')}}" alt="adimage1" title="adimage1" id="wows1_0"/></li>
<li><img src="{{asset('Images/data1/images/adimage2.jpg')}}" alt="adimage2" title="adimage2" id="wows1_1"/></li>
<li><img src="{{asset('Images/data1/images/adimage3.jpg')}}" alt="adimage3" title="adimage3" id="wows1_2"/></li>

</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="adimage1"><img src="{{asset('Images/data1/tooltips/adimage1.jpg')}}" alt="adimage1"/>1</a>
<a href="#" title="adimage2"><img src="{{asset('Images/data1/tooltips/adimage2.jpg')}}" alt="adimage2"/>2</a>
<a href="#" title="adimage3"><img src="{{asset('Images/data1/tooltips/adimage3.jpg')}}" alt="adimage3"/>3</a>

</div></div>
<span class="wsl"><a href="Route::to('http://wowslider.com')">Carousel HTML5</a> by WOWSlider.com v4.8</span>
	<div class="ws_shadow"></div>
	</div>
        <script type="text/javascript" src="{{ asset('jss/engine1/wowslider.js') }}"></script>
        <script type="text/javascript" src="{{ asset('jss/engine1/script.js') }}"></script>

	<!-- End WOWSlider.com BODY section -->

<p>
Choose the occasion of the gifts below.
</p>

<div id="imagelinks">
	<table class="category">
		<tr>
			<td>
			<a href="{{ URL::to('Gifts') }}">
			<img src="Images\BirthdayImage.jpg" alt="Birthday Gifts" height="100" width="100" ></img>
			<br/>
			Birthday Gifts
			</a>
			</td>

			<td>i
			<a href="{{ URL::to('Gifts') }}">
			<img src="Images\wedding gifts.jpg" alt="Wedding Gifts" height="100" width="100" /><br/>
			Wedding Gifts
			</a>
			</td>
			
			<td>
			<a href="{{ URL::to('Gifts') }}">
			<img src="Images\cakesandflowers.jpg" alt="Cakes and Flowers" height="100" width="100" /><br/>
			Cakes and Flowers
			</a>
			</td>			

		</tr>

		<tr>
			<td>
			<a href="{{ URL::to('Gifts') }}">
			<img src="Images\Valeintanceday.jpg" alt="valeintanceday Gifts" height="100" width="100" /><br/>
			Valeintanceday Gifts
			</a>
			</td>

			<td>
			<a href="{{ URL::to('Gifts') }}">
			<img src="Images\christmas.jpg" alt="Christmas Gifts" height="100" width="100" /><br/>
			Christmas Gifts
			</a>
			</td>
			
			<td>
			<a href="{{ URL::to('Gifts') }}">
			<img src="Images\toys.jpg" alt="Toys" height="100" width="100" /><br/>
			Toys
			</a>
			</td>			

		</tr>
	</table>



</div>
</div>
</div>

@stop
