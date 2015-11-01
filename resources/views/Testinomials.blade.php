@extends('layout')

@section('content')

<div class="content">

<h4>Testinomials:</h4>

<?php
require_once "Database.php";
  $d = new Database();
$testinomials=$d->getTestinomial();
if(count($testinomials)==0){
echo "<p> Currently there are no Testinomials to display.</p>";
}
echo "<table border='0'>";
foreach($testinomials as $testinomial){
echo "<div>";
echo "<p><b>". $testinomial["name"] ."</b></p>";
//echo "<>";
//echo "";
echo "<p>". $testinomial["testinomial"] ."</p>";
echo "</div>";
}
echo "</table>";
// header("Location:Testinomials.html");
?>
</div>
</div>
@stop
