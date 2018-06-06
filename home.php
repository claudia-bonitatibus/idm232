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

	<title>Fork Over Spoon</title>

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
		<div class="foodSection">
			<div class="sectionHead easyBanner">
			<!-- SECTION IMAGE -->
				<a href="quick.php">
					<h1>Quick Meals</h1>
				</a>
			</div>
			
			<div class="displayRecipes">
				<div class="featuredRecipe">
						<img src = assets/ancho-orange-chicken.jpg alt="filler content">
					<div class="text">
						<a href="recipe.php?id=1">
							<h3>Ancho Orange Chicken</h3>
						</a>
						<p>With Kale Rice and Rosted Carrots
						</p>
					</div>
				</div>

				<div class="featuredRecipe">
						<img src = assets/mushroom-potato-tacos.jpg alt="filler content">
					<div class="text">
						<a href="recipe.php?id=13">
							<h3>Mushroom and Potato Tacos</h3>
						</a>
						<p> with Romaine and Orange Salad
						</p>
					</div>
				</div>

				<div class="featuredRecipe">
						<img src = assets/pesto-broccoli-sandwich.jpg alt="filler content">
					<div class="text">
						<a href="recipe.php?id=3">
							<h3>Broccoli and Basil Pesto Sandwiches</h3>
						</a>
						<p>with Romaine and Citrus Salad
						</p>
					</div>
				</div>

				<div class="featuredRecipe">
						<img src = assets/crispy-fish-sandwiches.jpg alt="filler content">
					<div class="text">
						<a href="recipe.php?id=9">
							<h3>Crispy Fish Sandwiches</h3>
						</a>
						<p>With Tartar Sauce Roasted Sweet Potato Wedges
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="foodSection">
			<div class="sectionHead inspiredDishesBanner">
			<!-- SECTION IMAGE -->
			<a href="inspired.php">
				<h1>Inspired Dishes</h1>
			</a>
			</div>
			<div class="displayRecipes">
				<div class="featuredRecipe">
						<img src = assets/hoisin-glazed-pork-chops.jpg alt="filler content">
					<div class="text">
						<a href="recipe.php?id=10">
							<h3>Hoisin-Glazed Pork Chops</h3>
						</a>
						<p>with Stir-Fried Vegetables and Wonton Noodles
						</p>
					</div>
				</div>

				<div class="featuredRecipe">
						<img src = assets/spicy-pork-rice-cakes.jpg alt="filler content">
					<div class="text">
						<a href="recipe.php?id=32">
							<h3>Spicy Pork and Korean Rice Cakes</h3>
						</a>
						<p> Bok Choy
						</p>
					</div>
				</div>

				<div class="featuredRecipe">
						<img src = assets/shiitake-hoisin-burger.jpg alt="filler content">
					<div class="text">
						<a href="recipe.php?id=28">
							<h3>Shiitake and Hoisin Beef Burgers</h3>
						</a>
						<p> with Miso Mayonnaise and Roasted Sweet Potatoes
						</p>
					</div>
				</div>

				<div class="featuredRecipe">
						<img src = assets/sweet-sour-stir-fry.jpg alt="filler content">
					<div class="text">
						<a href="recipe.php?id=33">
							<h3>Sweet and Sour Vegetable Stir-Fry</h3>
						</a>
						<p>with Fried Eggs and Peanuts
						</p>
					</div>
				</div>
			</div>

		</div>

		<div class="foodSection">
			<div class="sectionHead vegetarianBanner">
			<!-- SECTION IMAGE -->
				<a href="vegetarian.php">
				<h1>Vegetarian</h1>
				</a>
			</div>
			
			<div class="displayRecipes">
				<div class="featuredRecipe">
						<img src = assets/roasted-pepper-pasta.jpg alt="filler content">
					<div class="text">
						<a href="recipe.php?id=22">
							<h3>Roasted Red Pepper Pasta</h3>
						</a>
						<p>with Lemon-Parmesan Broccoli
						</p>
					</div>
				</div>

				<div class="featuredRecipe">
						<img src = assets/cauliflower-kale-salad.jpg alt="filler content">
					<div class="text">
						<a href="recipe.php?id=19">
							<h3>Roasted Cauliflower Salad</h3>
						</a>
						<p>with Caper Brown Butter and Parmesan Breadcrumbs
						</p>
					</div>
				</div>

				<div class="featuredRecipe">
						<img src = assets/mushroom-flatbread.jpg alt="filler content">
					<div class="text">
						<a href="recipe.php?id=30">
							<h3>Smoked Gouda and Mushroom Flatbread</h3>
						</a>
						<p>with Endive and Apple Salad
						</p>
					</div>
				</div>

				<div class="featuredRecipe">
						<img src = assets/kale-quiche.jpg alt="filler content">
					<div class="text">
						<a href="recipe.php?id=12">
							<h3>Kale and Ricotta Quiche</h3>
						</a>
						<p>with Romaine, Apple, and Almond Salad
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="foodSection">
			<div class="sectionHead comfortFoodBanner">
				<a href="comfort.php">
				<h1>Comfort Foods</h1>
				</a>
			</div>
			
			<div class="displayRecipes">
				<div class="featuredRecipe">
						<img src = assets/pimento-burgers.jpg alt="filler content">
					<div class="text">
						<a href="recipe.php?id=15">
							<h3>Pimento Cheeseburgers</h3>
						</a>
						<p>with Sweet Potato Oven Fries
						</p>
					</div>
				</div>

				<div class="featuredRecipe">
						<img src = assets/lentil-stew.jpg alt="filler content">
					<div class="text">
						<a href="recipe.php?id=37">
							<h3>Tuscan Chicken Green Lentil Stew</h3>
						</a>
						<p>with Goat Cheese
						</p>
					</div>
				</div>

				<div class="featuredRecipe">
						<img src = assets/seared-chicken.jpg alt="filler content">
					<div class="text">
						<a href="recipe.php?id=26">
							<h3>Seared Chicken and Mashed Potatoes</h3>
						</a>
						<p>with Maple-Glazed Carrots
						</p>
					</div>
				</div>

				<div class="featuredRecipe">
						<img src = assets/parmesan-chicken.jpg alt="filler content">
					<div class="text">
						<a href="recipe.php?id=14">
							<h3>Parmesan-Crusted Chicken</h3>
						</a>
						<p>with Mashed Sweet Potatoes and Roasted Broccoli
						</p>
					</div>
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
