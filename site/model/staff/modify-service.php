<?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
/*
 * Chuc nang upload file
 */
    
if(isset($_POST['attach'])){
//    if ($_FILES["file_upload"]["error"] > 0) {
//        echo "Error: " . $_FILES["file_upload"]["error"] . "<br>";
//    } else {
//        echo "Upload: " . $_FILES["file_upload"]["name"] . "<br>";
//        echo "Type: " . $_FILES["file_upload"]["type"] . "<br>";
//        echo "Size: " . ($_FILES["file_upload"]["size"] / 1024) . " kB<br>";
//        echo "Stored in: " . $_FILES["file_upload"]["tmp_name"];
//    }
//    
    $allowedExts = array("pdf", "doc", "docx");
    $temp = explode(".", $_FILES["file_upload"]["name"]);
    $extension = end($temp);
    $mess = '';
        
    if ((($_FILES["file_upload"]["type"] == "application/pdf")
        || ($_FILES["file_upload"]["type"] == "text/pdf")
        || ($_FILES["file_upload"]["type"] == "application/msword")
        || ($_FILES["file_upload"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")) 
        && ($_FILES["file_upload"]["size"] < 102400000) && in_array($extension, $allowedExts)) {
        if ($_FILES["file_upload"]["error"] > 0) {
            $mess =  "Error: " . $_FILES["file_upload"]["error"] . "<br>";
        } else {
            if (file_exists("public/upload/" . $_FILES["file_upload"]["name"])) {
                $mess =  $_FILES["file_upload"]["name"] . " đã tồn tại ";
            } else {
//                echo "Upload: " . $_FILES["file_upload"]["name"] . "<br>";
//                echo "Type: " . $_FILES["file_upload"]["type"] . "<br>";
//                echo "Size: " . ($_FILES["file_upload"]["size"] / 1024) . " kB<br>";
                move_uploaded_file($_FILES["file_upload"]["tmp_name"],
                "public/upload/" . $_FILES["file_upload"]["name"]);
//                echo "Stored in: " . "public/upload/" . $_FILES["file_upload"]["name"];
                $mess = 'Tải file thành công';
            }
        }
    }  else {
        $mess = 'File không hợp lệ';
    }
}