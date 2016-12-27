<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
  require_once  $_SERVER["DOCUMENT_ROOT"]."/includes/DataManager.php";

  use ArcherSys\Data\DataManager;
use CarnosOS\Config\ConfigData;
  
  $config = ConfigData::GetConfig();
 // Connects to your Database
@ini_set("max_execution_time", 300);
   mysql_connect($config["dbhost"], $config["dbuser"], $config["dbpass"]) or DataManager::notify();
   
 mysql_select_db( "acoserver_acoserver") or DataManager::notify();

 
//We check if the user is logged
if(isset($_COOKIE['ID_ARCHERVMCASHEW']))
{
$form = true;
$otitle = '';
$orecip = '';
$omessage = '';
//We check if the form has been sent
if(isset($_POST['title'], $_POST['recip'], $_POST['message']))
{
        $otitle = $_POST['title'];
        $orecip = $_POST['recip'];
        $omessage = $_POST['message'];
        //We remove slashes depending on the configuration
        if(get_magic_quotes_gpc())
        {
                $otitle = stripslashes($otitle);
                $orecip = stripslashes($orecip);
                $omessage = stripslashes($omessage);
        }
        //We check if all the fields are filled
        if($_POST['title']!='' and $_POST['recip']!='' and $_POST['message']!='')
        {
                //We protect the variables
                $title = mysql_real_escape_string($otitle);
                $recip = mysql_real_escape_string($orecip);
                $message = mysql_real_escape_string(nl2br(htmlentities($omessage, ENT_QUOTES, 'UTF-8')));
                //We check if the recipient exists
                $dn1 = mysql_fetch_array(mysql_query('select count(ID) as recip, username as recipid, (select count(*) from pm) as npm from users where username="'.$recip.'"'));
                if($dn1['recip']==1)
                {
                        //We check if the recipient is not the actual user

                                $id = $dn1['npm']+1;
                                //We send the message
                                if(mysql_query('INSERT INTO pm  VALUES ("'.$id.'", "'.$title.'","'.$_COOKIE['ID_ARCHERVMCASHEW'].'", "'.$dn1['recipid'].'", "'.$message.'", "'.time().'", "yes", "no")'))
                                {
?>
<div class="message">The message has successfully been sent.<br />
<a href="list_pm.php">List of my Personal messages</a></div>
<?php
                                        $form = false;
                                }
                                else
                                {
                                        //Otherwise, we say that an error occured
                                        $error = 'An error occurred while sending the message: '.mysql_error();
                                }
                        }
                       
                }
                else
                {
                        //Otherwise, we say the recipient does not exists
                        $error = 'The recipient does not exists.';
                }
        }
        else
        {
                //Otherwise, we say a field is empty
                $error = 'A field is empty. Please fill of the fields.';
        }
}
elseif(isset($_GET['recip']))
{
        //We get the username for the recipient if available
        $orecip = $_GET['recip'];
}
if($form)
{
//We display a message if necessary
if(isset($error))
{
        echo '<div class="message">'.$error.'</div>';
}
//We display the form
?>
<?php
}

else
{
        echo '<div class="message">You must be logged to access this page.</div>';
}
?>
           