<?php

if(isset($_POST['update']))
{
    include_once('banco.php');

    
    $id= $_POST['id'];
    $name = $_POST['name'];
    $email= $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $CPF = $_POST['CPF'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $serie = $_POST['serie'];
    $acessorio = $_POST['acessorio'];
    $defeito = $_POST['defeito'];
    $observaçao = $_POST['observaçao'];
    
    $sqlInsert = "UPDATE `ordens-serviço`
    SET name='$name', email='$email',phone='$phone', date='$date', CPF='$CPF', marca='$marca', modelo='$modelo',
    serie='$serie', acessorio='$acessorio', defeito='$defeito', observaçao='$observaçao' 
    WHERE id='$id'";
    
    $result = $connection->query($sqlInsert);
    
}
    header('Location: ordens.php');


?>