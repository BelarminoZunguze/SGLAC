
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/w3.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/headerEfooter.css">
    <link rel="stylesheet" type="text/css" href="css/novoExame.css">

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/novoExame.js"></script>
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
            <div class="userLoged">
                <div class="imgeBlock">
                    <img class="userImage" src="img/user_normal.png">
                </div>
                <button class="userName userButton">flor</button>
                <span class="separator">|</span>
                <a href='login.php' style='text-decoration: none'><button class="logOut userButton" type="button">Sair</button></a>
            </div>
        </div>
    </div>
</div>
<div class=" headerOptionsBase">
    <div class="container">
        <div class="w3-bar w3-center headerOptions " style="width:100%; overflow:hidden;height:44px">
            <a class="w3-bar-item w3-button" href="#" title="">Início</a>
            <a class="w3-bar-item w3-button" href="#" title="">Ajuda</a>
        </div>
    </div>
</div>
<div class="container">
    <main>
        <div class="row">
            <div class="col-md-4">
                <br>

        
        <form action="{{ route('paciente.store')}}" method="POST">
            {!! csrf_field() !!}
            <p>
                <label>Nome</label>
            <input id="nome" name="nome" type="text" placeholder="Exemplo: HIV" class="form-control comprimento" required>
            </p>
            <br>
            <label>Genero</label>
            <select id="genero" required class="form-control comprimento">
                <option value="0">Masculino</option>
                <option value="1">Feminino</option>
                <option value="2">Indeterminado</option>
            </select>
            
            <br>
            <label>Data de nascimento</label>
            <input type="date" name="datanasc">
            <br>
            <label>Altura</label>
            <input type="text" name="altura">
            <br>
            <div class="myButtons">
                <button id="voltar" type="reset" class="btn btn-info" >Limpar</button>
                <button id="salvar" type="submit" class="btn btn-success">Salvar</button>
            </div>
        
    </div>
    <div class="col-md-4">
        <p>
            <br>
                <label>Peso</label>
            <input id="peso" type="number" placeholder="1.23" class="form-control comprimento" required>
            </p>
            <br>
            <label>Contacto</label>
            <input id="contacto" type="number" placeholder="Exemplo 100,00" class="form-control comprimento" required>
            <br>
            <label>BI</label>
            <input type="text" name="bi" id="bi">
            <br>
            <label>Grupo sanguineo</label>
            <select id="sangue" required class="form-control comprimento">
                <option value="0">AB</option>
                <option value="1">BO</option>
                <option value="2">OB</option>
            </select>
            <br> 

    </div>
</form>
    <div class="col-md-4">
        <div class="container" ">
            <br>
            <br>
        <table border="1" align="center" width="450" > 

<tr> 

<td>primeira coluna </td> 

<td>segunda coluna </td>

<td>terceira coluna </td>

</tr> 

<tr> 

<td> primeira coluna</td>

<td>segunda coluna </td>

<td>terceira coluna </td>

</tr>
<tr> 

<td> primeira coluna</td>

<td>segunda coluna </td>

<td>terceira coluna </td>

</tr>
<tr> 

<td> primeira coluna</td>

<td>segunda coluna </td>

<td>terceira coluna </td>

</tr>
<tr> 

<td> primeira coluna</td>

<td>segunda coluna </td>

<td>terceira coluna </td>

</tr>
<tr> 

<td> primeira coluna</td>

<td>segunda coluna </td>

<td>terceira coluna </td>

</tr> 

</table>


    </div>
</div>
        </div>
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