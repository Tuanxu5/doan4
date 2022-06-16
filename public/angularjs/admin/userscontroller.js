var app = angular.module('myApp', ['ui.bootstrap']);
app.controller('userscontroller', function($scope,$http) {
    $scope.currentPage = 1;
    $scope.itemsPerPage = 10;
    $scope.sortBy = function (column) {
        $scope.sortColumn = column;
        $scope.reverse = !$scope.reverse;
    };
    $http({
        method: "GET",
        url: "http://localhost:8000/api/users"
    }).then(function(response) {
        console.log(response.data);
        $scope.userss = response.data;
    });
    $http({
        method: "GET",
        url: "http://localhost:8000/api/position"
    }).then(function(response) {
        console.log(response.data);
        $scope.position = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Thêm Khách Hàng";
            if ($scope.users){
                $scope.users.users_usersid = ""	;
                $scope.users.users_username = "";
                $scope.users.users_password = "";
                $scope.users.users_numberphone  = "";
                $scope.users.user_email  = "";
                $scope.users.users_fullname  = "";
                $scope.users.users_status  = "";
                $scope.users.users_adress  = "";
                $scope.users.users_image  = "";
                $scope.users.position_id   = "";
            }
        } else {
            $scope.modalTitle = "Cấp Tài Khoản";
            $scope.addtitle ="fas fa-edit";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/users/" + id
            }).then(function(response) {
                console.log(response.data);
                $scope.users = response.data;
                if ($scope.users){
                    $scope.users.users_usersid = $scope.users.users_usersid	;
                    $scope.users.users_username = $scope.users.users_username;
                    $scope.users.users_password = $scope.users.users_password;
                    $scope.users.users_numberphone  = $scope.users.users_numberphone;
                    $scope.users.user_email  = $scope.users.user_email;
                    $scope.users.users_fullname  = $scope.users.users_fullname;
                    $scope.users.users_status  = $scope.users.users_status;
                    $scope.users.users_adress  =$scope.users.users_adress;
                    $scope.users.users_image  = $scope.users.users_image;
                    $scope.users.position_id   =  $scope.users.position_id ;
                }
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Bạn Có Muốn Xóa Tài kh");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/users/" + id
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
                url: "http://localhost:8000/api/users",
                data: $scope.users,
                "content-Type": "application/json"
            }).then(function(response) {

                $scope.message = response.data;
                console.log(response.data);
                location.reload();
            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/users/" + $scope.id,
                data: $scope.users,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();
            });
        }
    }
});
