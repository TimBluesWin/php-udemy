<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


	echo pi() . "<br>";
	echo str_increment("AA1") . "<br>";

	$array = ['Tina' => 'Apple','Dennis' => 'Orange'];
	echo array_key_first($array); 
/*  Step1: Use a pre-built math function here and echo it

	
	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>