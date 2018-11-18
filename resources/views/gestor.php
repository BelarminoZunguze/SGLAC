

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/w3.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/headerEfooter.css">
    <link rel="stylesheet" type="text/css" href="css/inicio.css">

    <script src="js/jquery-3.3.1.js"></script>
</head>
<body>
    <div class="headerBase">
        <div class="header-distributed container">
            <div class="header-left">
                <img class="companyLogo" src="img/hcm_logo.png">
            </div>
            <div class="header-center">
                <label class="webPageTitle" >Laboratório de Análises Clínicas</label>
            </div>
            <div class="header-right">
                <?php
//                    session_start();
                    $sessao = $_SESSION['sess_user'];

                    echo "<div class=\"userLoged\">
                    <div class=\"imgeBlock\">
                        <img class=\"userImage\" src=\"img/user_normal.png\">
                    </div>
                        <button class=\"userName userButton\">$sessao</button>
                        <span class=\"separator\">|</span>
                        <a href='login.php' style='text-decoration: none'><button class=\"logOut userButton\" type=\"button\">Sair</button></a>
                    </div>";
                ?>
            </div>
        </div>
    </div>
    <div class=" headerOptionsBase">
        <div class="container">
            <div class="w3-bar w3-center headerOptions " style="width:100%; overflow:hidden;height:44px">
                <a class="w3-bar-item w3-button" href="gestor.php" title="">Início</a>
                <a class="w3-bar-item w3-button" href="novoExame.html" title="">Cadastrar Exames</a>
                <a class="w3-bar-item w3-button" href="#" title="">Cadastrar utilizador</a> 
                <a class="w3-bar-item w3-button" href="#" title="">Cadastrar area de exame</a>
                <a class="w3-bar-item w3-button" href="#" title="">Estatisticas</a>
                <a class="w3-bar-item w3-button" href="#" title="">Ajuda</a>
            </div>
        </div>
    </div>
    <div class="container">
        <main>
            <h1>Gestor</h1>
            <br>
            <img class="homeImage" src="img/fundo.png">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </main>
    </div>

    <footer class="footer-distributed">
        <div class="footer-left">
            <!--<div class="footIn">-->
                <ul class="listaDeRedes">
                    <li class="itemDeRede">
                        <a class="rede" href="https://www.facebook.com/">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="itemDeRede">

                        <a class="rede" href="https://twitter.com/">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="itemDeRede">

                        <a class="rede" href="https://mail.google.com/mail/u/0/#inbox?compose=163d221a11c2747c">
                            <i class="fa fa-google-plus"> </i>
                        </a>
                    </li>
                    <li class="itemDeRede">
                        <a class="rede" href="https://mz.linkedin.com/">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="itemDeRede">
                        <a class="rede" href="https://www.instagram.com">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            <!--</div>-->
        </div>
        <!--<div class="footer-center">-->
        <!--</div>-->
        <div class="footer-right">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Av. Agostinho Neto 245</span>Maputo, Mocambique</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+258 82 012 3456</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">info.lac@hcm.co.mz</a></p>
            </div>
            </div>
        </div>
    </footer>
    <div class="copyRigth">© 2018 Copyright:
        <a href="http://www.hcm.gov.mz/"> Hospital Central de Maputo</a>
    </div>
</body>
</html>