<?php include("include/dbconnect.php");
      include("include/functions.php"); 
      require_once ("include/Mobile_Detect.php"); 


      $query = "SELECT  id,date_added,diary_text,isMobile,is_read,location FROM diary ORDER BY ID DESC";

      $result=mysqli_query($link, $query)  or die("mysqli ERROR: ".mysqli_error());
                      //echo $query;
                      while ($row = mysqli_fetch_array($result)) {
                        $id=$row['id'];
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
                            <div class='first_letter'><span>".substr($diary_text,0,1)."<span></div><article>".nl2br(convertHashtags($diary_text))."</article>
                            <div class='diary-record-footer'>
                              <div class='diary-record-footer-location'><i class='fa fa-map-marker'></i> $location</div><div class='diary-record-footer-sent-from-mobile'>$isMobile</span></div>
                            </div>";
                        echo "</div>"; //diary record    
                
                //set the record as read
                $query1 ="UPDATE diary set is_read=1 where id=$id";
                //echo $query1;
                $result1=mysqli_query($link, $query1)  or die("mysqli ERROR: ".mysqli_error($result1));
         }
                       