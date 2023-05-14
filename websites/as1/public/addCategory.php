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
            
                $st = $connection->prepare("select name from category");
                $st->execute();
                foreach ($st as $value) {
        
                echo "<li><a>" . $value['name'] ."</li><?a>";
                } 
            
                ?>
          </ul>
    </nav>
    <img src="banners/1.jpg" alt="Banner" />

    <main>
   <!-- This form is for introducing new categories. The information is sent to the "addCategory.php"-->
        <form method="post" action="addCategory.php">
            <!-- Label for the category name input field -->
            <label for="name">Category Name:<label>
                 <!-- Input field for the category name, with "name" and "id"  -->
                    <input type="text" name="names" id="name" required><br>
                    <br>
                     <!-- Label for the category ID input field -->
                    <label for="id">ID:<label>
                            <input type="number" name="ids" id="id" required><br><br>
 <!--  to submit the form data -->
                            <button type="submit" name="submit">addCategory</button>

        </form> 
        <?php
        //to connect to the database
require('connectdb.php');
 //tochecks whether the form submit button named "submit" has been clicked or not. 
if(isset($_POST['submit'])){
    //which inserts the form data into the category table
        $st=$connection->prepare("insert into category(name,id) values(:name,:id)" );
        $values=
        [
            //to define the name and id
            'name'=>$_POST['names'],
            'id'=>$_POST['ids'],

    ];
    // for excuting the insert query
        $st->execute($values);
		if ($st) {
            echo"inserted";
		}
        }
    

?>
<!--footer tag open and closed-->
        <footer>
            &copy; ibuy 2019
        </footer>
    </main>
</body>
<!--closing the html tag-->
</html>