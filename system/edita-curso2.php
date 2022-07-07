<?php header("Content-type: text/html; charset=utf-8");


$string = ',';


$idCurso = $_POST['idCurso'];
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
$vagas = $_POST['vagas'];

$valorNovo = str_replace($string, '', $valorCurso);


$username = 'laran950_usuario';
$password = 'Alberto0!';
   
try {
  $pdo = new PDO('mysql:host=br14.hostgator.com.br;dbname=laran950_maranga;charset=utf8', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      if(isset($_FILES['fileUpload']))
   {
      date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

      $ext = strtolower(substr($_FILES['fileUpload']['name'],-4)); //Pegando extensão do arquivo
      $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
      $dir = '../img/cursos/'; //Diretório para uploads
      $imagem1 = $dir.$new_name;

          $imagem = substr($imagem1, 3);

      move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo


  $stmt = $pdo->prepare('UPDATE cursos SET nome = :nome, data = :data, horario = :horario, valor = :valor, vagas = :vagas, endereco = :endereco, nomeProf = :nomeProf, curriculo = :curriculo, no_site = :no_site, descricao = :descricao, local = :local, imagem = :imagem, data_fim = :data_fim, cargaHoraria = :cargaHoraria, vagas = :vagas WHERE idCurso = :idCurso');
  $stmt->execute(array(
    ':idCurso'   => $idCurso,
    ':nome'   => $nome,
    ':data'   => $data,
    ':horario'   => $horario,
    ':valor'   => $valorNovo,
    ':vagas'   => $vagas,
    ':endereco'   => $endereco,
    ':nomeProf'   => $nomeProf,
    ':curriculo'   => $curriculo,
      ':no_site'   => $no_site,
    ':descricao' => $descricao,
    ':local' => $local,
    ':imagem' => $imagem,
    ':data_fim' => $data_fim,
    ':cargaHoraria' => $cargaHoraria,
     ':vagas' => $vagas
  ));


   }else{


   
  $stmt = $pdo->prepare('UPDATE cursos SET nome = :nome, data = :data, horario = :horario, valor = :valor, vagas = :vagas, endereco = :endereco, nomeProf = :nomeProf, curriculo = :curriculo, no_site = :no_site, descricao = :descricao, local = :local, data_fim = :data_fim, cargaHoraria = :cargaHoraria, vagas = :vagas WHERE idCurso = :idCurso');
  $stmt->execute(array(
    ':idCurso'   => $idCurso,
    ':nome'   => $nome,
    ':data'   => $data,
    ':horario'   => $horario,
    ':valor'   => $valorNovo,
    ':vagas'   => $vagas,
    ':endereco'   => $endereco,
    ':nomeProf'   => $nomeProf,
    ':curriculo'   => $curriculo,
      ':no_site'   => $no_site,
    ':descricao' => $descricao,
    ':local' => $local,

    ':data_fim' => $data_fim,
    ':cargaHoraria' => $cargaHoraria,
     ':vagas' => $vagas
  ));
}


     
  echo $stmt->rowCount(); 
  http://www.laranja-marranghello.com.br/system/edita-curso.php?idCurso=1
  $linhas = $stmt->rowCount();
  if($linhas != 0){
  		echo "<script>alert('Curso atualizado com sucesso');</script>";
  	  echo "<script>location.href='consulta-cursos.php';</script>"; 
  }else{echo "<script>alert('Nenhuma alteração feita.');</script>";
      echo "<script>location.href='consulta-cursos.php';</script>"; }

} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>