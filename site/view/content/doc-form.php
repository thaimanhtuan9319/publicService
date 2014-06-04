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
                <table class="table table-color">
                    <thead>
                        <tr>
                            <th>Tên tài liệu</th>
                            <th>Mẫu hồ sơ</th>
                        </tr>
                    </thead>
                    <tbody
                    <?php 
                        foreach($result as $item){
                    ?>
                        <tr>
                            <td><?php echo $item['ten_tai_lieu']; ?></td>
                            <td><a href="download-form&id_file=<?=$item['Id_tai_lieu']?>">download</a></td>
                        </tr>
            <?php }?> 
                    </tbody>
                </table>
            </form>
        </div>
    </body>
</html>