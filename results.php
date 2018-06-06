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

<!------ SEARCH: FIRST ATTEMPT ------>
<?php
	if (isset($_POST['search'])) {
		$searchRecipes = $_POST['search'];
		$searchRecipes = preg_replace( "#[^0-9a-z]#", "", $searchRecipes);
		$searchQuery = mysqli_query("SELECT * FROM tags WHERE tag LIKE '%$searchRecipes%'") or die ("Query doesn't work.");
		$counter =  mysqli_num_rows($searchQuery);
		// if there is no result go to the no results found page
		if($count == 0){
			$output = "no results";
		}else{
			while($row = mysqli_fetch_assoc($searchQuery)){


			}
		}
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
	
	<title>Search</title>

	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css">
	<link rel="stylesheet" href="cooking-website.css">
</head>
<body>
	<nav>
		<a href="home.html" class="logoNav">
			<img src = assets/logo.svg alt="logo" class="logoNav">
		</a>
		<form>
		<div class="search">
			<input type="text" class="inputChannel" placeholder="Search..." name="search">
		</div>
			<img src = assets/search-icon.svg alt="search" class="searchButton" name="submit" value="Search">
		</form>
	</nav>
	<div class="helpHead">
		<!-- SECTION IMAGE -->
		<h1>Search</h1>
	</div>
	<main>
		<div class="helpCard">
			<div class="displaySearchInput">
				<p>
					Showing results <!-- X NUMBER OF --> for... <i>"User Input"</i>
				</p>
			</div>
		</div>
		<div class="resultGrid">
		<?php 
			while ($row= mysqli_fetch_assoc($result)) { 			
				$recipe_id = $row['recipe_id'];
		?>
		<!-- RESULT 1 -->
			<div class="searchResult">
<!-- 				<a href="recipe.php"> -->
						<img src = images/<?php echo $row['recipe_img']; ?>.jpg alt= <?php echo $row['title']; ?>>
<!-- 				</a> -->
				<div class="text">
					<a href="recipe.php?id=<?php echo $recipe_id; ?>"">
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

			// Step 5: Close Database Connection
			mysqli_close($connection);
		?>
		</div>
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