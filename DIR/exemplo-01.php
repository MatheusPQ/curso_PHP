<?php

$name = "images";

if(!is_dir($name)){
    mkdir($name);
    echo "Diretório $name criado!";
} else {
    rmdir($name);
    echo "Já existe o diretório $name. Foi removido!";
}

?>