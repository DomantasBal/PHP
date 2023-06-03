<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php

		// STEP 1
		function calc($param1, $param2)
		{
			return $param1 + $param2;
		}

		// STEP 2 
		$result = calc(2, 2);
		echo $result;

		/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */


		?>





	</article><!--MAIN CONTENT-->


	<?php include "includes/footer.php"; ?>