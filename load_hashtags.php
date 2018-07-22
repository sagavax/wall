<?php include("include/dbconnect.php");
      include("include/functions.php"); 
      require_once ("include/Mobile_Detect.php"); 

      
      $sql="SELECT * from hashtags ORDER BY tag_name ASC";
      $result=mysqli_query($link, $sql)  or die("mysqli ERROR: ".mysqli_error());
      echo "<ul>";
      while ($row = mysqli_fetch_array($result)) {
        $tag_id=$row['tag_id'];
        $tag_name=$row['tag_name'];

        echo "<li><a href='#' onclick='return injectForm(this);'>#$tag_name</a> </li>";
      }  

     echo "</ul>";  
                       