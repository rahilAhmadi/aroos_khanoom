<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/okorder.css">
    <script src="https://kit.fontawesome.com/9b12089149.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php

session_start();
$username=$_SESSION['username'];
$connect=mysqli_connect('localhost','root','','arooskhanoom');
$sql='UPDATE shopping SET statuse=1 WHERE username ="'.$username.'" AND statuse=0';
$result=mysqli_query($connect,$sql);
mysqli_close($connect);
?>
   <section class="okorder_section">
    <img src="asset/img/ok_order.png">
    <h1>سفارش شما با موفقیت ثبت شد</h1>
    <h3>سفارش شما پس از بررسی ارسال خواهد شد</h3>
    <a href="index.php">بازگشت</a>
   </section>
</body>
</html>