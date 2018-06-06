<?php
	require "includes/db.php";

	// Step 2: Preform Database Query
	$main = "main";
	$query = "SELECT * FROM {$main}";
	$result = mysqli_query($connection, $query);

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
	
	<title>Filtered Results</title>

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

	<main>
				<div class="sectionHead easyBanner">
			<!-- SECTION IMAGE -->
			<h1>Quick Meals</h1>
		</div>

		<div class="resultGrid">
		<!-- RESULT 1 -->
			<div class="searchResult">
						<img src = images/Recipe_Ancho-Orange_Chicken_with_Kale_Rice_Roasted_Carrots/0101_FPP_Chicken-Rice_97338_WEB_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=1">
						<h3>Ancho-Orange Chicken</h3>
					</a>
					<p>With Kale Rice and Rosted Carrots
					</p>
				</div>
			</div>
			
			<!-- RESULT 2 -->
			<div class="searchResult">
						<img src = images/Recipe_Broccoli_Basil_Pesto_Sandwiches_with_Romaine_Citrus_Salad/1225_FPV_Pesto_-Broccoli-Sandwich_74916_WEB_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=3">
						<h3>Broccoli and Basil Pesto Sandwiches</h3>
					</a>
					<p>with Romaine and Citrus Salad
					</p>
				</div>			
			</div>
			
			<!-- RESULT 3 -->
			<div class="searchResult">
						<img src = images/Recipe_Bucatini_Alfredo_with_Broccoli/0101_2PV1_Broccoli-Bucatini-Fettuccine_97230_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=5">
						<h3>Bucatini Alfredo</h3>
					</a>
					<p>With Broccoli
					</p>
				</div>			
			</div>

			<!-- RESULT 4 -->
			<div class="searchResult">
						<img src = images/Recipe_Bucatini_Tomato_Sauce_with_Roasted_Broccoli/1225_2PV1_Bucatini_100082_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=6">
						<h3>Bucatini and Tomato Sauce</h3>
					</a>
					<p>with Roasted Broccoli
					</p>
				</div>			
			</div>
			
			<!-- RESULT 5 -->
			<div class="searchResult">
						<img src = images/Recipe_Crispy_Fish_Sandwiches_with_Tartar_Sauce_Roasted_Sweet_Potato_Wedges/0101_FPF_Crispy-Wild-Alaskan-Pollock_97377_WEB_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=9">
						<h3>Crispy Fish Sandwiches</h3>
					</a>
					<p>with Tartar Sauce Roasted Sweet Potato Wedges
					</p>
				</div>			
			</div>
			
			<!-- RESULT 6 -->
			<div class="searchResult">
						<img src = images/Recipe_Mushroom_Potato_Tacos_with_Romaine_Orange_Salad/1225_2PV2_Mushroom-Potato-Tacos_100074_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=13">
						<h3>Mushroom and Potato Tacos</h3>
					</a>
					<p>with Romaine and Orange Salad
					</p>
				</div>			
			</div>
			
			<!-- RESULT 7 -->
			<div class="searchResult">
						<img src = images/Recipe_ParmesanCrusted_Chicken_with_Mashed_Sweet_Potatoes_Roasted_Broccoli/0108_FPP_Baked-Parmesan-Chicken_98333_WEB_Center_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=14">
						<h3>Parmesan-Crusted Chicken</h3>
					</a>
					<p>with Mashed Sweet Potatoes and Roasted Broccoli
					</p>
				</div>			
			</div>
			
			<!-- RESULT 8 -->
			<div class="searchResult">
						<img src = images/Recipe_Pimento_Cheeseburgers_with_Sweet_Potato_Oven_Fries/1120_2PRE08_Pimento-Burgers_93077_WEB_Right_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=15">
						<h3>Pimento Cheeseburgers</h3>
					</a>
					<p>with Sweet Potato Oven Fries
					</p>
				</div>			
			</div>

			<!-- RESULT 9 -->
			<div class="searchResult">
						<img src = images/Recipe_Shrimp_Fra_Diavolo_with_Lumaca_Rigata_Pasta/0101_2PF_Shrimp-Fra-Diavolo_97454_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=29">
						<h3>Shrimp Fra Diavolo</h3>
					</a>
					<p>with Lumaca Rigata Pasta
					</p>
				</div>			
			</div>
		</div>
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