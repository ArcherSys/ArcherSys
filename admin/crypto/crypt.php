<?php
function UniHex($str) {
    $return = "";
    // æ ø å Æ Ø Å
    //These are simply one HEX code being replaced by another to correct the issue
    $except = array("E6"=>"91","F8"=>"9B","E5"=>"86","C6"=>"92","D8"=>"9D",    "C5"=>"8F");
    for($i = 0; $i < strlen($str); $i++) {
        $hex = bin2hex(substr($str, $i, 1));
        if ($except[strtoupper($hex)])
            $hex = $except[strtoupper($hex)];
        $return .= $hex;
    }
    return $return;
}
echo UniHex($_GET["Data"]);
    ?>