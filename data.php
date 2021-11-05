<?php 
 

    if (isset($_POST['submit'])) {

        $username = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['number'];
        $message = $_POST['message'];

   
  

  $em =   mail("waleedahmad111.wa@gmail.com", "test ", $message, "From: $username <$email> ");

  if ($em) {
    echo "Sent";
  }
  else
  {
     echo "not sent";
  };
 
 


}


    /*if (isset($_POST['send'])) {

        $subemail = $_POST['sub_email'];

        $subinsert = "INSERT INTO softech_email(subemail)VALUES('$subemail')";

        $subrunquery = mysqli_query($con, $subinsert);

        if ($subrunquery) {
        echo "<script> alert('Your Email Sent'); </script>";
            echo "<script> window.location.href='index.php'; </script>";
 
         }
        else
        {
         echo "<script> alert('Email Not Sent'); </script>";

        }

    }*/





 ?>



