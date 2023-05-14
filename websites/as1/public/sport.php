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
			<li><a class="categoryLink" href="index.php">All Categories</a></li>
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

$st= $connection->prepare("select * from auction WHERE category='sport'");
$st->execute();
foreach($st as $conn){
	echo '<img src="product.png" alt="product name">';
	echo "Title:".$conn['title'];
	echo "id:".$conn['id'];
	echo '<p>'.$conn['description'].'</p>'; 
	echo "category: " . $conn['category'];
	echo "enddate: " . $conn['enddate'];
	echo '<a href="auction.php?id='.$conn['id'].'" class="more auctionLink">More &gt;&gt;</a>';
}
?>
			<footer>
				&copy; ibuy 2019
			</footer>
		</main>
	</body>
</html>