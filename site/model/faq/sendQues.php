<?php

/* 
 * Author: Tuan ThaiManh
 */
 
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Lay gia tri input
    $cau_hoi = $_POST['sendQues'];
    $don_vi = $_POST['select_dvgd'];
    $tieu_de = $_POST['titleQues'];
    $trang_thai = "0";
    if(isset($_POST['submitQues'])){    
        require SYSPATH.('datetime.php');
        /**
 * echo $tieu_de;
 *         echo $cau_hoi;
 *         echo $don_vi;]
 *         echo $tieu_de;
 *         echo $trang_thai;
 *         echo $datetime;
 */
        //Neu khong loi thi insert
        if($cau_hoi != "" and $don_vi != "0"){
            require SYSPATH.('database.php');           
            $sql = "insert into hoi_dap(tieu_de,noi_dung,trang_thai,ngay_gui,Id_don_vi_quan_ly)
                    values ('".$tieu_de."', '".$cau_hoi."', '".$trang_thai."', '".$datetime."', '".$don_vi."');";
            mysql_query($sql);
            mysql_close();
            echo "Gửi câu hỏi thành công";
        }   
    }
}
?>