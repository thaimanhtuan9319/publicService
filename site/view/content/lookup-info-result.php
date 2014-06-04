<?php

/* 
 * Author: Tuan ThaiManh
 */

require ('site/model/lookup-info-result.php');
db_connect();
$keyname = $keydonvi = '';

if(isset($_POST['submited'])){
    $keyname = $_POST['tendichvu'];
    $keydonvi = $_POST['phongban'];
        
}
$data = get_list_result($keyname, $keydonvi);
?>
<div style="height: 60px"></div>
<div class="heading" style="text-align: center">KẾT QUẢ TRA CỨU</div>
<div style="height: 30px"></div>
<h3 style="margin-left: 100px">Tên dịch vụ tra cứu:</h3> <span style="margin-left: 100px"><?php echo $keyname;?></span>
<h3 style="margin-left: 100px">Tên đơn vị tra cứu: </h3><span style="margin-left: 100px"><?php
                    switch ($keydonvi){
                        case 1:
                            echo "Văn phòng HĐND-UBND";
                            break;
                        case 2:
                            echo "Phòng Tài chính – Kế hoạch";
                            break;
                        case 3:
                            echo "Phòng Tài nguyên – Môi trường";
                            break;
                        case 4:
                            echo "Phòng Nông nghiệp – PTNT";
                            break;
                        case 5:
                            echo "Phòng Kinh tế & Hạ tầng";
                            break;
                        case 6:
                            echo "Phòng Lao động – TBXH";
                            break;
                        case 7:
                            echo "Phòng Nội vụ";
                            break;
                        case 8:
                            echo "Thanh tra";
                            break;
                        case 9:
                            echo "Phòng Tư pháp";
                            break;
                        case 10:
                            echo "Phòng Văn hóa – Thông tin";
                            break;
                        case 11:
                            echo "Chi cục Thống kê";
                            break;
                        case 12:
                            echo "Phòng Y tế";
                            break;
                        case 13:
                            echo "Phòng Giáo dục – Đào tạo";
                            break;
                    }
                    ?></span>
<div style="height: 30px"></div>
<table class="table" style="margin-left: 100px" >
    <thead>
        <tr class="table-head">
            <td>Tên dịch vụ</td>
            <td>Mô tả dịch vụ</td>
            <td>Mức độ cung cấp</td>
            
        </tr>
    </thead>
    <tbody>
                    <?php 
                        foreach($data as $item){
                    ?>
        <tr>
            <td><?php echo $item['ten_dich_vu']; ?></td>
            <td><?php echo $item['mo_ta']; ?></td>
            <td><?php echo $item['muc_do_cung_cap']; ?></td>
           
        </tr>
            <?php }?>      
    </tbody>
</table>
<div style="height: 50px"></div>
<div style="text-align: center">
    <a href="lookup-info">Quay lại trang tra cứu thông tin dịch vụ</a>
</div>
