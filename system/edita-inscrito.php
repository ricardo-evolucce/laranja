<?php header("Content-Type: text/html; charset=ISO-8859-1",true) ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Edita Inscrito</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper"> <?php include('header.php'); ?> 
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8" style="margin:0px auto;">
                                <div class="card">
                                    <div class="card-header">Inscritos</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Editar inscrito</h3>
                                        </div>





<?php 
/*
 * Melhor pratica usando Prepared Statements
 * 
 */
  
$idAluno = $_GET['idAluno'];
$username = 'maranga';
$password = 'jupiter1212';

try {
  $conn = new PDO('mysql:host=mysql.laranja-marranghello.com.br;dbname=maranga', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      
    $stmt = $conn->prepare('SELECT * FROM aluno WHERE idAluno = :idAluno');
    $stmt->execute(array('idAluno' => $idAluno));
  
    while($row = $stmt->fetch()) {
       

 ?>






                                        <hr>
                                        <form action="edita-inscrito2.php" method="post">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nome</label>
                                                <input id="cc-pament" name="nome" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['nome']; ?>" required>
                                            </div>

                                            <input type="hidden" value="<?php echo $row['idAluno']; ?>" name="idAluno">


                                            <div class="form-group">
                                             
                                                    <label for="textarea-input" class="control-label mb-1">CPF</label>
                                              
                                               
                                                    <input type="text" name="cpf" id="textarea-input" class="form-control"  value="<?php echo $row['cpf']; ?>">
                                              
                                            </div>

                                            <div class="form-group">
                                             
                                                    <label for="textarea-input" class="control-label mb-1">Sexo</label>
                                              
                                                    <select name="sexo" class="form-control cc-name valid">

                                               		<?php 
                                               		switch ($row['sexo']) {
                                               			case 'm':
                                               				echo '<option value="m">Masculino</option>';                           				                               				
                                               				echo '<option value="f">Feminino</option>';
                                               				break;
                                               			
                                               			case 'f':
                                               				echo '<option value="f">Feminino</option>';
                                               				echo '<option value="m">Masculino</option>';
                                               				
                                               				break;
                                               			default:
                                               				echo '<option value="">Selecione</option>';
                                               				echo '<option value="m">Masculino</option>';
                                               				echo '<option value="f">Feminino</option>';
                                               				break;
                                               		}

                                               		?>
                                                    
                                              		</select>
                                            </div>


                                              <div class="form-group">
                                             
                                                    <label for="textarea-input" class="control-label mb-1">Data de nascimento</label>
                                              
                                                    <input type="date" name="dataNasc" class="form-control cc-name valid" value="<?php echo $row['dataNasc'];?>">
                                                    
                                              		</select>
                                            </div>


                                                   <div class="form-group">
                                             
                                                    <label for="textarea-input" class="control-label mb-1">Profissão</label>
                                              
                                                    <input type="text" name="profissao" class="form-control cc-name valid" value="<?php echo $row['profissao'];?>">
                                                    
                                              		</select>
                                            </div>


                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Email</label>
                                                <input value="<?php echo $row['email']; ?>" id="cc-name" name="email" type="email" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required>
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>



                                            <div class="form-group">
                                                
                                                    <label for="textarea-input" class=" form-control-label">Telefone</label>
                                               
                                              
                                                    <input type="text" name="telefone" class="form-control cc-name valid" value="<?php echo $row['telefone']; ?>">
                                            
                                            </div>




                                            
                                             <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Empresa</label>
                                                <input id="cc-name"  name="empresa" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" value="<?php echo $row['empresa']; ?>"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>

                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Indicado por</label>
                                                <input id="cc-name" required name="indicacao" type="text" class="form-control cc-name valid" disabled="true" data-val="true" data-val-required="Please enter the name on card" value="<?php echo $row['indicacao']; ?>"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="row">
                                             





<div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1"><b>Pago</b></label>
                                                    <div class="input-group">
                                                        <select name="pagamentoCurso" id="select" class="form-control" >
                                                        <?php
                                                        switch ($row['pagamentoCurso']) {
    
    case 2:
        echo '<option value="2">Em análise</option>';
        echo '<option value="1">Aguardando pagamento</option>';
        echo '<option value="3">Pago</option>';
        echo '<option value="4">Disponível</option>';
        echo '<option value="5">Em disputa</option>';
        echo '<option value="6">Devolvida</option>';
        echo '<option value="7">Cancelada</option>';

        break;

    case 3:
     echo '<option value="3">Pago</option>';
           echo '<option value="2">Em análise</option>';
        echo '<option value="1">Aguardando pagamento</option>';
       
        echo '<option value="4">Disponível</option>';
        echo '<option value="5">Em disputa</option>';
        echo '<option value="6">Devolvida</option>';
        echo '<option value="7">Cancelada</option>';
        break;

        case 4:
        echo '<option value="4">Disponível</option>';
           echo '<option value="3">Pago</option>';
           echo '<option value="2">Em análise</option>';
        echo '<option value="1">Aguardando pagamento</option>';
       
        
        echo '<option value="5">Em disputa</option>';
        echo '<option value="6">Devolvida</option>';
        echo '<option value="7">Cancelada</option>';
        break;

        case 5:
            echo '<option value="5">Em disputa</option>';
               echo '<option value="4">Disponível</option>';
           echo '<option value="3">Pago</option>';
           echo '<option value="2">Em análise</option>';
        echo '<option value="1">Aguardando pagamento</option>';
       
        
    
        echo '<option value="6">Devolvida</option>';
        echo '<option value="7">Cancelada</option>';
        break;

        case 6:
          echo '<option value="6">Devolvida</option>';
             echo '<option value="5">Em disputa</option>';
               echo '<option value="4">Disponível</option>';
           echo '<option value="3">Pago</option>';
           echo '<option value="2">Em análise</option>';
        echo '<option value="1">Aguardando pagamento</option>';
       
        
    
      
        echo '<option value="7">Cancelada</option>';
        break;

        case 7:
        echo '<option value="7">Cancelada</option>';
               echo '<option value="6">Devolvida</option>';
             echo '<option value="5">Em disputa</option>';
               echo '<option value="4">Disponível</option>';
           echo '<option value="3">Pago</option>';
           echo '<option value="2">Em análise</option>';
        echo '<option value="1">Aguardando pagamento</option>';
       
        
    
      
        
        break;

    case 1:
        echo '<option value="1">Aguardando pagamento</option>';
        echo '<option value="7">Cancelada</option>';
               echo '<option value="6">Devolvida</option>';
             echo '<option value="5">Em disputa</option>';
               echo '<option value="4">Disponível</option>';
           echo '<option value="3">Pago</option>';
           echo '<option value="2">Em análise</option>';
    
        break;
    default:
        echo '<option value="1">Aguardando pagamento</option>';
        echo '<option value="7">Cancelada</option>';
               echo '<option value="6">Devolvida</option>';
             echo '<option value="5">Em disputa</option>';
               echo '<option value="4">Disponível</option>';
           echo '<option value="3">Pago</option>';
           echo '<option value="2">Em análise</option>';
        break;

} ?>
                                                
                                                        </select>
                                                    </div>
                                                </div>












                                             
<div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1"><b>Concluido</b></label>
                                                    <div class="input-group">
                                                        <select name="situacaoCurso" id="select" class="form-control">
                                                        <?php
                                                        switch ($row['situacaoCurso']) {
    case 1:

        echo '<option value="1">SIM</option>';
        echo '<option value="2">NÃO</option>';
    
        break;
    case 2:
       echo '<option value="2">NÃO</option>';
        echo '<option value="1">SIM</option>';
        break;
    default:
             echo '<option value="2">NÃO</option>';
              echo '<option value="1">SIM</option>';
        break;

} ?>
                                                
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div style="margin-top:15px;">
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>
                                                    <span id="payment-button-amount">Editar inscrito</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending</span>
                                                </button>

                                                <a href="apaga-inscrito.php?idAluno=<?php echo $row['idAluno']; ?>">Apagar inscrito</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            

<?php
    }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
