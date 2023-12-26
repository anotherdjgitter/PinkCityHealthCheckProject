<?php
$conn=new mysqli("127.0.0.1","root","","project");
if($conn){
    echo "connected";
}

$n=$_POST['name'];
$p=$_POST['phone'];
$e=$_POST['email'];
$d=$_POST['date'];
$m=$_POST['medical'];

$s=$_POST['state'];
$c=$_POST['city'];
$fname=$_FILES['pdtimg']['name'];
$impath="../shared/$fname";
move_uploaded_file($_FILES['pdtimg']['tmp_name'],$impath);
$sql=mysqli_query($conn,"insert into appoint(name,phone,email,date,history,file,state,city) values('$n',$p,'$e','$d','$m','$impath','$s','$c')");
if($sql){
    echo "appointment booked";
    header("location:modal.html");

}
?>
