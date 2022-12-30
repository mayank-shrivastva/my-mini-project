<?php 
session_start();
include 'config.php';

if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pass=md5($password);

    $sql="SELECT * from admin where Email='$email' and Password='$password'";
    $result=mysqli_query($conn,$sql);
    $present=mysqli_num_rows($result);
    if($present>0)
    {
        echo "email already exists";
    }else{

        $sql="INSERT INTO admin (Name,Email,Password)values('$name','$email','$password')";
        $result=mysqli_query($conn,$sql);
        if($result==true)
        {
            echo "register svcefuly";
        }else{
            echo "something went wrong";
        }
    }
}
// login admin CODESET
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql="SELECT * from admin where Email='$email' and Password='$password' and Approval='Approved'";
    $result=mysqli_query($conn,$sql);
    $present=mysqli_num_rows($result);
    if($present>0)
    {
        $row=mysqli_fetch_array($result);
        $_SESSION['AID']=$row['AID'];
        header('Location:Dashboard.php');
    }else{
        echo "wrong email pass";
    }
}


if(isset($_POST['add_manager']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pass=md5($password);

    $sql="SELECT * from admin where Email='$email' and Password='$password'";
    $result=mysqli_query($conn,$sql);
    $present=mysqli_num_rows($result);
    if($present>0)
    {
        echo "email already exists";
    }else{

        $sql="INSERT INTO admin (Name,Email,Password)values('$name','$email','$password')";
        $result=mysqli_query($conn,$sql);
        if($result==true)
        {
            echo "register svcefuly";
			header('Location: Manager.php');
        }else{
            echo "something went wrong";
        }
    }
}



/*if(isset($_POST['add_manager']))
{

  $email= $_POST['email'];
 $name= $_POST['name'];
  $sql="SELECT * from admin where Email='$email'";
  $result=mysqli_query($conn,$sql);
  $present=mysqli_num_rows($result);
  if($present>0)
  {

  }else{
    $sql="INSERT INTO admin (Name, Email,Approval) VALUES('$name','$email','approved')";
    $result=mysqli_query($conn,$sql);

    if($result==true)
    {
        header('Location:manager.php');
    }else{

    }
  }
}*/

?>