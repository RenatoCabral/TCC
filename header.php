<!DOCTYPE html>
<html lang="en">
<head> <meta charset="UTF-8">
    <title>Sistema com Materialize</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/materialize.css" media="screen,projection">


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col s12 m4 l4">
                <img src="img/logo.png" class="responsive-img">
            </div>
            <div class="col s12 m8 l8">
                <nav class="z-depth-0 teste">
                    <div class="nav-wrapper"> <!--<a href="#!" class="brand-logo">Logo</a>-->
                        <a href="#" data-activates="mobile-demo" class="button-collapse">
                            <i class="material-icons">menu</i>
                        </a>

                        <ul class="right hide-on-med-and-down">
                            <li class="active"><a href="sass.html">Home</a></li>
                            <li><a href="badges.html">Components</a></li>
                            <li><a href="collapsible.html">Javascript</a></li>
                            <li><a href="mobile.html">Entrar/Cadastrar-se</a></li>
                        </ul> <ul class="side-nav" id="mobile-demo">
                            <li><a href="sass.html">Sass</a></li>
                            <li><a href="badges.html">Components</a></li>
                            <li><a href="collapsible.html">Javascript</a></li>
                            <li><a href="mobile.html">Mobile</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div> <!--pesquisa e anuncie aqui-->
<div class="container-fluid">
    <div class="row">

        <div class="col s12 m12 l6 offset-l9 button_anuncie_aqui show-on-large hide-on-med-and-down">
            <a class="waves-effect waves-light btn">
                <i class="material-icons teal lighten-1 left" >search</i>Pesquisa
            </a>

            <a class="waves-effect waves-light btn">
                <i class="large material-icons left">attach_money</i>Anuncie Aqui
            </a>
        </div>

        <div class="col s12 m2 l2 button_anuncie_aqui show-on-small show-on-medium hide-on-large-only grey lighten-2">
            <a class="waves-effect waves-light btn">Anuncie Aqui</a>
        </div>
    </div>
</div>

