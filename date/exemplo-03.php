<?php

//LC_ALL: constante do PHP. Muda toda a configuração de localização p/ português
//padrão, padrão com utf, pardrão do windows
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo ucwords(strftime("%A %B"));


?>