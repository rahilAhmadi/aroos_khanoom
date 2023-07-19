<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/product.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/9d805968ce.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<section class="header">
    <?php require ('header.php');?>

</section>

<section class="content_product">
        <section class="weddingDress">
            <div class="top_product">
                <div class="product_title_box">
                    <img class="before_title" src="asset/icon/before_title.png" alt="before_title">
                    <div class="title_product pink_dark">لباس های عروس</div>
                    <img class="after_title" src="asset/icon/after_title.png" alt="after_title">
                </div>
                <a href="show_more.php?index=dress" class="show_more">نمایش بیشتر</a>
            </div>
            <!-- start of dress  -->
            <div class="contentWeddingDress">
                <?php
                $connect=mysqli_connect('localhost','root','','arooskhanoom');
                $sql='select * from dress';
                $result=mysqli_query($connect,$sql);
                while($row=mysqli_fetch_array($result))
                {
                    $st = $row['pic'];
                    if (strpos($st, 'product') !== false)
                    {
                        echo '
               <div class="card">
                 <a href="eachProduct.php?ID=dress,'.$row['ID'].'">
                    <div class="img img_pink">
                        <img class="img_product" src="asset/img/dress/'.$row['pic'].'" alt="ls">
                    </div>
                    <div class="box_content">
                        <h3 class="price">'.$row['price'].'تومان</h3>
                        <p class="productDesc">'.$row['descript'].'</p>
                        <div class="star">
                        <p>'.$row['star'].'</p>
                        <i class="yellow fa-sharp fa-solid fa-star"></i>
                        </div>
                    </div>
                  </a>
               </div>
            
                        ';
                    }
                }
                ?>
            <!--end of dress  -->
        </section>
        <section class="jwelry margin_top_60">
            <div class="top_product">
                <div class="product_title_box">
                    <img class="before_title" src="asset/icon/before_title.png" alt="before_title">
                    <div class="title_product pink_dark">جواهرات</div>
                    <img class="after_title" src="asset/icon/after_title.png" alt="after_title">
                </div>
                <a href="show_more.php?index=jewellery" class="show_more">نمایش بیشتر</a>
            </div>
            <!-- start of jewelry -->
            <div class="contentJwerly">
                <?php
                $sql='select * from jewellery';
                $result=mysqli_query($connect,$sql);
                while($row=mysqli_fetch_array($result))
                {
                $st = $row['pic'];
                if (strpos($st, 'product') !== false) {
                    echo '
                <div class="card">
                    <a href="eachProduct.php?ID=jewellery,'.$row['ID'].'">
                    <div class="img img_blue">
                        <img class="img_product" src="asset/img/jewellery/'.$row['pic'].'" alt="jwelry">
                    </div>
                    <div class="box_content">
                        <h3 class="price">'.$row['price'].'تومان</h3>
                        <p class="productDesc">'.$row['descript'].' </p>
                        <div class="star">
                            <p>'.$row['star'].'</p>
                            <i class="yellow fa-sharp fa-solid fa-star"></i>
                        </div>
                    </div>
                    </a>
                </div>';
                }}
            ?>
                <!-- end of jewelry -->
        </section>
        <section class="shoes margin_top_60">
            <div class="top_product">
                <div class="product_title_box">
                    <img class="before_title" src="asset/icon/before_title.png" alt="before_title">
                    <div class="title_product pink_dark">کفش ها</div>
                    <img class="after_title" src="asset/icon/after_title.png" alt="after_title">
                </div>
                <a href="show_more.php?index=shoes" class="show_more">نمایش بیشتر</a>
            </div>
            <!--  start of shoes -->
            <div class="contentShoes">
                <?php
                $sql='select * from shoes';
                $result=mysqli_query($connect,$sql);

                while($row=mysqli_fetch_array($result)) {
                    $st = $row['pic'];
                    if (strpos($st, 'product') !== false) {
                        echo '
                <div class="card">
                    <a href="eachProduct.php?ID=shoes,' . $row['ID'] . '">
                    <div class="img img_pink">
                        <img class="img_product" src="asset/img/shoes/' . $row['pic'] . '" alt="shoes">
                    </div>
                    <div class="box_content">
                        <h3 class="price">' . $row['price'] . 'تومان </h3>
                        <p class="productDesc">' . $row['descript'] . ' </p>
                        <div class="star">
                            <p>' . $row['star'] . '</p>
                            <i class="yellow fa-sharp fa-solid fa-star"></i>
                        </div>
                    </div>
                    </a>
                </div>';
                    }
                }
                ?>
            </div>
        </section>
        <section class="toor margin_top_60">
            <div class="top_product">
                <div class="product_title_box">
                    <img class="before_title" src="asset/icon/before_title.png" alt="before_title">
                    <div class="title_product pink_dark">تور های سر</div>
                    <img class="after_title" src="asset/icon/after_title.png" alt="after_title">
                </div>
                <a href="show_more.php?index=toor" class="show_more">نمایش بیشتر</a>
                <!-- start of toor  -->
            </div>
            <div class="contentToor">
                <?php
                $sql='select * from toor';
                $result=mysqli_query($connect,$sql);
                while($row=mysqli_fetch_array($result)) {
                    $st = $row['pic'];
                    if (strpos($st, 'product') !== false) {
                        echo '
                <div class="card">
                    <a href="eachProduct.php?ID=toor,'.$row['ID'].'">
                    <div class="img img_blue">
                        <img class="img_product" src="asset/img/toor/' . $row['pic'] . '" alt="toor">
                    </div>
                    <div class="box_content">
                        <h3 class="price">' . $row['price'] . 'تومان</h3>
                        <p class="productDesc">' . $row['descript'] . '</p>
                        <div class="star">
                            <p>' . $row['star'] . '</p>
                            <i class="yellow fa-sharp fa-solid fa-star"></i>
                        </div>
                    </div>
                    </a>
                </div>';
                    }
                }

                ?>
            </div>
            <!-- end of toor -->
        </section>
        <section class="taj margin_top_60">
            <div class="top_product">
                <div class="product_title_box">
                    <img class="before_title" src="asset/icon/before_title.png" alt="before_title">
                    <div class="title_product pink_dark">تاج ها</div>
                    <img class="after_title" src="asset/icon/after_title.png" alt="after_title">
                </div>
                <a href="show_more.php?index=taj" class="show_more">نمایش بیشتر</a>
            </div>
            <!--  start of taj -->
            <div class="contentTaj">
                <?php
                $sql='select * from taj';
                $result=mysqli_query($connect,$sql);
                while($row=mysqli_fetch_array($result)) {
                    $st = $row['pic'];
                    if (strpos($st, 'product') !== false) {
                        echo ' 
                <div class="card">
                    <a href="eachProduct.php?ID=taj,' . $row['ID'] . '">
                    <div class="img img_pink">
                        <img class="img_product" src="asset/img/taj/' . $row['pic'] . '" alt="taj">
                    </div>
                    <div class="box_content">
                        <h3 class="price">' . $row['price'] . 'تومان</h3>
                        <p class="productDesc">' . $row['descript'] . ' </p>
                        <div class="star">
                            <p>' . $row['star'] . '</p>
                            <i class="yellow fa-sharp fa-solid fa-star"></i>
                        </div>
                    </div>
                    </a>
                </div>';

                    }
                }
                mysqli_close($connect);
        ?>

            </div>
            <!-- end of taj -->
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