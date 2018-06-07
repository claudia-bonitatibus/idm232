<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	content = "width= device-width,
	initial-scale= 1.0"
	>
	
	<title><?php echo $pageTitle;?></title>

	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css">
	<link rel="stylesheet" href="cooking-website.css">
</head>
<body>
	<nav>
		<a href="home.php" class="logoNav">
			<img src = assets/logo.svg alt="logo" class="logoNav">
		</a>
		<form action="results.php" method="GET">
		<div class="search">
			<input type="text" class="inputChannel" placeholder="Search Keywords..." name="keyword">
		</div>
			<button>
				<img src = assets/search-icon.svg alt="search" class="searchButton">
			</button>
		</form>
	</nav>