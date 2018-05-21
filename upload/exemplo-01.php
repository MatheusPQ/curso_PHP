
<!-- Vai enviar os arquivos em formato binário -->
<form method="POST" enctype="multipart/form-data">

    <input type="file" name="fileUpload">
    <button type="submit">Send</button>

</form>

<?php


if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $file = $_FILES["fileUpload"]; //recebe o nome do input

    if($file["error"]){
        throw new Exception("Error: ". $file["error"]);
    }

    //é bom ser um diretório a parte, com permissão de escrita
    $dirUploads = "uploads";

    if (!is_dir($dirUploads)){
        mkdir($dirUploads);
    }

    //Move do diretório temporário do servidor p/ a pasta criada acima.
    if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){
        echo "Upload realizado com sucesso!";
    } else {
        throw new Exception("Não foi possível realizar o upload");
        
    }
}

?>