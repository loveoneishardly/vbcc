<?php
    $destination_path = getcwd().DIRECTORY_SEPARATOR;
    $target_path = $destination_path . 'uploads/'. basename( $_FILES["fileupload"]["name"]);
    move_uploaded_file($_FILES['fileupload']['tmp_name'], $target_path);
    return basename( $_FILES["fileupload"]["name"]);
?>