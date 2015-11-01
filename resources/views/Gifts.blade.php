@extends('layout')

@section('content')


<div class="content" id="gifts">


<div id="Birthday">
<table>

<?php
$gifts=$d->getBirthdayGifts();
$i=0;
echo "<h4>Birthday Gifts:</h4>";
echo "<tr>";
foreach($gifts as $gift){
$i++;
if($i%6==0){
echo "</tr><tr>";
}
echo "<td>";
echo "<a href='giftdetails.php?id=" . $gift["gift_id"] . "'><img src='".$gift["giftlocation"] ."'/></a>";
echo "<div>";
echo  "<p>". $gift["description"] ."</p>";
echo "</div>";
echo "<div>";
echo "<p> Price: $". $gift["giftcost"] ."</p>";
echo "</div>";
echo "<div>";
//echo "<input type ='hidden' value='".$postvalue."' name='".$postname."'/>";
echo "<input type='hidden' name='".$gift["category"]."' value='".$gift["gift_id"]."' />";
//echo "<a href='cart.php?id=" . $gift["gift_id"] . "'><input type='submit' value='addtocart' /></a>";
echo "<a href='addingtocart.php?id=" . $gift["gift_id"]. "'>addtocart</a>";
echo "</div>";
echo "</td>";
}
?>
</table>
</div>



<div id="Wedding">
<table>

<?php
$gifts=$d->getWeddingGifts();
$i=0;
echo "<h4>Wedding Gifts:</h4>";
echo "<tr>";
foreach($gifts as $gift){
$i++;
if($i%6==0){
echo "</tr><tr>";
}
echo "<td>";
echo "<a href='giftdetails.php?id=" . $gift["gift_id"] . "'><img src='".$gift["giftlocation"] ."'/></a>";
echo "<div>";
echo  "<p>". $gift["description"] ."</p>";
echo "</div>";
echo "<div>";
echo "<p> Price: $". $gift["giftcost"] ."</p>";
echo "</div>";
echo "<div>";
echo "<input type='hidden' name='".$gift["category"]."' value='".$gift["gift_id"]."' />";
echo "<a href='addingtocart.php?id=" . $gift["gift_id"] . "'>addtocart</a>";
echo "</div>";
echo "</td>";
}
?>
</table>
</div>


<div id="CakesandFlowers">
<table>

<?php
$gifts=$d->CakesandFlowers();
$i=0;
echo "<h4>Cakes and Flowers:</h4>";
echo "<tr>";
foreach($gifts as $gift){
$i++;
if($i%6==0){
echo "</tr><tr>";
}
echo "<td>";
echo "<a href='giftdetails.php?id=" . $gift["gift_id"] . "'><img src='".$gift["giftlocation"] ."'/></a>";
echo "<div>";
echo  "<p>". $gift["description"] ."</p>";
echo "</div>";
echo "<div>";
echo "<p> Price: $". $gift["giftcost"] ."</p>";
echo "</div>";
echo "<div>";
echo "<input type='hidden' name='".$gift["category"]."' value='".$gift["gift_id"]."' />";
echo "<a href='addingtocart.php?id=" . $gift["gift_id"]. "'>addtocart</a>";
echo "</div>";
echo "</td>";
}
?>
</table>
</div>



<div id="valeintanceday">
<table>

<?php
$gifts=$d->valeintanceday();
$i=0;
echo "<h4>valeintanceday Gifts:</h4>";
echo "<tr>";
foreach($gifts as $gift){
$i++;
if($i%6==0){
echo "</tr><tr>";
}
echo "<td>";
echo "<a href='giftdetails.php?id=" . $gift["gift_id"] . "'><img src='".$gift["giftlocation"] ."'/></a>";
echo "<div>";
echo  "<p>". $gift["description"] ."</p>";
echo "</div>";
echo "<div>";
echo "<p> Price: $". $gift["giftcost"] ."</p>";
echo "</div>";
echo "<div>";
echo "<input type='hidden' name='".$gift["category"]."' value='".$gift["gift_id"]."' />";
echo "<a href='addingtocart.php?id=" . $gift["gift_id"]. "'>addtocart</a>";
echo "</div>";
echo "</td>";
}
?>
</table>
</div>



<div id="christmas">
<table>

<?php
$gifts=$d->christmas();
$i=0;
echo "<h4>Christmas Gifts:</h4>";
echo "<tr>";
foreach($gifts as $gift){
$i++;
if($i%6==0){
echo "</tr><tr>";
}
echo "<td>";
echo "<a href='giftdetails.php?id=" . $gift["gift_id"] . "'><img src='".$gift["giftlocation"] ."'/></a>";
echo "<div>";
echo  "<p>". $gift["description"] ."</p>";
echo "</div>";
echo "<div>";
echo "<p> Price: $". $gift["giftcost"] ."</p>";
echo "</div>";
echo "<div>";
echo "<input type='hidden' name='".$gift["category"]."' value='".$gift["gift_id"]."' />";
echo "<a href='addingtocart.php?id=" . $gift["gift_id"] . "'>addtocart</a>";
echo "</div>";
echo "</td>";
}
?>
</table>
</div>




<div id="Toys">
<table>

<?php
$gifts=$d->Toys();
$i=0;
echo "<h4>Toys:</h4>";
echo "<tr>";
foreach($gifts as $gift){
$i++;
if($i%6==0){
echo "</tr><tr>";
}
echo "<td>";
echo "<a href='giftdetails.php?id=" . $gift["gift_id"] . "'><img src='".$gift["giftlocation"] ."'/></a>";
echo "<div>";
echo  "<p>". $gift["description"] ."</p>";
echo "</div>";
echo "<div>";
echo "<p> Price: $". $gift["giftcost"] ."</p>";
echo "</div>";
echo "<div>";
echo "<input type='hidden' name='".$gift["category"]."' value='".$gift["gift_id"]."' />";
echo "<a href='addingtocart.php?id=" . $gift["gift_id"]. "'>addtocart</a>";
echo "</div>";
echo "</td>";
}
?>
</table>
</div>

<div id="anniversary">
<table>

<?php
$gifts=$d->anniversary();
$i=0;
echo "<h4>Anniversary Gifts:</h4>";
echo "<tr>";
foreach($gifts as $gift){
$i++;
if($i%6==0){
echo "</tr><tr>";
}
echo "<td>";
echo "<a href='giftdetails.php?id=" . $gift["gift_id"] . "'><img src='".$gift["giftlocation"] ."'/></a>";
echo "<div>";
echo  "<p>". $gift["description"] ."</p>";
echo "</div>";
echo "<div>";
echo "<p> Price: $". $gift["giftcost"] ."</p>";
echo "</div>";
echo "<div>";
echo "<input type='hidden' name='".$gift["category"]."' value='".$gift["gift_id"]."' />";
echo "<a href='addingtocart.php?id=" . $gift["gift_id"] . "'>addtocart</a>";
echo "</div>";
echo "</td>";
}
?>
</table>
</div>

</div>


	
@stop
