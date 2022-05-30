<?php 

foreach( $_POST as $nome_campo => $valor)
{ 
   $comando = "$" . $nome_campo . "='" . $valor . "';"; 
   eval($comando); 
} 






$username = 'laran950_usuario';
$password = 'Alberto0!';


$aceitaWhatsapp = 1;



try {
    $conexao = new PDO("mysql:host=br14.hostgator.com.br;dbname=laran950_maranga", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
    echo "Erro na conexão:" . $erro->getMessage();
}


 try {
        $ativo = '1';
        $stmt = $conexao->prepare("INSERT INTO aluno (nome, telefone, aceitaWhatsapp) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $telefone);

         $stmt->bindParam(3, $aceitaWhatsapp);









         
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                echo "Dados cadastrado com sucesso!";
                $id = null;
                $nome = null;
                $celular = null;


                echo "<script>alert('Curso cadastrado com sucesso');</script>";
  	             echo "<script>location.href='adiciona-inscrito-whats.php';</script>";



            } else {
                echo "Erro ao tentar efetivar cadastro";
            }
        } else {
               throw new PDOException("Erro: Não foi possível executar a declaração sql");
        }
    } catch (PDOException $erro) {
        echo "Erro: " . $erro->getMessage();

    }



?>