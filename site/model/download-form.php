<?php

/* 
 * Author: Tuan ThaiManh
 */
require ('system/database.php');

if(!defined('SYSPATH')) die('Request not found');
function get_list_downloadform() {
    global $id_file;
    $sql = "select * from tai_lieu where Id_tai_lieu= ".$id_file.";";
    return db_select_list($sql);
    }
    
db_connect();
$result = get_list_downloadform();
foreach($result as $item){
    $name = $item['ten_tai_lieu'];
    //echo "<br>Ten file ".$name;
    $type = $item['kieu'];
    //echo "<br>Kieu file ".$type;
    $size = $item['kich_thuoc'];
    //echo "<br>Kich thuoc file ".$size;
    $content = $item['data'];
    //echo "<br>Du lieu file ".$content;
   
      header('Content-Description: File Transfer');
      header('Content-Type: '.$type);
      header('Content-Disposition: attachment; filename='.$name);
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      header('Content-Length: '.$size);
      ob_clean();
      flush();
      print $content;
 
    exit;
}
//foreach($result as $item){
//    $bytes = $item[data];
//    header("Content-type: application/pdf");
//    header('Content-disposition: attachment; filename="14_ScanLineFill.pdf"');
//    print $bytes;
//}
?>
