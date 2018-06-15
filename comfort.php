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
		<a href="home.php" class="logoNav">
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
				<div class="sectionHead comfortFoodBanner">
			<!-- SECTION IMAGE -->
			<h1>Comfort Foods</h1>
		</div>

		<div class="resultGrid">
		<!-- RESULT 1 -->
			<div class="searchResult">
						<img src = images/Recipe_Beef_Medallions_Mushroom_Sauce_with_Mashed_Potatoes/0101_2PM_Steak-Diane_97315_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=2">
						<h3>Beef Medallions and Mushroom Sauce</h3>
					</a>
					<p>With Mashed Potatoes
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
						<img src = images/Recipe_Crispy_Fish_Sandwiches_with_Tartar_Sauce_Roasted_Sweet_Potato_Wedges/0101_FPF_Crispy-Wild-Alaskan-Pollock_97377_WEB_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=8">
						<h3>Crispy Fish Sandwiches</h3>
					</a>
					<p>with Tartar Sauce Roasted Sweet Potato Wedges
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
					<p>with Romaine, Apple, & Almond Salad
					</p>
				</div>			
			</div>
			
			<!-- RESULT 6 -->
			<div class="searchResult">
						<img src = images/Recipe_ParmesanCrusted_Chicken_with_Mashed_Sweet_Potatoes_Roasted_Broccoli/0108_FPP_Baked-Parmesan-Chicken_98333_WEB_Center_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=14">
						<h3>Parmesan-Crusted Chicken</h3>
					</a>
					<p>with Mashed Sweet Potatoes & Roasted Broccoli
					</p>
				</div>			
			</div>
			
			<!-- RESULT 7 -->
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
			
			<!-- RESULT 8 -->
			<div class="searchResult">
						<img src = images/Recipe_Roasted_Chicken_Fall_Vegetables_with_Cranberry_Ginger_Compote/1120_FPP_Roasted-Chicken_92314_WEB_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=20">
						<h3>Roasted Chicken and Fall Vegetables</h3>
					</a>
					<p>with Cranberry and Ginger Compote
					</p>
				</div>			
			</div>

			<!-- RESULT 9 -->
			<div class="searchResult">
						<img src = images/Recipe_Roasted_Turkey_Breast_FarroEndive_Salad_with_Brown_Butter_Apple_Compote/1211_2PRE08_Turkey_98057_WEB_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=24">
						<h3>Roasted Turkey Breast and Farro-Endive Salad</h3>
					</a>
					<p>with Brown Butter Apple Compote
					</p>
				</div>			
			</div>

			<!-- RESULT 10 -->
			<div class="searchResult">
						<img src = images/Recipe_Salmon_HoneyGlazed_Carrots_with_LemonSaffron_Yogurt_Sauce/1106_2PF_Salmon-Honey-Carrots_94837_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=25">
						<h3>Salmon and Honey-Glazed Carrots</h3>
					</a>
					<p>with Lemon-Saffron Yogurt Sauce
					</p>
				</div>			
			</div>

			<!-- RESULT 11-->
			<div class="searchResult">
						<img src = images/Recipe_Seared_Chicken_Mashed_Potatoes_with_MapleGlazed_Carrots/0108_2PP_Chicken-Mashed-Potatoes_98562_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=26">
						<h3>Seared Chicken and Mashed Potatoes</h3>
					</a>
					<p>with Maple-Glazed Carrots
					</p>
				</div>			
			</div>

			<!-- RESULT 12 -->
			<div class="searchResult">
						<img src = images/Recipe_Tuscan_Chicken_Green_Lentil_Stew_with_Goat_Cheese/0101_2PP_Chicken-Lentil-Stew_100567_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=35">
						<h3>Tuscan Chicken Green Lentil Stew</h3>
					</a>
					<p>with Goat Cheese
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