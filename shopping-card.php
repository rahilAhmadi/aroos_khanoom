<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/shopping_card.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/9d805968ce.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require ('header.php');?>
    <section class="shapping_card">
     
        <div class="content-div">
            <div class="contentshoppCard">

                <?php

                $sum=0;
                $username=$_SESSION['username'];
                $connect=mysqli_connect('localhost','root','','arooskhanoom');
                $sql=' SELECT * FROM shopping WHERE statuse=0 AND username="'.$username.'"';
                $result=mysqli_query($connect,$sql);
                while ($row1=mysqli_fetch_array($result)) {
                    $ID = $row1['productID'];
                    $IdArray = explode(',', $ID);
                    $size = $row1['size'];
                    $color = $row1['color'];
                    $sql_product = 'select * from ' . $IdArray[0] . '  where ID=' . $IdArray[1];
                    $result_product = mysqli_query($connect, $sql_product);
                    $row_product = mysqli_fetch_array($result_product);
                    echo '<div class="card">
                    <a href="eachProduct.php?ID='.$IdArray[0].','.$IdArray[1].'" class="container_card_desc">
                    <div class="img">
                        <img class="img_product" src="asset/img/' . $IdArray[0] . '/' . $row_product['pic'] . '" alt="ls">
                    </div>
                    <div class="box_content">
                        <div class="top_header">
                        <h2>' . $row_product['descript'] . '</h2>
                       <a  href="delete_product.php?ID='.$ID.'"> <img src="asset/icon/delete.png"></a>
                        </div>
                        <div class="title_product">
                            <p class="topic_product">سایز :</p>
                            <p>' . $size . '</p>
                        </div>
                        <div class="title_product">
                            <p class="topic_product">رنگ: </p>
                            <p>' . $color . '</p>
                        </div>
                        <div class="title_product">
                            <p class="topic_product">قیمت:</p>
                            <h2 class="pink_dark">' . $row_product['price'] . '</h2>
                            
                            <p class="small_price pink_dark margin_right_10">تومان</p>
                        </div>
                    <div class="star title_product">
                        <i class="yellow fa-sharp fa-solid fa-star"></i>
                        <p>' . $row_product['star'] . '</p>
                    </div>
                    </div>
                    </a>
                </div>';
                    $sum+=$row_product['price'];

                }

                ?>



            </div>
        </div>

            <div class="price_products">
                <?php
                $sood=$sum*0.15;
                $nahayi=$sum-$sood;
                echo ' <div class="container_price_desc">
                    <div class="price_item">
                        <h3 class="price_desc">قیمت کالا ها:</h3>
                        <h3> '.$sum.' </h3>
                        <p class="small_price">تومان</p>
                    </div>
                    <div class="price_item">
                        <h3 class="price_desc">سود شما از خرید:</h3>
                        <h3> '.$sood.' </h3>
                        <p class="small_price">تومان</p>
                    </div>
                    <div class="price_item">
                        <h3 class="pink_dark price_desc">قیمت نهایی</h3>
                      <h3 class="pink_dark">'.$nahayi.'</h3>
                      <p class="pink_dark small_price">تومان</p>
                    </div>
                </div>';

            mysqli_close($connect);
                ?>
                <a href="okorder.php" class="btn_shopping_product">ثبت سفارش</a>
                </div>
            </div>
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