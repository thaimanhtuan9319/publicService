<?php
/* 
 * Author: Tuan ThaiManh
 */

if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
$conn = null;

//Ham key noi co so du lieu
function db_connect(){
    global $conn;
    $conn = mysql_connect('localhost','root') or
        die ('Không thể kết nối tới cơ sở dữ liệu'.mysql_error());
    mysql_select_db('public_service') or 
        die ('Không tìm thấy cơ sở dữ liệu tương ứng'. mysql_error());
    mysql_query("SET character_set_results = 'utf8', character_set_client = "
            . "'utf8', character_set_connection = 'utf8', character_set_database"
            . " = 'utf8', character_set_server = 'utf8'", $conn);
}

//Ham lay danh sach cac ban ghi
function db_select_list($sql){
    global $conn;
    mysql_set_charset("utf8");
    $result = mysql_query($sql,$conn);
    if(!$result){
        die ('Sai cú pháp sql');
    }
    $list = array();
    while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
        $list[] = $row;
    }
    mysql_free_result($result);
    return $list;
}

//Ham lay ra 1 hang
function db_select_row($sql) {
    global $conn;
    $result= mysql_query($sql, $conn);
    if(!$result) {
	die('Câu truy vấn bị sai');	
    }
    $row = mysql_fetch_array($result, MYSQL_ASSOC);
    mysql_free_result($result);
    return $row;
}

// Ham insert du lieu
function db_insert($table, $data = array()) {
    $field = '';
    $value = '';
    foreach($data as $key => $val){
        $field .= $key.',';
        $value .= "'".mysql_escape_string($val)."'".',';
    }	
    $sql = 'insert into '.$table.'('.trim($field, ',').') values('.trim($value, ',').')';
    return mysql_query($sql);
}

// Ham delete du lieu theo id
function db_delete_by_id($table, $idfield, $idvalue) {
    global $conn;
    $sql = 'DELETE FROM '.$table.' where '.$idfield.' = '.$idvalue;
    return mysql_query($sql, $conn);	
}

// Ham update du lieu theo id
function db_update_by_id($table,$idfield, $idvalue, $data = array()){
    $sql_tmp = '';
    foreach($data as $key => $val) {
        $sql_tmp .= $key.' = '.'\''.$val.'\',';		
    }        
    $sql = "update ".$table." set ".trim($sql_tmp, ',')." where ".$idfield." ='".trim($idvalue)."'";
    return mysql_query($sql);
}

// Hàm đếm
function db_count($sql, $coutn_as){
    global $conn;
    $result = mysql_query($sql, $conn);
    if (!$result){
        die ('Cau truy van bi sai');
    }
    $row = mysql_fetch_array($result, MYSQL_ASSOC);
    if ($row)
    {
        mysql_free_result($result);
        return $row[$coutn_as];
    }
    return 0;
}

// Hàm ngắt kết nối
function db_disconnect() {
    global $conn;
    mysql_close($conn);
}

