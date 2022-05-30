<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';
// incluir a funcionalidade do recaptcha
require_once "../include/recaptchalib.php";

// definir a chave secreta
$secret = "6LeZVC4gAAAAAA0HnXed1z0whE8YsO5BzCMfxZaB";

// verificar a chave secreta
$response = null;
$reCaptcha = new ReCaptcha($secret);

if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]);
}

// deu tudo certo?
if ($response != null && $response->success) {
    // processar o formulario
    // Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {


    $message = "<h3>Formulário de proteção de dados, via site.</h3>"."<br>";
    $message .= "<b>Nome:</b> ".$_POST['nome']."<br>";
    $message .= "<b>Email:</b> ".$_POST['email']."<br>";
    $message .= "<b>Mensagem:</b> ".$_POST['mensagem']."<br>";


    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();  
    $mail->CharSet = 'UTF-8';                                          // Send using SMTP
    $mail->Host       = 'mail.laranja.website';                    // Set the SMTP server to send through
    $mail->SMTPSecure = "tls"; // conexão segura com TLS
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'site@laranja.website';                     // SMTP username
    $mail->Password   = 'gubk!IXA~6]v<>{a';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('site@laranja.website', 'Site Laranja-Marranghello');
    $mail->addAddress('claudia@laranja-marranghello.com.br', 'Cláudia');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($_POST['email'], $_POST['nome']);
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Formulário de contato do site. Usuário/Proteção de Dados';
    $mail->Body    = $message;
    $mail->AltBody = $message;

    $mail->send();

    echo '<script>alert("A mensagem de e-mail foi enviada.")</script>';
    echo '<script>window.location.href = "http://www.laranja-marranghello.com.br"</script>';
} catch (Exception $e) {
    echo "Mensagem não pode ser enviada. Erro: {$mail->ErrorInfo}";
}

}
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

if ($response == null) {
echo '<script>alert("Por favor, marque no formulário a opção: Não sou um robô.");</script>';


echo '<script>window.location.href = "http://www.laranja-marranghello.com.br/contatoDados.php";</script>';


}

?>