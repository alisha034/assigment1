<!DOCTYPE html>
<html>
<head>
	<title>ibuy Auctions</title>
	<link rel="stylesheet" href="ibuy.css" />
</head>
<body>
	<header>
		<h1><span class="i">i</span><span class="b">b</span><span class="u">u</span><span class="y">y</span></h1>
		<form action="#" method="GET">
			<input type="text" name="search" placeholder="Search for anything" />
			<input type="submit" value="Search" />
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
	<h1>Registration</h1>
		<form action="register.php" method="POST">
		<label id='email'>Email:</label>
		<input type="text" name="email"  id='email' required />
		<label id="username">Username:</label>
			<input type="text" name="username" id="username" required />
			<label id="password">Password:</label>
			<input type="password" name="password" id="password"required />
			<br>
			<label>User</label>
				<input type="radio" name="User" id="User"></input>

				<label>Admin</label>
				<input type="radio" name="Admin" id="Admin"></input>
			<input type="submit" value="Submit" name="submit" />

		</form>
		<!--opening php tag-->
		<?php
		//connecting with database
			require('connectdb.php');
			 //tochecks whether the form submit button named "submit" has been clicked or not. 
			if(isset($_POST['submit'])){
				//inserting the data from table register from database
				$st = $connection->prepare("INSERT INTO register (email, username, password) VALUES (:email, :username, :password)");
				$values = [
					// to define the data 
					'email' => $_POST['email'],
					'username' => $_POST['username'],
					'password' => $_POST['password'],
				];
				$st->execute($values);
				if($st){
					//using a herf tag to go to the homepage after you register
					echo "Successfully registered. 
					<a href='home.php'>Return to homepage</a>";
				}
			}
			//closing the php tag
		?>
		<!--code to close main tag-->
	</main>
	<!--opening and closing footer-->
	<footer>
		&copy; ibuy 2019
	</footer>
</body>
</html>

