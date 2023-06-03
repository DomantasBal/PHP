<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

	<aside class="col-xs-4">
		<?php Navigation(); ?>


	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php

		// STEP 1 

		// $array = [4.321, 71.123, 99.22, 4.55, 2.6, 123.777];
		// $randomNumber = mt_getrandmax();
		// echo $randomNumber;

		// foreach ($array as $number) {
		// 	echo "<br>";
		// 	echo floor($number);
		// }

		// STEP 2

		// $string = "lsdkjfl   asjdflaksj  dflka     sjdf";
		// trim($string);
		// echo $string;

		// STEP 3

		$words = ["bla bla", "cha cha cha", "hee heee"];

		$michael = "hee heee";

		$mj = in_array($michael, $words);
		$result = $mj ? $michael : "Nope";
		echo $result;


		/*  Step1: Use a pre-built math function here and echo it




	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */


		?>





	</article><!--MAIN CONTENT-->
	<?php include "includes/footer.php"; ?>