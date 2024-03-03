<?php
    session_start();
    if(isset($_SESSION['user'])){
        session_unset();
        session_destroy();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIALFA - Area do Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous">
    </script>
    <script src="./js/jquery-3.6.4.js"></script>
    <script src="./js/script.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body >
<div class="corpo">
    <header>
    <img src="img/Logo_UNIALFA.png" alt="Logo_UNIALFA">
    <img src="img/Logo_FADISP.png" alt="Logo_FADISPS" />
    <h1 class=" titulo"  >UNIALFA - Acesso do Aluno</h1>
    </header>
        <div class="login">
            <h2 class="titulo">Área de acesso</h2>
            <input class="cx_de_texto" type="text" placeholder="Login" id="username" >
            <input  class="cx_de_texto"  type="password"  placeholder="senha"  id="password" >
            <button id="access"> Acessar </button>
            <script>
                $(document).ready(function(){
                    function login(){   
                        let user = $("#username").val();
                        let password = $("#password").val();
                        //alert("user: " + user + " password: " + password);
                        $.post("./php/login.php", {user: user, password: password}, function(data){ 
                            if(data == 2){
                                btn = $('<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>');
                                error = $("<div/>").addClass("alert alert-warning container-fluid d-flex align-items-center alert-dismissible fade show sumir").html("Campo não preenchido!");
                                error.append(btn);
                                $("#password_error").append(error);
                                $(".alert").fadeTo(5000, 0, null, function(){
                                    this.remove();
                                });
                            } else if(data == 1){
                                
                                window.location.href = "./PagInicial.php";   
                            } else {
                                btn = $('<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>');
                                error = $("<div/>").addClass("alert alert-danger container-fluid d-flex align-items-center alert-dismissible fade show sumir").html("Senha inválida / Usuário inválido");
                                error.append(btn);
                                $("#password_error").append(error);
                                $(".alert").fadeTo(5000, 0, null, function(){
                                    this.remove();
                                });
                            }
                        }); 
                    }
                    $("#access").click(function(){  
                        login();       
                    })
                })
            </script>
        </div>
    </div>
<div id="password_error"></div>
<footer></footer>
</body>
</html>