<?php
$id_file = $_GET['id_file'];
echo $id_file;
require ('site/model/download-form.php');
/**
 * echo $file;
 * if(file_exists($file)){
 *     header('Content-Description: File Transfer');
 *     header('Content-Type: application/octet-stream');
 *     header('Content-Disposition: attachment; filename='.basename($file));
 *     header('Expires: 0');
 *     header('Cache-Control: must-revalidate');
 *     header('Pragma: public');
 *     header('Content-Length: '.filesize($file));
 *     ob_clean();
 *     flush();
 *     readfile($file);
 *     exit;
 *     }
 * else echo "loi";
 */

?>
