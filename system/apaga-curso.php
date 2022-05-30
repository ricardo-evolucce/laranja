<?php 
  

$idCurso = $_GET['idCurso'];


$username = 'laran950_usuario';
$password = 'Alberto0!';

   
try {

  $pdo = new PDO('mysql:host=br14.hostgator.com.br;dbname=laran950_maranga', $username, $password);

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare('DELETE FROM cursos WHERE idCurso = :idCurso; DELETE FROM aluno WHERE idCurso = :idCurso;');
  $stmt->bindParam(':idCurso', $idCurso); 
  $stmt->execute();
    
  $linhas = $stmt->rowCount(); 

if($linhas != 0){
      echo "<script>alert('Curso apagado com sucesso');</script>";
      echo "<script>location.href='consulta-cursos.php';</script>"; 
}else{echo 'errou';}



} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

?>