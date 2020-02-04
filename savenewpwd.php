<!-- validations and update password in database -->
<?php
include('connection.php');
//this is the reset password script
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    { $username=$_POST['username'];
      $prique = $_POST['prique'];
      $prians = $_POST['prians'];
      $newpwd= $_POST['newpwd'];
      $resetpwd=$_POST['resetpwd'];
      if($newpwd!=$resetpwd)
      {
        echo "Please enter same password in both fields ";
        include('ques.php');
      }
//check is user exist in database
   else
    {
      mysqli_select_db($conn, "mysql1");
      $query="SELECT * FROM logindb";

      if($res=mysqli_query($conn,$query))
      {
      while($row=mysqli_fetch_array($res))
      {
        if($username==$row[0])
        {
          if($prique==$row[2] && $prians==$row[3] )
            {
              $q = "UPDATE logindb SET `password` = '$resetpwd'WHERE username = '$username' ";
              mysqli_query($conn, $q);
              echo "password reset successfully";
            }
         else
           {
            echo "Please submit correct answer";
            include('ques.php');
           }
        }
      }
    }
  }
}

                      /*  }

                        else

                        {

                            $newpwd = base64_encode($psw);

                            $altpsw = "UPDATE login SET `password` = '$newpwd', `counter` = '0' WHERE username = '$uname' ";

                            mysqli_query($con, $altpsw);

                            echo '<i style="color:green;">PASSWORD UPDATED</i>';

                            include "index.php";

                        }

                 }

            }

        }

    }
*/
?>




​

  </form>

​

</body>

​

</html>
