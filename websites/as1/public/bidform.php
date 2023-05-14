	<main>
		

        <form action="bidform.php" method="post">
		<label for="amountbid">amount Bid:</label>
		<input type="text" id="amountbid" name="amountbid"><br><br>
		<input type="submit" value="insertbid" name="InsertBid">
		<input type="submit" value="Seebid" name="Selectbid">
	    </form>

		<?php
		require('connectdb.php');
		if(isset($_POST['InsertBid'])){
			$st=$connection->prepare("INSERT INTO bid (amountbid) VALUES (:amountbid)");
			$values=[
				'amountbid'=>$_POST['amountbid'],
			];
			$st->execute($values);
			
			if($st){
				echo"Amount inserted";
			}
		}
		if(isset($_POST['Selectbid'])){
			$st2 = $connection->prepare("SELECT * FROM bid");
			$st2->execute();
			foreach ($st2 as $value) {
				echo "User said: " . $value['amountbid'] .'<br>';
			}
		}
	
?>
</main>
        
		
		</main>
	</body>
</html>
