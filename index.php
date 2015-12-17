<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rec 1P Mascotas</title>
	
	<!--<link rel="stylesheet" type="text/css" href="css/inicio.css">-->
    <!-- Bootstrap Core CSS -->
    <link href="components/bootstrap-css/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="components/bootstrap-css/css/business-frontpage.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="components/bootstrap-css/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="components/bootstrap-css/js/bootstrap.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- media queries css -->
    <!--<script src="components/jquery/dist/jquery.min.js"></script>-->

    <script type="text/javascript" src="js/funciones.js"></script>
    <script type="text/javascript" src="js/funcionesABM.js"></script>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a onclick="Mostrar('mostrarlogin')" href="#">Ingresar</a>
                    </li>
                    <li>
                        <a onclick="Mostrar('mostrarregistro')" href="#">Registrarse</a>
                    </li>
                    <li>
                        <a onclick="Mostrar('mostrarMascotas')" href="#">Mascotas</a>
                    </li>
                    <li>
                        <a onclick="EditarMascota('6')" href="#">Mi mascota</a> 
                        <!-- VER!! solo tiene que aparecer si ingresa a la cuenta // verificar como poner el id del que esta logueado-->
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Image Background Page Header -->
    <!-- Note: The background image is set within the business-casual.css file. -->
    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline">Rec 1P Mascotas</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content    class="container"-->
    <div >

        <hr>

        <div class="row">
            <div class="col-sm-8" id="principal"><!--Van los forms que vienen de los botones-->
                    
                   <!-- <a class="btn btn-default btn-lg" href="#" onclick="mostrarlogin()">Call to Action &raquo;</a>-->
                
            </div><!--principal-->
            <div class="col-sm-4">
                <!--<h2>Contacto</h2>
                <address>
                    <strong>Wedding</strong>
                    <br>Av. Bartolome Mitre 750
                    <br>Avellaneda, Bs As 1870
                    <br>
                </address>
                <address>
                    <abbr title="Email">E-mail:</abbr> <a href="mailto:contacto@arcejennifer.tuars.com">contacto@arcejennifer.tuars.com</a>
                </address> -->

                 <h4 class="widgettitle">informe </h4>
                <div id="informe">
                <!--contenido dinamico cargado por ajax-->
                </div><!-- informe para cookies -->
            </div><!--contacto-->
           
        </div><!-- /.row -->
    <!-- /#sidebar -->

        <hr> 

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Recuperatorio 1P "Mascotas" 10/12/2015 Jennifer Arce</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->



</body>

</html>