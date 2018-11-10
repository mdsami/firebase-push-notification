<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8" />
  <title>Firebase Notification | PHP-MysqlBackend</title>
  <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="assets/animate.css/animate.css" type="text/css" />
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/simple-line-icons/css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="assets/jquery/bootstrap/dist/css/bootstrap.css" type="text/css" />

  <link rel="stylesheet" href="assets/css/font.css" type="text/css" />
  <link rel="stylesheet" href="assets/css/app.css" type="text/css" />

</head>
<body>
<div class="app app-header-fixed ">
  

    <div class="container w-xxl w-auto-xs" ng-controller="SignupFormController" ng-init="app.settings.container = false;">
      <a href class="navbar-brand block m-t">Firebase Notification</a>
      <div class="m-b-lg">
        <div class="wrapper text-center">
          <strong>Login to your Account</strong>
        </div>
        <form name="form" class="form-validation">
          <div class="text-danger wrapper text-center" ng-show="authError">
              
          </div>
          <div class="list-group list-group-sm">

            <div class="list-group-item">
              <input type="email" placeholder="Email" class="form-control no-border" ng-model="user.email" required>
            </div>
            <div class="list-group-item">
               <input type="password" placeholder="Password" class="form-control no-border" ng-model="user.password" required>
            </div>
          </div>
          <div class="checkbox m-b-md m-t-none">
            <label class="i-checks">
              <input type="checkbox" ng-model="agree" required><i></i> Remember Me</a>
            </label>
          </div>
          <button type="submit" class="btn btn-lg btn-primary btn-block" ng-click="signup()" ng-disabled='form.$invalid'>Login</button>
          <div class="line line-dashed"></div>
   
        </form>
      </div>
      <div class="text-center" ng-include="'tpl/blocks/page_footer.html'">
        <p>
  <small class="text-muted">Firebase Notification<br>&copy; 2018</small>
</p>
      </div>
    </div>


</div>

<script src=" jquery/jquery/dist/jquery.js"></script>
<script src=" jquery/bootstrap/dist/js/bootstrap.js"></script>
<script src="js/ui-load.js"></script>
<script src="js/ui-jp.config.js"></script>
<script src="js/ui-jp.js"></script>
<script src="js/ui-nav.js"></script>
<script src="js/ui-toggle.js"></script>
<script src="js/ui-client.js"></script>

</body>
</html>
