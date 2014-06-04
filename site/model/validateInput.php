<?php

/* 
 * Author: Tuan ThaiManh
 */
//Kiem tra truong firstname
function check_firstname_input($param){
    $mess = '';
    test_input($param);
    if(empty($param)){
        $mess =  "Không được bỏ trống";
    }
    else{
        $mess = "Hợp lệ";
    }
    return $mess;
}
   
//Kiem tra truong lastname
function check_lastname_input($param) {
    $mess = '';
    test_input($param);
    if(empty($param)){
        $mess = "Không được bỏ trống";
    }
    else{
        $mess = "Hợp lệ";
    }
    return $mess;
}

//Kiem tra truong password
function check_password_input($param){
    $mess = '';
    test_input($param);
    if(empty($param)){
        $mess = "Không được bỏ trống";
    }
    else{
        $mess = "Hợp lệ";
    }
    return $mess;
}
//Kiem tra truong repassword
function check_repassword_input($param1, $param2){
    $mess = '';
    if(empty($param2)){
        $mess = "Không được bỏ trống";
    }
    else{
        if($param1 != $param2){
            $mess = "Không khớp mật khẩu";
        }
        else{
            $mess = "Hợp lệ";
        }
        
    }
    return $mess;
}    
//Kiem tra truong username
function check_username_input($param, $table){
    $mess = '';
    test_input($param);
    if(empty($param)){
        $mess = "Không được bỏ trống";
    }
    else if(check_username_exists($param, $table)){
        $mess = "Username đã tồn tại";
    }
    else if (!preg_match("/[a-zA-Z0-9]/",$param)){
        $mess = "Chỉ bao gồm kí tự và chữ số, không cho phép dấu tiếng việt";
    }
    else{
        $mess = "Hợp lệ";
    }
    return $mess;
}
    
//Kiem tra truong email
function check_email_input($param){
    $mess = '';
    test_input($param);
    if (empty($param)) {
        $mess = "Không được bỏ trống";
    }
    else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$param)) {
        $mess = "Sai định dạng email";
    }
    else{
        $mess = "Hợp lệ";
    }
    return $mess;
}

// Ham kiem tra username da ton tai hay chua
function check_username_exists($username, $table) {
    $con=mysqli_connect("localhost","root","","public_service");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql = "select * from ".$table." where Username = '".$username."'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);	
    return ($count > 0)?true: false;
}
    
//Ham test du lieu dau vao
function test_input($param) {
    $param = trim($param);
    $param = stripcslashes($param);
    $param = htmlspecialchars($param);
    return $param;
}



