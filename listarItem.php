<?php
header("Content-Type: application/json; charset=UTF-8");

include 'conectBD.php';

$result = $conn->query("SELECT * FROM `sigle-page-application`.pergunta_login_usuario");

$outp = "";

while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    
  if ($outp != "") {
      $outp .= ",";      
  }
  
  $outp .= '{"id":"'        . $rs["SEC_PERGUNTA"]  . '",';
  $outp .= '"pergunta":"'   . $rs["DSC_PERGUNTA"]  . '"}';
  }
  
$outp ='{"question":['.$outp.']}';
$conn->close();


echo($outp);
?>