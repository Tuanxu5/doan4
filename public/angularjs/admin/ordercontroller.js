var app = angular.module('myApp', ['ui.bootstrap']);
app.controller('ordercontroller', function($scope,$http) {
    $scope.currentPage = 1;
    $scope.itemsPerPage = 20 ;
    $scope.sortBy = function (column) {
        $scope.sortColumn = column;
        $scope.reverse = !$scope.reverse;
    };
    $http({
        method: "GET",
        url: "http://localhost:8000/api/order"
    }).then(function(response) {
        console.log(response.data);
        $scope.orders = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Thêm Danh Mục";
            if ($scope.brand){
                $scope.brand.brand_name="";
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
        var hoi = confirm("Bạn Có Muốn Xóa Hóa Đơn Này Không");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/order/" + id
            }).then(function(response) {
                $scope.message = response.data;
                location.reload();
            });
        }
    }
    $scope.saveData = function($id) {
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
    $scope.savedata1 = function(id) {
        var hoi = confirm("Xác Nhận Và Đóng Gói Đơn Hàng");
        if (hoi) {
            $scope.id = id;
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/choxacnhan/" + $scope.id,
                data: $scope.bill,
                "content-Type": "application/json"
            }).then(function (response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();
            });
        }
    }
});
