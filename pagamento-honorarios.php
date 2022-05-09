<!DOCTYPE html><html><head>	<!-- Basic -->	<meta charset="utf-8">	<meta http-equiv="X-UA-Compatible" content="IE=edge">		<title>Porto - Responsive HTML5 Template</title>		<meta name="keywords" content="HTML5 Template" />	<meta name="description" content="Porto - Responsive HTML5 Template">	<meta name="author" content="okler.net">	<!-- Favicon -->	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">	<!-- Mobile Metas -->	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">	<!-- Web Fonts  -->	<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">	<!-- Vendor CSS -->	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">	<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">	<link rel="stylesheet" href="vendor/animate/animate.compat.css">	<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">	<!-- Theme CSS -->	<link rel="stylesheet" href="css/theme.css">	<link rel="stylesheet" href="css/theme-elements.css">	<link rel="stylesheet" href="css/theme-blog.css">	<link rel="stylesheet" href="css/theme-shop.css">	<!-- Current Page CSS -->	<link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css">	<!-- Skin CSS -->	<link id="skinCSS" rel="stylesheet" href="css/skins/default.css">	<!-- Theme Custom CSS -->	<link rel="stylesheet" href="css/custom.css">	<!-- Head Libs -->	<script src="vendor/modernizr/modernizr.min.js"></script></head><body data-plugin-page-transition>	<div class="body bg-color-grey-scale-1"><?php include('includes/header-outros.php');?>		<section class="page-header page-header-classic page-header-md" style="margin: 0 0 10px 0;">			<div class="container">				<div class="row">					<div class="col-md-8 order-2 order-md-1 align-self-center p-static">						<h1 data-title-border>Pagamento Online</h1>					</div>					<div class="col-md-4 order-1 order-md-2 align-self-center">						<ul class="breadcrumb d-block text-md-end">							<li><a href="#">Início</a></li>							<li class="active">Pagamento online</li>						</ul>					</div>				</div>			</div>		</section>		<section class="bg-color-grey-scale-1 border-0 mb-0 pt-2">			<div class="container">				<div class="row justify-content-center py-3">					<div class="col-lg-8 text-center">												<p class="text-5 font-weight-normal px-3 mb-3">Preencha o formulário abaixo com seu nome completo, valor e descrição do serviço.</p>						<form class="contact-form form-errors-light" action="paga-hono.php" method="POST">										<div class="form-group col-lg-12 ms-auto">								<div class="contact-form-success alert alert-success d-none">									Message has been sent to us.								</div>								<div class="contact-form-error alert alert-danger d-none">									Error sending your message.									<span class="mail-error-message text-1 d-block"></span>								</div>							</div>							<div class="row">								<div class="form-group col-lg-6 pe-lg-2">									<input type="text" value="" data-msg-required="Por favor, preencha seu nome." maxlength="100" class="form-control text-3 h-auto py-2" placeholder="Nome" name="name" id="name" required>								</div>								<div class="form-group col-lg-6 ps-lg-2">									<input type="text" value="" data-msg-required="Por favor, preencha o valor." maxlength="100" class="form-control text-3 h-auto py-2" placeholder="Valor" name="phone" id="phone" required>								</div>							</div>							<!--<div class="form-group">								<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" placeholder="Descrição" name="email" id="email" required>							</div>-->							<div class="row">								<div class="form-group col">									<textarea maxlength="5000" data-msg-required="Por favor, preencha a descrição do pagamento." rows="4" class="form-control text-3 h-auto py-2" placeholder="Descrição do pagamento" name="message" id="message" required></textarea>								</div>							</div>								<div class="row">								<div class="form-group col">											<input name="aceitaWhatsapp" type="checkbox" id="checkbox" style="  /* Double-sized Checkboxes */  -ms-transform: scale(2); /* IE */  -moz-transform: scale(2); /* FF */  -webkit-transform: scale(2); /* Safari and Chrome */  -o-transform: scale(2); /* Opera */  transform: scale(2);  padding: 10px;"> <span style="margin-left: 10px; "><b>Aceito que: </b>esses dados são coletados com base no consentimento (lei 13.709/2018, artigo 7º, inciso I) e serão utilizados para que que a administradora do site possua conhecimento da pessoa que está efetivando o pagamento, bem como qual serviço prestado está efetivamente pagando. Os dados referentes a conta bancária ou cartão de crédito não são armazenados ou sequer coletados por este site, haja vista que de responsabilidade do pagseguro. <a href="politicas-de-privacidade.php" style="text-decoration: underline;">Políticas de privacidade</a></span>								</div>							</div>																<div class="row">								<div class="form-group col">									<input type="submit" value="Enviar" id="enviar" class="btn btn-laranja font-weight-semi-bold mb-lg-5 px-5 py-3" data-loading-text="Loading..." disabled="true">								</div>							</div>						</form>					</div>				</div>			</div>		</section>		<?php include('includes/footer.php'); ?>	</div>	<!-- Vendor -->	<script src="vendor/jquery/jquery.min.js"></script>	<script src="vendor/jquery.appear/jquery.appear.min.js"></script>	<script src="vendor/jquery.easing/jquery.easing.min.js"></script>	<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>	<script src="vendor/jquery.validation/jquery.validate.min.js"></script>	<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>	<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>	<script src="vendor/lazysizes/lazysizes.min.js"></script>	<script src="vendor/isotope/jquery.isotope.min.js"></script>	<script src="vendor/owl.carousel/owl.carousel.min.js"></script>	<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>	<script src="vendor/vide/jquery.vide.min.js"></script>	<script src="vendor/vivus/vivus.min.js"></script>	<!-- Theme Base, Components and Settings -->	<script src="js/theme.js"></script>	<!-- Circle Flip Slideshow Script -->	<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>	<!-- Current Page Views -->	<script src="js/views/view.home.js"></script>	<!-- Current Page Vendor and Views -->	<script src="js/views/view.contact.js"></script>	<!-- Theme Custom -->	<script src="js/custom.js"></script>	<!-- Theme Initialization Files -->	<script src="js/theme.init.js"></script>	<script>$("#checkbox").click(function(){	alert("a");   var enviar = $("#enviar");   enviar.prop("disabled", !enviar.prop("disabled"));});</script></body></html>