<?php
$username='student';
$password='student';
$dbasename='assignment1';
$server='mysql';

$connection= new PDO('mysql:dbname='.$dbasename.';host='.$server,$username,$password);

?>