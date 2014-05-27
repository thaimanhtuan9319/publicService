<?php

/* 
 * Author: Tuan ThaiManh
 */

//Kiem tra truong firstname
function check_firstname_input($param){
    $mess = '';
    if(empty($param)){
        $mess =  "Không được bỏ trống";
    }
    else if (!preg_match("/^[a-zA-Z ]*$/",$param)){
        $mess = "Chỉ bao gồm kí tự và dấu cách";
    }
    else{
        $mess = "Hợp lệ";
    }
    return $mess;
}
    
//Kiem tra truong lastname
function check_lastname_input($param) {
    $mess = '';
    if(empty($param)){
        $mess = "Không được bỏ trống";
    }
    else if (!preg_match("/^[a-zA-Z ]*$/",$param)){
        $mess = "Chỉ bao gồm kí tự và dấu cách";
    }
    else{
        $mess = "Hợp lệ";
    }
    return $mess;
}

//Kiem tra truong password
function check_password_input($param){
    $mess = '';
    if(empty($param)){
        $mess = "Không được bỏ trống";
    }
    else{
        $mess = "Hợp lệ";
    }
    return $mess;
}
    
//Kiem tra truong username
function check_username_input($param){
    $mess = '';
    if(empty($param)){
        $mess = "Không được bỏ trống";
    }
    else if (!preg_match("/[a-zA-Z0-9]/",$param)){
        $mess = "Chỉ bao gồm kí tự và chữ số";
    }
    else{
        $mess = "Hợp lệ";
    }
    return $mess;
}
    
//Kiem tra truong email
function check_email_input($param){
    $mess = '';
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


    
//Ham test du lieu dau vao
function test_input($param) {
    $param = trim($param);
    $param = stripcslashes($param);
    $param = htmlspecialchars($param);
    return $param;
}



