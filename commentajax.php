<?php include("include/dbconnect.php");
      include("include/functions.php"); 
      require_once ("include/Mobile_Detect.php"); 




    if($_POST){
    if(empty($_POST['comment'])){
      echo "<script>alert('Nothing to add :) ')</script>";
    }
    else {
    if(isset($_POST['location'])){
    $location=mysqli_real_escape_string($link,$_POST['location']); //koordinaty
   } else $location="";
      
    $detect = new Mobile_Detect;

    if ( $detect->isMobile() ) {
      $isMobile=1;
    } else { 
      $isMobile=0;
    }  
      //$diary_text.="<span style='float:right; margin-right=5p;font-style:italic'>Sent from mobile<span>";
      $diary_text=mysqli_real_escape_string($link,$_POST['comment']);
      
      //$regex = "/(#)+[a-zA-Z0-9]+/";
      $regex = "/#([^\s]+)/";
      preg_match_all($regex, $diary_text,$matched_hashtag);
         $hashtag='';
         if(!empty($matched_hashtag[0])){
          //fetch hastag from the array
         foreach ($matched_hashtag[0] as $matched) {
        //  echo $matched;  
        //append every hastag to a string
        //remove the # by preg_replace function
        $regex='/(#)/';
        $hashtag = mysqli_real_escape_string($link, preg_replace($regex, '', $matched));
        $sql_hashtag="SELECT * from hashtags where tag_name='$hashtag'";
         $result_hashtag=mysqli_query($link, $sql_hashtag) or die("mysqli ERROR: ".mysqli_error());   
         $num_rows=mysqli_num_rows($result_hashtag);
         if($num_rows==0){ // ak si nenasiel hashtag v databaze
          
            $query="INSERT INTO hashtags (tag_name) VALUES ('$hashtag')";
            //echo $query;
             $result=mysqli_query($link, $query) or die("mysqli ERROR: ".mysqli_error());
            }
          }
         }
        //echo $hashtag;
    
    
     $sql="INSERT INTO diary (diary_text, date_added,location,isMobile) VALUES ('$diary_text','".date('Y-m-d H:i:s')."','$location',$isMobile)";
    
    $result=mysqli_query($link, $sql) or die("mysqli ERROR: ".mysqli_error());

   } 
  }

            if(isset($_GET['hashtag']))
                      {
                       $hashtag=$_GET['hashtag'];
                       $query="SELECT * from diary WHERE diary_text LIKE '%#$hashtag%' ORDER BY id DESC";
                      } else {
                      $query = "SELECT  date_added,diary_text,isMobile,location FROM diary ORDER BY ID DESC";
                      }    
                      
                      $result=mysqli_query($link, $query)  or die("mysqli ERROR: ".mysqli_error());
                      //echo $query;
                      while ($row = mysqli_fetch_array($result)) {
                        $date_added=$row['date_added'];
                        $diary_text=$row['diary_text'];
                        $isMobile=$row['isMobile'];
                        $location=$row['location'];

                        if($isMobile==0) {
                          $isMobile="";
                        } else {
                          $isMobile="<i class='fa fa-mobile'></i> Sent from mobile/tablet";
                        }

                        $date_added_tmst = strtotime($date_added);
                        $hour=date('H', $date_added_tmst);
                          
                        //indentifikacia hyperlinku
                        //$diary_text = preg_replace("~[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]~","<a href=\"\\0\">\\0</a>", $diary_text);

                        echo "<div class='diary-record'>  
                            <div class='diary-record-header'><span><i class='fa fa-clock-o'></i> $date_added<span></div>
                            <article>".nl2br(convertHashtags($diary_text))."</article>
                            <div class='diary-record-footer'>
                              <div class='diary-record-footer-location'><i class='fa fa-map-marker'></i> $location</div><div class='diary-record-footer-sent-from-mobile'>$isMobile</span></div>
                            </div>";
                        echo "</div>"; //diary record    
                        
                        }
                       
                    