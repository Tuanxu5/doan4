var app = angular.module('myApp', []);
app.controller('detailproductcontroller', function($scope, $http) {
    $scope.detailproduct = {};
    $scope.detailpro = function() {
        var url = window.location.pathname;
        $scope.id = url.substring(url.lastIndexOf('/') + 1);
        $http({
            method: "GET",
            url: "http://localhost:8000/api/detailproduct/"+$scope.id
        }).then(function(response) {
            console.log(response.data);
            $scope.detailproduct = response.data;
        });
    }
    $scope.addToCart = function (sp) {
        let detailproduct = {};
        detailproduct.id = sp.id;
        detailproduct.product_name= sp.product_name;
        detailproduct.product_image1 = sp.product_image1;
        detailproduct.product_price = sp.product_price;
        detailproduct.size_name = $("#size_name").val();
        detailproduct.quantity = parseInt($("#quantity").val());
        detailproduct.size_productsale = $("#size_productsale").val();
        detailproduct.product_pricesale = $("#product_pricesale").val();
        detailproduct.product_quantilysale = $("#product_quantilysale").val();
         var list;
        if (localStorage.getItem('cart') == null) {
            list = [detailproduct];
        } else {
            list = JSON.parse(localStorage.getItem('cart')) || [];
            let ok = true;
            for (let x of list) {
                if (x.id == detailproduct.id && x.size_name == detailproduct.size_name) {
                    (x.quantity) += parseInt(detailproduct.quantity);
                    ok = false;
                    break;
                }
            }
            if (ok) {
                list.push(detailproduct);
            }
        }
        localStorage.setItem('cart', JSON.stringify(list));
        alert("Đã thêm giở hàng thành công");
    }

});
