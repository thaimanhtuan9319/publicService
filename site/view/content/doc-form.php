<?php
        
/* 
 * Author: Tuan ThaiManh
 */
     
if(!defined('SYSPATH')) die ('REQUEST NOT FOUND!');
require ('site/model/doc-form.php');
db_connect();
$result2 = get_list_service();
?>

<html>
    <head>
        <script>
            function showDonvi(str) {
                if (str=="") {
                    document.getElementById("txtHint").innerHTML="";
                    return;
                }
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                } else { // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                        document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET","getdata&id="+str,true);//truyen id vao file getdata
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
        <div id="content" style="width: 800px">
            <div style="margin-left: 150px">
                <div style="height: 60px"></div>
                <div class="heading" style="text-align: center">MẪU HỒ SƠ</div>
                <h3>Lựa chọn dịch vụ cần tra cứu tài liệu </h3>
                <form>
                    <select name="donvi" onchange="showDonvi(this.value)">
                        <?php 
                            $pulldown = '<option></option>';
                            foreach ($result2 as $item2) {
                                $pulldown .= "<option value=".$item2['Id_dich_vu'].">".$item2['ten_dich_vu']."</option>\n";
                            }
                            echo $pulldown;
                        ?>
                    </select>
                </form>
                <br>
                <div id="txtHint"></div>
            </div>
        </div>
    </body>
</html> 
