<?php
$name ="xsxs";
$username ="nmnm";
$password ="lmkmkm";
if(isset($_POST['input_name']) && !empty($_POST['input_name'])&&
    isset($_POST['input_user'])&& !empty($_POST['input_user'])&&
    isset($_POST['input_pass'])&& !empty($_POST['input_pass'])) {
    $name = $_POST['input_name'];
    $username = $_POST['input_user'];
    $password = $_POST['input_pass'];
    $connect = mysqli_connect('localhost', 'root', '', 'arooskhanoom');
    $sql = 'insert into user (name,User_name,password,type) VALUES ("'.$name.'","'.$username.'","'.$password.'",0)';
    $query = mysqli_query($connect, $sql);
    echo $name."++++".$username."++++".$password."true";
}
else
{
    header('location:register.html');

}
mysqli_close($connect);

header('location:login.html');

