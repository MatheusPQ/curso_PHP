<?php

require_once("config.php");

echo session_save_path();

echo "<br>";
var_dump(session_status());

echo "<br>";
switch(session_status()){
    case PHP_SESSION_DISABLED:
        echo "Desabilitada.";
        break;
    case PHP_SESSION_NONE:
        echo "Habilitada, mas não iniciada.";
        break;
    case PHP_SESSION_ACTIVE:
        echo "Habilitada, e existe.";
        break;
}

?>