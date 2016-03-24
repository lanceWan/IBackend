angular.module('MetronicApp').controller('UserController', function($rootScope, $scope, $timeout, $uibModal, $log) {
    $scope.$on('$viewContentLoaded', function() {   
        // initialize core components
        App.initAjax();
        TableDatatablesAjax.init();
    });


    // set sidebar closed and body solid layout mode
    $rootScope.settings.layout.pageContentWhite = true;
    $rootScope.settings.layout.pageBodySolid = false;
    $rootScope.settings.layout.pageSidebarClosed = false;


    /* modal 添加*/
    $scope.animationsEnabled = true;
    $scope.prefix = '/admin/user/';
    $scope.open = function (size) {
      var modalInstance = $uibModal.open({
        animation: $scope.animationsEnabled,
        templateUrl: '/admin/user/create?r='+Math.random(),
        controller: 'ModalInstanceCtrl',
        size: 'lg',
        resolve: {
          prefix : function(){
            return $scope.prefix
          }
        }
      });

      modalInstance.result.then(function (selectedItem) {
        $scope.data = selectedItem;
      }, function () {
        $log.info('Modal dismissed at: ' + new Date());
      });
    };
});

angular.module('MetronicApp').controller('ModalInstanceCtrl', function ($scope, $modalInstance, $log, $http, prefix) {
  $scope.name = '';
  $scope.email = '';
  $scope.password = '';
  $scope.status = 'yep';
  $scope.name_error = '';
  $scope.email_error = '';
  $scope.password_error = '';

  $scope.ok = function () {
    $scope.data = {
      name : $scope.name,
      email : $scope.email,
      password : $scope.password,
      status : $scope.status
    };

    // $http('POST', $scope.prefix + 'store', $scope.data, function(status, response){
    //   $log.info(response);
    // }, function(status, response){
    //   $log.info(response);
    // });

    $http({
      method: 'POST',
      url: prefix,
      data : $scope.data
    }).then(function successCallback(response) {
      $log.info(response);
      // this callback will be called asynchronously
      // when the response is available
    }, function errorCallback(response) {
      if(response.status == 422){
        $scope.name_error = '';
        $scope.email_error = '';
        $scope.password_error = '';

        if(response.data.name){
          $scope.name_error = response.data.name[0];
        }
        if(response.data.email){
          $scope.email_error = response.data.email[0];
        }
        if(response.data.password){
          $scope.password_error = response.data.password[0];
        }
      }else{
        $modalInstance.close($scope.data);
      }
    });

  };

  $scope.cancel = function () {
    $modalInstance.dismiss('cancel');
  };
});