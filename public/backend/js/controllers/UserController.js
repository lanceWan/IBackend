angular.module('MetronicApp').controller('UserController', function($rootScope, $scope, $http, $timeout, $uibModal, $log) {
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
    $scope.items = ['item1', 'item2', 'item3'];
    $scope.open = function (size) {
      var modalInstance = $uibModal.open({
        animation: $scope.animationsEnabled,
        templateUrl: '/admin/user/create?r='+Math.random(),
        controller: 'ModalInstanceCtrl',
        size: size,
        resolve: {
          items: function () {
            return $scope.items;
          }
        }
      });

      modalInstance.result.then(function (selectedItem) {
        $scope.selected = selectedItem;
      }, function () {
        $log.info('Modal dismissed at: ' + new Date());
      });
    };
});

angular.module('MetronicApp').controller('ModalInstanceCtrl', function ($scope, $modalInstance, items) {

  $("[name='my-checkbox']").bootstrapSwitch();
  $scope.name = '';

  $scope.items = items;
  $scope.selected = {
    item: $scope.items[0]
  };

  $scope.ok = function () {
    $modalInstance.close($scope.selected.item);
  };

  $scope.cancel = function () {
    $modalInstance.dismiss('cancel');
  };
});