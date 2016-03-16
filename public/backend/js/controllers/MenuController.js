angular.module('MetronicApp').controller('MenuController', function($rootScope, $scope, $http, $timeout) {
	$scope.prefix = "/admin/menu/";
  $scope.$on('$viewContentLoaded', function() {   
      // initialize core components
      App.initAjax();
      // UINestable.init();

      /*上传菜单改变*/
      $("#nestable_list_3").nestable({
      	group: 1
      }).on("change", function(nestable){
      	var e = nestable.length ? nestable : $(nestable.target);
      	var jsonValue = window.JSON.stringify(e.nestable("serialize"));

      	$http({
          method: 'POST',
          url: $scope.prefix + 'ngupdate',
          data: { 
            menu : jsonValue 
          }
        }).then(function successCallback(response) {
            // this callback will be called asynchronously
            // when the response is available
            console.log('success', response);
          }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            console.log('error', response);
          });

      });
  });

  // set sidebar closed and body solid layout mode
  $rootScope.settings.layout.pageContentWhite = true;
  $rootScope.settings.layout.pageBodySolid = false;
  $rootScope.settings.layout.pageSidebarClosed = false;
});