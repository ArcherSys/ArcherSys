require_once "dropbox/Dropbox/autoload.php";
namespace ArcherSys
use \Dropbox as dbx;
class ArcherBoxInstance {
 function __construct($json_file,$appname){
   $this->json_file = $json_file;
   $this->appname = $appname;
   $
 }
  function initApp(){
      $this->appInfo = dbx\AppInfo::loadFromJsonFile($this->json_file);
      $this->webAuth = new dbx\WebAuthNoRedirect($this->appInfo, "ArcherSys/1.0");
  }
}