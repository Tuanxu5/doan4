var app = angular.module('myApp', ['ui.bootstrap']);
app.controller('slidecontroller', function($scope,$http) {
    $scope.currentPage = 1;
    $scope.itemsPerPage = 10;
    $scope.sortBy = function (column) {
        $scope.sortColumn = column;
        $scope.reverse = !$scope.reverse;
    };
    $http({
        method: "GET",
        url: "http://localhost:8000/api/slide"
    }).then(function(response) {
        console.log(response.data);
        $scope.slides = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Thêm Slide";
            if ($scope.slide){
                $scope.slide.slide_name = "";
                $scope.slide.slide_image = "";
                $scope.slide.slide_imagename = "";
                $scope.slide.slide_sale = "";
                $scope.slide.slide_name = "";
                $scope.slide.slide_descoration = "";
                $scope.slide.slide_token = "";
            }
        } else {
            $scope.modalTitle = "Sửa Slide";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/slide/" + id
            }).then(function(response) {
                console.log(response.data);
                $scope.slide = response.data;
                if ($scope.slide){
                    $scope.slide.slide_name = $scope.slide.slide_name;
                    $scope.slide.slide_image = $scope.slide.slide_image;
                    $scope.slide.slide_imagename = $scope.slide.slide_imagename;
                    $scope.slide.slide_sale = $scope.slide.slide_sale;
                    $scope.slide.slide_name = $scope.slide.slide_name;
                    $scope.slide.slide_descoration = $scope.slide.slide_descoration;
                    $scope.slide.slide_token = $scope.slide.slide_token;
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
                url: "http://localhost:8000/api/slide/" + id
            }).then(function(response) {
                $scope.message = response.data;
                location.reload();
            });
        }
    }
    var formdata = new FormData();
    $scope.getTheFiles = function ($files) {
        angular.forEach($files, function (value, key) {
            formdata.append(key, value);
        });
    };
    $scope.saveData = function() {
        if ($scope.id == 0) { //dang them moi sp
            $http({
                method: "POST",
                url: "http://localhost:8000/api/slide",
                data: $scope.slide,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();
                if (confirm("Attendance updated.")) {
                    window.location.href = "home.html";
                } else {
                    window.location.reload();
                }
            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/slide/" + $scope.id,
                data: $scope.slide,
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

