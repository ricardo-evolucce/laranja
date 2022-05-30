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
   
  $stmt = $pdo->prepare('UPDATE aluno SET nome = :nome, email = :email, telefone = :telefone, empresa = :empresa, profissao = :profissao, areaAtuacao = :areaAtuacao, situacaoCurso = :situacaoCurso, pagamentoCurso = :pagamentoCurso, cpf = :cpf, sexo = :sexo, dataNasc = :dataNasc WHERE idAluno = :idAluno');
  $stmt->execute(array(
    ':idAluno'   => $idAluno,
    ':nome'   => $nome,
    ':email'   => $email,
    ':telefone'   => $telefone,
    ':empresa'   => $empresa,
    ':profissao'   => $profissao,
    ':areaAtuacao'   => $areaAtuacao,
    ':situacaoCurso'   => $situacaoCurso,
    ':pagamentoCurso'   => $pagamentoCurso,
      ':cpf'   => $cpf,
      ':dataNasc'   => $dataNasc,
      ':sexo'   => $sexo
  ));


     
  echo $stmt->rowCount(); 

  $linhas = $stmt->rowCount();
  if($linhas != 0){
  		echo "<script>alert('Inscrito atualizado com sucesso');</script>";
  	  echo "<script>location.href='inscritos-cursos.php';</script>"; 
  }else{    echo "<script>alert('Nenhuma alteração feita.');</script>";
      echo "<script>location.href='inscritos-cursos.php';</script>"; }

} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>