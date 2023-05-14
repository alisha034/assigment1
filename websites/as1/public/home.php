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
		
			<br>
			<a href="logout.php">logout</a>
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
		<a href="addauction.php">ADD Auction</a>

		<main>

		 <?php
            
            require 'connectdb.php';
            $st = $connection->prepare("SELECT title,description, category,id, enddate FROM auction" );
            $st->execute();
            foreach($st as $value){
				
			?>
				<ul class="productList">
				<img src="product.png" alt="product name">
				<section class='details'>
					<h2>title:
					<?php echo $value['title'];?>
					</h2>
						<p>Description:
						<?php echo $value['description'];?>

						<p>category:
						<?php echo $value['category'];?>

						
						<p>id:
						<?php echo $value['id'];?>

			</p>
			 <a href="auction.php?id=<?php echo $value['id']?>"class="more auctionLink">More &gt;&gt; </a>
			</section>
			</ul>	
			
			 <?php
			}
			?>		
        <footer>
				&copy; ibuy 2019
			</footer>
		</main>
	</body>
</html> 