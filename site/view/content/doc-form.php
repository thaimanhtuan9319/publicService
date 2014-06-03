    <?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/doc-form.php');
db_connect();
$result = get_list_docform();
?>
<!DOCTYPE html>
<html>
<body>
    <div id="container">
    <h2 style="text-align: center;">Mẫu hồ sơ</h2>
    <form method="post" action="index.php?doc-form=<?=$id?>">
        <table class="table" style="border-collapse: collapse; background-color: whitesmoke;" >
            <tbody>
                <tr>
                    <td>Tên tài liệu</td>
                    <td>Mẫu hồ sơ</td>
                </tr>
                    <?php 
                        foreach($result as $item){
                    ?>
                <tr>
                    <td><?php echo $item['ten_tai_lieu']; ?></td>
                    <td><a href="download-form&id_file=<?=$item['Id_tai_lieu']?>">download</a></td>
                </tr>
            <?php }?>                  
        </table>
    </form>
    </div>
</body>
</html>