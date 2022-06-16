var app = angular.module('myApp', []);
app.controller('homecontroller', function($scope, $http) {
    $http({
        method: "GET",
        url: "http://localhost:8000/api/home"
    }).then(function(response) {
        console.log(response.data);
        $scope.products = response.data;
    });
    $http({
        method: "GET",
        url: "http://localhost:8000/api/cata"
    }).then(function(response) {
        console.log(response.data);
        $scope.brands = response.data;
    });
    $http({
        method: "GET",
        url: "http://localhost:8000/api/slidehome"
    }).then(function(response) {
        console.log(response.data);
        $scope.slides = response.data;
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
                $scope.product.product_image="";
                $scope.product.product_description = $scope.product.product_description;
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
                    $scope.brand.brand_id = $scope.brand.brand_id;
                    $scope.product.brand.brand_name = $scope.product.brand.brand_name;
                }
            });
        }
        $('#modelId').modal('show');
    }
    $scope.showmodal = function(id) {
        $scope.id = id;
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
                    $scope.brand.brand_id = $scope.brand.brand_id;
                    $scope.product.brand.brand_name = $scope.product.brand.brand_name;
                }
            });
        $('#modelId').modal('show');
    }
    $scope.addToCart = function (sp) {
        if ($scope.product && $scope.brand){
            $scope.product.product_name = $scope.product.product_name;
        }
        var list;
        if (localStorage.getItem('cart') == null) {
            list = [sanphamchitiet];
        } else {
            list = JSON.parse(localStorage.getItem('cart')) || [];
            let ok = true;
            for (let x of list) {
                if (x.masanpham == sanphamchitiet.masanpham) {
                    x.product_quantily += 1;
                    ok = false;
                    break;
                }
            }
            if (ok) {
                list.push(sanphamchitiet);
            }
        }
        localStorage.setItem('cart', JSON.stringify(list));
        alert("Đã thêm giở hàng thành công");
    }
});
