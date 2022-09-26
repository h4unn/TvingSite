<?php
   include("conn.php");

   $title = $_GET['title'];
   $message = $_GET['message'];
   $date = date("y-m-d");

   $sql = "INSERT INTO notice(title,message,date) VALUES('$title','$message','$date')";
   $result = mysqli_query($conn, $sql);

   if($result == false){
      header("Location:notice_write.php");
   }else{
      header("Location:notice_list.php");
   }
   mysqli_close($conn);
?>
