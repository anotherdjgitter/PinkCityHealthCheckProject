<?php
$conn=new mysqli("127.0.0.1","root","","project");
if($conn){
    echo "connected";
}
$n=$_POST['full_name'];
$ph=$_POST['phone'];
$e=$_POST['email'];
$p=$_POST['password'];

$sql=mysqli_query($conn,"select * from profile where name='$n' and  password='$p' ");
$count=mysqli_num_rows($sql);
if($count==0){
    $res=mysqli_query($conn,"insert into profile(name,phone,email,password) values('$n',$ph,'$e','$p')");
    if($res){
        echo "registration sucessfull";
    }
    else{
        echo "failed";
    }
}
?>