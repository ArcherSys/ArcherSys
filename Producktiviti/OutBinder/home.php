<?php
    
     require('oauth.php');
 
  require_once $_SERVER["DOCUMENT_ROOT"]."\includes\View.php";
  use ArcherSys\Viewer\Contrib\View;
  $outlookapp = new View("Outlook for ArcherSys",function(){
  },function(){
     $loggedIn = false;
      if ($loggedIn) {
    ?>
      <!-- User not logged in, prompt for login -->
      <p>Please<p>Please <a href="<?php echo oAuthService::getLoginUrl('http://localhost/php-tutorial/authorize.php')?>">sign in</a> with your Office 365 account.</p>with your Office 365 account.</p>
    <?php
      }
      else {
    ?>
      <!-- User is logged in, do something here -->
      <p>Access token: <?php echo $_SESSION['access_token'] ?></p>
    <?php
      }
  });
  session_destroy();
  ?>
<!--
 MIT License:
 
 Permission is hereby granted, free of charge, to any person obtaining
 a copy of this software and associated documentation files (the
 ""Software""), to deal in the Software without restriction, including
 without limitation the rights to use, copy, modify, merge, publish,
 distribute, sublicense, and/or sell copies of the Software, and to
 permit persons to whom the Software is furnished to do so, subject to
 the following conditions:
 
 The above copyright notice and this permission notice shall be
 included in all copies or substantial portions of the Software.
 
 THE SOFTWARE IS PROVIDED ""AS IS"", WITHOUT WARRANTY OF ANY KIND,
 EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->