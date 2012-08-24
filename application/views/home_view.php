<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>nick: <? echo $username ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="styles/global.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="../css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
			.sidebar-nav {
				padding: 9px 0;
			}
        </style>

        <link href="../css/bootstrap-responsive.css" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="../assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../ico/apple-touch-icon-57-precomposed.png">

    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Project Godie007</a>
                    <div class="btn-group pull-right">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user"></i> <? echo $username ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="home/logout">Cerrar Sesion</a></li>

                        </ul>
                    </div>
                    <div class="nav-collapse">
                        <ul class="nav">


                        </ul>
                    </div><!--/.nav-collapse -->

                </div>
            </div><!--/span-->
        </div>
    </div>



    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3">
                <div class="well sidebar-nav">
                    <ul class="nav nav-list">
                        <li class="nav-header">espacio</li>
                        <li class="active"><a href="#"> Bienvenido <? echo $username ?></a></li>
                        <li class="nav-header">Inicio</li>

                        <li><a href="#">Link2</a></li>

                        </button>
                        <li><a href="#">Link3</a></li>

                        </button>
                        <li><a href="#">Link4</a></li>

                        </button>
                    </ul>
                </div><!--/.well -->
            </div><!--/span-->

            <div class="span10">
                <!--Body content-->
                <!--                <form action="sumar.php" id="formularioSuma">  
                                    <input type="text" name="num1" /> + <input type="text" name="num2" /><br/>  
                                    <input type="submit" value="Sumar" />  
                                </form>  
                                <p id="resultado"></p>  
                
                                <script type="text/javascript" src="jquery-1.4.2.js"></script>  
                
                                <script type="text/javascript">  
                                    $('#formularioSuma').submit(function(event) {  
                                        event.preventDefault();  
                                        var url = $(this).attr('action');  
                                        var datos = $(this).serialize();  
                                        $.get(url, datos, function(resultado) {  
                                            $('#resultado').html(resultado);  
                                        });  
                                    });  
                                </script>  -->
                <form name="MyForm"> 
                    <input type="text" name="numero1" size="20"> 
                    <input type="text" name="numero2" size="20"> 
                    <input name="resultado" class="input-xlarge" id="disabledInput" type="text" placeholder="Resultado" disabled="">

                    <button class="btn btn-success" onclick="multiplicar()"type="button">Sumar</button>
                </form> 

                <body onLoad="setInterval('contador()',1000);">
                    <label for="contador">calcular:</label>
                    <form action="" method="post" name="miformulario">
                        <input type="text" name="subtotal" id="subtotal" onBlur="Operaciones()">
                        <label for="contador">iva:</label>
                        <input type="text" name="iva" id="iva">
                        <label for="contador">total:</label>
                        <input type="text" name="total" id="total">
                    </form>
                 			<script>
								//-con Jquery----
								$(document).ready(function() {
									$("#btnChange").click(function() {
										$("body").css({
											"background-color" : "#d0e4fe"
										});
									});
								});

								// o simplemente con JavaScript
								function changeColor() {
									document.body.style.backgroundColor = "#362D2D";
								}
						</script>

						<input type="button" value ="Change BackGround Jquery" id="btnChange" />

						<input type="button" value ="Change BackGround Javascript" id="btnchg" onclick="changeColor();" />

						</div>
            



            <!-- Le javascript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->

            <script type="text/javascript">
				function Operaciones() {
					// Obtengo el valor de subtotal...
					var subtotal = document.getElementById('subtotal').value;
					// Ya que lo tengo le saco el 16%
					var iva = (subtotal * .16);
					// El resultado lo guardo en el input del iva.
					document.getElementById('iva').value = iva;
					// Sumo el subtotal + iva para tener el total.
					var total = (parseFloat(subtotal) + parseFloat(iva));
					// Lo muestro en el text de total.
					document.getElementById('total').value = total;
				}
            </script>
            <script type="text/javascript">
				var cont = 0;
				function contador() {
					var contador = document.getElementById("contador");
					contador.value = cont;
					cont++;
				}
            </script>
            <script>
				function multiplicar() {
					var n1 = parseInt(document.MyForm.numero1.value);
					var n2 = parseInt(document.MyForm.numero2.value);
					document.MyForm.resultado.value = n1 * n2;
				}
            </script> 
            <script src="../js/jquery.js"></script>
            <script src="../js/bootstrap-transition.js"></script>
            <script src="../js/bootstrap-alert.js"></script>
            <script src="../js/bootstrap-modal.js"></script>
            <script src="../js/bootstrap-dropdown.js"></script>
            <script src="../js/bootstrap-scrollspy.js"></script>
            <script src="../js/bootstrap-tab.js"></script>
            <script src="../js/bootstrap-tooltip.js"></script>
            <script src="../js/bootstrap-popover.js"></script>
            <script src="../js/bootstrap-button.js"></script>
            <script src="../js/bootstrap-collapse.js"></script>
            <script src="../js/bootstrap-carousel.js"></script>
            <script src="../js/bootstrap-typeahead.js"></script>
            </body>
            </html>

