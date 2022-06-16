var app = angular.module('myApp', []);
app.controller('signout', function($scope, $http,$window) {
    $scope.dangki = function () {
        let users = {};
        users.users_username = $('#users_username').val();
        users.users_username = $('#users_username').val();
        users.users_numberphone = $('#users_numberphone').val();
        users.user_email = $('#user_email').val();
        users.users_fullname = $('#users_fullname').val();
        users.users_adress = $('#users_adress').val();
        $http({
            method: "post",
            url: 'http://localhost:8000/api/users',
            datatype: "json",
            data: users
        }).then(function (response) {
            console.log(response.data)
            alert("Bạn Đã Đăng Kí Thành Công");
            var url = "http://localhost:8000/glammy/login/";
            $window.location.href = url;
        });
    };
});
