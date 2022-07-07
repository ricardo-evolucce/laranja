<?php header("Content-type: text/html; charset=utf-8"); ?>
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
    <title>Edita Curso</title>

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

    <!-- Editor Tiny -->
    <script src="https://cdn.tiny.cloud/1/aijkmomomnr18vw48p9c4ufn5a01mvuzyg63ldk1btioc0dh/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
    	tinymce.init({
    		selector: '#mytextarea'
    	});
    </script>

      <script>
    	tinymce.init({
    		selector: '#textarea'
    	});
    </script>


     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
  <script src="js/jquery.maskMoney.min.js" type="text/javascript"></script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE--><!-- HEADER MOBILE--> <?php include('header.php'); ?> 
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8" style="margin:0px auto;">
                                <div class="card">
                                    <div class="card-header">Cursos</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Editar curso</h3>
                                        </div>





<?php 
/*
 * Melhor pratica usando Prepared Statements
 * 
 */
  
$idCurso = $_GET['idCurso'];
$username = 'laran950_usuario';
$password = 'Alberto0!';

try {
  $conn = new PDO('mysql:host=br14.hostgator.com.br;dbname=laran950_maranga', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      
    $stmt = $conn->prepare('SELECT * FROM cursos WHERE idCurso = :idCurso');
    $stmt->execute(array('idCurso' => $idCurso));
  
    while($row = $stmt->fetch()) {
       

 ?>

                                        <hr>
                                        <form action="edita-curso2.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nome</label>
                                                <input id="cc-pament" name="nome" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['nome']; ?>" required>
                                            </div>

                                           

                                            

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Link para divulgacao</label>
                                                <input id="cc-pament" type="text" class="form-control" aria-required="true" aria-invalid="false" value="http://www.laranja-marranghello.com.br/inscricao.php?idCurso=<?php echo $row['idCurso']; ?>" disabled="true" style="font-size:12px">
                                            </div>

                                            <input type="hidden" value="<?php echo $row['idCurso']; ?>" name="idCurso">




                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Descricao do curso</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="descricao" id="mytextarea" rows="9" class="form-control"><?php echo $row['descricao']; ?></textarea>
                                                </div>
                                            </div>


                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Nome do professor(a)</label>
                                                <input value="<?php echo $row['nomeProf']; ?>" id="cc-name" name="nomeProf" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Curriculo do professor(a)</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="curriculo" id="textarea" rows="9" placeholder="Cursos, graduacoes, qualificacoes, experiencias, etc." class="form-control"><?php echo $row['curriculo']; ?></textarea>
                                                </div>
                                            </div>


                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Local</label>
                                                <input id="cc-name" name="local" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" value="<?php echo $row['local']; ?>"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>

                                            
                                             <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Endereco</label>
                                                <input id="cc-name" name="endereco" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" value="<?php echo $row['endereco']; ?>"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Valor</label>
                                                        <input name="valorCurso" id="valorCurso" type="tel" class="form-control cc-exp" value="<?php echo $row['valor']; ?>" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Carga Horária</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="cargaHoraria" type="tel" class="form-control cc-cvc" value="<?php echo $row['cargaHoraria']; ?>" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off" placeholder="Ilimitadas" >

                                                    </div>
                                                </div>
                                            </div>

                                             <!--<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Logotipo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="logoCurso" class="form-control-file">
                                                </div>
                                            </div>-->



                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Data</label>
                                                        <input id="cc-exp" name="data" type="date" class="form-control cc-exp" value="<?php echo $row['data']; ?>" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>


                                                 <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Data Fim</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="data_fim" type="date" class="form-control cc-cvc" value="<?php echo $row['data_fim']; ?>" data-val="true" data-val-required=""
                                                            data-val-cc-cvc="" autocomplete="off">

                                                    </div>
                                                </div>





                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Horario</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="horario" type="tel" class="form-control cc-cvc" value="<?php echo $row['horario']; ?>" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>


                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Vagas</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="vagas" type="tel" class="form-control cc-cvc" value="<?php echo $row['vagas']; ?>" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>

                                                
                                                 <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1"><b>Mostrar no site</b></label>
                                                    <div class="input-group">
                                                        <select name="no_site" id="select" class="form-control">
                                                        <?php
                                                        switch ($row['no_site']) {
    case 1:
        echo '<option value="1">SIM</option>';
        break;
    case 2:
       echo '<option value="2">NAO</option>';
        break;
    default:
       echo '<option value="">Selecione</option>';
        break;

} ?>
                                                        
                                                        <option value="1">SIM</option>
                                                        <option value="2">NAO</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Imagem no site</label>
                                                 <input type="file" name="fileUpload"  accept="image/png, image/jpeg"  multiple />
                                                </div>
                                            </div>





                                            </div>




                                            <div style="margin-top:15px;">
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Editar curso</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending</span>
                                                </button>

                                                <a href="apaga-curso.php?idCurso=<?php echo $row['idCurso']; ?>">Apagar curso</a>
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
<script>
  $(function() {
    $('#valorCurso').maskMoney();
  })
</script>
</html>
<!-- end document-->
