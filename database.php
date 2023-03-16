<?php
$servername='localhost';
$username='tomingmartin';
$password='Ij6lS*H?ScwD';
$dbname='tomingmartin_voting';
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
    die('Could not Connect My Sql:' .mysql_error());
}
?>