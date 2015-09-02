<?php
   namespace ArcherSys\Auth\OAuth2;
   require_once $_SERVER["DOCUMENT_ROOT"]."/vendor/autoload.php";
   use Auth0\SDK\Auth0;
    class ArcherAuth2{
       
     function __construct($redirect_uri,$clientid,$clientsecret){
      $this->auth0 = new Auth0(array(
    'domain'        => 'archersysos.auth0.com',
    'client_id'     => $clientid,
    'client_secret' => $clientsecret,
    'redirect_uri'  => $redirect_uri
));
 $this->client_id = $clientid;
 $this->redirect_uri = $redirect_uri;
    
}
     function go(callable $onAuthenticated){
      $userInfo = $this->auth0->getUser();
      if (!$userInfo) {
       ArcherAuth2::authenticate($this->client_id,$this->redirect_uri);
     } else {
       $onAuthenticated();
     }
}
  static function authenticate($clientid,$redirect_uri){
  ?>
<script src="https://cdn.auth0.com/js/lock-7.1.min.js"></script>
<script type="text/javascript">
  
  var lock = new Auth0Lock('<?php echo $clientid; ?>', 'archersysos.auth0.com');
  
  
  function signin() {
    lock.show({
        callbackURL: '<?php echo $redirect_uri; ?>',
        responseType: 'code',
       authParams: {
        scope: 'openid profile'
      }
    });
  }
</script>
<button onclick="signin()">Login</button>
<?php
}
}
?>