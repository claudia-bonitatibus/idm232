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
				<div class="sectionHead vegetarianBanner">
			<!-- SECTION IMAGE -->
			<h1>Vegetarian</h1>
		</div>

		<div class="resultGrid">
		<!-- RESULT 1 -->
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
			
			<!-- RESULT 2 -->
			<div class="searchResult">
						<img src = images/Recipe_Broccoli_Mozzarella_Calzones_with_Caesar_Salad/0101_FPV_Broccoli-Calzones_97286_WEB_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=4">
						<h3>Broccoli and Mozzerella Calzones</h3>
					</a>
					<p>With Caeser Salad
					</p>
				</div>			
			</div>
			
			<!-- RESULT 3 -->
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

			<!-- RESULT 4 -->
			<div class="searchResult">
						<img src = images/Recipe_Cheesy_Enchiladas_Rojas_with_Mushrooms_Kale/1120_FPV_Emchiladas_74891_WEB_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=7">
						<h3>Cheesy Enchiladas Roajas</h3>
					</a>
					<p>with Mushrooms and Kale
					</p>
				</div>			
			</div>
			
			<!-- RESULT 5 -->
			<div class="searchResult">
						<img src = images/Recipe_Kale_Ricotta_Quiche_with_Romaine_Apple_Almond_Salad/0108_FPV_Kale-Quiche_97823_WEB_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=12">
						<h3>Kale and Ricotta Quiche</h3>
					</a>
					<p>with Romaine, Apple, and Almond Salad
					</p>
				</div>			
			</div>
			<!-- RESULT 8 -->
			<div class="searchResult">
						<img src = images/Recipe_Roasted_Broccoli_Fregola_Sarda_Salad_with_HardBoiled_Eggs_Tahini_Dressing/1218_2PV3_Brocoli-Fregola-Sarde_96640_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=17">
						<h3>Roasted Broccoli and Fregola Sarda Salad</h3>
					</a>
					<p>with Hard-Boiled Eggs and Tahini Dressing
					</p>
				</div>			
			</div>

			<!-- RESULT 9 -->
			<div class="searchResult">
						<img src = images/Recipe_Roasted_Brussels_Sprout_Freekeh_Salad_with_Lemon_Yogurt_Barrel-Aged_Feta/1225_2PV3_Broccoli-Freekeh_100110_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=18">
						<h3>Roasted Brussels Sprout and Freekeh Salad</h3>
					</a>
					<p>with Lemon Yogurt and Barrel-Aged Feta
					</p>
				</div>			
			</div>

			<!-- RESULT 10 -->
			<div class="searchResult">
						<img src = images/Recipe_Roasted_Cauliflower_Salad_with_Caper_Brown_Butter_Parmesan_Breadcrumbs/0101_2PV3_Roasted_Cauliflower-Kale-Salad_97243_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=19">
						<h3>Roasted Cauliflower Salad</h3>
					</a>
					<p>with Caper Brown Butter and Parmesan Breadcrumbs
					</p>
				</div>			
			</div>

			<!-- RESULT 11 -->
			<div class="searchResult">
						<img src = images/Recipe_Roasted_Red_Pepper_Pasta_with_LemonParmesan_Broccoli/0108_2PV1_Roasted-Pepper-Pasta_97907_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=22">
						<h3>Roasted Red Pepper Pasta</h3>
					</a>
					<p>with Lemon-Parmesan Broccoli
					</p>
				</div>			
			</div>

			<!-- RESULT 12 -->
			<div class="searchResult">
						<img src = images/Recipe_Roasted_Squash_Curry_with_Crispy_Mung_Beans_Jasmine_Rice/1127_2PV3_Vegetable-Curry_74908_WEB_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=23">
						<h3>Roasted Squash Curry</h3>
					</a>
					<p>with Crispy Mung Beans and Jasmine Rice
					</p>
				</div>			
			</div>

			<!-- RESULT 13 -->
			<div class="searchResult">
						<img src = images/Recipe_Smoked_Gouda_Mushroom_Flatbread_with_Endive_Apple_Salad/0101_2PV2_Smoky-Kale-Flatbread_97386_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=30">
						<h3>Smoked Gouda and Mushroom Flatbread</h3>
					</a>
					<p>with Endive and Apple Salad
					</p>
				</div>			
			</div>

			<!-- RESULT 14 -->
			<div class="searchResult">
						<img src = images/Recipe_Sweet_Sour_Vegetable_StirFry_with_Fried_Eggs_Peanuts/0108_2PV2_Stir-Fry-Egg_0195_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=33">
						<h3>Sweet and Sour Vegetable Stir-Fry</h3>
					</a>
					<p>with Fried Eggs and Peanuts
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