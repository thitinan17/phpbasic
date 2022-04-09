<?php
$a = "hello";
echo ($a);
?>

<!DOCTYPE html>
<html lang = "en">
    <header>
        <!--Requirad meta tags-->
        <meta charset = "utf-8">
        <meta name="viewport"content=width=device-width,inital-scale=1">
        <title></title>
    </header>
    <body>
        <h1>
            <?php
            echo($a);
            ?>
        <h/1>
        <div style="font-size:larger; color:blue;">
            <?php
                echo "<b>คณะบริหารธุรกิจ สาขาเทคโนโลยีสารสนเทศทางธุรกิจ 
                ประกอบด้วย 3 วิชาเอก</b>";
            ?>
        </div>
        <ul>
            <?php
                echo "<li>การจัดการ</li>";
                echo "<li>พัฒนาซอร์ฟแวร์</li>";
                echo "<li>มัลติมีเดีย</li>";
            ?>
        </ul>
        
    </body>
</html>



