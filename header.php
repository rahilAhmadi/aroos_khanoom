<?php
session_start();
echo '

        <div class="overlay"></div>
        <div class="menu"> 
            <div class="menuRight">
                <ul>
                    <li class="logo"><a href="index.php"><img src="asset/logo/logo-no-background.png" alt="logo"></a></li>
                    <li class="hover"><a href="index.php">خانه</a></li>
                    <li class="hover"><a href="product.php">محصولات</a></li>
                    <li class="hover"><a href="about_me.php">درباره ما</a></li>
                    <li class="hover"><a href="contact_me.php">تماس با ما</a></li>
                </ul>
                <i class="fa fa-bars" id="bars"></i>
            </div>
            ';
if (isset($_SESSION['login'])&& $_SESSION['login']===true)

{

    echo '
            <div class="menuLeft">
                <ul>
                    <li class="addToCard"><a href="shopping-card.php"><img src="asset/icon/card 1.png" alt="shoping-card"></a></li>
                    <li class="action">
                    <div class="profile" onclick="toggleMenu()">  
                    <a class="buttonLogin action_button btn_menu_a"> <img src="asset/icon/user_head.png" class="user_icon" alt="shoping-card">'.$_SESSION['name'].' <img src="asset/icon/down-arrow.png" class="arrow_bottom" alt="shoping-card"></a></div>
                     <div class="menu-box"><a href="logout.php" class="buttonLogin btn_menu_a">خروج</a></div>
                    <a href="logout.php" class="logoLogin btn_menu_a"><img src="asset/icon/user.png" alt="user"></a>
                    </li>
                </ul>
            </div>';


}//end if

else{
echo '
            <div class="menuLeft">
                <ul>
                    <li></a></li>
                    <li>
                    <a href="login.html" class="buttonLogin vorod_btn btn_menu_a">ورود/عضویت</a>
                    <a href="login.html" class="logoLogin btn_menu_a"><img src="asset/icon/user.png" alt="user"></a>
                    </li>
                </ul>
            </div>';
     }//end else
      echo ' </div>';
      ?>
      <script>
       const togglemenu = document.querySelector('.menu-box');
       function toggleMenu() {
           togglemenu.classList.toggle("active");
    }
      </script>