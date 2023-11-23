<?php
    require_once 'config.php';
    if (isset($_POST['name'])  && isset($_POST['mobile']) && isset($_POST['text'])) {
        $fname = $_POST['name'];
        $mobile = $_POST['mobile'];
        $text = $_POST['text'];
        $query = "INSERT INTO `users`(`name`,`mobile`,`text`)
        VALUES('$name','$mobile','$text')";
        $result = mysqli_query($db, $query);
        if ($result == 1) {
            echo "OK";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link rel="stylesheet" href="css/7.css">
    </head>
    <body>
    <section>
            <div class="page">
                <div class="left">
                    <div class="enter">
                    <form method="post">
                    <input type="text" class="name" placeholder="نام شما">
                    <input type="number" class="number" placeholder="تلفن تماس">
                    <textarea class="text" placeholder="شرح مشکل موتور سیکلت"></textarea>
                    <button type="submit">درخواست خدمات پس از فروش</button>
                    </form> 
                    </div>
                </div>
                <div class="right">
                    <h2>خدمات توسن موتور</h2>
                    <p>به منظور خدمات پس از فروش توسن موتور میتوانید این فرم را تکمیل کنید</p>
                    <img src="img/fixed/main_air_pollution_ico.png" alt="" width="350px" height="400px">
                </div>
            </div>
        </section>
    </section>
    <footer class="end">
        <div class="container">
            <div class="left">
                <div class="elementor"> 
                    <ul>
                        <li><a href="">SK موتور سیکلت برقی مدل</a></li>
                        <li><a href="">SR موتور سیکلت برقی مدل</a></li>
                        <li><a href="">RL موتور سیکلت برقی مدل</a></li>
                        <li><a href="">MM موتور سیکلت برقی مدل</a></li>
                    </ul>
                </div>
                    
                    <div class="elementor">
                        <ul>
                            <li><a href="">درباره ما</a></li>
                            <li><a href="">هوشمند و زیست محیطی</a></li>
                            <li><a href="">اپلیکیشن توسن موتور</a></li>
                            <li><a href="">درخواست نمایندگی</a></li>
                            <li> <a href="">واحد فروش</a></li>
                            <li><a href="">خدمات پس از فروش</a></li>
                        </ul>
                    </div>
            </div>
            
            <div class="right">
                <div class="conect">
                    <div class="side">
                        <h4>نشانی</h4>
                        <p>تهران، خیابان آزادی، بعد از مسجد دانشگاه شریف، انتهای کوچه صادقی، پلاک ۳۳، واحد۱</p>
                    </div>
                        <h4>اطلاعات تماس
                        <br>
                        تلفن : ۶۸۲۵۷۰۰۰-۰۲۱
                        </h4>
                    </div>
                    <div class="side">
                        <h4>خدمات پس از فروش
                            <br>
                            ۴۴۲۷۰۵۴۷-۰۲۱
                        </h4>
                        
                    </div>
                    <div class="side">
                        <h4>
                            امور مشتریان
                            <br>
                            ۴۴۲۵۳۸۰۷-۰۲۱
                            <br>
                            info@tosanmotors.com
                        </h4>
                        
                    </div>
                </div>
            </div>
            
        </div>
        
    </footer>

            
    </body>
</html>