@extends('layout')

@section('content')


<div class="content" id="gifts">


<div id="Birthday">
<table>




<h4>Birthday Gifts:</h4>

@if($gifts)
        <table border='0'>
       @foreach($gifts as $gift)
        <div>
        <p><b>{{ $gift->description }} </b></p>
        <p>{{  $gift->giftcost }} </p>
	<p> {{ $gift->giftlocation }} </p>
	<img src="{{ asset( $gift->giftlocation ) }}" />
        </div>
        @endforeach
        </table>


@endif
@stop
