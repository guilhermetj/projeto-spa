<?php

session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:index.php');
  }
 
$logado = $_SESSION['login'];

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html ng-app="CadastroModulo">
    <head>
        <meta charset="UTF-8">
        <title>Edição de dados</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="style.css" rel="stylesheet">
    </head>
<body>
     
    <div class="container register" ng-controller="CadastroController" ng-init="[listaUsers(),listaItens()]">
    <div class="row">
        <div class="col-md-3 register-left">
            <!--<img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>-->
            <h3>Página do ADMISTRADOR</h3><br>
            Usuário : <p><?php echo $logado?></p> 
            
        </div>
        <div class="col-md-9 register-right">
            
            <div class="tab-content" id="myTabContent">
                
                <div >
                    <h3  class="register-heading">Editar Usuário</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nome"  ng-model="user.firstname"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Sobrenome" ng-model="user.lastname" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" ng-model="user.email"/>
                            </div>
                            <div class="form-group">
                                <input type="text" maxlength="11" class="form-control" placeholder="CPF" ng-model="user.cpf"/>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Senha"  ng-model="user.password"/>
                            </div>
                            
                            <div class="form-group">
                                                                   
                                <select class="form-control" ng-model="questionSelecionada"
                                        ng-options="x.pergunta for x in questions">                                        
                                        <option value="">Pergunta de segurança</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Resposta" ng-model="user.resposta" />
                            </div>                            
                            <button  type="button" class="btnRegister" ng-click="applyChanges()">Salvar</button> 
                        </div>
                        <br>
                        
         <table border ="1" style="text-align: center">
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>E-mail</th>
                    <th>CPF</th>
                    <th>Senha</th>
                    <th>IDPergunta</th>
                    <th>Resposta</th>
                    <th>Ação</th>
                </tr>
                <tr ng-repeat="user in users">
                    <td>{{user.firstname}}</td>
                    <td>{{user.lastname}}</td>
                    <td>{{user.email}}</td>
                    <td>{{user.cpf}}</td>
                    <td>{{user.password }}</td>
                    <td>{{user.idQuestion}}</td>
                    <td>{{user.resposta}}</td>
                    <td>
                        <a href="#"><img src="iconEdit.png" ng-click="editUser($index)"></a>
                        <a href="#"><img src="iconDelete.png" ng-click="deleteUser(user)"></a>
                    </td>
                </tr>        
          </table>
                        <div><b></b></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
 

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>      
<script src="controller.js"></script>
        
</body>
</html>
