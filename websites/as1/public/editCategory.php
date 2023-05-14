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

        <form method="post" action="addCategory.php">

            <label for="name"> categoryName:</label>
            <input type="text" name="name" id="name" required><br>
            <br><br>
            <label for="id"> categoryId:</label>
            <input type="number" name="id" id="id" required><br>
            <br><br>



            <button type="submit" name="submit">Edit Category</button>
        </form>
        <!--opening the php tag-->
        <?php
        //connecting to database
require('connectdb.php');
//to check the submit button is clicked or not
if (isset($_POST['submit'])) {
    //to check if category and id are set 
	if (isset(  $_POST['category'], $_POST['Id'], )) {
        //using update query to edit the category 
        $stmt = $connection->prepare('UPDATE product SET name=:name, Id=:Id WHERE id=:id');
// Define an array of values to be bound to the prepared statement
		$values = [
		
        $name = $_POST['name'];
        $Id = $_POST['Id'];
        
			
		];
		//this code is used for executeing a database query
     $st->execute($values);
     if ($st) {
        //to print
    echo 'updated';
}
}
}
//closing php tag
?>


        <footer>
            &copy; ibuy 2019
        </footer>
    </main>
</body>

</html>