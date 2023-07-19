<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/show_more.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/9d805968ce.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php require ('header.php'); ?>
    <section class="dasteBandi">
        <div class="item_daste">
            <a href="show_more.php?index=dress">  <img src="asset/img/dasteBandi_1.png" alt="lebasAroos"></a>
        </div>
        <div class="item_daste">
            <a href="show_more.php?index=toor">  <img src="asset/img/dasteBandi_2.png" alt="toor"></a>
        </div>
        <div class="item_daste">
            <a href="show_more.php?index=jewellery">  <img src="asset/img/dasteBandi_3.png" alt="jwelry"></a>
        </div>
        <div class="item_daste">
            <a href="show_more.php?index=shoes"> <img src="asset/img/dasteBandi_4.png" alt="kafsh"></a>
        </div>
        <div class="item_daste">
            <a href="show_more.php?index=taj">  <img src="asset/img/dasteBandi_5.png" alt="taj"></a>
        </div>
    </section>
    <section class="weddingDress">
        <div class="filter">
            <div class="item_filter first-filter">
                <p class="filter_desc">لباس های کوتاه</p>
                <input type="checkbox" class="input_check">
            </div>
            <div class="item_filter">
                <p class="filter_desc">لباس های بلند</p>
                <input type="checkbox" class="input_check">
            </div>
            <div class="item_filter">
                <p class="filter_desc">دامن پفی</p>
                <input type="checkbox" class="input_check">
            </div>
            <div class="item_filter">
                <p class="filter_desc">دامن چین دار</p>
                <input type="checkbox" class="input_check">
            </div>
            <div class="item_filter">
                <p class="filter_desc">مروارید دوزی شده</p>
                <input type="checkbox" class="input_check">
            </div>
            <div class="item_filter">
                <p class="filter_desc">آستین دار</p>
                <input type="checkbox" class="input_check">
            </div>
            <div class="item_filter">
                <div class="d-flex">
                    <div class="wrapper">
                      <div class="price-input">
                        <div class="field">
                          <span>ارزانترین</span>
                          <input type="number" class="input-min" value="2500">
                        </div>
                        <div class="field">
                          <span>گرانترین</span>
                          <input type="number" class="input-max" value="7500">
                        </div>
                      </div>
                      <div class="slider">
                        <div class="progress"></div>
                      </div>
                      <div class="range-input">
                        <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                        <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                      </div>
                    </div>

        </div>
      </div>
     <div class="item_filter">
        <a class="filter_submit" href="#">اعمال فیلتر</a>
     </div>
        </div> 
        <section>
            <div class="content-div">
                <div class="contentWeddingDress">
                    <!--cards    -->
                    <?php
                    $index=$_GET['index'];
                    $connect=mysqli_connect('localhost','root','','arooskhanoom');
                    $sql='select * from '.$index;
                    $result=mysqli_query($connect,$sql);
                    while($row=mysqli_fetch_array($result)) {

                        echo '<div class="card">
                        <a href="eachProduct.php?ID='.$index.','.$row['ID'].'">
                        <div class="img">
                            <img class="img_product" src="asset/img/'.$index.'/'.$row['pic'].'" alt="ls">
                        </div>
                        <div class="box_content">
                        <h3 class="price">'.$row['price'].'</h3>
                        <p class="productDesc">'.$row['descript'].' </p>
                        <div class="star">
                            <p>'.$row['star'].'</p>
                            <i class="yellow fa-sharp fa-solid fa-star"></i>
                        </div>
                        </div>
                        </a>
                    </div>';
                    }
mysqli_close($connect);
                    ?>
                </div> 
            </div>
        </section> 
    </section>
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