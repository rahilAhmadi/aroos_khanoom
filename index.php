<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/index.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/9d805968ce.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aroos khanoom</title>
</head>
<body>
        <section class="header" id="header_index">
            <img src="asset/img/buterfly3.png" class="buterfly" alt="">
           <?php require ('header.php'); ?>
            <div class="content">
                <div class="contentImg">
                    <img class="img1" src="asset/img/bg header.png" alt="bg">
                    <img class="img2" src="asset/img/aroos khanoomm.png" alt="main img">
                </div>
                <div class="contentDesc">
                    <h1>شب رویایی رو میسازیم در مزون <span class="pink">عروس خانوم</span></h1>
                    <p> تو مزون عروس خانوم میتونین بهترین چیزا رو برای عروسیتون پیدا کنین و با بهترین کیفیت تاج و کفش و جواهرات و لباس عروس و تور تو شب عروسیتون بدرخشید</p>
                    <a href="product.php">شروع خرید</a>
                </div>
            </div>
        </section>
        <section class="productsCategorization"> 
            <h1 class="title">دسته بندی محصولات<span class="pink"> عروس خانوم </span>:</h1>
            <div class="container"> 
                <div class="item item1">
                    <div class="layer">
                        <h3 class="h3_product">لباس عروس</h3>
                        <a class="a_product" href="show_more.php?index=dress">نمایش بیشتر</a>
                    </div>
                </div> 
                <div class="item item2">
                    <div class="layer">
                        <h3 class="h3_product">کفش</h3>
                        <a class="a_product" href="show_more.php?index=shoes">نمایش بیشتر</a>
                    </div>
                </div> 
                <div class="item item3">
                    <div class="layer">
                        <h3 class="h3_product">تور</h3>
                        <a class="a_product" href="show_more.php?index=toor">نمایش بیشتر</a>
                    </div>
                </div> 
                <div class="item item4">
                    <div class="layer">
                        <h3 class="h3_product">تاج</h3>
                        <a class="a_product" href="show_more.php?index=taj">نمایش بیشتر</a>
                    </div>
                </div> 
                <div class="item item5">
                    <div class="layer">
                        <h3 class="h3_product">جواهرات</h3>
                        <a class="a_product" href="show_more.php?index=jewellery">نمایش بیشتر</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="whyUs">
            <h1 class="title">چرا <span class="pink">عروس خانوم</span>؟</h1>
            <div class="container_whyUs">
                <div class="item_whyUs">
                    <img class="whyUs_img" src="asset/icon/WhyUs_1.svg" alt="poshtibani">
                    <p>پشتیبانی آنلاین</p>
                </div>
                <div class="item_whyUs">
                    <img class="whyUs_img" src="asset/icon/WhyUs_2.svg" alt="24 saate">
                    <p>24 ساعته در دسترس</p>
                </div>
                <div class="item_whyUs">
                    <img class="whyUs_img" src="asset/icon/WhyUs_3.svg" alt="send free">
                    <p>ارسال رایگان</p>
                </div>
                <div class="item_whyUs">
                    <img class="whyUs_img" src="asset/icon/WhyUs_4.svg" alt="original product">
                    <p>ضمانت اصل بودن کالا</p>
                </div>
            </div>
        </section>
        <section class="bestSeller">
            <h1 class="title">پر فروش های <span class="pink">عروس خانوم</span>:</h1>
            <div class="container_bestSeller">
                <div class="item_bestSeller item_bs_1"></div>
                <div class="item_bestSeller item_bs_2"></div>
                <div class="item_bestSeller item_bs_3"></div>
                <div class="item_bestSeller item_bs_4"></div>
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
        <script src="js/index.js"></script>
        <script src="js/main.js"></script>

    <script>
        bars.addEventListener("click",function(){
             menu.style.right="0";
            overlay.style.display="block";
        })
        overlay.addEventListener("click",function (){
            menu.style.right="-200px";
            overlay.style.display="none";
        });

        //fade of header
        window.addEventListener('scroll',function(){
        header.style.opacity=1-window.pageYOffset/600;
})
    </script>
</body>
</html>