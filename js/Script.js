

    // create the module and name it postApp
    var  postApp= angular.module('postApp', ['ngRoute']);

    // create the controller and inject Angular's $scope
    postApp.controller('postController', ['$scope',function($scope) {

        // create a message to display in our view
        $scope.message = '<h1>Everyone come and see how good I look!</h1>';
    }]);

