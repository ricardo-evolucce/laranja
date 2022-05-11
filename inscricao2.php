<?php header("Content-Type: text/html; charset=ISO-8859-1",true);





$nome = $_POST['nome'];
$telefone = $_POST['whatsapp'];
$email = $_POST['email'];

$idCurso = $_POST['idCurso'];

$valorCurso = $_POST['valorCurso'];
$descricao = $_POST['descricao'];



$aceitaNewsletter = 0;
if(isset($_POST['aceitaNewsletter']) &&  $_POST['aceitaNewsletter'] == 'on'){

    $aceitaNewsletter = 1;
}




$aceitaWhatsapp = 0;

if(isset($_POST['aceitaWhatsapp']) && $_POST['aceitaWhatsapp'] == 'on'){
    $aceitaWhatsapp = 1;
}




$username = 'laran950_usuario';
$password = 'Alberto0!';





try {
            
    $conexao = new PDO('mysql:host=br14.hostgator.com.br;dbname=laran950_maranga;charset=utf8', $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
    echo "Erro na conexão:" . $erro->getMessage();
}



try {
        $stmt2 = $conexao->prepare("SELECT * FROM aluno WHERE cpf = ? AND idCurso = ?");
        $stmt2->bindParam(1, $cpf);
        $stmt2->bindParam(2, $idCurso);


         if ($stmt2->execute()) {  
            if ($stmt2->rowCount() != 0) { 


while($row2 = $stmt2->fetch()) {
  
                $idA = $row2['idAluno'];
}



             $descricao = 'Curso L-M: '.''.$descricao.'';
             $descricao2 = substr($descricao, 0, 30); // abcd




               
                  echo "<script>location.href='pagamento.php?descricao=".$descricao2."&valor=".$valorCurso."&nome=".$nome."&ref=".$idA."';</script>"; 








             }else{






try {
        $stmt = $conexao->prepare("INSERT INTO aluno (nome, email, telefone, idCurso, aceitaWhatsapp, aceitaNewsletter) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $telefone);
        $stmt->bindParam(4, $idCurso);
        $stmt->bindParam(5, $aceitaWhatsapp);
        $stmt->bindParam(6, $aceitaNewsletter);
 






         
        if ($stmt->execute()) {

             $idU = $conexao->lastInsertId();

            if ($stmt->rowCount() > 0) {
                echo "Dados cadastrado com sucesso!";
                $id = null;
                $nome = null;
                $email = null;
                $telefone = null;
                $aceitaWhatsapp = null;
                

                $descricao = 'Curso L-M: '.''.$descricao.'';


             $descricao3 = substr($descricao, 0, 30); // abcd


               
                  echo "<script>location.href='pagamento.php?descricao=".$descricao3."&valor=".$valorCurso."&nome=".$nome."&ref=".$idU."';</script>"; 
       





            } else {
                echo "Erro ao tentar efetivar cadastro";
            }
        } else {
               throw new PDOException("Erro: Não foi possível executar a declaração sql");
        }
    } catch (PDOException $erro) {
        echo "Erro: " . $erro->getMessage();

    }







             }
}}
    catch (PDOException $erro) {
        echo "Erro: " . $erro->getMessage();

    }




?>