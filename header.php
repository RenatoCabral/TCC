<!DOCTYPE html>
<html lang="en">
<head> <meta charset="UTF-8">
    <title>Sistema com Materialize</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/materialize.css" media="screen,projection">


<!--    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <link rel="stylesheet" href="css/material-icons.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col s12 m4 l4">
                <a href="index.php"><img src="img/logo.png" class="responsive-img"></a>
            </div>
            <div class="col s12 m8 l8">
                <?php include 'menu.php'; ?>
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

