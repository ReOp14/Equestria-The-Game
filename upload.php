<?php
if (isset($_POST['submit'])){
    $file = $_FILES['file'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)){
        if ($fileError === 0){
            if ($fileSize < 5000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                echo "Successfully uploaded";
            } else {
                echo "Your file is too big! File Size: ".$fileSize;
            }
        }
        else {
            echo "Error uploading file.";
        }
    }
    else {
        echo "You cannot upload files of this type!";
    }

    //     print_r($file); really good for debugging
}