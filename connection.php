<?php
$con = mysqli_connect('localhost','root','','courses');
if($con !=false)
{
  header("home.html");
}else{
    echo 'failed';
}
$error=null;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(isset($_POST['signup'])){
    $username=$_POST['UserName'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gende=$_POST['Gender'];
  
    $query="INSERT INTO `userssignup` (`userName`, `Password`, `email`, `Phone`, `Gender`, `ID`) VALUES ('$username', '$password', '$email', '$phone', '$gender', NULL);";
    if (mysqli_query($con, $query)) {
        header("Location: home.html");
        exit;
    } else {
        die('Error inserting data: ' . mysqli_error($con));
    }

    }elseif(isset($_POST['signin']))
    {
        $username=$_POST['UserName'];
        $password=$_POST['password'];
        $query="SELECT * FROM userssignup WHERE userName=`$username` and password=`$password`";
        if (mysqli_query($con, $query)) {
            header("Location: home.html");
            exit;
        } else {
            die('Error inserting data: ' . mysqli_error($con));
        }
    }
    

   }
    


