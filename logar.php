<?php 

// session_start inicia a sessão
session_start();

include 'conectBD.php';

$obj  = json_decode(file_get_contents("php://input"));

$email  = $obj->email;
$senha  = $obj->senha;

$result = $conn->query( "SELECT * FROM `aplicacao_spa`.usuario WHERE EMAIL_USUARIO = '".$email."' AND SENHA_USUARIO = '".$senha."'");

$retorno = false;
unset ($_SESSION['login']);
unset ($_SESSION['senha']);

        
if($result->num_rows > 0){
               
    $_SESSION['login'] = $email;
    $_SESSION['senha'] = $senha;
    
   // header('location:home.php');

    $retorno = true;
    
}
 
  echo $retorno      
        
?>