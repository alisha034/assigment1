<!DOCTYPE html>
<html>
<!-- This is the HTML code for a web page's head section. -->
<head>
    <title>ibuy Auctions</title>
    <link rel="stylesheet" href="ibuy.css" />
</head>

<body>
    <header>
        <h1><span class="i">i</span><span class="b">b</span><span class="u">u</span><span class="y">y</span></h1>
<!--This code is an HTML form that allows users to enter a search term into a text input field and submit the form by clicking the "Search" button.-->
        <form action="#">
            <input type="text" name="search" placeholder="Search for anything" />
            <input type="submit" name="submit" value="Search" />
        </form>
    </header>
    <!--this line of code is for to connect with the database-->
    <?php require 'connectdb.php';?>
   <!-- This HTML code block represents a navigation menu.-->
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
                  
                    <!--here php select query is used to get the data from the database-->
            <?php
            
                $st = $connection->prepare("select fullname from admin");
                $st->execute();
                foreach ($st as $value) {
        
                echo "<li><a>" . $value['fullname'] ."</li><?a>";
                } 
            
                ?>
          </ul>
    </nav>
    <img src="banners/1.jpg" alt="Banner" />

    <main>
         <a href="editAdmin.php">Edit Your Admin</a><br><br>
		 <a href="deleteAdmin.php">delete Your Admin</a><br>
         <br>
<?php
require('connectdb.php');

if (isset($_POST['submit'])) {
    // to check if fullname is not empty
    if (!empty($_POST['fullname'])) { 
        //using insert query to insert data in database
        $st = $connection->prepare("INSERT INTO admin (fullname,id) values(:fullname,:id)");
        $values = [
            'fullname' => $_POST['fullname'],
            'id' => $_POST['id'],
        ];
        $st->execute($values);
        if ($st) {
            echo "Admin added successfully!";
        }
    } else {
        echo "Fullname is required!";
    }
}
?>
<!--form action created-->
<form method="post" action="addAdmin.php">
    <label for="fullname">Full Name:</label>
    <input type="text" name="fullname" id="fullname" required><br><br>
    
    <label for="id">ID:</label>
    <input type="number" name="id" id="id" required><br><br>
    
    <button type="submit" name="submit">Add Admin</button>
</form>

<!--footer tag open and closed-->
<footer>
            &copy; ibuy 2019
        </footer>
    </main>
</body>
<!--closing the html tag-->
</html>

