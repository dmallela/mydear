@extends('layout')

@section('content')

<div class="content">

<h4>Testinomials:</h4>


@if($testinomials)

	<table border='0'>
	 @foreach($testinomials as $testinomial)
	<div>
	<p><b>{{ $testinomial->name }} </b></p>
	<p>{{  $testinomial->testinomial }} </p>
	</div>
	@endforeach
	</table>

	@else
        <p>no testinomials written at this point</p>
	
@endif

@stop
