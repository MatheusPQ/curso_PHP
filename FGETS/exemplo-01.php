<?php

$filename = "usuarios.csv";

if(file_exists($filename)){
    //ñ precisa do +, pois se entrou no if, é pq o arquivo existe
    $file = fopen($filename, "r");

    $headers = explode(",", fgets($file));//fgets pega só a primeira linha do arq.
    //explode td vez que houver uma vírgula

    // var_dump($headers);

    $data = [];

    //Enquanto houver linhas no arq.
    while ($row = fgets($file)) {
        $rowData = explode(",", $row);
        $linha =  array();

        for ($i = 0; $i < count($headers); $i++) { 
            
            $linha[$headers[$i]] = $rowData[$i];

        }

        array_push($data, $linha);
    }

    fclose($file);

    echo json_encode($data);
}

?>