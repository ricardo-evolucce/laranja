<?php header("Content-Type: text/html; charset=ISO-8859-1",true) ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="ISO-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<title>Laranja & Marranghello</title>
	<link rel="shortcut icon" href="/favicon.ico" />

	<link rel="stylesheet" type="text/css" href="3dParty/bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/global.css"/>
	<link rel="stylesheet" type="text/css" href="3dParty/colorbox/colorbox.css"/>
	<link rel="stylesheet" type="text/css" href="css/google-maps.css"/>
	<link rel="stylesheet" type="text/css" href="css/typo.css"/>
	<link rel="stylesheet" type="text/css" href="css/slider.css"/>
	<link rel="stylesheet" type="text/css" href="css/tooltips.css"/>
	<link rel="stylesheet" type="text/css" href="css/counters.css"/>
	<link rel="stylesheet" type="text/css" href="css/portfolio.css"/>
	<link rel="stylesheet" type="text/css" href="css/social.css"/>
	<link rel="stylesheet" type="text/css" href="css/page-nav.css"/>


	


	<!--Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic'
		  rel='stylesheet' type='text/css' />

	<!--Fonts with Icons-->
	<link rel="stylesheet" href="3dParty/fontello/css/fontello.css"/>

<?php 
/*
 * Melhor prática usando Prepared Statements
 * 
 */
  
$ativo = 1;
$username = 'maranga';
$password = 'jupiter1212';
$idCurso = $_GET['idCurso'];

try {
  $conn = new PDO('mysql:host=mysql.laranja-marranghello.com.br;dbname=maranga', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      
    $stmt = $conn->prepare('SELECT * FROM cursos WHERE ativo = :ativo AND idCurso=:idCurso');
    $stmt->execute(array('ativo' => $ativo, 'idCurso' => $idCurso));
  
    while($row = $stmt->fetch()) {
       
?>


	<meta property="og:title" content="<?php echo $row['nome']; ?>" />

	<meta property="og:url"                content="http://http://www.laranja-marranghello.com.br/inscricao.php?idCurso=<?php echo $row['idCurso'];?>" />
<meta property="og:type"               content="article" />

<meta property="og:description"        content="Faça sua inscrição! Cursos - Laranja & Marranghello" />
<meta property="og:image"              content="http://www.laranja-marranghello.com.br/img/curso-face.png" />


</head>
<body>

<!-- Header -->
<div class="pi-header piScrollTo piFixedHeader">

	<div class="pi-header-sticky">
	<!-- Header row -->
	<div class="pi-section-w pi-section-white pi-shadow-bottom pi-row-reducible">
		<div class="pi-section pi-row-lg">

		<!-- Logo -->
		<div class="pi-row-block pi-row-block-logo">
			<a href="/index.php"><img src="img/logo1.gif" alt=""></a>
		</div>
		<!-- End logo -->

		<!-- Text -->
		<div class="pi-row-block pi-row-block-txt pi-hidden-2xs"></div>
		<!-- End text -->

		<!-- Menu -->
		<div id="pi-header-menu" class="pi-row-block pi-pull-right">
			<ul class="pi-simple-menu pi-has-hover-border pi-full-height pi-hidden-sm nav navbar-nav">

				<li><a href="index.php" ><span>Voltar a página principal</span></a></li>
				<!--<li><a href="#anchor-services"><span>Serviços</span></a></li>
				<li><a href="#anchor-team"><span>Sócios</span></a></li>
				<li><a href="#" data-scroll-to="#" data-scroll-to-offset="-70"><span>Artigos</span></a>
					<ul class="pi-submenu pi-has-border pi-items-have-borders pi-has-shadow pi-submenu-dark">
						<li><a href="inflacao.pdf"><span>Inflação</span></a></li>
						<li><a href="consultoria_empresarial.pdf"><span>Consultoria empresarial</span></a></li>
						<li><a href="gestao_estrategica_empresarial.pdf"><span>Gestão estratégica empresarial</span></a></li>
						<li><a href="gestor_financeiro.pdf"><span>Gestor financeiro</span></a></li>
						<li><a href="o_contador_como_um_contingenciador_do_passivo_trabalhista.pdf"><span>O contador como um contingenciador do passivo trabalhista</span></a></li>
						<li><a href="pericia_contabil.pdf"><span>Perícia contábil • Uma história de 3 gerações</span></a></li>
						<li><a href="projeto.pdf"><span>Análise de risco do passivo trabalhista - Setor imobiliário</span></a></li>
						<li><a href="a_integracao.pdf"><span>A integração contábil e jurídica</span></a></li>
						<li><a href="contingenciamento.pdf"><span>Contingenciamento</span></a></li>
						<li><a href="pericia_contabil_ii.pdf"><span>Perícia Contábil</span></a></li>
						<li><a href="quem_pode_fazer_pericia_contabil_trabalhista.pdf"><span>Quem pode fazer Perícia Contábil Trebalhista</span></a></li>
					</ul></li>
				<li><a href="#anchor-contact"><span>Contato</span></a></li>
				<li><a href="https://www.facebook.com/LaranjaMarranghelloPeritosConsultores"><img src="img/fb.ico"  width="35" height="35"></a></li>-->
			</ul>
		</div>
		<!-- End menu -->

		<!-- Mobile menu button -->
		<div class="pi-row-block pi-pull-right pi-hidden-lg-only pi-hidden-md-only">
			<button class="btn pi-btn pi-mobile-menu-toggler" data-target="#pi-main-mobile-menu">
				<i class="icon-menu pi-text-center"></i>
			</button>
		</div>
		<!-- End mobile menu button -->

		<!-- Mobile menu -->
		<div id="pi-main-mobile-menu" class="pi-section-menu-mobile-w pi-section-dark">
			<div class="pi-section-menu-mobile">

				<!-- Search form -->
				<form class="form-inline pi-search-form-wide" role="form">
					<div class="pi-input-with-icon">
						<div class="pi-input-icon"><i class="icon-search-2"></i></div>
						<input type="text" class="form-control pi-input-wide" placeholder="Search..">
					</div>
				</form>
				<!-- End search form -->

				<ul class="pi-menu-mobile pi-items-have-borders pi-menu-mobile-dark" data-onepage-menu="yes">
				
					<li><a href="#anchor-about" data-scroll-to="#anchor-about" data-scroll-to-offset="-70"><span>O escritório</span></a></li>
				<li><a href="#anchor-services" data-scroll-to="#anchor-services" data-scroll-to-offset="-70"><span>Serviços</span></a></li>
				<li><a href="#anchor-team" data-scroll-to="#anchor-team" data-scroll-to-offset="-70"><span>Sócios</span></a></li>
				<li><a href="#anchor-contact" data-scroll-to="#anchor-contact" data-scroll-to-offset="-70"><span>Contato</span></a></li>
				<li><a href="https://www.facebook.com/LaranjaMarranghelloPeritosConsultores"><img src="img/fb.ico"  width="35" height="35"></a></li>
				</ul>

			</div>
		</div>
		<!-- End mobile menu -->

		</div>
	</div>
	<!-- End header row -->
	</div>

</div>
<!-- End header -->


















			

				
				





<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="pi-section-w pi-shadow-inside-top pi-section-base">
	<div class="pi-texture" style="background: url(img/hexagon.png) repeat;"></div>
	<div class="pi-section pi-padding-top-20 pi-padding-bottom-20 pi-text-center">








<p class="lead-30 pi-text-white">
					<?php   echo 'Inscrição no curso: '; echo $row['nome']; ?>
				</p>



				<p class="pi-margin-bottom-30">
						<?php    echo $row['descricao']; ?>					</p>

						<?php $data_curso = date("d/m/Y", strtotime($row['data'])); ?>


						<p class="pi-margin-bottom-30"><b>Data: </b>
						<?php    echo $data_curso; ?> <b>Horário: </b>		<?php    echo $row['horario']; ?>		</p>

						<p class="pi-margin-bottom-30"><b>Local: </b>
						<?php    echo $row['local']; ?> </p>

						<p class="pi-margin-bottom-30"><b>Endereço: </b>
						<?php    echo $row['endereco']; ?> </p>



				<p class="lead-20 pi-text-white pi-margin-top-minus-10" style="font-weight: bolder; text-align: center;">Preencha o formulário abaixo para se inscrever no curso e efetuar o pagamento.</p>







	</div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->


<div id="anchor-contact" class="pi-section-w pi-section-white">
	<div class="pi-section pi-padding-top-20 pi-padding-bottom-20">
			

		
		<!-- Row -->
		<div class="pi-row">
			
			<!-- Col 8 -->
			<div class="pi-col-md-12">
			
				<!-- Forms -->
				<form role="form" action="inscricao3.php" method="post">


					<input type="hidden" name="idCurso" value="<?php echo $row['idCurso'];; ?>">
					<?php
					$descricao_completa = $row['nome'];
					$descricao_completa .= ' Data: ';
					$descricao_completa .= $row['data'];
					?>

					<input type="hidden" name="descricao" value="<?php echo $descricao_completa; ?>">
					<input type="hidden" name="valorCurso" value="<?php echo $row['valor']; ?>">


					<div class="pi-error-container"></div>
					<!-- Row -->
					<div class="pi-row pi-grid-small-margins">

						<!-- Col 6 -->
						<div class="pi-col-xs-6">

							<!-- Name form -->
							<div class="form-group">
								<div class="pi-input-with-icon pi-input-with-icon-lg">
									<div class="pi-input-icon"><i class="icon-user"></i></div>
									<input type="text" class="form-control input-lg form-control-name" id="exampleInputName" placeholder="Nome completo" name="nome" required="">
								</div>
							</div>
							<!-- End name form -->

							<!-- Email form -->
							<div class="form-group">
								<div class="pi-input-with-icon pi-input-with-icon-lg">
									<div class="pi-input-icon"><i class="icon-mail"></i></div>
									<input type="email" name="email" class="form-control input-lg form-control-email" id="exampleInputEmail" placeholder="Seu e-mail" required="">
								</div>
							</div>
							<!-- End email form -->
							
							<!-- Name form -->
							<div class="form-group">
								<div class="pi-input-with-icon pi-input-with-icon-lg">
									<div class="pi-input-icon"><i class="icon-briefcase"></i></div>
									<input type="text" name="empresa" class="form-control input-lg form-control-company-name" id="exampleInputCompany" placeholder="Sua empresa" required="">
								</div>
							</div>
							<!-- End name form -->

								<!-- Name form -->
							<div class="form-group">
								<div class="pi-input-with-icon pi-input-with-icon-lg">
									<div class="pi-input-icon"><i class="icon-briefcase"></i></div>
									<input type="text" name="profissao" class="form-control input-lg form-control-company-name" id="exampleInputProfissao" placeholder="Profissão" required="">
								</div>
							</div>
							<!-- End name form -->

						</div>
						<!-- End col 6 -->

						<!-- Col 6 -->
						<div class="pi-col-xs-6">

							<!-- Name form -->
							<div class="form-group">
								<div class="pi-input-with-icon pi-input-with-icon-lg">
									<div class="pi-input-icon"><i class="icon-user"></i></div>
									<input type="text" name="cpf" class="form-control input-lg form-control-name" id="exampleInputName" placeholder="CPF" maxlength="11" required="">
								</div>
							</div>
							<!-- End name form -->

							<!-- Email form -->
							<div class="form-group">
								<div class="pi-input-with-icon pi-input-with-icon-lg">
									<div class="pi-input-icon"><i class="icon-phone"></i></div>
									<input type="text" name="telefone" class="form-control input-lg form-control-email" id="exampleInputEmail" placeholder="Telefone:     somente números" pattern="[0-9]+$" maxlength="11" required="">
								</div>
							</div>
							<!-- End email form -->
							
							<!-- Name form -->
							<div class="form-group">
								<div class="pi-input-with-icon pi-input-with-icon-lg">
									<div class="pi-input-icon"><i class="icon-briefcase"></i></div>
									<input type="text" name="areaAtuacao" class="form-control input-lg form-control-company-name" id="exampleInputCompany" placeholder="Área de atuação" required="">
								</div>
							</div>
							<!-- End name form -->

						</div>
						<!-- End col 6 -->

					</div>
					<!-- End row -->

					<p class="pi-text-center">
						<button type="submit" class="btn pi-btn-big pi-btn-base pi-btn-wide">
							Enviar<i class="icon-paper-plane pi-icon-right"></i>
						</button>
					</p>

				</form>
				<!-- End forms -->
				
			</div>
			<!-- End col 8 -->
			
		</div>
		<!-- End row -->





<?php 
   }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
 
 ?>






		<div class="pi-icon-box-vertical pi-text-center">
			
			
			
			<h2 class="h2 pi-has-border pi-has-tall-border pi-has-short-border pi-text-shadow">
			<br>
				(51) <span class="pi-weight-700">3339-7770</span> • (51) <span class="pi-weight-700">99815-2735</span>
			</h2>
			
			<p class="lead-18 pi-text-shadow pi-uppercase pi-weight-700 pi-margin-bottom-30">
				<a href="mailto:support@goldeyestheme.com" class="mail-text uppercase oswald">claudia@laranja-marranghello.com.br</a>
			</p>
			
			
		</div>
	</div>
</div>

<!-- End area -->
<div class="pi-section-w pi-section-dark pi-border-top-light pi-border-bottom-strong-base" style="display: none;" >
	<div class="pi-section pi-row-lg pi-center-text-2xs pi-clearfix pi-text-center">

		<!-- Text -->
		<span class="pi-row-block-txt">Av. Eng. Ludolfo Boehl, no. 205 – conj. 704 – Bairro Teresópolis | CEP 91.720-150 | Porto Alegre – RS
		</span>
		<!-- End text -->

	</div>
</div>
<!-- End area -->
<!-- - - - - - - - - - END SECTION - - - - - - - - - -->



<!-- - - - - - - - - - SECTION - - - - - - - - - -->
<div class="pi-section-w pi-section-white" style="margin-bottom: 62px;">
	<div class="pi-google-map pi-google-map-wide googleMap"
		 data-map-type="roadmap"
		 data-map-zoom="14"
		 data-map-style="base"
		 data-map-marker="img/marker-base.png"
		 data-map-marker-size="67,81"
		 data-map-marker-anchor="30,81"
		 data-map-address="Av. Engenheiro Ludolfo Bohel, 205" 
		 style="height: 440px;">

	</div>
</div>
<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- Footer -->

<!-- Copyright area -->
<div class="pi-section-w pi-section-dark pi-border-top-light pi-border-bottom-strong-base" style="position: fixed; bottom: 0; width: 100%; z-index: 99;">
	<div class="pi-section pi-row-lg pi-center-text-2xs pi-clearfix pi-text-center">
		
		<!-- Text -->
		<span class="pi-row-block-txt" >Av. Eng. Ludolfo Boehl, no. 205 – conj. 704 – Bairro Teresópolis | CEP 91.720-150 | Porto Alegre – RS </br></span>
		
		<span class="pi-row-block-txt" >Av. Getúlio Vargas 1151 / 1157 - Sala 1013 - Getúlio Prime </br></span>
		
		<span class="pi-row-block-txt">Desenvolvido por <a href="http://www.sperb.art.br/">Sperb Art</a>.
		</span>
		<!-- End text -->
		<div></div>
		

	</div>
</div>
<!-- End copyright area -->
<!-- End footer --></div>


</div>
<div class="pi-scroll-top-arrow" data-scroll-to="0"></div>

<script src="3dParty/jquery-1.11.0.min.js"></script>
<script src="3dParty/bootstrap/js/bootstrap.min.js"></script>
<script src="3dParty/jquery.touchSwipe.min.js"></script>
<script src="3dParty/gauge.min.js"></script>
<script src="3dParty/inview.js"></script>
<script src="3dParty/isotope/isotope.js"></script>
<script src="scripts/pi.googleMapStyles.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="3dParty/jquery.gmap.min.js"></script>
<script src="3dParty/requestAnimationFramePolyfill.min.js"></script>
<script src="3dParty/jquery.placeholder.js"></script>
<script src="3dParty/jquery.scrollTo.min.js"></script>
<script src="3dParty/colorbox/jquery.colorbox-min.js"></script>
<script src="scripts/pi.global.js"></script>
<script src="scripts/pi.init.scrollSpy.js"></script>
<script src="scripts/pi.slider.js"></script>
<script src="scripts/pi.init.slider.js"></script>
<script src="scripts/pi.tooltip.js"></script>
<script src="scripts/pi.init.tooltip.js"></script>
<script src="3dParty/jquery.easing.1.3.js"></script>
<script src="scripts/pi.counter.js"></script>
<script src="scripts/pi.init.counter.js"></script>
<script src="scripts/pi.parallax.js"></script>
<script src="scripts/pi.init.parallax.js"></script>
<script src="scripts/pi.init.isotope.js"></script>
<script src="scripts/pi.init.map.js"></script>
<script src="scripts/links.js"></script>


</body>
</html>