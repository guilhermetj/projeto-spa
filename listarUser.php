<?php
header("Content-Type: application/json; charset=UTF-8");

include 'conectBD.php';

$result = $conn->query("SELECT * FROM `sigle-page-application`.usuário");

$outp = "";

while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    
  if ($outp != "") {
      
      $outp .= ",";      
  }
  
  $outp .= '{"id":"'                    . $rs["SEQ_USUARIO"]                             . '",';
  $outp .= '"cpf":"'                    . $rs["NUM_CPF_USUARIO"]                         . '",';
  $outp .= '"firstname":"'              . $rs["NOM_USUARIO"]                             . '",';
  $outp .= '"lastname":"'               . $rs["SOBRENOM_USUARIO"]                        . '",';
  $outp .= '"email":"'                  . $rs["EMAIL_USUARIO"]                           . '",';
  $outp .= '"password":"'               . $rs["SENHA_USUARIO"]                           . '",';
  $outp .= '"idQuestion":"'             . $rs["SEQ_PERGUNTA_LOGIN_USUARIO"]              . '",';
  $outp .= '"resposta":"'               . $rs["DSC_RESPOSTA_PERGUNTA_LOGIN_USUARIO"]     . '"}';

  }
  
$outp ='{"UserCadastro":['.$outp.']}';
$conn->close();

echo($outp);

?>