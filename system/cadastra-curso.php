<?php header("Content-type: text/html; charset=utf-8");

/*foreach( $_POST as $nome_campo => $valor)
{ 
   $comando = "$" . $nome_campo . "='" . $valor . "';"; 
   eval($comando); 
} */




$nome = $_POST['nome'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$valorCurso = $_POST['valorCurso'];
$cargaHoraria = $_POST['cargaHoraria'];
$nomeProf = $_POST['nomeProf'];
$curriculo = $_POST['curriculo'];
$descricao = $_POST['descricao'];
$endereco = $_POST['endereco'];
$no_site = $_POST['no_site'];
$ativo = $_POST['ativo'];
$local = $_POST['local'];
$data_fim = $_POST['data_fim'];



$username = 'laran950_usuario';
$password = 'Alberto0!';





try {
    $conexao = new PDO("mysql:host=br14.hostgator.com.br; dbname=laran950_maranga", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
    echo "Erro na conexão:" . $erro->getMessage();
}
 try {
        $ativo = '1';
        $stmt = $conexao->prepare("INSERT INTO cursos (nome, data, horario, valor, cargaHoraria, nomeProf, curriculo, descricao, endereco, no_site, ativo, local, data_fim) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $data);
        $stmt->bindParam(3, $horario);

        $stmt->bindParam(4, $valorCurso);
        $stmt->bindParam(5, $cargaHoraria);

        $stmt->bindParam(6, $nomeProf);
        $stmt->bindParam(7, $curriculo);

        $stmt->bindParam(8, $descricao);

        $stmt->bindParam(9, $endereco);
        $stmt->bindParam(10, $no_site);

         $stmt->bindParam(11, $ativo);
         $stmt->bindParam(12, $local);
         $stmt->bindParam(13, $data_fim);









         
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                echo "Dados cadastrado com sucesso!";
                $id = null;
                $nome = null;
                $email = null;
                $telefone = null;
                $empresa = null;
                $profissao = null;
                $areaAtuacao = null;
                $idCurso = null;
                $cpf = null;
                $data_fim = null;

                echo "<script>alert('Curso cadastrado com sucesso');</script>";
  	  echo "<script>location.href='consulta-cursos.php';</script>";



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