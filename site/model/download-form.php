<?php

/* 
 * Author: Tuan ThaiManh
 */
echo $id_file;
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
    $type = $item['kieu'];
    $size = $item['kich_thuoc'];
    $content = $item['data'];
    header('Content-Description: File Transfer');
    header('Content-Type: '.$type);
    header('Content-Disposition: attachment; filename='.$name);
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: '.$size);
    ob_clean();
    flush();
    readfile($content);
    exit;
}
?>