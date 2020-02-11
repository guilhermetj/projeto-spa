<?php 

include 'conectBD.php';

$obj  = json_decode(file_get_contents("php://input"));

$id   = $obj->id;

$query ="DELETE from `sigle-page-application`.`usuário` WHERE `SEQ_USUARIO`='".$id."'";

 if(mysqli_query($conn, $query)) {
	echo "Produto excluido com sucesso";
    }else {
	echo "Falha ao excluir o produto";
 }

?>