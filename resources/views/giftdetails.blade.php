@extends('layout')

@section('content')
<div class="content" id="gifts">
<div>
<?php
  
  require_once "Database.php";
  $dao = new Database();
  $id = $_GET["id"];
  $product = $dao->getProduct($id);
   echo "<h2>Details for " . $product["giftname"] . ": " . $product["description"] .
    "</h2>";
    echo "<img src='".$product["giftlocation"] ."' height='800' width='600'/> ";
	
	echo "<a href='addingtocart.php?id=" . $product["gift_id"] . "'>addtocart</a>";?>
	</div>
	
    <div>
      <a href="Gifts.php">Back to Product List</a>
	 <!-- <input type="submit" value="Proceed to check out" />-->
	</div>

</div>

</div>
@stop
