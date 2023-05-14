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

		<nav>
			<ul>
			<li><a class="categoryLink" href="home&garden.php">Home &amp; Garden</a></li>
            <li><a class="categoryLink" href="electronics.php">Electronics</a></li>
            <li><a class="categoryLink" href="fashion.php">Fashion</a></li>
            <li><a class="categoryLink" href="sport.php">Sport</a></li>
            <li><a class="categoryLink" href="health.php">Health</a></li>
            <li><a class="categoryLink" href="toys.php">Toys</a></li>
            <li><a class="categoryLink" href="motors.php">Motors</a></li>
            <li><a class="categoryLink" href="more.php">More</a></li>
			</ul>
		</nav>
		<img src="banners/1.jpg" alt="Banner" />

		<main>
<?php
		require 'connectdb.php';

$category = isset($_GET['category']) ? $_GET['category'] : '';
$st= $connection->prepare("select * from auction");
$st = $connection->prepare("SELECT title,description, category,categoryId, enddate FROM auction WHERE category=:3)" );
$st->execute();
foreach($st as $conn){
	echo'<img src="product.png" alt="product name">';
	echo "Title:".$conn['title'],Description: " . $conn['description'], category: " . $conn['category'],categoryId: " . $conn['categoryId'], enddate: " . $conn['enddate'];

	<a herf="auction.php?id=<?php echo $conn['id'];?>"class="more auctionLink">More &gt;&gt;</a>
}  
?>

			<footer>
				&copy; ibuy 2019
			</footer>
		</main>
	</body>
</html>