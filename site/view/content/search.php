<?php
    
/* 
 * Author: Tuan ThaiManh
 */
require ('site/model/search.php');   
$data = $data2 = $data3 = $data4 ='';
$key = '';
    
if(isset($_POST['search'])){
    $key = $_POST['search-data'];
        
}
db_connect();
$data = get_list_data($key);
$data2 = get_list_data_donvi($key);
$data3 = get_list_data_tailieu($key);
$data4 = get_list_data_faq($key);
?>
<div style="height: 60px"></div>
<div class="heading" style="text-align: center">KẾT QUẢ TÌM KIẾM</div>
<div style="height: 30px"></div>
<h3 style="margin-left: 100px">Từ khóa tìm kiếm: <?php echo $key;?></h3>
<h3 style="margin-left: 100px">Dịch vụ liên quan</h3>
<table class="table" style="margin-left: 100px" >
    <thead>
        <tr class="table-head">
            <td>Tên dịch vụ</td>
            <td>Mô tả dịch vụ</td>
            <td>Mức độ cung cấp</td>
            <td>Cơ quan quản lý</td>
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
            <td><?php
                    switch ($item['Id_don_vi_quan_ly']){
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
                        ?></td>
        </tr>
            <?php }?>      
    </tbody>
</table>
<div style="height: 50px"></div>
<h3 style="margin-left: 100px">Đơn vị liên quan</h3>
<table class="table" style="margin-left: 100px" >
    <thead>
        <tr class="table-head">
            <td>Tên đơn vị</td>
            <td>Địa chỉ</td>
        </tr>
    </thead>
    <tbody>
                    <?php 
                        foreach($data2 as $item){
                    ?>
        <tr>
            <td><?php echo $item['ten_don_vi_quan_ly']; ?></td>
            <td><?php echo $item['diachi_don_vi_quan']; ?></td>
        </tr>
            <?php }?>      
    </tbody>
</table>
<div style="height: 50px"></div>
<h3 style="margin-left: 100px">Tài liệu hồ sơ liên quan</h3>
<table class="table" style="margin-left: 100px" >
    <thead>
        <tr class="table-head">
            <td>Tên tài liệu hồ sơ</td>
            <td>Mẫu hồ sơ</td>
        </tr>
    </thead>
    <tbody>
                    <?php 
                        foreach($data3 as $item){
                    ?>
        <tr>
            <td><?php echo $item['ten_tai_lieu']; ?></td>
            <td><a href="download-form&id_file=<?=$item['Id_tai_lieu']?>">download</a></td>
        </tr>
            <?php }?>      
    </tbody>
</table>
<div style="height: 50px"></div>
<h3 style="margin-left: 100px">Câu hỏi thường gặp liên quan</h3>
<table class="table" style="margin-left: 100px" >
    <thead>
        <tr class="table-head">
            <td>Câu hỏi</td>
            <td>Câu trả lời</td>
        </tr>
    </thead>
    <tbody>
                    <?php 
                        foreach($data4 as $item){
                    ?>
        <tr>
            <td><?php echo $item['cau_hoi']; ?></td>
            <td><?php echo $item['cau_tra_loi']; ?></td>
        </tr>
            <?php }?>      
    </tbody>
</table>