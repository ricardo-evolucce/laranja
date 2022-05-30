<?php 
include_once('https://franciscorossal.com/dev/sandbox/PHPMailer-FE_v4.11/_lib/class.phpmailer.php'); 


$mailer = new PHPMailer();
$mailer->IsSMTP();
$mailer->SMTPDebug = 3;
$mailer->Port = 587; //Indica a porta de conexão 
$mailer->Host = 'br964.hostgator.com.br';//Endereço do Host do SMTP 
$mailer->SMTPAuth = true; //define se haverá ou não autenticação 
$mailer->Username = 'contato@franciscorossal.com'; //Login de autenticação do SMTP
$mailer->Password = 'Rossal123'; //Senha de autenticação do SMTP
$mailer->FromName = 'Remetente'; //Nome que será exibido
$mailer->From = 'contato@franciscorossal.com'; //Obrigatório ser 

$mailer->AddAddress('ricardomuller90@gmail.com','Nome do 
destinatário');
//Destinatários
$mailer->Subject = 'Teste enviado através do PHP Mailer 
SMTPLW';
$mailer->Body = 'Este é um teste realizado com o PHP Mailer 
SMTPLW';
if(!$mailer->Send())
{
echo "Message was not sent";
echo "Mailer Error: " . $mailer->ErrorInfo; exit; }
print "E-mail enviado!"
?>