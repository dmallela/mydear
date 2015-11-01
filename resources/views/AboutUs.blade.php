@extends('layout')

@section('content')

<div class="content" id="aboutus">
<h2>About Us</h2>
	
<p>
This site was designed to help people to shower their love and emotions on their friends and relatives in different which helps 
you pamper your beloved once pleasently, with your gifts even when you are far away from them.
</p>
<p>
Various information regarding, the gift selection, ordering the gift and customising the messages on the gift are explained in customer 
friendly way in some of our webpages. Below we would like to provide a clear site map our toMyDear.com which will guide you in a right way.
</P>


<p>Most of the information regarding ordering a gift can be found in <a href="{{ URL::to('Howtoorder') }}">How to order</a>. This will explain you the step wise process from logging
into the website to the completion of your gift ordering. It will also guide you in the Payment process.
</p>
<p>
The Places where we can reach are listed in the <a href="{{ URL::to('Destinations') }}" >Destinations </a> page. This will help you make sure that you can select the places 
listed in that page. If your destinations is not present in this page, we are very sorry  that currently we cannot process your request and we hope that we can 
help you in the future and thanks for visiting.
</p>
<p>
If we are unable to explain any of the information in the initial steps, you can vistit <a href="{{ URL::to('FAQ') }}">FAQ</a>. Where frequently asked questions are listed.
We hope that will help you.

</p>
<p>
Customer satisfaction is our first priority. Please spend a moment to provide the feedback about our service and the website. Your suggestions are respected and 
we make utilise them ot improve us. You are welcome to provide the feedback <a href="{{ URL::to('Feedback') }}">here</a>.
</p>

<p>
If you would like to contact us for any further queries, feel free to contact us. Our Addresses and contact inforamtion is available <a href="{{ URL::to('ContactUs') }}">here</a>.
</p>



</div>
</div>


@stop
