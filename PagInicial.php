<?php
        session_start();
        if(!isset($_SESSION['user'])){
            echo "<script>window.location.href = './php/error_login.php'</script>";
        };
        include "./php/config.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página inicial</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous">
        </script>
        <script src="/unialfa/js/jquery-3.6.4.js"></script>
        <script src="/unialfa/js/scripts.js"></script>
        <link rel="stylesheet" href="./css/stylePagInicial.css">
    </head>
    <body>
        <header>
            <div id="navPlaceHolder">
            </div>
        </header>
            <main>
                <div class="container-fluid">
                    <div class="row">
                        <div class="container col-lg-5">
                                <div class="row">
                                    <div class="card-group">
                                            <div class="card col-sm-6">
                                                <div class="card-body">
                                                    <div class="card-header mb-2">
                                                        Atalhos
                                                    </div>
                                                    <a href="#" class="btn btn-primary">Horário</a>
                                                    <a href="#" class="btn btn-primary">Grade</a>
                                                    <a href="#" class="btn btn-primary">Provas</a>
                                                </div>
                                            </div>
                                            <div class="card col-sm-6">
                                                <div class="card-body">
                                                    <div class="card-header">
                                                        Avisos
                                                    </div>
                                                    <div class="card-text">
                                                        AVISO IMPORTANTE 
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-group">
                                        <div class="card md-2">
                                            <div class="card-header">
                                                Vídeo Motivacional
                                            </div>
                                            <div class="card-body">
                                                <div class="videoMoti">
                                                    <video src="./img/APRENDER EXIGE VONTADE _ MOTIVAÇÃO(720P_HD).mp4" poster="img/Capa_Video.png" controls autoplay muted style="width: 100%;">Vídeo motivacional</video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-7 cursando">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="card p-4">
                                        <div class="card-header">ALGORÍTIMOS E ESTRUTURA DE DADOS I </div> 
                                            <card class="body">
                                                <img src="./img/foto perfil naka 50x50.png" alt="img professor">
                                                <p>Professor: Ricardo Andre Naka</p>
                                                <p>aula toda segunda das 18:50 a 22:00</p>
                                            </card>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="card p-4">
                                        <div class="card-header">DESENVOLVIMENTO DE SISTEMAS PARA INTERNET</div> 
                                            <card class="body">
                                                <img src="./img/foto perfil naka 50x50.png" alt="img professor">
                                                <p>Professor: Ricardo Andre Naka</p>
                                                <p>aula toda terça das 18:50 a 22:00</p>
                                            </card>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="card p-4">
                                        <div class="card-header">ENGENHARIA DE SOFTWARE </div> 
                                            <card class="body">
                                                <img src="./img/foto perfil naka 50x50.png" alt="img professor">
                                                <p>Professor: Ricardo Andre Naka</p>
                                                <p>aula toda quarta das 18:50 a 22:00</p>
                                            </card>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>                      
            </main>
    </body>
</html>