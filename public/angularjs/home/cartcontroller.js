var app = angular.module('myApp', []);
app.controller('cartcontroller', function($scope, $http , $window) {
    $scope.listSP = [];
    $scope.total = 0;
    /*=================== Thao tác dữ liệu ==================================== */
    $scope.LoadCart = function () {
        $scope.listSP = JSON.parse(localStorage.getItem('cart'));
        $scope.listSP.forEach(function (item, i) {
            $scope.total += item.soluong
        });
    };
    $scope.LoadCart();
    $scope.CreateHoaDon = function () {
        let bill = {};
        bill.bill_fullname = $('#bill_fullname').val();
        bill.bill_address = $('#bill_address').val();
        bill.bill_phonenumber = $('#bill_phonenumber').val();
        bill.users_id = $('#users_id').val();
        bill.bill_payment = $('#bill_payment').val();
        bill.bill_doanhthu = $('#total1').val();
        bill.billdetail = [];
        $scope.listSP.forEach(function (item, i) {
            if(item.quantity>=item.product_pricesale)
            {
                tongtiensanpham = (item.product_price - item.size_productsale- item.product_quantilysale)*item.quantity;
            }
            else
            {
                tongtiensanpham = (item.product_price - item.size_productsale)*item.quantity;
            }
            bill.billdetail.push({quantity: item.quantity,id : item.id,product_name : item.product_name,dongia : item.product_price,tongtiensanpham});
        });
        $scope.LoadCart();
        localStorage.clear();
        $http({
            method: "post",
            url: 'http://localhost:8000/api/bill',
            datatype: "json",
            data: bill
        }).then(function (response) {
            console.log(response.data)
            alert("Bạn Đã Thanh Toán Thành Công");
            var url = "http://localhost:8000/glammy/thanhtoanthanhcong/";
            $window.location.href = url;
        });
    };
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
app.filter('total1', function () {
    return function (input, property) {
        var i =  input.length;
        var total1 = 0;
        while (i--)
            total1 += input[i][property];
        return total1;
    }
});
app.filter('total2', function () {
    return function (input, property) {
        var i =  input.length;
        var total2 = 0;
        while (i--)
            total2 += input[i][property];
        return total2;
    }
});
app.filter('total3', function () {
    return function (input, property) {
        var i =  input.length;
        var total3 = 0;
        while (i--)
            total3 += input[i][property];
        return total1;
    }
});
