(function(angular) {
'use strict';


	angular.module('ui.directives', []).directive('uiBar',
	function() {
	return {
	restrict: 'EAC',
	//require: '?ngModel',
	// controller: 'RegistrationFormController',
	require: ['^form', '?ngModel'],
	// scope: {},
	link: function($scope, element, attrs, controller) {
	var controllerOptions, options;
	var formName = controller[0].$name;
	var elementName = attrs.custom;

	$scope.$watch(attrs.ngModel, function (v) {

	var myEl = angular.element( document.querySelector( 'span.'+elementName ) );

	if($scope[formName][elementName].$valid===true){
	myEl.removeClass('glyphicon-remove');
	myEl.addClass('glyphicon-ok');
	}else{
	myEl.removeClass('glyphicon-ok');
	myEl.addClass('glyphicon-remove');
	}


});

        }
      };
    }
  );






	//  check password
	/* Directives */
	angular.module('myApp.directives', [])
	.directive('pwCheck', [function () {
	return {
	require: 'ngModel',
	link: function (scope, element, attrs, controller) {
	var firstPassword = '#' + attrs.pwCheck;

	element.val(firstPassword).on('keyup', function () {
	var fbcanvas = document.getElementById(attrs.pwCheck);

	scope.$apply(function () {
	// console.info(elem.val() === $(firstPassword).val());
	controller.$setValidity('pwmatch', element.val() === fbcanvas.value); //$(firstPassword).val()
	});
	});
	}
	}
	}]);
	//  check password








var App = angular.module('myApp',['ui.directives','ngMessages','myApp.directives','ngLoadingSpinner','ngAnimate']);
App.controller('RegistrationFormController', function($scope,$http) {


$scope.reg = function(){



console.log($scope);

$http({
  method: 'post',
  url: 'index.php?option=com_ajax&module=innovationlanka_contact_form&method=sendMessage&format=json&Itemid=112',
  data: $scope.contactform,
}).then(function successCallback(response) {
    console.log(response);
  }, function errorCallback(response) {

  });
}

});



})(window.angular);

angular.element(document).ready(function() {
angular.bootstrap(document, ['myApp']);

});
