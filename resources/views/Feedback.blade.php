@extends('layout')

@section('content')
<div class="content">
<h2>Feedback : </h2>

<p>We value your feedback. In fact we appreciate your suggestions and criticism. We accept your feedback in a positive and utilise the for our growth.
</p>
	
<table class="feedback">

<tr>
<td>
<label for="feedbacktype">Select Type:</label>

</select>

</td>
<td>
<select id="feedbacktype" name="feedbacktype">
  <option value="0">Compliment</option>
  <option value="1">Suggestion</option>
  <option value="2">Complaint</option>
</td>
<td>
</td>
</tr>
<tr>
<td>
<label for="txt_name">Name:</label>
</td>
<td><input type="text" name="txt_name"></td>
</tr>

</tr>
<tr>
<td>
<label for="txt_emailid">Email Id:</label>
</td>
<td><input type="text" name="txt_emailid"></td>
</tr>
<tr>
<td>
Would you like to post this to Testinomials.
</td>
<td><input type="radio" id="yes" value="1" name="choice">
<label for="yes">yes</label>
<input type="radio" value="0" id="no" name="choice">
<label for="no">no</label>
</td>
</tr>
<tr>
<td><label for="testinomial">Enter the message:</label></td>
<td><textarea rows="4" cols="50" name="testinomial"></textarea></td>
</tr>
<tr>
<td>
<td>
<input type="submit" text="Submit" name="submit_button" />
</td>
</tr>

</table>




</div>


</div>
</div>
	
@stop
