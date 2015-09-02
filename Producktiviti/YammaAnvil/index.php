<!DOCTYPE HTML>
<html>
    <head>
        <script type="text/javascript" data-app-id="5uFoskn8RLRB6wM5cn1LzA" src="https://c64.assets-yammer.com/assets/platform_js_sdk.js"></script>
    </head>
    <body>
        <span id="yammer-login"></span>
<script>
  yam.connect.loginButton('#yammer-login', function (resp) {
    if (resp.authResponse) {
      document.getElementById('yammer-login').innerHTML = 'Welcome to Yammer!';
         yam.platform.request({
        url: "users.json",     //this is one of many REST endpoints that are available
        method: "GET",
        data: {    //use the data object literal to specify parameters, as documented in the REST API section of this developer site
          "letter": "a",
          "page": "2",
        },
        success: function (user) { //print message response information to the console
          alert("The request was successful.");
          console.dir(user);
        },
        error: function (user) {
          alert("There was an error with the request.");
        }
      });
    }
  });
</script>
    </body>
</html>