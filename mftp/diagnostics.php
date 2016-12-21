<?php

// To run diagnostics, please add your FTP credentials into the variables below.
// To prevent unauthorized access, when you are finished with this diagnostic tool, 
// either remove your login details, or rename/delete this file.

$ftpHost = "";                   // FTP host address
$ftpPort = 21;                   // Host port (normally 21)
$ftpUser = "";                   // FTP username
$ftpPass = "";                   // FTP password
$ftpPasv = 1;                    // Set to 1 for passive mode, or 0 for active mode
$ftpDir = "";                    // Set a start folder (optional) i.e. /path/to/folder
$ftpTmp = "";                    // Set a temp folder (optional), i.e. /path/to/folder
$testFile = "mftp-test.html";    // File name used for creating test files

?>

<html
<head>
    <title>Monsta FTP Diagnostics Tool</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="application/frontend/images/monsta-logo-favicon.png">
    <link rel="apple-touch-icon" href="application/frontend/images/monsta-logo-webclip.png">

    <style type="text/css">
        body {
            font-family: 'Open Sans', sans-serif;
            font-size: 15px;
            text-rendering: optimizeLegibility;
        }
        td {
            padding: 10px 0px;
        }
        .red {
            color: red; 
        }
        .green {
            color: green; 
        }
    </style>    
    
</head>
<body>

<h2>Monsta FTP Diagnostics Tool</h2>

<?php

if ($ftpHost == "" || $ftpUser == "" || $ftpPass == "") {

    echo "Please open this file in a text editor and set your FTP credentials.";
    
} else {

    $testArray = array();

    $testName = "PHP install supports FTP functions";
    if (function_exists("ftp_connect"))
        $testArray[$testName] = 1;
    else
        $testArray[$testName] = 0;
  
    $testName = "Can create file on client server";
    $filename = createTempFileName($ftpTmp, $testFile);
    if (@file_put_contents($filename, "Hello World!"))
        $testArray[$testName] = 1;
    else
        $testArray[$testName] = 0;
  
    $testName = "Can delete file on client server";
    if (@unlink($filename))
        $testArray[$testName] = 1;
    else
        $testArray[$testName] = 0;

    $testName = "Can connect to FTP server";
    $conn_id = @ftp_connect($ftpHost, $ftpPort) or $testFail = 1;

    if ($testFail == 1) {
        $testArray[$testName] = 0;
    } else {
        $testArray[$testName] = 1;
      
        $testName = "Can login to FTP server";
        if (@!ftp_login($conn_id, $ftpUser, $ftpPass)) {
            $testArray[$testName] = 0;
        } else {
            $testArray[$testName] = 1;
          
            if ($ftpPasv == 1) {
                $testName = "Can set FTP mode to passive";
                if (@ftp_pasv($conn_id, true))
                    $testArray[$testName] = 1;
                else
                    $testArray[$testName] = 0;
            }
          
            if ($ftpDir != "") {
                $testName = "Can change folder on FTP server";
                if (@ftp_chdir($conn_id, $ftpDir))
                    $testArray[$testName] = 1;
                else
                    $testArray[$testName] = 0;
            }
            
            $testName = "Can upload a file to FTP server";
            $filename = createTempFileName($ftpTmp, $testFile);
            @file_put_contents($filename, "Hello World!");
            if (@ftp_put($conn_id, "/".$testFile, $filename, FTP_BINARY))
                $testArray[$testName] = 1;
            else
                $testArray[$testName] = 0;
              
            $testName = "Can delete a file from FTP server";
            $filename = createTempFileName($ftpTmp, $testFile);
            @file_put_contents($filename, "Hello World!");
            if (@ftp_delete($conn_id, "/".$testFile))
                $testArray[$testName] = 1;
            else
                $testArray[$testName] = 0;
          
            $rawlist = "";
            foreach (ftp_rawlist($conn_id, ".") AS $line) {
                $rawlist .= $line."\n";
            }
              
            $systype = ftp_systype($conn_id);
        }
    }
?>
  
Need help? Please <a href="http://redirect.monstaftp.com/contact"> contact us</a> and include the URL of this page.<br>

<br>
<table>
    <tr>
        <td><strong>Setting</strong></td>
        <td width="50"></td>
        <td><strong>Value</strong></td>
    </tr>
    <tr>
        <td>PHP Version:</td>
        <td></td>
    <td><?php echo PHP_VERSION; ?></td>
    </tr>
    <tr>
        <td>Magic Quotes:</td>
        <td></td>
        <td>
        <?php
            if (get_magic_quotes_gpc())
                echo "On (<a href='http://redirect.monstaftp.com/magic-quotes'>please disable</a>)";
              else
                echo "Off";
        ?>
        </td>
    </tr>
    <tr>
        <td>Client Platform:</td>
        <td></td>
        <td>
        <?php
              if (strtoupper(substr(PHP_OS, 0, 5)) == 'LINUX')
              echo "Linux";
          elseif (strtoupper(substr(PHP_OS, 0, 7)) == 'FREEBSD')
              echo "FreeBSD";
        elseif (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN')
                  echo "Windows";
          else
              echo "Couldn't determine";
            ?>
        </td>
    </tr>
    <tr>
        <td>FTP Server Platform:</td>
        <td></td>
        <td>
        <?php
            if ($systype != "")
                  echo ucwords(strtolower($systype));
              else
                  echo "Couldn't determine";
         ?>
        </td>
    </tr>
</table>

<br>
<table>
    <tr>
        <td><strong>Test</strong></td>
        <td width="50"></td>
        <td><strong>Result</strong></td>
    </tr>
    <?php
        foreach ($testArray as $key => $value) {
      
            if ($value == 1) {
                $class = "green";
                $value = "Passed";
            } else {
                $class = "red";
                $value = "Failed";
            }
    ?>
    <tr>
        <td><?php echo $key; ?></td>
          <td></td>
        <td class="<?php echo $class; ?>"><?php echo $value; ?></td>
    </tr>
<?php
    }
?>    
</table>

<?php

    echo "<br>FTP Raw Output:";
    echo "<br><textarea cols=100 rows=10>".trim($rawlist)."</textarea>";
}
  
function createTempFileName($ftpTmp, $filename)
{
    if ($ftpTmp == "")
        $ftpTmp = ini_get('upload_tmp_dir') ? ini_get('upload_tmp_dir') : sys_get_temp_dir();
    
    return tempnam($ftpTmp, $filename);
}
  
?>
  
</body>
</html>