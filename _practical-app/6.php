<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php

		if (isset($_POST["submit"])) {
			echo $_POST["input"];
		} else {
			echo "nope";
		}


		/*  Step1: Make a form that submits one value to POST super global


 */


		?>


		<form action="6.php" method="post">
			<input name="input" type="text">
			<!-- <input name="submit" type="submit"></input> -->
			<button name="submit" type="submit">Submit</button>
		</form>

	</article><!--MAIN CONTENT-->
	<?php include "includes/footer.php"; ?>