<?php
    include("config.php");
?>
<!doctype html>
<html>
    <head>
        <style>
            video{
                float: left;
            }
        </style>
    </head>
    <body>
        <div>
          
        <?php
        $fetchVideos = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC");
        while($row = mysqli_fetch_assoc($fetchVideos)){
            $location = $row['location'];
            
            echo "<div >";
            echo "<video src='".$location."' controls width='320px' height='200px' >";
            echo "</div>";
        }
        ?>
        <a href="index.php">To index.php</a>
          
        </div>

    </body>
</html>
