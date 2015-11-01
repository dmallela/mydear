@extends('layout')

@section('content')

<div class="content">
<h2>Frequently Asked Questions: </h2>
	
<table>

<tr>
<td>
<a href="#first">1.How to search for a gift based on the category?</a>
</td>
</tr>

<tr>
<td>
<a href="#Second">2.How can I order for a gift?</a>
</td>
</tr>
<tr>
<td>
<a href="#Third">3.Can I include my own message on the Gift?</a>
</td>
</tr>
<tr>
<td>
<a href="#fourth">4.Should I need to pay anything to get register?</a>
</td>
</tr>
<tr>
<td>
<a href="#fifth">5.Can I ask for a gift that is not shown in the site?</a>
</td>
</tr>
<tr>
<td>
<a href="#six">6.Should I need to login to check for the item which are available?</a>
</td>
</tr>

<tr>
<td>
<div id="first">
1.How to search for a gift based on the category?
<ul><li>
You can choose the category of the gift from the left menu.</li></ul>
</div>
</td>
</tr>
<tr>
<td>
<div id="Second">
2.How can I order for a gift?
<ul><li>
<a href="Howtoorder.php">Howtoorder</a> this link will give you a complete overview of orderinf a gift.</li></ul>
</div>
</td>
</tr>

<tr>
<td>
<div id="Third">
3.Can I include my own message on the Gift?
<ul><li>
Yes. You can include your own message on the gift you selected. That is accepted after you have selected the item.</li></ul>
</div>
</td>
</tr>
<tr>
<td>
<div id="fourth">
4.Should I need to pay anything to get register?
<ul><li>
No. You need not pay to become a member. The member registration is absolutely free.</li></ul>
</div>
</td>
</tr>

<tr>
<td>
<div id="fifth">
5.Can I ask for a gift that is not shown in the site?
<ul><li>
No. Currently we accept the requests that are on the Site. We hope to include that feature in the feature.
</div>
</td>
</tr>

<tr>
<td>
<div id="fifth">
6.Should I need to login to check for the item which are available?
<ul><li>
No. You can see the item on the site without logging in. You can select the menu items on the left side of the page to see or you can directly visit the shopping
page <a href="{{ URL::to('Gifts') }}">here</a>.
</div>
</td>
</tr>

</table>


</div>


</div>
</div>


@stop
