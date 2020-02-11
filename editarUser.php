<?php 

include 'conectBD.php';

$obj  = json_decode(file_get_contents("php://input"));

$id         = $obj->id;
$firstname    = $obj->firstname;
$lastname = $obj->lastname;
$email   = $obj->email;
$cpf   = $obj->cpf;
$password   = $obj->password;
$idpergunta   = $obj->idQuestion;
$resposta = $obj->resposta;


$query ="UPDATE `sigle-page-application`.`usuário` "
        . "SET `NOM_USUARIO`='".$firstname."',"
        . " `SOBRENOM_USUARIO`='".$lastname."',"
        . " `EMAIL_USUARIO`='".$email."',"
        . " `NUM_CPF_USUARIO`='".$cpf."',"
        . " `SENHA_USUARIO`='".$password."',"
        . " `SEQ_PERGUNTA_LOGIN_USUARIO`='".$idpergunta."',"
        . " `DSC_RESPOSTA_PERGUNTA_LOGIN_USUARIO`='".$resposta."'"
        . " WHERE `SEQ_USUARIO`='".$id."'";

 if(mysqli_query($conn, $query)) {
	echo "Produto alterado com sucesso";
    }else {
	echo "Falha ao alterar o produto";
 }

?>