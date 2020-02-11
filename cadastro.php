<?php 

include 'conectBD.php';

$obj  = json_decode(file_get_contents("php://input"));

$fistname    = $obj->fistname;
$lastname = $obj->lastname;
$email   = $obj->email;
$cpf   = $obj->cpf;
$password   = $obj->password;
$password2   = $obj->password2;
$idpergunta   = $obj->idQuestion;
$resposta = $obj->resposta;

if($password==$password2){
 
$query ="INSERT INTO `sigle-page-application`.`usuário` (`NOM_USUARIO`, `SOBRENOM_USUARIO`, `EMAIL_USUARIO`, `NUM_CPF_USUARIO`, `SENHA_USUARIO`, `SEQ_PERGUNTA_LOGIN_USUARIO`, `DSC_RESPOSTA_PERGUNTA_LOGIN_USUARIO`) VALUES ('".$fistname."','".$lastname."','".$email."','".$cpf."','".$password."','".$idpergunta."','".$resposta."')";

    if(mysqli_query($conn, $query)) {
	echo "Produto inserido com sucesso";
    }else {
	echo "Falha ao inserir o produto";
    }
}else{
    
     echo "As senhas não conferem.Favor verificar!";
    
}
?>