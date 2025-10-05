<?php
echo "<pre>";

print_r($_FILES);
echo "<pre>";

// Advance

if($_FILES['file']){
    $path= $_FILES['file']['name'];
    
    $upload_path = "./upload/".$path;
   
    //  To upload we need temp file name
    move_uploaded_file($_FILES['file']['tmp_name'], $upload_path) || die("Failed to upload");

}else{
    die("No File Found");
}


?>