angular.module('MetronicApp').controller('UserController', function($rootScope, $scope, $http, $timeout, $uibModal, $log) {
    $scope.$on('$viewContentLoaded', function() {   
        // initialize core components
        App.initAjax();
        TableDatatablesAjax.init();

        $scope.animationsEnabled = true;

        
    });

    // set sidebar closed and body solid layout mode
    $rootScope.settings.layout.pageContentWhite = true;
    $rootScope.settings.layout.pageBodySolid = false;
    $rootScope.settings.layout.pageSidebarClosed = false;


    $scope.open = function (size) {
      var modalInstance = $uibModal.open({
        animation: $scope.animationsEnabled,
        templateUrl: '/admin/user/create',
        controller:function($uibModalInstance ,$scope,user){
             // $scope.ok = function () {
             //        $uibModalInstance.dismiss('cancel');
             //     };

            },
        size: size,
        resolve: {
          // items: function () {
          //   // return $scope.items;
          // }
        }
      });

      // modalInstance.result.then(function (selectedItem) {
      //   // $scope.selected = selectedItem;
      // }, function () {
      //   $log.info('Modal dismissed at: ' + new Date());
      // });
    };

    $scope.toggleAnimation = function () {
      $scope.animationsEnabled = !$scope.animationsEnabled;
    };
});


angular.module('MetronicApp').controller('ModalInstanceCtrl', function ($scope, $uibModalInstance, items) {

  // $scope.items = items;
  // $scope.selected = {
  //   item: $scope.items[0]
  // };

  // $scope.ok = function () {
  //   $uibModalInstance.close($scope.selected.item);
  // };

  // $scope.cancel = function () {
  //   $uibModalInstance.dismiss('cancel');
  // };
});