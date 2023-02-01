<?php

    if(!empty($_GET['id']))
    {   
        include 'banco.php';

        $id = $_GET['id'];
        $sqlSelect = " SELECT * FROM `ordens-serviço` WHERE id=$id";
        $res = $connection->query($sqlSelect);

        
            while($user_data = mysqli_fetch_assoc($res)){

                $id = $user_data['id'];
                $name =  $user_data['name'];
                $email=  $user_data['email'];
                $phone =  $user_data['phone'];
                $date =  $user_data['date'];
                $CPF =  $user_data['CPF'];
                $marca =  $user_data['marca'];
                $modelo =  $user_data['modelo'];
                $serie =  $user_data['serie'];
                $acessorio =  $user_data['acessorio'];
                $defeito =  $user_data['defeito'];
                $observaçao =  $user_data['observaçao'];
                $endereço =  $user_data['endereço'];
                $CEP =  $user_data['CEP'];
            }
        

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/edit.css">    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/8efcb60d70.js" crossorigin="anonymous"></script>
    
    <title>editar</title>
</head>
<body>
    
    <?php include 'header.php';?>

    <div class="container-fluid">
        <form action="saveEdit.php" method="post" class="row g-3">
            <div class="col-12">
                <label  class="form-label">Numero da OS:</label>
                <input type="number" name="id"  class="form-control bg-info bg-opacity-10 border border-info  rounded-end "  id="id" value="<?php echo $id?>">
            </div>
            <div class="col-md-3">
                <label  class="form-label">Nome:</label>
                <input type="text" name="name" class="form-control bg-info bg-opacity-10 border border-info  rounded-end" id="name" value="<?php echo $name?>">
            </div>
            <div class="col-md-3">
                <label  class="form-label">Telefone:</label>
                <input type="number" name="phone" class="form-control bg-info bg-opacity-10 border border-info  rounded-end" id="" value="<?php echo $phone?>">
            </div>
            <div class="col-md-3">
                <label  class="form-label">Email:</label>
                <input type="email"name="email" class="form-control bg-info bg-opacity-10 border border-info rounded-end" id="" value="<?php echo $email?>" >
            </div>
            <div class="col-md-3">
                <label class="form-label">CPF/CNPJ:</label>
                <input type="number" name="CPF" class="form-control bg-info bg-opacity-10 border border-info rounded-end" id="" value="<?php echo $CPF?>" >
            </div>
            <div class="col-2">
                <label for="inputAddress2" class="form-label">Data:</label>
                <input type="date" name="date" class="form-control bg-info bg-opacity-10 border border-info  rounded-end" id="" value="<?php echo $date?>">
            </div>
            <div class="col-8">
                <label for="" class="form-label">Endereço:</label>
                <input type="text" name="endereço" class="form-control bg-info bg-opacity-10 border border-info  rounded-end" id="" value="<?php echo $endereço?>">
            </div>
            <div class="col-2">
                <label for="" class="form-label">Cep:</label>
                <input type="number" name="CEP" class="form-control  bg-info bg-opacity-10 border border-info  rounded-end" id="" value="<?php echo $CEP?>">
            </div>
            <div class="col-4">
                <label for="" class="form-label">Marca:</label>
                <input type="text" name="marca" class="form-control  bg-info bg-opacity-10 border border-info  rounded-end" id="" value="<?php echo $marca?>">
            </div>
            <div class="col-2">
                <label for="" class="form-label">Modelo:</label>
                <input type="text" name="modelo" class="form-control bg-info bg-opacity-10 border border-info  rounded-end" id="inputAddress2" value="<?php echo $modelo?>">
            </div>
            <div class="col-2">
                <label for="" class="form-label">Série:</label>
                <input type="text" name="serie" class="form-control bg-info bg-opacity-10 border border-info  rounded-end" id="" value="<?php echo $serie?>">
            </div>
            <div class="col-4">
                <label for="" class="form-label">Acessorio:</label>
                <input type="text" name="acessorio" class="form-control  bg-info bg-opacity-10 border border-info  rounded-end" id="" value="<?php echo $acessorio?>" >
            </div>
            <div class="col-5">
                <label for="" class="form-label">Defeito:</label>
                <input type="text" name="defeito" class="form-control bg-info bg-opacity-10 border border-info  rounded-end" id="" value="<?php echo $defeito?>" >
            </div>
            <div class="col-7">
                <label for="" class="form-label">Observação:</label>
                <input type="text" name="observaçao" class="form-control bg-info bg-opacity-10 border border-info  rounded-end" id="" value="<?php echo $observaçao?>" >
            </div>
            <input type="submit" name="update" id="update">
        </form>
    </div>

    <!-- 
    <div class="main">
        <div class="form">
            <form action="saveEdit.php" method="post">
                <fieldset style="padding: 5px; "><legend>Código da OS</legend>
                    <label for="">N º:</label> <input type="number" name="id"  id="id"value="<?php echo $id?>"> 
                </fieldset>
                <fieldset style="padding: 5px; "><legend>Dados Pessoais</legend>
                    <label for="">Nome:</label> <input type="text" name="name" value="<?php echo $name?>" >
                    <label for="">CPF:</label> <input type="number" name="CPF" value="<?php echo $CPF?>" >
                    <label for="">Email:</label> <input type="email" name="email" value="<?php echo $email?>">
                    <label for="">Telefone:</label> <input type="number" name="phone"  value="<?php echo $phone?>">
                </fieldset><br>
                <fieldset style="padding: 5px;" ><legend>Informações do produto</legend>
                <label for="">Marca:</label> <input type="text"name="marca"  value="<?php echo $marca?>">
                <label for="">Modelo:</label> <input type="text" name="modelo" value="<?php echo $modelo?>">
                <label for="">Defeito:</label> <input type="text" name="defeito" value="<?php echo $defeito?>">
                <label for="">Série:</label> <input type="text" name="serie" value="<?php echo $serie?>">
                <label for="">Acessorio:</label> <input type="text" name="acessorio" value="<?php echo $acessorio?>"><br><br>
                <label for="">Data de entrada:</label> <input type="date" name="date" value="<?php echo $date?>">

                </fieldset><br>
                <fieldset style="padding: 5px;"><legend>Observações:</legend>
                    <input type="text" name="observaçao" id="observaçao" value="<?php echo $observaçao?>" required>
                </fieldset>
                <br>
                </fieldset>
                <input type="submit" name="update" id="update">
                <button>Lançar Garantia</button>
                <br><br><br>
                
            </form>

            <form action="">
                <fieldset style="padding: 5px; border: 2px solid red; "><legend >Garantia:</legend>
                    <label for="date-garania">Garantia de :</label> <input type="checkbox">90 dias <input type="checkbox">180 dias <br><br>
                    <label for="peça-garatia">Peças:</label> <input type="text"><br><br>
                    <label for="">Data de saida:</label> <input type="date" value="<?php //echo $acessorio?>"><br><br>
                    <label for="">Fim da Garantia:</label> <input type="date" value="<?php //echo $acessorio?>">
                    <br><br>
                    <button>
                        <a class='btn btn-xs btn-primary' href='#'>
                        <i style="font-size:25px; " class='fa-solid fa-print'></i>
                    </a></button>
                    
                </fieldset>
            </form>
        </div>
    </div>
-->
</body>
</html>