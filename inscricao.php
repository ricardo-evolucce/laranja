<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Inscrição - Laranja Marranghello</title>

	<!-- Font Icon -->
	<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

	<!-- Main css -->
	<link rel="stylesheet" href="templates/colorlib-regform-8/css/style.css">
</head>
<body>

				<?php 
/*
 * Melhor prática usando Prepared Statements
 * 
 */

$ativo = 1;
$username = 'laran950_usuario';
$password = 'Alberto0!';
$idCurso = $_GET['id'];

try {
	$conn = new PDO('mysql:host=br14.hostgator.com.br;dbname=laran950_maranga;charset=utf8', $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

	$stmt = $conn->prepare('SELECT * FROM cursos WHERE ativo = :ativo AND idCurso=:idCurso');
	$stmt->execute(array('ativo' => $ativo, 'idCurso' => $idCurso));

	while($row = $stmt->fetch()) {

		?>

	<div class="main">

		<section class="signup">
			<!-- <img src="images/signup-bg.jpg" alt=""> -->
			<div class="container" style="width: 1100px">
				<div class="signup-content">
					<form method="POST" action="inscricao2.php" class="signup-form">
						<h2 class="form-title">INSCRIÇÃO NO CURSO: <?php echo $row['nome']; ?></h2>
				

						<input type="hidden" name="valorCurso" value="<?php echo $row['valor']; ?>">
						<input type="hidden" name="descricao" value="<?php echo strip_tags($row['descricao']); ?>">
						<input type="hidden" name="idCurso" value="<?php echo $row['idCurso']; ?>">


						<div class="form-group">
							<input type="text" class="form-input" name="nome" id="name" placeholder="Nome completo" required="" />
						</div>
						<div class="form-group">
							<input type="text" class="form-input" name="whatsapp" id="whatsapp" placeholder="Whatsapp: SOMENTE NÚMEROS" maxlength="11" pattern="[0-9]+$" required="" />
						</div>

						<div class="form-group">
							<input type="email" class="form-input" name="email" id="email" placeholder="E-mail" required="" />
						</div>



	<?php 
}
} catch(PDOException $e) {
	echo 'ERROR: ' . $e->getMessage();
}

?>
						<div class="form-group">
							<input type="checkbox" name="agree-term" id="checkbox" class="agree-term" style="display: inline"  />
							<strong>Aceito que:</strong> Os dados ora colhidos se dão através de consentimento (lei 13.709/18, artigo 7º, inciso I) e a finalidade do recolhimento do nome e e-mail se dão para que possa haver o controle do comparecimento da pessoa ao curso, para posterior fornecimento de certificado, bem como o e-mail para que seja possível através deste serem enviados os materiais escritos do curso e para cadastro no site (que poderá ser retirado pelo próprio usuário, na aba certificados). O celular/WhatsApp será colhido com a finalidade de enviar recados sobre o curso da inscrição, bem como para inclusão em grupo de WhatsApp, se aceito pelo usuário. Caso o mesmo, após a realização do curso, queira que seus dados sejam apagados ou alterados, solicite o pedido junto a este site, no link do rodapé "USUÁRIO/DADOS". <a href="https://laranja-marranghello.com.br/politicas-de-privacidade.php">Políticas de Privacidade</a></label>
						</div>

						<div class="form-group">
							<input type="checkbox" name="aceitaNewsletter" id="agree-term" class="agree-term"  style="display: inline" />
							<strong>Aceito que:</strong> Quero me manter atualizado, recebendo por e-mail a newsletter mensal da Laranja & Marranghello, que traz sempre as notícias e novidades que a nossa empresa está oferecendo, como também a propaganda dos próximos cursos da Laranja & Marranghello Peritos Consultores.<a href="https://laranja-marranghello.com.br/politicas-de-privacidade.php">Políticas de Privacidade</a></label>
						</div>

						<div class="form-group">
							<input type="checkbox" name="aceitaWhatsapp" id="agree-term" class="agree-term"   style="display: inline"/>
							<strong>Aceito:</strong> a inclusão do meu número em grupo de WhatsApp, para fim específico de troca de experiências e notícias contábeis
							e jurídicas. <a href="https://laranja-marranghello.com.br/politicas-de-privacidade.php">Políticas de Privacidade</a></label>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" id="enviar" class="form-submit" value="Me inscrever" disabled="true"/>
						</div>
					</form>
				
				</div>
			</div>
		</section>

	</div>

	<!-- JS -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="js/main.js"></script>

	<script>
$("#checkbox").click(function(){
   var enviar = $("#enviar");
   enviar.prop("disabled", !enviar.prop("disabled"));
});

</script>

<script>
function goBack() {
    window.history.back()
}
</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>