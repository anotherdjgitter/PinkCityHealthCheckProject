<?php
$conn=new mysqli("127.0.0.1","root","","project");
if($conn){
    echo "connected";
}


$e=$_POST['email'];
$p=$_POST['password'];

$sql=mysqli_query($conn,"select * from profile where email='$e' and  password='$p' ");
$count=mysqli_num_rows($sql);
if($count==0){
    echo "NO ENTRY FOUND";
}
else{
    echo "DONE";
    header ("location:home_page.html");
}
?>
<button type="submit" class="btn btn-block btn-primary" >Create Account</button>