<html ng-app="archergmail">
    <head>
              <script src="/core/js/angularjs/angular.min.js"></script>
        <script src="/core/js/jquery.js"></script>

      <script>
      var app = angular.module("archergmail",[]);
      app.config(function ($routeProvider) {
   $routeProvider
      .when('/inbox', {
         templateUrl: 'views/inbox.html',
         controller: 'InboxCtrl',
         controllerAs: 'inbox'
      })
      .when('/inbox/email/:id', {
         templateUrl: 'views/email.html',
         controller: 'EmailCtrl',
         controllerAs: 'email'
      })
      .otherwise({
         redirectTo: '/inbox'
      });
});
      </script>
    </head>
    <body>        <div ng-view></div>

        <div ng-controller="InboxCtrl"></div>
        
    </body>
</html>