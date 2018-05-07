<?php

$count=0;
foreach($_FILES['file']['name'] as $k=>$name){
    $fileName = $_FILES['file']['name'][$k];
    $fileTempName = $_FILES['file']['tmp_name'][$k];
    $fileSize = $_FILES['file']['size'][$k];
    $fileError = $_FILES['file']['error'][$k];
    $fileType = $_FILES['file']['type'][$k];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    $allowed = array(
        'jpg',
        'jpeg',
        'png',
        'gif'
    );
    
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 500000) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDest = 'uploads/' . $fileNameNew;
                move_uploaded_file($fileTempName, $fileDest);
                $_SESSION["aktBild"]["adr"]=$fileDest;
                $_SESSION["aktBild"]["name"]=$fileName;
                require_once './db/db.php';
                upload();
                header("Location: index.php");
                
            } else {
                echo "Ds Biud isch ds gross";
            }
        } else {
            echo "Het nid chönne ufelade";
        }
    } else {
        echo "Fail fausches Format";
    }
}
    


/*if (isset($_POST['submit'])) {
    $file = $_FILES['file']['name'];
    echo($file);
    $fileName = $_FILES['file']['name'];
    $fileTempName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    
    */


