<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sistema de Gestión UDL</title>
    <!--Agregando JQuery-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!--script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script-->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
    <!--Link to the stylesheet-->
    <link rel="stylesheet" href="css/styles.css">
    <!--Agregando icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Agregando FAVICON-->
    <link rel="apple-touch-icon" sizes="57x57" href="image/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="image/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="image/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="image/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="image/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="image/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="image/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="image/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="image/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="image/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="image/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="image/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="image/favicon/favicon-16x16.png">
    <link rel="manifest" href="image/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script type="text/javascript">
        $(document).ready(function() {
            // Initialize collapse button
            $(".despliega-menu").sideNav();
            // Initialize collapsible (uncomment the line below if you use the dropdown variation)
            //$('.collapsible').collapsible();
        });
        $(document).ready(function() {
            $('.collapsible').collapsible();
        });

        $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrainWidth: false, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: false, // Displays dropdown below the button
            alignment: 'left', // Displays dropdown with edge aligned to the left of button
            stopPropagation: false // Stops event propagation
        });

    </script>
</head>

<body class="grey darken-2">
    <!--NavBar-->
    <nav>
        <div class="nav-wrapper blue darken-4">
            <a href="#" data-activates="slide-out" class="despliega-menu btn btn-floating btn-large pulse red">
                <i class="material-icons">menu</i>
            </a>
            <a href="#" class="brand-logo push-s7">Alumnos</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#">Contabilidad</a></li>
                <li><a href="#">Finanzas</a></li>
                <li><a href="#">Mercadotecnia</a></li>
                <li><a href="#">Contabilidad</a></li>
            </ul>
        </div>
    </nav>
    <!--TerminaNavBar-->
    <!--SideBar-->
    <ul id="slide-out" class="side-nav indigo lighten-4">
        <li>
            <div class="user-view">
                <div class="background blue darken-4 z-depth-2">
                    <!--img src="image/udl-azul.jpg"-->
                </div>
                <a href="#!user"><img class="circle" src="image/udl-logo.jpg"></a>
                <a href="#!name"><span class="white-text name">Admin UDL</span></a>
                <a href="#!email"><span class="white-text email">escueladenegocios@udl.com</span></a>
            </div>
        </li>
        <!--Contenido de lista side-nav
        <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
        <li><a href="#!">Second Link</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a class="subheader">Subheader</a></li>
        <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
        -->
        <ul class="hide-on-med-and-down">
            <!--li><a href="#!">First Sidebar Link</a></li-->
            <!--li><a href="#!">Second Sidebar Link</a></li-->
            <li><a class="dropdown-button red lighten-1 white-text" href="#!" data-activates="dropdown1">Alumnos<i class="material-icons right">arrow_drop_down</i></a></li>
            <ul id='dropdown1' class='dropdown-content red lighten-1'>
                <li><a href="#!" class="white-text">Contabilidad</a></li>
                <li><a href="#!" class="white-text">Finanzas</a></li>
                <li><a href="#!" class="white-text">Mercadotecnia</a></li>
                <li><a href="#!" class="white-text">Contabilidad</a></li>
            </ul>
        </ul>
        <div>
            <ul class="hide-on-med-and-down">
                <!--li><a href="#!">First Sidebar Link</a></li-->
                <!--li><a href="#!">Second Sidebar Link</a></li-->
                <li><a class="dropdown-button red lighten-2 white-text" href="#!" data-activates="dropdown2">Profesores<i class="material-icons right red lighten-2">arrow_drop_down</i></a></li>
                <ul id='dropdown2' class='dropdown-content red lighten-2'>
                    <li><a href="#!" class="white-text">Disponibilidad de horario</a></li>
                    <li><a href="#!" class="white-text">Listado de profesores</a></li>
                </ul>
            </ul>
        </div>
        <div>
            <ul class="hide-on-med-and-down">
                <!--li><a href="#!">First Sidebar Link</a></li-->
                <!--li><a href="#!">Second Sidebar Link</a></li-->
                <li><a class="dropdown-button red lighten-1 white-text" href="#!" data-activates="dropdown3">Generación de horarios<i class="material-icons right red lighten-1">arrow_drop_down</i></a></li>
                <ul id='dropdown3' class='dropdown-content red lighten-1'>
                    <li><a href="#!" class="white-text">Horarios regulares</a></li>
                    <li><a href="#!" class="white-text">Horarios especiales</a></li>
                </ul>
            </ul>
        </div>
    </ul>

    <!--SideBar-->
</body>

</html>
