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
            <!--to link with every page -->
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
        <form method="post" action="deleteCategory.php">

            <label for="name"> CategoryName:</label>
            <input type="text" name="name" id="name" required><br>
            <br><br>
            <label for="id">Categoryid:</label>
            <input type="number" name="id" id="id" required><br>
            <br><br>
         <!--using submit button for delet category-->
            <button type="submit" name="submit">delete category</button>
        </form>
        <?php
        //connecting with database
require('connectdb.php');
//using delete query to delete category 
$st=$connection->prepare('delete from category where id=:?');
$value=[
    //giving id value
    'id'=>5,
];
$st->execute($value);

?>


        <footer>
            &copy; ibuy 2019
        </footer>
    </main>
</body>

</html>