var app = angular.module('CadastroModulo', []);
    app.controller('CadastroController', ['$scope','$http','$timeout',function($scope, $http,$timeout) {       
        
        $scope.user = {};
        $scope.users = [];
        $scope.questions = [];
         $scope.msg = "";
        //$scope.login = [];
               
        $scope.listaItens = function(){           
            $http.get("listarItem.php").then(function(response) {                  
                $scope.questions = response.data.question;
            }); 
        };
        $scope.listaUsers = function(){           
            $http.get("listarUser.php").then(function(response) {                  
                $scope.users = response.data.UserCadastro;
                console.log(JSON.stringify(response)); 
            }); 
        };   
             
        $scope.adicionaItem = function () {
            $scope.user.idQuestion = $scope.questionSelecionada.id;
            $http.post("cadastro.php", $scope.user).then(function(response){
                $scope.user = {};
                $scope.listaItens(); 
                console.log(JSON.stringify(response));  
            });
        };
                
        $scope.logar = function(){
             
            $scope.imgLoading = "";
            
            $http.post("login.php", $scope.login
             ).then(function(response) {	
                                          
             if(response.data == true){
                 
                $scope.msgLogado = "Usuário logado com sucesso";
                $scope.imgLoading = 'ajax-loader.gif';
                $timeout(function() {                     
                    window.location.href = 'home.php';  
                }, 5000);                 
             }else{
                 $scope.msgLogado = "Usuário não encontrado";
             }            
            }); 
        }; 
            $scope.editUser = function(index){
                $scope.user = $scope.users[index];                                          
                $scope.edit = true;
            }; 
                $scope.applyChanges = function(){        
                 $http.post(
                            "editarUser.php", $scope.user
                           ).then(function(response) {	
                            $scope.msg = response.data;
                            $scope.user = {};
                            $scope.listaItens();
                            $scope.listaUsers();
                            $scope.edit = false; 

                           });             
                    };

            $scope.deleteUser = function(obj){
                var isConfirmed = confirm("Você confirma a exclusão do produto : " +obj.firstname+ " ? ");
                if(isConfirmed){
                $http.post(
                "deleteUser.php", obj
                ).then(function(response) {	
                $scope.msg = response.data;
                $scope.user = {};
                $scope.listaUsers(); 
                });
                };
            };
    }]);
            