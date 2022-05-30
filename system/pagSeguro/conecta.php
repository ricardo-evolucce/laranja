<?php

include_once 'config.php';

class conecta extends config{
 var $pdo;
 
 function __construct(){
 $this->pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->db, $this->usuario, $this->senha); 
 }
 
 function salvarPedido($code){
 $stmt = $this->pdo->prepare("INSERT INTO wp_inscritos (code) VALUES (:code)");
 $stmt->bindValue(":code",$code); 
 $run = $stmt->execute();
 
 }
 
 function consultarPedido($reference){
 $stmt = $this->pdo->prepare("SELECT * FROM aluno  where idAluno = :reference");
 $stmt->bindValue(":reference",$reference);
 $run = $stmt->execute();
 $rs = $stmt->fetch(PDO::FETCH_ASSOC);
 return $rs; 
 
 }

 function atualizaPedido($reference, $status){
 $stmt = $this->pdo->prepare("UPDATE aluno SET pagamentoCurso = :status where idAluno = :reference");
 $stmt->bindValue(":reference",$reference);
 $stmt->bindValue(":status",$status);
 $run = $stmt->execute();
 
 }
 
function listarPedidos(){
 $stmt = $this->pdo->prepare("SELECT p.descricao, p.id, s.status FROM pedidos as p INNER JOIN status_pedido as s on p.status = s.id order by p.id");
 $run = $stmt->execute();
 $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
 return $rs; 
 
 }
 
 function consultarUltimoPedido(){
 $stmt = $this->pdo->prepare("SELECT * FROM pedidos order by id DESC");
 $run = $stmt->execute();
 $rs = $stmt->fetch(PDO::FETCH_ASSOC);
 return $rs; 
 
 }

}

?>