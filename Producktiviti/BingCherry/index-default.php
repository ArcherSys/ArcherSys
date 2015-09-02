<?php
/****
 * Simple PHP application for using the Bing Search API
*/
 
$acctKey  = '5wnV0+81YXsqKB9wa81htI1CHyofRDHQU9XQHe/EEI8';
$rootUri = 'https://api.datamarket.azure.com/Bing/Search';
 
// Read the contents of the .html file into a string.
$contents = file_get_contents('index.php');
 
if ($_POST['query'])
{
    
// Encode the query and the single quotes that must surround it.
$query = urlencode("'{$_POST['query']}'");
   
// Get the selected service operation (Web or Image).
$serviceOp = $_POST['service_op'];
 
// Construct the full URI for the query.
$requestUri = "$rootUri/$serviceOp?\$format=json&Query=$query";
// Encode the credentials and create the stream context.
$auth = base64_encode("$acctKey:$acctKey");
$data = array(
  'http' => array(
    'request_fulluri' => true,
    // ignore_errors can help debug – remove for production. This option added in PHP 5.2.10
    'ignore_errors' => true,
    'header'  => "Authorization: Basic $auth")
  );
$context = stream_context_create($data);
 
// Get the response from Bing.
$response = file_get_contents($requestUri, 0, $context);
// Decode the response.
$jsonObj = json_decode($response);
 
$resultStr = '';
 
// Parse each result according to its metadata type.
foreach($jsonObj->d->results as $value)
{
  switch ($value->__metadata->type)
  {
    case 'WebResult':
      $resultStr .=
        "<a href=\"{$value->Url}\">{$value->Title}</a><p>{$value->Description}</p>";
      break;
    case 'ImageResult':
      $resultStr .=
        "<h4>{$value->Title} ({$value->Width}x{$value->Height}) " .
        "{$value->FileSize} bytes)</h4>" .
        "<a href=\"{$value->MediaUrl}\">" .
        "<img src=\"{$value->Thumbnail->MediaUrl}\"></a><br />";
      break;
  }
}
 $contents = str_replace('{RESULTS}', $resultStr, $contents);
}
 
echo $contents;
?>
 