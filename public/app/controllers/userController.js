define(function() {
    var coreModule = angular.module('coreModule');
    coreModule.controller('userController', ['$scope', function($scope) {
        $scope.login = function(){
            var form_data= new FormData();
            console.log(form_data);
        };
    }]);
});