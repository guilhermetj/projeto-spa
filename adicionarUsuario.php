<?php 

include 'conectBD.php';

$obj  = json_decode(file_get_contents("php://input"));

$nome           = $obj->oneName;
$sobreNome      = $obj->twoName;
$email          = $obj->email;
$cpf            = $obj->cpf;
$senha          = $obj->onePassword;
$senha2         = $obj->twoPassword;
$idPergunta     = $obj->idQuestion;
$respPergunta   = $obj->answer;

 
if($senha==$senha2){
     
    $query ="INSERT INTO `aplicacao_spa`.`usuario` "
            . "(`NUM_CPF_USUARIO`,"
            . " `NOM_USUARIO`, "
            . "`SOBRENOM_USUARIO`,"
            . "`EMAIL_USUARIO`,"
            . "`SENHA_USUARIO`,"
            . "`SEQ_PERGUNTA_USUARIO`,"
            . "`DSC_RESPOSTA_PERGUNTA_LOGIN_USUARIO`) "
            . "VALUES ('".$cpf."','".$nome."','".$sobreNome."','".$email."','".$senha."','".$idPergunta."','".$respPergunta."')";

        if(mysqli_query($conn, $query)) {
            echo "Usuário inserido com sucesso";
        }else {
            echo $query;
        }
        
}else{
    
     echo "As senhas não conferem.Favor verificar!";
    
}
?>