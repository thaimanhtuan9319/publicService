<?php

/* 
 * Author: Tuan ThaiManh
 */
 
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Lay gia tri input
    $noi_dung = $_POST['sendReport'];
    $don_vi = $_POST['select_dvgy'];
    $tieu_de = $_POST['titleReport'];

    if(isset($_POST['submitReport'])){    
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
        if($noi_dung != "" and $don_vi != "0"){
            require SYSPATH.('database.php');           
            $sql = "insert into y_kien_phan_hoi(tieu_de,noi_dung,Id_don_vi_quan_ly)
                    values ('".$tieu_de."', '".$noi_dung."', '".$don_vi."');";
            mysql_query($sql);
            mysql_close();
            echo "Gửi ý kiến góp ý thành công";
        }   
    }
}
?>