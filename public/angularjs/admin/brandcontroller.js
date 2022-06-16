var app = angular.module('myApp', ['ui.bootstrap']);
app.controller('brandcontroller', function($scope,$http) {
    $scope.currentPage = 1;
    $scope.itemsPerPage = 10000;
    $scope.sortBy = function (column) {
        $scope.sortColumn = column;
        $scope.reverse = !$scope.reverse;
    };
    $http({
        method: "GET",
        url: "http://localhost:8000/api/brand"
    }).then(function(response) {
        console.log(response.data);
        $scope.brands = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Thêm Danh Mục";
            if ($scope.brand){
                $scope.brand.brand_name="";
                $scope.brand.brand_parentid = "";
                $scope.brand.brand_slug = "";
            }
        } else {
            $scope.modalTitle = "Sửa Sản Phẩm";
            $scope.addtitle ="fas fa-edit";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/brand/" + id
            }).then(function(response) {
                console.log(response.data);
                $scope.brand = response.data;
                if ($scope.brand){
                    $scope.brand.brand_name = $scope.brand.brand_name;
                    $scope.brand.brand_parentid = $scope.brand.brand_parentid;
                    $scope.brand.brand_slug = $scope.brand.brand_slug;
                }
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/brand/" + id
            }).then(function(response) {
                $scope.message = response.data;
                location.reload();
            });
        }
    }
    $scope.saveData = function() {
        if ($scope.id == 0) { //dang them moi sp
            $http({
                method: "POST",
                url: "http://localhost:8000/api/brand",
                data: $scope.brand,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();
            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/brand/" + $scope.id,
                data: $scope.brand,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});
