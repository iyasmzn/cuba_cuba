<?php 
	$a = 95;
	if ( $a >= 90 && $a <= 100 ) {
		echo "wow";
	}
	else {echo "fuck";}
?>
<form method="GET" action="cuba3_triwul1.php">
	<input type="number" name="diskon">
	<input type="submit">
</form>
<?php
	$pay = $_GET['diskon'];
	$dis = $pay * 1/5;
	$ment = $pay - $dis;
	if ($pay >= 200000 ) {
		echo $ment;
	}
	else {echo "Rp. ".$pay;}
?>
<br><br>
<div style="border: 1px solid black; display: inline-block;">
<?php
	echo "<br>";
	for ($x = 2004; $x <= 2050; $x+=4) { echo $x ."<br>"; }
?>
</div>

<?php
	$name = array (1 =>'Alif', 2=>'Andi', 3=>'Anto', 4=>'Budi', 5=>'Edi', 6=>'Jordan', 7=>'Masto', 8=>'Nana', 9=>'Omar', 10=>'Rahmat', 11=>'Ruri', 12=>'Sita');
	foreach () { echo "sorry i forget this loop :v";}
?>



