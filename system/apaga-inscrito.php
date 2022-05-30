<?php 
  

$idAluno = $_GET['idAluno'];


$username = 'maranga';
$password = 'jupiter1212';

   
try {

  $pdo = new PDO('mysql:host=mysql.laranja-marranghello.com.br;dbname=maranga', $username, $password);

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare('DELETE FROM aluno WHERE idAluno = :idAluno');
  $stmt->bindParam(':idAluno', $idAluno); 
  $stmt->execute();
    
  $linhas = $stmt->rowCount(); 

    if($linhas != 0){
      echo "<script>alert('Inscrito apagado com sucesso');</script>";
      echo "<script>location.href='inscritos-cursos.php';</script>"; 
  }else{echo 'errou';}


} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

?>