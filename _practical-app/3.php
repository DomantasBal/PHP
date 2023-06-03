<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<?php

		// STEP 1

		$x = 12;
		$y = 12;

		if ($x < $y) {
			echo $x . " is less than " . $y;
		} else if ($x > $y) {
			echo $x . " is greater than " . $y;
		} else {
			echo "php is easy";
		}

		echo "<br>";

		// STEP 2 
		for ($i = 1; $i <= 10; $i++) {
			echo $i . "<br>";
		}

		// STEP 3

		$selection = 5;
		switch ($selection) {
			case 1:
				echo "this is case 1";
				break;
			case 2:
				echo "this is case 2";
				break;
			case 3:
				echo "this is case 3";
				break;
			case 4:
				echo "this is case 4";
				break;
			case 5:
				echo "this is case 5";
				break;

			default:
				echo "no case selected";
		}

		/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP


	

	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */


		?>






	</article><!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>