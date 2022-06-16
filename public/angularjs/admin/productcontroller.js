var app = angular.module('myApp', ['ui.bootstrap']);
app.controller('productcontroller', function($scope,$http) {
    $scope.currentPage = 1;
    $scope.itemsPerPage = 20 ;
    $scope.sortBy = function (column) {
        $scope.sortColumn = column;
        $scope.reverse = !$scope.reverse;
    };
    $http({
        method: "GET",
        url: "http://localhost:8000/api/product"
    }).then(function(response) {
        console.log(response.data);
        $scope.products = response.data;
    });

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
            $scope.modalTitle = "Thêm Sản Phẩm";
            $scope.addtitle ="fas fa-plus-square";
            if ($scope.product){
                $scope.product.product_name="";
                $scope.product.brand_id="";
                $scope.product.product_price="";
                $scope.product.product_quantily="";
                $scope.product.product_promotion="";
                $scope.product.product_image1="";
                $scope.product.product_image2="";
                $scope.product.product_image3="";
                $scope.product.product_imagename1="";
                $scope.product.product_imagename2="";
                $scope.product.product_imagename3="";
                $scope.product.product_description = "";
                $scope.product.product_quantilysale = "";
                $scope.product.product_pricesale = "";
            }
        } else {
            $scope.modalTitle = "Sửa Sản Phẩm";
            $scope.addtitle ="fas fa-edit";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/product/" + id
            }).then(function(response) {
                console.log(response.data);
                $scope.product = response.data;
                $scope.brand = response.data;
                if ($scope.product && $scope.brand){
                    $scope.product.product_image = $scope.product.product_image;
                    $scope.product.brand_id = $scope.product.brand_id;
                    $scope.product.product_name = $scope.product.product_name;
                    $scope.product.product_price = $scope.product.product_price;
                    $scope.product.product_quantily = $scope.product.product_quantily;
                    $scope.product.product_promotion = $scope.product.product_promotion;
                    $scope.product.product_description = $scope.product.product_description;
                    $scope.product.created_at = $scope.product.created_at;
                    $scope.product.updated_at = $scope.product.updated_at;
                    $scope.product.tags.tags_name = $scope.product.tags.tags_name;
                    $scope.brand.brand_id = $scope.brand.brand_id;
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
                url: "http://localhost:8000/api/product/" + id
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
                url: "http://localhost:8000/api/product",
                data: $scope.product,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();
            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/product/" + $scope.id,
                data: $scope.product,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});
app.directive('ckEditor', function () {
    return {
        require: '?ngModel',
        link: function (scope, elm, attr, ngModel) {
            var ck = CKEDITOR.replace(elm[0]);

            if (!ngModel) return;

            ck.on('pasteState', function () {
                scope.$apply(function () {
                    ngModel.$setViewValue(ck.getData());
                });
            });

            ngModel.$render = function (value) {
                ck.setData(ngModel.$viewValue);
            };
        }
    };
});

