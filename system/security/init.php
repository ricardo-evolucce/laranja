<?php
 
// constantes com as credenciais de acesso ao banco MySQL
define('DB_HOST', 'br14.hostgator.com.br');
define('DB_USER', 'laran950_usuario');
define('DB_PASS', 'Alberto0!');
define('DB_NAME', 'laran950_maranga');
 
// habilita todas as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);
 
// inclui o arquivo de funçõees
require_once 'functions.php';