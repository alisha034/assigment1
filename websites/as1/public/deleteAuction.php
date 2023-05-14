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

        <form method="post" action="deleteAuction.php">

            <label for="name"> AuctionName:</label>
            <input type="text" name="name" id="name" required><br>
            <br><br>
            <label for="id">Auctionid:</label>
            <input type="number" name="id" id="id" required><br>
            <br><br>



            <button type="submit" name="submit">delete auction</button>
        </form>
        <?php
require('connectdb.php');
$st=$connection->prepare('delete from auction  where id=:id');
$value=[
    'id'=>7,
];
$st->execute($value);

?>


        <footer>
            &copy; ibuy 2019
        </footer>
    </main>
</body>

</html>