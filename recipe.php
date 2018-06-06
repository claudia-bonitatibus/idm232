<?php
	require "includes/db.php";

	// Step 2: Preform Database Query
	$main = "main";
	$query = "SELECT * FROM {$main}";
	$result = mysqli_query($connection, $query);
	$stepNumber = 0;

	// Check there are no errors with our SQL statement
	if (!$result) {
			die ("Database query failed.");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	content = "width= device-width,
	initial-scale= 1.0"
	>
	<title>Recipe</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css">
	<link rel="stylesheet" href="cooking-website.css">
</head>
<body>
	<nav>
		<a href="home.html" class="logoNav">
			<img src = assets/logo.svg alt="logo" class="logoNav">
		</a>
		<div class="search">
			<input type="text" class="inputChannel" placeholder="Search...">
		</div>

		<a href="results.php">
			<img src = assets/search-icon.svg alt="search" class="searchButton">
		</a>
	</nav>
	<?php
		if(isset($_GET['id']) && $_GET['id'] !== ''){
		  $recipe_id = $_GET['id'];
		} else {
		  echo "failed";
		}
		while ($row = mysqli_fetch_assoc($result)) {
			$stepNumber++;
	?>
	<div class="recipeHead">
			<!-- SECTION IMAGE -->
			<h1><?php echo $row['title']; ?></h1>
			<p><?php echo $row['subtitle']; ?> </p>
	</div>
	<main>
		<div class="descriptionCard">
			<img class = "recipeImage" src = images/<?php echo $row['recipe_img'];?>.jpg alt="filler content">
			<p class="descriptionCardText"><?php echo $row['description']; ?></p>
		</div>

		<!--------------------------------->

		<div class="instructionCard">
			<div class="ingredientsText">
				<h3>Ingredients</h3><?php
				// Step 2: Preform Database Query
				$ingredients = "ingredients";
				$query = "SELECT * FROM {$ingredients}";
				$result = mysqli_query($connection, $query);

				while ($ingredientsRow = mysqli_fetch_assoc($result)) {
					$ingredients_key = $ingredientsRow['recipe_key'];
			?>	

			<p><?php echo $ingredientsRow['ingredients'];?></p><?php }?></div>
			<img class = "ingredientsImage" src = images/<?php echo $row['ingredients_img'];?>.png alt="filler content">
		</div>		
<?php }?>

<?php
	// Step 2: Preform Database Query
	$directions = "directions";
	$query = "SELECT * FROM {$directions}";
	$result = mysqli_query($connection, $query);
?>	
<?php
		while ($directionRow = mysqli_fetch_assoc($result)) {
			$directions_key = $directionRow['recipe_key'];
	?>
		<div class="instructionCard">
			<div class="ingredientsText">
			<h3>Step <?php echo $stepNumber;?>:</h3>
			<?php echo $directionRow['directions'];?></div>
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
	<?php
    $text = "™©®è";
    echo htmlentities($text);
   	?>			
	</main>
	<footer>
		<div class="help">
			<a href="help.html" class="logoNav">
			<img src = assets/help.svg alt="help" class="helpFooter">
			</a>
		</div>
	</footer>
</body>
</html>