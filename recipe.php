<?php
	require "includes/db.php";
	// Step 2: Preform Database Query
	$main = "main";
	$ingredients = "ingredients";
	$directions = "directions";
	$stepNumber = 0;
	$pageTitle='Recipe';
	require "includes/header.php";
?>

<?php
	if(isset($_GET['id']) && $_GET['id'] !== ''){
		  $recipe_id = $_GET['id'];
	} 
	else {
		 echo "failed";
	}
	$results = mysqli_query($connection,"SELECT * FROM main WHERE recipe_id LIKE '$recipe_id' ");
	while ($mainRow = mysqli_fetch_assoc($results)) {
		$stepNumber++;
	?>
	<div class="recipeHead">
			<!-- SECTION IMAGE -->
			<h1><?php echo $mainRow['title']; ?></h1>
			<p><?php echo $mainRow['subtitle']; ?> </p>
	</div>
	<main>
		<div class="recipeMain">
		<div class="descriptionCard">
			<img class = "recipeImage" src = images/<?php echo $mainRow['recipe_img'];?>.jpg alt="filler content">
			<p class="descriptionCardText"><?php echo $mainRow['description']; ?></p>
		</div>

		<!--------------------------------->

		<div class="instructionCard">
			<div class="ingredientsText">
				<h3>Ingredients</h3><?php
				// Step 2: Preform Database Query
				$query = "SELECT * FROM {$ingredients}";
				$results = mysqli_query($connection,"SELECT * FROM ingredients WHERE recipe_id LIKE '$recipe_id' ");
				while ($ingredientsRow = mysqli_fetch_assoc($results)) {
			?>	

			<p><?php echo $ingredientsRow['ingredients'];?></p><?php }?></div>
			<img class = "ingredientsImage" src = images/<?php echo $mainRow['ingredients_img'];?>.png alt="filler content">
		</div>		
<?php }?>

<?php
	// Step 2: Preform Database Query
	$results = mysqli_query($connection,"SELECT * FROM directions WHERE recipe_id LIKE '$recipe_id' ");
?>	
<?php
		while ($directionRow = mysqli_fetch_assoc($results)) {
	?>
		<div class="instructionCard">
			<div class="ingredientsText">
			<h3>Step <?php echo $stepNumber;?>:</h3>
			<p><?php echo $directionRow['directions'];?></p></div>
			<img class = "stepImage" src = images/<?php echo $directionRow['image_hi_res'];?>.jpg alt="filler content">
		</div>
	<?php $stepNumber++;?>
	<?php }?>

		<?php

			// Step 4: Release Returned Data
			mysqli_free_result($result);

			// Step 5: Close Database Connection
			mysqli_close($connection);
		?>
		</div>			
	</main>
<?php
	require "includes/footer.php";
?>