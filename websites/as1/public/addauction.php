<!DOCTYPE html>
<html><!--opeing html tag-->
	<head><!--giving title and linking with css-->
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
				<!-- Each link  text refers to a website product category-->
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
		<!--link added to edit and delete page  using a href-->
         <a href="editAuction.php">Edit Your Auction</a><br>
		 <a href="deleteAuction.php">delete Your Auction</a><br>

		<main>
			<!--form action opened-->
		<form method="post" action="addauction.php">
                <label for="title">title:</label>
                <input type="text" name="title" id="title" required><br><br><br>

                <label for="description">description:</label>
                <textarea name="description" id="description" required
                    style="height: 100px; width: 150px;"></textarea><br><br>

                <label for="category">category:</label>
                <select name="category" id="category" required><br>
                    <option value="">Select a category</option>
                    <option value="Home & Garden">Home & Garden</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Fashion">Fashion</option>
                    <option value="Sport">Sport</option>
                    <option value="Health">Health</option>
                    <option value="Toys">Toys</option>
                    <option value="Motors">Motors</option>
                </select><br><br>

				
				<label for="id"> Id:</label>
                <input type="text" name="id" id="id" required><br>

 
                <label for="endDate"> endDate:</label>
                <input type="date" name="endDate" id="endDate" required><br><br>


                <button type="submit" name="submit">Add Auction Here</button><br>
			

				<!-- <button type="submit" name="submit">view your auction Here</button> -->
				<a href='home.php'>Return View your auction</a>";
            </form>
	 <?php
	 //connecting with the database
        require('connectdb.php');

		if (isset($_POST['submit'])) {
			//using insert query to insert data which will be recored in the databse 
		
			$st = $connection->prepare("INSERT INTO auction (title, description, category,id, enddate)
	 values(:title,:description,:category,:id,:endDate)");
			$values = [
				//to define the given attributies
				'title' => $_POST['title'],
				'description' => $_POST['description'],
				'category' => $_POST['category'],
				'id' => $_POST['id'],
				'endDate' => $_POST['endDate'],
				
			];
			// for excuting the insert query
			$st->execute($values);
			if ($st) {
			
			}
		}
		//closing php tag
		?>
		<!--opeing and closing footer-->

        <footer>
				&copy; ibuy 2019
			</footer>
		</main>
	</body><!--closing the body -->
</html><!--closing the html tag-->
       