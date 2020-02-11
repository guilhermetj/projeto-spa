
<html ng-app="CadastroModulo">
    <head>
        <meta charset="UTF-8">
        <title>Aplicação Sigle-Page</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <form oninput="up2.setCustomValidity(up2.value != up.value ? 'Passwords do not match.' : '')"> 
            <div class="container register" ng-controller="CadastroController" ng-init="listaItens()">
            <div class="row">
                <div class="col-md-3 register-left">
                    <h3>Single Page GUILHERME</h3>
                    <br/>
                </div>
                <div class="col-md-9 register-right">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Cadastro</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Logar no Sistema</h3>
                            <div class="row register-form">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Digite seu Email" value="" ng-model="login.email"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Digite sua Senha" value="" ng-model="login.password"/>
                                    </div>
                                    {{msgLogado}}
                                    <button type="button" class="btnRegister" ng-click="logar()">Logar</button>                           
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3  class="register-heading">Novo Usuário</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nome" value="" ng-model="user.fistname" required="name=un"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Sobrenome" value="" ng-model="user.lastname" required="name=un"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="E-mail" value="" ng-model="user.email" required="name=un" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" maxlength="11" minlength="11" class="form-control" placeholder="CPF" value="" ng-model="user.cpf" required="name=un"/>
                                    </div>


                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Senha" value="" ng-model="user.password" required="name=up"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirme sua senha" value="" ng-model="user.password2" required="name=up2"/>
                                    </div>
                                    <div class="form-group">
                                    <select class="form-control" ng-model="questionSelecionada"
                                        ng-options="x.pergunta for x in questions" required="name=un" >                                        
                                        <option value="">Pergunta de segurança</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Digite a resposta da sua pergunta" value="" ng-model="user.resposta" required="name=un"/>
                                    </div>
                                    <input type="submit" class="btnRegister" ng-click="adicionaItem()" value="Cadastrar"/>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
                <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
                <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                <script src="controller.js"></script>
        
    </body>
</html>
