<html>
  <head>
    <script type="text/javascript" src="https://apis.google.com/js/client.js?onload=handleClientLoad"></script>
    <script type="text/javascript">
      var CLIENT_ID = ' 601913270428-2jr0q7qae7qfgdknl1n0s8elvsolukk4.apps.googleusercontent.com';
      var SCOPES = [
          'https://www.googleapis.com/auth/drive.file',
          'https://www.googleapis.com/auth/userinfo.email',
          'https://www.googleapis.com/auth/userinfo.profile',
          // Add other scopes needed by your application.
        ];

      /**
       * Called when the client library is loaded.
       */
      function handleClientLoad() {
        checkAuth();
      }

      /**
       * Check if the current user has authorized the application.
       */
      function checkAuth() {
        gapi.auth.authorize(
            {'client_id': CLIENT_ID, 'scope': SCOPES.join(' '), 'immediate': true},
            handleAuthResult);
      }

      /**
       * Called when authorization server replies.
       *
       * @param {Object} authResult Authorization result.
       */
      function handleAuthResult(authResult) {
        if (authResult) {
          // Access token has been successfully retrieved, requests can be sent to the API
        } else {
          // No access token could be retrieved, force the authorization flow.
          gapi.auth.authorize(
              {'client_id': CLIENT_ID, 'scope': SCOPES, 'immediate': true},
              handleAuthResult);
        }
      }
    </script>
  </head>
  <body>
    <!-- YOUR CONTENT -->
  </body>
</html>