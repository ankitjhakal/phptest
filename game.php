<?php
session_start();
if(!isset($_SESSION['username'])) {
    header('location:homepage.php');
}
elseif
{
    if($_POST['User'])
    {
        $User = $_POST['user'];
        $Choosefrom= array('Rock', 'Paper', 'Scissors');
        $Choice= rand(0,2);
        $CPU=$Choosefrom[$Choice];
        if($User === $CPU)
        {
          echo '<br>Result: Tie!';
        }
        else if($User === "Rock")
        {
          if($CPU === "Scissors")
           {
              echo '<br>Result: User wins';
           }
          else
           {
              echo '<br>Result: CPU wins';
           }
       }
       else if($User === "Paper")
       {
          if($CPU === "Rock")
           {
             echo '<br>Result: User wins';
           }
          else
           {
             echo '<br>Result: Computer wins';
           }
       }
      else if($User === "Scissors")
      {
         if($CPU === "Rock")
         {
            echo '<br>Result: CPU wins';
         }
         else 
         {
            echo '<br>Result: User wins';
         }
      }
    }
}
?>
