define(function() {
    var coreModule = angular.module('coreModule');
    coreModule.service('userService', function($http, $q) {
        this.login = function(data){
            var deffered = $q.defer();
            return $http.post('view/' + id).then(function successCallback(response) {
                deffered.resolve(response);
                return deffered.promise;

            }, function errorCallback(response) {
                deffered.reject(response);
                return deffered.promise;
            });
            return $http.post("v1/login", data);
        }
    });
});