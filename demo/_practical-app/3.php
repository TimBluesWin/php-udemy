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

 if(3 > 4)
 {
	echo "No, it's not true! <br>";
 }
 else if(false)
 {
	echo "This is false again! <br>";
 }
 else
 {
	echo "I love PHP <br>";
 }
 for($i = 0; $i < 10; $i++)
 {
	echo $i . "<br>";
 }
 $variable = 85;
 switch($variable){
	case $variable == 100:
		echo "perfect!";
		break;
	case $variable > 80 and $variable < 100:
		echo "good";
		break;
	case $variable > 60 and $variable < 80:
		echo "okay";
		break;
	case $variable > 40 and $variable < 60:
		echo "bad";
		break;
	case $variable > 20 and $variable < 40:
		echo "horrible";
		break;
	default:
		echo "value invalid";
 }
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>