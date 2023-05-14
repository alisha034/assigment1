 <!DOCTYPE html>
<html>
	<head>
		<title>ibuy Auctions</title>
		<link rel="stylesheet" href="ibuy.css" />
	</head>

	<body>
		<header>
			<h1><span class="i">i</span><span class="b">b</span><span class="u">u</span><span class="y">y</span></h1>

			<form action="#" method="get">
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
			<h1>Login</h1>

			
			<form action="login.php" method="POST">
				<label>Email</label>
				<input type="text" name="email" id="email"></input>

				<label>Username</label>
				<input type="text" name="username" id="username"></input>
           <br>
				<label>Password</label>
				<input type="password" name="password" id="password"></input>
				
			    <label>User</label>
				<input type="radio" name="User" id="User"></input>

				<label>Admin</label>
				<input type="radio" name="Admin" id="Admin"></input>
			
				<input type="submit" value="Submit" name="submit"></input>
</form>
			<?php
				require 'connectdb.php';


				if (isset($_POST['submit'])) {
					if (isset($_POST['email'], $_POST['username'], $_POST['password'])) {
						$st = $connection->prepare('SELECT * from register where email=:email AND username=:username AND password=:password');
						$values = [
							'email' => $_POST['email'],
							'username' => $_POST['username'],
							'password' => $_POST['password'],
						];
						$st->execute($values);
						foreach ($st as $value) {
							if ($_POST['email'] === $value['email'] && $_POST['username'] === $value['username'] && $_POST['password'] === $value['password']) {
				
								if (isset($value['is_admin']) && $value['is_admin']) {
									echo '<a href="admin.php">Click me to go to the admin page</a>';
								} else {
									echo '<a href="home.php">Click me to go to the home page</a>';
								}
							}

						}
					}
				}
			?> 

        
		 <footer>
				&copy; ibuy 2019
			</footer>
		</main>
	</body>
</html> 
