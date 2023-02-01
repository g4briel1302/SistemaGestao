<?php
/*
$mysqli = new mysqli("localhost", "root","","test");
$res = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT * FROM user"));
*/

$dbHost= 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'andradas';

$connection = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
mysqli_set_charset($connection, 'utf8mb4');

/*teste de conexao do banco
if($connection -> connect_errno)
{
    echo 'erro';
}else
{
    echo'conexao estabelecida';
}
*/
?>