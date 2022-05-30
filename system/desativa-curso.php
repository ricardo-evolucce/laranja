<?php 
  

foreach( $_POST as $nome_campo => $valor)
{ 
   $comando = "$" . $nome_campo . "='" . $valor . "';"; 
   eval($comando); 

}


$username = 'maranga';
$password = 'jupiter1212';
   
try {
  $pdo = new PDO('mysql:host=mysql.laranja-marranghello.com.br;dbname=maranga', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare('UPDATE cursos SET nome = :nome, data = :data, horario = :horario, valor = :valor, vagas = :vagas, endereco = :endereco, nomeProf = :nomeProf, curriculo = :curriculo, no_site = :no_site, descricao = :descricao WHERE idCurso = :idCurso');
  $stmt->execute(array(
    ':idCurso'   => $idCurso,
    ':nome'   => $nome,
    ':data'   => $data,
    ':horario'   => $horario,
    ':valor'   => $valorCurso,
    ':vagas'   => $vagas,
    ':endereco'   => $endereco,
    ':nomeProf'   => $nomeProf,
    ':curriculo'   => $curriculo,
      ':no_site'   => $no_site,
    ':descricao' => $descricao
  ));


     
  echo $stmt->rowCount(); 
  http://www.laranja-marranghello.com.br/system/edita-curso.php?idCurso=1
  $linhas = $stmt->rowCount();
  if($linhas != 0){
  		echo "<script>alert('Curso atualizado com sucesso');</script>";
  	  echo "<script>location.href='consulta-cursos.php';</script>"; 
  }else{echo 'errou';}

} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>