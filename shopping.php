<?php
session_start();
$username=$_SESSION['username'];
if (isset($_SESSION['login'])&& $_SESSION['login']===true && isset($_SESSION['username']) ) {

$ID =$_POST['ID'];
$size=$_POST['group1'];
$color=$_POST['group2'];

    echo $ID.'++++';
$row='';
$connect=mysqli_connect('localhost','root','','arooskhanoom');
$select="select * from shopping where username='$username' and statuse=0 ";
$result=mysqli_query($connect,$select);
$sql='';
$row=mysqli_fetch_array($result);
do{
echo $row['productID'];
    if($row['productID']==$ID ){
        $sql="UPDATE  shopping SET  color='$color' , size='$size'  WHERE  username='$username' and statuse=0 and productID='$ID'";
        break;}
    else
        $sql='INSERT INTO  shopping (productID,color,size,statuse,username) VALUES ("'.$ID.'","'.$color.'","'.$size.'",0,"'.$username.'")';


}while($row=mysqli_fetch_array($result));


    echo '</br>'.$row['productID'];

echo $sql;
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:shopping-card.php');
}

else
    header('location:login.php');
