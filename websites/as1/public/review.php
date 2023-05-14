
    <main>
        <h1>Give Your Review</h1>
        <form action="auction.php" method="POST">

        <label for="username">username:</label>
            <input type="text" id="username" name="username" required>

            <label for="Review">Review:</label>
            <textarea id="Review" name="review" required></textarea>
            <br>

            <input type="Submit" value="Submit" name="Submit"></input>
        </form>

        <?php
require 'connectdb.php';

if(isset($_POST['Submit'])){
    if(isset($_POST['review']) && !empty($_POST['review'])) {
        $st=$connection->prepare("insert into review (username,review) values(:username,:review)");
        $values=['review'=>$_POST['review'],
        'username'=>$_POST['username']
    ];
        $st->execute($values);
        if($st){
            echo "Review added".'<br>';
        }
    } 
}
$st = $connection->prepare("select review from review");
$st->execute();
foreach ($st as $value) {
    echo "User said: " . $value['review'] .'<br>';
} 

?>



        <footer>
            &copy; ibuy 2019
        </footer>
    </main>
</body>

</html>