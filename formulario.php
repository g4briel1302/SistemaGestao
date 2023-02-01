<?php
   
    if(isset($_POST['submit']))
    {
        /*
        print_r('id: ' . $_POST['id']);
        print_r('<br>');
        print_r('name: ' . $_POST['name']);
        print_r('<br>');
        print_r('email: ' . $_POST['email']);
        print_r('<br>');
        print_r('telefone: ' . $_POST['phone']);
        print_r('<br>');
        print_r('data: ' . $_POST['date']);
        print_r('<br>');
        print_r('cpf: ' . $_POST['CPF']);
        print_r('<br>');
        print_r('marca: ' . $_POST['marca']);
        print_r('<br>');
        print_r('modelo: ' . $_POST['modelo']);
        print_r('<br>');
        print_r('serie: ' . $_POST['serie']);
        print_r('<br>');
        print_r('acessorio: ' . $_POST['acessorio']);
        print_r('<br>');
        print_r('defeito: ' . $_POST['defeito']);
        print_r('<br>');
        print_r('observaçao: ' . $_POST['observaçao']);
        print_r('<br>');
        print_r('endere: ' . $_POST['endereço']);
        print_r('<br>');
        print_r('cep: ' . $_POST['CEP']);
            */
        
        
        
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
        $endereço = $_POST['endereço'];
        $CEP = $_POST['CEP'];

        $resul = mysqli_query($connection, "INSERT INTO `ordens-serviço`(id, name, email, phone, date, CPF, marca, modelo, serie, acessorio, defeito, observaçao, endereço, CEP )
        VALUES ('$id','$name','$email','$phone','$date','$CPF','$marca','$modelo','$serie','$acessorio','$defeito','$observaçao', '$endereço','$CEP')");
       
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/formulario.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/8efcb60d70.js" crossorigin="anonymous"></script>
    <title>formulario</title>
</head>
<body>

    <header>    
        <div class="px-3 py-2 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            Ordens de Serviço
            </a>

            <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                
                <li>
                <a href="index.php" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                    </svg>
                    Dashboard
                </a>
                </li>
                <li>
                <a href="ordens.php" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
                    </svg>
                    Ordens
                </a><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
                </li>
                <li>
                <a href="#" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-columns-gap" viewBox="0 0 16 16">
                    <path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
                    </svg>
                    Estoque
                </a>
                </li>
                <li>
                <a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=andradas&table=ordens-servi%C3%A7o" target="_blank" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-database-add" viewBox="0 0 16 16">
                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Z"/>
                    <path d="M12.096 6.223A4.92 4.92 0 0 0 13 5.698V7c0 .289-.213.654-.753 1.007a4.493 4.493 0 0 1 1.753.25V4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.525 4.525 0 0 1-.813-.927C8.5 14.992 8.252 15 8 15c-1.464 0-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13h.027a4.552 4.552 0 0 1 0-1H8c-1.464 0-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10c.262 0 .52-.008.774-.024a4.525 4.525 0 0 1 1.102-1.132C9.298 8.944 8.666 9 8 9c-1.464 0-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777ZM3 4c0-.374.356-.875 1.318-1.313C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4Z"/>
                    </svg>
                    Banco
                </a>
                </li>
                <li>
                <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                    Perfil
                </a>
                </li>
            </ul>
            </div>
        </div>
        </div>
        <div class="px-3 py-2 border-bottom mb-3">
            <div class="container d-flex flex-wrap justify-content-end">
            
            </div>
        </div>
        
    </header>

    <div class="container-fluid">
        <form action="formulario.php" method="POST" class="row g-3">
            <div class="col-12">
                <label  class="form-label">Numero da OS:</label>
                <input type="number" name="id" class="form-control bg-info bg-opacity-10 border border-info  rounded-end" id="id">
            </div>
            <div class="col-md-3">
                <label  class="form-label">Nome:</label>
                <input type="text" name="name" class="form-control bg-info bg-opacity-10 border border-info  rounded-end" id="name">
            </div>
            <div class="col-md-3">
                <label  class="form-label">Telefone:</label>
                <input type="number" name="phone" class="form-control bg-info bg-opacity-10 border border-info  rounded-end" id="">
            </div>
            <div class="col-md-3">
                <label  class="form-label">Email:</label>
                <input type="email"name="email" class="form-control bg-info bg-opacity-10 border border-info rounded-end" id="">
            </div>
            <div class="col-md-3">
                <label class="form-label">CPF/CNPJ:</label>
                <input type="number" name="CPF" class="form-control bg-info bg-opacity-10 border border-info rounded-end" id="">
            </div>
            <div class="col-2">
                <label for="inputAddress2" class="form-label">Data:</label>
                <input type="date" name="date" class="form-control bg-info bg-opacity-10 border border-info  rounded-end" id="" >
            </div>
            <div class="col-8">
                <label for="" class="form-label">Endereço:</label>
                <input type="text" name="endereço" class="form-control bg-info bg-opacity-10 border border-info  rounded-end" id="" >
            </div>
            <div class="col-2">
                <label for="" class="form-label">Cep:</label>
                <input type="number" name="CEP" class="form-control  bg-info bg-opacity-10 border border-info  rounded-end" id="" >
            </div>
            <div class="col-4">
                <label for="" class="form-label">Marca:</label>
                <input type="text" name="marca" class="form-control  bg-info bg-opacity-10 border border-info  rounded-end" id="" >
            </div>
            <div class="col-2">
                <label for="" class="form-label">Modelo:</label>
                <input type="text" name="modelo" class="form-control bg-info bg-opacity-10 border border-info  rounded-end" id="inputAddress2" >
            </div>
            <div class="col-2">
                <label for="" class="form-label">Série:</label>
                <input type="text" name="serie" class="form-control bg-info bg-opacity-10 border border-info  rounded-end" id="" >
            </div>
            <div class="col-4">
                <label for="" class="form-label">Acessorio:</label>
                <input type="text" name="acessorio" class="form-control  bg-info bg-opacity-10 border border-info  rounded-end" id="" >
            </div>
            <div class="col-5">
                <label for="" class="form-label">Defeito:</label>
                <input type="text" name="defeito" class="form-control bg-info bg-opacity-10 border border-info  rounded-end" id="" >
            </div>
            <div class="col-7">
                <label for="" class="form-label">Observação:</label>
                <input type="text" name="observaçao" class="form-control bg-info bg-opacity-10 border border-info  rounded-end" id="" >
            </div>
            
            <input type="submit" name="submit" id="submit">
        </form>
    </div>





        <!-- 
        
    
            <div class="main">
                <form action="formulario.php" method="post">
                    <fieldset style="padding: 5px; "><legend>Código da OS</legend>  
                        <label for="">N   º:</label>
                        <input type="id" name="id" id="id"  required>
                    </fieldset>
                    <br>
                    <fieldset><legend> <b>Dados do cliente:</b> </legend>
            
                            <label for="name" class="label-input">Nome Completo:</label>
                            <input type="text" name="name" id="name"  required>                
                            <label for="email" class="label-input">Email:</label>
                            <input type="text" name="email" id="email"  required>                           
                            <label for="phone" class="label-input">Telefone:</label>
                            <input type="tel" name="phone" id="phone"  required>                            
                            <label for="date" class="label-input">Data:</label>
                            <input type="date" name="date" id="date"  required>                           
                            <label for="cpf" class="label-input">CPF:</label>
                            <input type="number" name="CPF" id="CPF"  required>
                            
                
                    </fieldset> 
                    <br>                    
                    <fieldset><legend> <b>Dados do produto</b> </legend>   

                        <label for="marca" class="label-input">Marca:</label>
                        <input type="text" name="marca" id="marca"  required>                            
                        <label for="modelo" class="label-input">Modelo:</label>
                        <input type="text" name="modelo" id="modelo"  required>                           
                        <label for="serie" class="label-input">Serie:</label>
                        <input type="text" name="serie" id="serie"  required>                          
                        <label for="acessorio" class="label-input">Acessorio:</label>
                        <input type="text" name="acessorio" id="acessorio"  required>                            
                        <label for="defeito" class="label-input">Defeito:</label>
                        <input type="text" name="defeito" id="defeito"  required> 

                    </fieldset>
                    <br>
                    <fieldset style="padding: 5px;"><legend>Observações:</legend>
                        <input type="text" name="observaçao" id="observaçao" required> 
                    </fieldset>
                    <br>
                    <div class="acoes" >
                        <input type="submit" name="submit" id="submit">
                        
                    </div>
                </form>
            </div>
        </div>
        -->
</body>
</html>