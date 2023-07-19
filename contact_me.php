<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/contact_me.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/9d805968ce.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="header">
        <?php require ('header.php');?>

    </section>
    <section class="contact-us">
        <div class="contact-us-box">
          <div class="contact-us-title">
            <h1>تماس با <span class="pink">عروس خانوم</span>:</h1>
          </div>
          <form action="">
          <div class="contact-us-inputs">
            <div class="contact-us-inputs-top">
              <input type="text" placeholder="نام و نام خانوادگی">
              <input type="email" placeholder="ایمیل">
              <input type="text" placeholder="موضوع">
            </div>
            <div class="contact-us-input-bottom">
              <textarea  cols="30" rows="10" placeholder="چیزی بنویسید..."></textarea>
              <input type="submit" class="button" value="ارسال">
            </div>
          </div>
        </form>
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