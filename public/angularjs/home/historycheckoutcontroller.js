var app = angular.module('myApp', []);
app.controller('historycheckoutcontroller', function($scope, $http) {
    $http({
        method: "GET",
        url: "http://localhost:8000/api/historycheckout"
    }).then(function(response) {
        console.log(response.data);
        $scope.historycheckout = response.data;
    });
    $scope.savehuydonhang = function() {
        var hoi = confirm("Bạn có muốn hủy đơn hàng này không");
        if(hoi)
        {
        }
    }
});
