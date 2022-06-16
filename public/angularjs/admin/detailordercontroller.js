var app = angular.module('myApp', ['ui.bootstrap']);
app.controller('detailordercontroller', function($scope, $http) {
    $scope.currentPage = 1;
    $scope.itemsPerPage = 9;
    $scope.ordered = function() {
        var url = window.location.pathname;
        $scope.bill_orderid = url.substring(url.lastIndexOf('/') + 1);
        $http({
            method: "GET",
            url: "http://localhost:8000/api/orderdetail/" + $scope.bill_orderid
        }).then(function(response) {
            console.log(response.data);
            $scope.products = response.data;
        });
    }
});
app.filter('total', function () {
    return function (input, property) {
        var i =  input.length;
        var total = 0;
        while (i--)
            total += input[i][property];
        return total;
    }
});
