<?php
// session_start inicia a sessão    
session_start();
    
include 'conectBD.php';

$obj  = json_decode(file_get_contents("php://input"));

$email   = $obj->email;
$password   = $obj->password;

$result = $conn->query ("SELECT * FROM `sigle-page-application`.usuário WHERE EMAIL_USUARIO ='".$email."' AND SENHA_USUARIO = '".$password."'");

$retorno = false;
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);

 
if($result ->num_rows > 0){
    $_SESSION['login'] = $email;
    $_SESSION['senha'] = $password;
    
    $retorno = true;
}
    echo $retorno;
    
?>