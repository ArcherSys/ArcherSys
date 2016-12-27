
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <title>Read a PM</title>
    </head>
    <body>
        <div class="header">
            </div>
<?php
       require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";

use CarnosOS\Config\ConfigData;
 // Connects to your Database
$config = ConfigData::getConfig();
 mysql_connect($config["dbhost"], $config["dbuser"], $config["dbpass"]) or die(mysql_error());

 mysql_select_db("acoserver_acoserver") or die(mysql_error());

//We check if the user is logged
if(isset($_COOKIE["ID_ARCHERVMCASHEW"]))
{
//We check if the ID of the discussion is defined
if(isset($_GET['id']))
{
$id = intval($_GET['id']);
//We get the title and the narators of the discussion
$req1 = mysql_query('select title, `from`, `to` from pm where id="'.$id.'"') or die(mysql_error());
$dn1 = mysql_fetch_array($req1);
//We check if the discussion exists
if(mysql_num_rows($req1)==1)
{
//We check if the user have the right to read this discussion
if($dn1['from']==$_COOKIE["ID_ARCHERVMCASHEW"] or $dn1['to']=$_COOKIE["ID_ARCHERVMCASHEW"])
{
//The discussion will be placed in read messages
if($dn1['from']==$_COOKIE["ID_ARCHERVMCASHEW"])
{
        mysql_query('update pm set user1read="yes" where id="'.$id.'" ');
        $user_partic = 2;
}
else
{
        mysql_query('update pm set user2read="yes" where id="'.$id.'"');
        $user_partic = 1;
}
//We get the list of the messages
$req2 = mysql_query('select pm.timestamp, pm.message,  users.username, users.ProfilePicture from pm, users where pm.id="'.$id.'" and users.username=pm.from');
//We check if the form has been sent
if(isset($_POST['message']) and $_POST['message']!='')
{
        $message = $_POST['message'];
        //We remove slashes depending on the configuration
        if(get_magic_quotes_gpc())
        {
                $message = stripslashes($message);
        }
        //We protect the variables
        $message = mysql_real_escape_string(nl2br(htmlentities($message, ENT_QUOTES, 'UTF-8')));
        //We send the message and we change the status of the discussion to unread for the recipient
        if(mysql_query('insert into pm (title, `from`, `to`, message, timestamp, user1read, user2read)values( "Reply", "'.$_COOKIE["ID_ARCHERVMCASHEW"].'", "'.$dn1["from"].'", "'.$message.'", "'.time().'", "no", "no")') and mysql_query('update pm set user'.$user_partic.'read="yes" where id="'.$id.'"'))
        {
?>
<div class="message">Your message has successfully been sent.<br />
<a href="read_pm.php?id=<?php echo $id; ?>">Go to the discussion</a></div>
<?php
        }
        else
        {
?>
<div class="message">An error occurred while sending the message. <?php echo mysql_error(); ?><br />
<a href="read_pm.php?id=<?php echo $id; ?>">Go to the discussion</a></div>
<?php
        }
}
else
{
//We display the messages
?>
<div class="content">
<h1><?php echo $dn1['title']; ?></h1>
<table class="messages_table">
        <tr>
        <th class="author">User</th>
        <th>Message</th>
    </tr>
<?php
while($dn2 = mysql_fetch_array($req2))
{
?>
        <tr>
        <td class="author center"><?php
if($dn2['ProfilePicture']!='')
{
        echo '<img src="'.htmlentities($dn2['ProfilPicture']).'" alt="User Image" style="max-width:100px;max-height:100px;" />';
}
?><br /><a href="#"><?php echo $dn2['username']; ?></a></td>
        <td class="left"><div class="date">Sent: <?php echo date('m/d/Y H:i:s' ,$dn2['timestamp']); ?></div>
        <?php echo $dn2['message']; ?></td>
    </tr>
<?php
}
//We display the reply form
?>
</table><br />
<h2>Reply</h2>
<div class="center">
    <form action="pm.read.php?id=<?php echo $id; ?>" method="post">
        <label for="message" class="center">Message</label><br />
        <textarea cols="40" rows="5" name="message" id="message"></textarea><br />
        <input type="submit" value="Send" />
    </form>
</div>
</div>
<?php
}
}
else
{
        echo '<div class="message">You dont have the rights to access this page.</div>';
}
}
else
{
        echo '<div class="message">This discussion does not exists.</div>';
}
}
else
{
        echo '<div class="message">The discussion ID is not defined.</div>';
}
}
else
{
        echo '<div class="message">You must be logged to access this page.</div>';
}
?>
                <div class="foot"><a href="index.php">Go to my dashboard</a></div>
        </body>
</html>