<table style="margin:0px auto; width:100%;" class="table"> 
	<thead><tr style="font-weight: bolder"><th style="width:100px">Data</th><th>Curso</th></tr></thead>


<tbody>
<?php 
/*
 * Melhor prática usando Prepared Statements
 * 
 */
  
$no_site = 1;
$username = 'maranga';
$password = 'jupiter1212';

try {
  $conn = new PDO('mysql:host=mysql.laranja-marranghello.com.br;dbname=maranga;charset=utf8', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      
    $stmt = $conn->prepare('SELECT * FROM cursos WHERE no_site = :no_site ORDER BY data');
    $stmt->execute(array('no_site' => $no_site));


  
    while($row = $stmt->fetch()) {

$data_curso = date("d/m/Y", strtotime($row['data']));


        echo '<tr>'; echo '<td>'; if($row['data'] != '0000-00-00'){echo $data_curso;}echo '</td>';echo '<td><a href="inscricao.php?idCurso='.$row['idCurso'].'">'.$row['nome'].'</a></td></tr>';
    }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
 
 ?></tbody>
</table>