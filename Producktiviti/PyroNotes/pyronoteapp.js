var app = angular.module("pyronote", []);
app.controller("pyronotectrl", function($scope) {
    $scope.message = "";
    $scope.left  = function() {return 100 - $scope.message.length;};
    $scope.clear = function() {$scope.message = "";};
    $scope.save  = function() {return new Notification("Update",{icon: "/core/media/img/notidar.ico", body:"Note Saved"});};
});