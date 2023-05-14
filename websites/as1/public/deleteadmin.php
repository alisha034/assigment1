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

        <form method="post" action="deleteAdmin.php">

            <label for="fname"> Admin fName:</label>
            <input type="text" name="fname" id="fname" required><br>
            <br><br>
            <label for="lname"> Admin lName:</label>
            <input type="text" name="lname" id="lname" required><br>
            <br><br>
            <label for="id">Admin id:</label>
            <input type="number" name="id" id="id" required><br>
            <br><br>
            <button type="submit" name="submit">delete admin</button>
        </form>
        <?php
require('connectdb.php');
$st=$connection->prepare('delete from admin  where id=:id');
$value=[
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