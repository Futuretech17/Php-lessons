<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

 $number = 10;

 if (1 > $number) {
	echo"I hate Php";
 }
 elseif (5 == $number){
	echo"Php is disgusting";
 }
 else{
	echo"I love Php";
 }
	

//for loop to display numbers 1-10

for($x=0; $x <=9; $x++ ) {
	echo "$x  <br/>";
}

// switch statement that tests one condition with 5 cases



switch ($n=40) {
	case $n >= 70:
		echo "A";
		break;
	case $n >= 60:
		echo " B";
		break;
	case $n >= 50:
		echo "C ";
		break;
	case $n >= 40:
		echo "D";
		break;
	case $n < 40:
		echo "E";
		break;
}

?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>