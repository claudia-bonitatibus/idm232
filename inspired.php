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
				<div class="sectionHead inspiredDishesBanner">
			<!-- SECTION IMAGE -->
			<h1>Inspired Dishes</h1>
		</div>

		<div class="resultGrid">
		<!-- RESULT 1 -->
			<div class="searchResult">
						<img src = images/Recipe_General_Tsos_Chicken_with_Bok_Choy_Jasmine_Rice/0101_2PRE07_General-Tsos-Chicken_97217_WEB_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=9">
						<h3>General Tso's Chicken</h3>
					</a>
					<p>with Bok Choy and Jasmine Rice
					</p>
				</div>
			</div>
			
			<!-- RESULT 2 -->
			<div class="searchResult">
						<img src = images/Recipe_HoisinGlazed_Pork_Chops_with_StirFried_Vegetables_Wonton_Noodles/0101_FPM_Pork-Chops_97303_WEB_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=10">
						<h3>Hoisin-Glazed Pork Chops</h3>
					</a>
					<p>with Stir-Fried Vegetables and Wonton Noodles
					</p>
				</div>			
			</div>
			
			<!-- RESULT 3 -->
			<div class="searchResult">
						<img src = images/Recipe_HoneyButter_Barramundi_with_Zaatar_Roasted_Vegetables/0108_FPF_Barramundi_0304_WEB_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=11">
						<h3>Honey-Butter Barramundi</h3>
					</a>
					<p>with Za'atar Roasted Vegetables
					</p>
				</div>			
			</div>

			<!-- RESULT 4 -->
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
			
			<!-- RESULT 5 -->
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
			
			<!-- RESULT 6 -->
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
			
			<!-- RESULT 7 -->
			<div class="searchResult">
						<img src = images/Recipe_Pork_Chorizo_Tacos_with_Cheesy_Roasted_Potatoes/0101_2PRE08_Saucy-Chorizo_Tacos_97328_WEB_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=16">
						<h3>Pork Chorizo Tacos</h3>
					</a>
					<p>with Cheesy Roasted Potatoes
					</p>
				</div>			
			</div>
			
			<!-- RESULT 8 -->
			<div class="searchResult">
						<img src = images/Recipe_Shiitake_Hoisin_Beef_Burgers_with_Miso_Mayonnaise_Roasted_Sweet_Potatoes/1204_FPM_Shiitake-Hoisin-Burger_94634_WEB_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=28">
						<h3>Shiitake and Hoisin Beef Burgers</h3>
					</a>
					<p>with Miso Mayonnaise and Roasted Sweet Potatoes
					</p>
				</div>			
			</div>

			<!-- RESULT 9 -->
			<div class="searchResult">
						<img src = images/Recipe_Spicy_Pork_Korean_Rice_Cakes_with_Bok_Choy/1225_FPM_Rice-Cakes_100092_WEB_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=32">
						<h3>Spicy Pork and Korean Rice Cakes</h3>
					</a>
					<p>with Bok Choy
					</p>
				</div>			
			</div>

			<!-- RESULT 10 -->
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

			<!-- RESULT 11 -->
			<div class="searchResult">
						<img src = images/Recipe_Thai_Curry_Chicken_with_Carrots_Bok_Choy/1218_2PRE07_Thai-Curry-Chicken_96739_WEB_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=34">
						<h3>Thai Curry Chicken</h3>
					</a>
					<p>with Carrots and Bok Choy
					</p>
				</div>			
			</div>

			<!-- RESULT 12 -->
			<div class="searchResult">
						<img src = images/Recipe_Top_Chef_Seared_Grassfed_Steaks_with_Sweet_Chili-Glazed_Vegetables/0108_FPM_Seared-Steaks_97965_WEB_SQ_hi_res.jpg alt="filler content">
				<div class="text">
					<a href="recipe.php?id=36">
						<h3>Top Chef Seared Grassfed Steaks</h3>
					</a>
					<p>with Sweet Chili-Glazed Vegetables
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