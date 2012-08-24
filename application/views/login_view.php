<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Godie007</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<link href="/css/bootstrap.css" rel="stylesheet">
		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
		</style>
		<link href="/css/bootstrap-responsive.css" rel="stylesheet">

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">

	</head>
	<body>

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
					<a class="brand" href="#">Project name</a>

					<fieldset data-role="controlgroup" data-mini="true">
						<?php echo validation_errors(); ?>
						<?php echo form_open('verifylogin'); ?>
						<label for="username"></label>
						<input id="username"  name="username" placeholder="Usuario" value="" type="text" />
						<label for="password"></label>
						<input id="password"  name="password" placeholder="Password" value="" type="password" />
						<input data-theme="a" value="Iniciar sesion" data-mini="true" type="submit" />
						</form>
				</div><!--/.nav-collapse -->
			</div>
		</div>
		</div>

		<div class="container">
			<!-- Registrar Usuarios -->
			<div class="hero-unit">

				<h1>Registrar!</h1>
				<form class="form-horizontal" method="POST" action="http://localhost/index.php?/main/registrar" >
					<div class="control-group">
						<label class="control-label"name="nombre" for="inputEmail">usuario</label>
						<div class="controls">
							<input type="text" name="nombre" class="input-size" id="input01">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputEmail">correo</label>
						<div class="controls">
							<input type="text" name="correo" class="input-size" id="input01">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">Password</label>
						<div class="controls">
							<input type="password" name="passworda" class="input-size" placeholder="Password">
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<button type="submit" onclick="changeColor();" class="btn">Sign in</button>
						</div>
					</div>
				</form>

			</div>
			
			

			<input type="button" value ="Change BackGround Javascript" id="btnchg" onclick="changeColor();" />
			<footer>
				<p>
					&copy; Company 2012
				</p>
			</footer>

		</div>
		<!-- /container -->

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
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
					document.body.style.backgroundColor = "#B80A0A";
				}
			</script>

		<script>
			$('a').attr('data-ajax', 'false');
		</script>
		<script src="/js/jquery-1.8.0.min.js"></script>
		<script src="/js/jquery.js"></script>
		<script src="/js/bootstrap-transition.js"></script>
		<script src="/js/bootstrap-alert.js"></script>
		<script src="/js/bootstrap-modal.js"></script>
		<script src="/js/bootstrap-dropdown.js"></script>
		<script src="/js/bootstrap-scrollspy.js"></script>
		<script src="/js/bootstrap-tab.js"></script>
		<script src="/js/bootstrap-tooltip.js"></script>
		<script src="/js/bootstrap-popover.js"></script>
		<script src="/js/bootstrap-button.js"></script>
		<script src="/js/bootstrap-collapse.js"></script>
		<script src="/js/bootstrap-carousel.js"></script>
		<script src="/js/bootstrap-typeahead.js"></script>

	</body>
</html>