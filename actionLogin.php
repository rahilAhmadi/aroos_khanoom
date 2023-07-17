<?php
session_start();
$username="null";
$password="null";
$connect=mysqli_connect('localhost', 'root', '', 'arooskhanoom');
if (isset($_POST['input_user'])&& !empty($_POST['input_user'])&&
    isset($_POST['input_pass'])&& !empty($_POST['input_pass']))
{
    $username=$_POST['input_user'];
    $password=$_POST['input_pass'];




    $sql='select * from user where user_name="'.$username.'" and password="'.$password.'"';
    $query=mysqli_query($connect,$sql);
    $row=mysqli_fetch_array($query);
    mysqli_close($connect);
    if($row)
    {   $_SESSION['login']=true;
        $_SESSION['name']=$row['name'];
        $_SESSION['username']=$row['user_name'];

       header('location:product.php');

    }
    else
    {

        echo 'نام کاربری یا کلمه عبور یافت نشد';
    }


}
else
{ echo $username."+++".$password;
    echo 'نام کاربری یا رمز عبور وارد نشده است';
}

