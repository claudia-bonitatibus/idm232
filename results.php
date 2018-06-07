<?php
	require "includes/db.php";
?>

<!------ SEARCH: FIRST ATTEMPT ------>
<?php
	if (isset($_GET['keyword'])) {
		$searchRecipes = $_GET['keyword'];
		$searchRecipes = preg_replace( "#[^0-9a-z]#", "", $searchRecipes);
		// Find all tags that match what the user just searched
		$results = mysqli_query($connection,"SELECT * FROM tags WHERE tag LIKE '$searchRecipes' ");
		$resultsCount =  mysqli_num_rows($results);
	}


$recipe_ids = [];
// Loop through all results and find recipe id
while ( $row = mysqli_fetch_assoc($results) ) { 
	$recipe_ids[] = $row['recipe_id'];
}

// Convert array to string seperated by commas
$recipe_ids = join(',', $recipe_ids);

// Get recipes from db where id matches 'main' id;
$recipes = mysqli_query($connection, "SELECT * FROM main WHERE recipe_id in ($recipe_ids) ");
?>
<?php
	$pageTitle='Search';
	require "includes/header.php";
?>
	<div class="helpHead">
		<!-- SECTION IMAGE -->
		<h1>Search</h1>
	</div>
	<main>
		<div class="helpCard">
			<div class="displaySearchInput">
				<p>
					Showing results <?php echo$resultsCount;?> for <i>"<?php echo $searchRecipes;?>"</i>
				</p>
			</div>
		</div>
		<div class="resultGrid">

		<?php 
		// Check to see if we have any results
		if ($resultsCount > 0) {

			while ( $row = mysqli_fetch_assoc($recipes) ) { 
				$recipe_id = $row['recipe_id'];
		?>
		<!-- RESULT 1 -->
			<div class="searchResult">
<!-- 				<a href="recipe.php"> -->
						<img src = images/<?php echo $row['recipe_img']; ?>.jpg alt= <?php echo $row['title']; ?>>
<!-- 				</a> -->
				<div class="text">
					<a href="recipe.php?id=<?php echo $recipe_id; ?>">
						<h3><?php echo $row['title']; ?></h3>
					</a>
					<p><?php echo $row['subtitle']; ?>
					</p>
				</div>		
			</div>
		<?php
			}

			// Step 4: Release Returned Data
			mysqli_free_result($result);

		
	} else {
		?> 

	<main>
			<p>No results found for your search</p>
			<p>There are no recipes in our database related to your search</p>		

		<?php
 
	}


			// Step 5: Close Database Connection
			mysqli_close($connection);
		?>

		</div>
	</main>
<?php
	require "includes/footer.php";
?>