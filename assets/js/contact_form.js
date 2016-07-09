/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var contact_form_application = angular.module('contactFormApplication', ['ngMaterial', 'ngMessages', 'ngAnimate', 'angularSpinner']);

contact_form_application.controller('contactFormController', ["$scope", "$http", "$window", "$timeout", "$mdDialog", function ($scope, $http, $window, $timeout, $mdDialog) {

        angular.element(document).ready(function () {
            $scope.show_spinner = false;
        });

        $scope.sendMessage = function () {
            if ($scope.contact_form.$valid) {
                var url = "index.php?option=com_ajax&module=innovationlanka_contact_form&method=sendMessage&format=json";
                //send_data = JSON.stringify({"query": $scope.searchText});
//                request = {
//                    'option': 'com_ajax',
//                    'module': 'innovationlanka_contact_form',
//                    'data': '4',
//                    'format': 'json'
//                };
                $http({
                    method: "POST",
                    url: url,
                    //dataType: "JSON",
                    data: 1,
                    beforeSend: function (xhr) {
                        $scope.show_spinner = true;
                        xhr.setRequestHeader('Content-Type', 'application/json;charset=utf-8');
                        xhr.setRequestHeader('Accept', 'application/json');
                    }
                }).then(function Success(response) {
                    $scope.show_spinner = false;
                    $scope.messages = [];
                    $scope.errors = [];
                    if (response.data.state) {
                        //$scope.countries = response.data.results;
                    } else {
//                        $scope.errors.push({
//                            index: $scope.errors.length,
//                            error_description: "Something Went Wrong With Loading Existing Data. Please Try Again Later"
//                        });
                    }

                }, function Error(response) {
                    console.log(response);
                });
            } else {
                alert("You have Errors in Your Form");
            }
        };

    }]);