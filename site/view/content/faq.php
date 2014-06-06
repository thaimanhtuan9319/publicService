
    <?php
    
/* 
 * Author: Tuan ThaiManh
 */
     
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/faq.php');
db_connect();
$result = get_list_faq();
?>
<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="../../../public/jquery/jquery-1.11.1.min.js"> </script>
        <script> 
            $(document).ready(function(){
                $(".flip").click(function(){
                    $(".panel").toggle();
                });
            });
        </script>
        <style type="text/css"> 
            div.panel,p.flip
            {
                width:90%;
                margin:auto;
                padding:5px;
                background:#e5eecc;
                border:solid 1px #c3c3c3;
            }
            div.panel
            {
                display:none;
            }
        </style>
    </head>
    <body>
        <div id="content">
            <div class="heading">Các câu hỏi thường gặp</div>
            <div style="height: 30px"></div>
            <table class="table" style="border-collapse: collapse; background-color: whitesmoke;" >
                <tbody>
                    <?php 
                        foreach($result as $item){
                    ?>
                    <tr>
                <fieldset class="fieldset">
                    <legend class="main" style="font-weight: bold;">Câu hỏi: <?php echo $item['cau_hoi']; ?></legend>
                    <div><?php echo $item['cau_tra_loi']; ?></div>             
                </fieldset>
                </tr>
            <?php }?>                  
            </table>
        </div>
    </body>
</html>

