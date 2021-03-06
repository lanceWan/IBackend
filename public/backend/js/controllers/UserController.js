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
});