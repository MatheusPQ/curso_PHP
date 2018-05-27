<form method="POST">

<input type="text" name="busca">
<button type="submit">Enviar</button>
</form>
<?php

if(isset($_POST['busca'])){
    // echo strip_tags($_POST['busca']); //Remove todas as tags digitadas
    // echo strip_tags($_POST['busca'], "<strong><a>"); //Remove todas as tags, menos a tag strong e <a>
    echo htmlentities($_POST['busca']); //Transforma até as tags em string

}
?>