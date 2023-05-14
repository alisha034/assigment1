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

        <a href="addadmin.php">Add Admin here</a><br>

    </header>

    <nav>
        <ul>
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

        </ul>
    </nav>
    <img src="banners/1.jpg" alt="Banner" />
    <div class="product">
    <!-- <img src="product.png" alt="product name"> -->
    </div>


    <body>
        <main>
            <?php
           require 'connectdb.php';

           $admin = isset($_GET['admin']) ? $_GET['admin'] : '';
           $st= $connection->prepare("select * from admin");
           $st = $connection->prepare("SELECT fullname,id FROM admin" );
           $st->execute();
           foreach($st as $conn){
              
               echo "New admin add fullname:".$conn['fullname'];
           }  
   
       
		?> 
<footer>
    &copy; ibuy 2019
</footer>
</main>
</body>

</html>