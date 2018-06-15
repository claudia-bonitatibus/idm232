<?php
	require "includes/db.php";
?>

<?php
	if (isset($_GET['keyword'])) {
		$searchRecipes = $_GET['keyword'];
		//FIND ALL CONTENTS THAT MATCH WHAT THE USER SEARCHED
		$results = mysqli_query($connection,"SELECT * FROM main WHERE title LIKE '%$searchRecipes%' OR description LIKE '%$searchRecipes%' OR subtitle LIKE '%$searchRecipes%'");
		$resultsCount =  mysqli_num_rows($results);
	}


	$recipe_ids = [];
	// LOOP THROUGH ALL RESULTS AND FIND RECIPE ID
	while ( $row = mysqli_fetch_assoc($results) ) { 
		$recipe_ids[] = $row['recipe_id'];
	}

	// CONVERT ARRAY TO STRING SEPERATED BY COMMAS
	$recipe_ids = join(',', $recipe_ids);

	//GET RECIPE FROM THE DATABASE WHER THE ID MATCHES THE MAIN ID
	$recipes = mysqli_query($connection, "SELECT * FROM main WHERE recipe_id in ($recipe_ids) ");
?>
<!-- POPULATE PAGE -->
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
		// CHECK TO SEE IF THERE ARE RESULTS
		if ($resultsCount > 0) {

			while ( $row = mysqli_fetch_assoc($recipes) ) { 
				$recipe_id = $row['recipe_id'];
		?>
		<!-- RESULT 1 -->
			<div class="searchResult">
						<img src = images/<?php echo $row['recipe_img']; ?>.jpg alt= <?php echo $row['title']; ?>>
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