<!DOCTYPE html>
<html>
	<head>
		<title>ibuy Auctions</title>
		<link rel="stylesheet" href="ibuy.css" />
	</head>

	<body>
		<header>
			<h1><span class="i">i</span><span class="b">b</span><span class="u">u</span><span class="y">y</span></h1>

			<form action="#">
				<input type="text" name="search" placeholder="Search for anything" />
				<input type="submit" name="submit" value="Search" />
			</form>
		</header>
		<a href="login.php">login</a><br>
		<a href="addCategory.php">Add Category</a><br>
		<a href="editCategory.php">Edit Category</a><br>
		<a href="deletecategory.php">Delete Category</a><br>
		<nav>
			<ul>
			       <li><a class="categoryLink" href="index.php">All Categories</a></li>
                    <li><a class="categoryLink" href="index.php?category=1">Home &amp; Garden</a></li>
                    <li><a class="categoryLink" href="index.php?category=2">Electronics</a></li>
                    <li><a class="categoryLink" href="index.php?category=3">Fashion</a></li>
                    <li><a class="categoryLink" href="index.php?category=4">Sport</a></li>
                    <li><a class="categoryLink" href="index.php?category=5">Health</a></li>
                    <li><a class="categoryLink" href="index.php?category=6">Toys</a></li>
                    <li><a class="categoryLink" href="index.php?category=7">Motors</a></li>
			</ul>
		</nav>
		<img src="banners/1.jpg" alt="Banner" />
		
		<main>
		
        <?php
        require('connectdb.php');
   
		$category = isset($_GET['category']) ? $_GET['category'] : '';
		$st= $connection->prepare("select * from category");
		$st = $connection->prepare("SELECT title,description, category,categoryid, enddate FROM auction" );
		$st->execute();
		foreach($st as $conn){
			echo'<img src="product.png" alt="product name">';
			echo "Title:".$conn['title'];
		}  

	

?>


        <footer>
				&copy; ibuy 2019
			</footer>
		</main>
	</body>
</html>