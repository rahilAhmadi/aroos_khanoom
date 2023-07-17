<?php
session_start();
$id=$_GET['ID'];
if(isset($_SESSION['username'])and isset($_SESSION['login']) and $_SESSION['login']===true)
{
    $username=$_SESSION['username'];
    $connect=mysqli_connect('localhost','root','','arooskhanoom');
    $sql="delete from shopping where productID='$id' and username='$username' and statuse=0";
    $result=mysqli_query($connect,$sql);
    mysqli_close($connect);
    header('location:shopping-card.php');

}


else
{

    $url='login.html';
}