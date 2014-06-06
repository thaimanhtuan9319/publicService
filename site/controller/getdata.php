<?php
require ('site/model/doc-form.php');
$id = $_GET['id'];
    
db_connect();
$result = get_list_docform($id);
db_disconnect();
?> 

<form method="post" action="index.php?doc-form=<?=$id?>">
    <table id="tfhover" class="tftable" border="1">
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

