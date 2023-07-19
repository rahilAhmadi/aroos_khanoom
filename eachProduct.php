<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/eachProduct.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/9d805968ce.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <?php
 require ('header.php');

 if(isset($_SESSION['username'])and isset($_SESSION['login']) and $_SESSION['login']===true)
     {
         $url='shopping.php';}

 else
 {

     $url='login.html';}


    $connect = mysqli_connect('localhost', 'root', '', 'arooskhanoom');
    $getID = $_GET['ID'];
    $IdArray = explode(',', $getID);
    $sql = 'select * from ' . $IdArray[0] . '  where ID=' . $IdArray[1];
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    echo '
     <section class="eachProduct">
        <div class="container_each">
            <div class="right">
                <div class="big_each">
                    <img src="asset/img/' . $IdArray[0] . '/' . $row['picA'] . '" alt="big_each">
                </div>
                <div class="small_each">
                    <img src="asset/img/' . $IdArray[0] . '/' . $row['picA'] . '"alt="small_each">
                    <img src="asset/img/' . $IdArray[0] . '/' . $row['picB'] . '" alt="small_each">
                    <img src="asset/img/' . $IdArray[0] . '/' . $row['picC'] . '" alt="small_each">
                </div>
            </div>
            <div class="left">
                <h1>' . $row['descript'] . '</h1>
                
                            <form   action="'.$url.'" method="post">
                            <input type="hidden" name="ID"  value="' . $getID . '">
                    <fieldset class="radiogroup size">
                        <h3>سایز:</h3>
                      <ul class="radio item_each">
                        <li class="item_check">
                            <p>36</p>
                            <input type="radio" name="group1" id="answer1" value="36" />
                        </li>
                        <li class="item_check">
                            <p>38</p>
                            <input type="radio" name="group1" checked="true" id="answer2" value="38" />
                        </li>
                        <li class="item_check">
                            <p>40</p>
                            <input type="radio" name="group1" id="answer3"  value="40" />
                        </li>
                        <li class="item_check">
                            <p>42</p>
                            <input type="radio" name="group1" id="answer4" value="42" />
                        </li>
                      </ul>
                    </fieldset>
                  
                    <fieldset class="radiogroup color">
                      <h3>رنگ:</h3>
                      <ul class="radio item_each">
                        <li class="item_check">
                            <p>سفید</p>
                            <input type="radio" name="group2" checked="true" id="answer11" value="سفید" />
                        </li>
                        <li class="item_check">
                            <p>کرمی</p>
                            <input type="radio" name="group2" id="answer12" value="کرمی" />
                        </li>
                        <li class="item_check">
                            <p>قرمز</p>
                            <input type="radio" name="group2" id="answer13" value="قرمز" />
                        </li>
                        <li class="item_check">
                            <p>بنفش</p>
                            <input type="radio" name="group2" id="answer14" value="بنقش" />
                        </li>
                      </ul>
                    </fieldset>
                 
                
                
                
                
                <div class="price">
                    <h2>قیمت:</h2>
                    <h2 class="pink_dark price_number">' . $row['price'] . '</h2>
                    <h2>تومان</h2>
                </div>
                <input type="submit" class="btn_submit" value="افزودن به سبد خرید">
            </div>
        </div>
        </form>
     </section>';
    mysqli_close($connect);

    ?>
    <section class="footer">
        <div class="containerFooter">
            <div class="footerRight">
                <div class="rightTop">
                    <img class="logo_footer" src="asset/logo/logo-no-background.png" alt="logo">
                </div>
                <div class="rightBottom">
                    <h3>درباره ما</h3>
                    <p>مزون عروس خانوم جهت رفاه شما عروس خانم های گل تاسیس شد و با
                        پشتیبانی 24 ساعته با کیفیت بالا در خدمت شماست.</p>
                </div>
            </div>
            <div class="footerleft">
                <div class="leftTop">
                    <div class="news">
                        <h3 class="newsDesc margin_bottom_20">آیا میخواهید از خبرنامه های ما آگاه بشید؟</h3>
                        <div class="newsInput">
                            <input type="text" placeholder="لطفا ایمیل خود را وارد کنید.">
                            <button>ثبت</button>
                        </div>
                    </div>
                </div>
                <div class="leftBottom">
                    <div class="social">
                        <h3 class="margin_bottom_20">ما را در شبکه های اجتماعی دنبال کنید</h3>
                        <div class="socialIcon">
                            <img src="asset/icon/facebook.svg" alt="facebook">
                            <img src="asset/icon/twitter.svg" alt="twitter">
                            <img src="asset/icon/instagram.svg" alt="instagram">
                            <img src="asset/icon/telegram.svg" alt="telegram">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyRight">تمامی حقوق این سایت برای مزون <span class="pink">عروس خانوم </span> محفوظ است</div>
    </section>
    <script src="js/main.js"></script>
</body>
</html>