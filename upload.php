<?php
    if(isset($_FILES['fileUpload']))
    {
        $titulo = $_POST['titulo'];
        $ext = strtolower(substr($_FILES['fileUpload']['name'],-4)); //Pegando extensão do arquivo
        $new_name = ($titulo.$ext); //Definindo um novo nome para o arquivo
        $dir = 'upload/'; //Diretório para uploads

        move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    }
?>