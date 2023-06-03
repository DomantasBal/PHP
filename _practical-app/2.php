<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php
		// STEP ONE 
		$number1 = 10;
		$number2 = 20;

		$result = $number1 + $number2;
		echo $result;

		// STEP TWO
		$array = [10, 20];
		$assoArray = ["first_number" => 11230, "second_number" => 20];
		echo $assoArray["first_number"];


		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		 
			 */




		?>



	</article><!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>