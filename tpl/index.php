<?php

require_once("vendor/autoload.php");

use Rain\Tpl;

// Crie as pastas abaixo
$config = array(
    "tpl_dir"       => "tpl/", //Onde fica os templates
    "cache_dir"     => "cache/" //Cache dos templates.. aí ñ precisa ficar gerando eles toda hora!
);

Tpl::configure( $config );

// create the Tpl object
$tpl = new Tpl;
// assign a variable
$tpl->assign( "name", "Fulano" );
$tpl->assign( "version", PHP_VERSION );
// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );
// draw the template

//Esse draw deve ser o último método chamado
$tpl->draw( "index" ); //Padrão é .html, logo ñ precisa passar a extensão

?>