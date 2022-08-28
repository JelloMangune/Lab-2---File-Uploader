<?php
//Build the file path
$destination = "C:/xampp/htdocs/LAB-2/uploads/" . $_FILES['userfile']['name'];
$dir = "C:/xampp/htdocs/LAB-2/uploads/";
//Temporary path
$tmp = $_FILES['userfile']['tmp_name'];

//Verify if the file is uploaded or not
if (is_uploaded_file($tmp)) {

    //Move the file to the target destination
    if (move_uploaded_file($tmp, $destination)) {
        echo 'File is successfully uploaded';
        $fileList = scandir($dir,1);
        echo "<br><br>";
        echo "<h2>List of uploaded Files:</h2>";
        foreach($fileList as $fileLists){
            echo "<h3>$fileLists</h3>";    
        }
        exit();
    }
    }
echo 'Unable to upload file';
?>