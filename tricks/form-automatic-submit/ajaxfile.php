<?php
   include "config.php";

   if(isset($_POST['username'])){
      $username = $_POST['username'];

      $query = "select count(*) as cntUser from users where username='".$username."'";

      $result = mysqli_query($con,$query);
      $response = "<span style='color: red;'>Not correct username.</span>";
      if(mysqli_num_rows($result)){
         $row = mysqli_fetch_array($result);

         $count = $row['cntUser'];
       
         if($count > 0){
             $response = "<script>window.location='success.php'</script>";
         }
      
      }

      echo $response;
      die;
   }
?>