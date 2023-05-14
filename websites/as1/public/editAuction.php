<!DOCTYPE html>
<!--opening html tag-->
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
                 <!-- Each link element's text refers to a website product category-->
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
<!--form action open-->
		<form method="post" action="addauction.php">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" required>
                <br><br><br>
         

                <label for="description">Description:</label>
                <textarea name="description" id="description" required
                    style="height: 100px; width: 10000px;"></textarea>
                    <br><br><br>
<br>
                <label for="category">Category:</label>
                <select name="category" id="category" required><br>
                    <option value="">Select a category</option>
                    <option value="1">Home & Garden</option>
                    <option value="2">Electronics</option>
                    <option value="3">Fashion</option>
                    <option value="4">Sport</option>
                    <option value="5">Health</option>
                    <option value="6">Toys</option>
                    <option value="7">Motors</option>
                </select>
                <br><br>
                <label for="categoryId"> categoryId:</label>
                <input type="number" name="categoryId" id="categoryId" required><br>
                <br><br>
                <label for="endDate">Auction end date:</label>
                <input type="date" name="endDate" id="endDate" required><br><br>


                <button type="submit" name="submit">Edit Auction</button>
            </form>
            <!--opening php tag-->
			<?php
            //to connect with database
require('connectdb.php');
if (isset($_POST['submit'])) {
	if (isset($_POST['title'], $_POST['description'], $_POST['category'], $_POST['categoryId'], $_POST['endDate'])) {
		$stmt = $connection->prepare('UPDATE product  title=:title, description=:description, category=:category, categoryId=:categoryId, endDate=:endDate WHERE id=:id');
		$values = [
			$title = $_POST['title'],
			$description = $_POST['description'],
			$category = $_POST['category'],
			$categoryId = $_POST['cotegoryId'],
			$endDate = $_POST['endDate']
		];
		
     $st->execute($values);
     if ($st) {
    echo 'updated';
}
}
}

?>

    <!--opening and closing footer-->
        <footer>
				&copy; ibuy 2019
			</footer>
		</main>
	</body>
</html>