<?php


//session start
// if forgot password is pressed redirect to private question page
if(isset($_POST['forgotpassword']))
{
  header('location:ques.php');
}
// else check for successfully login or not
 else{
include('connection.php');
mysqli_select_db($conn, "mysql1");
$query="SELECT * FROM logindb";
if($res=mysqli_query($conn,$query))
{
while($row=mysqli_fetch_array($res))
{
if($_POST['username']==$row[0])
 {
  if($_POST['password']==$row[1])
  {
    echo "successfully login";
  }
  else
  {
    echo "wrong password";
    include('logintest.php');
  }
 }
}
}
else {
  echo "connection error";
}
}

?>
