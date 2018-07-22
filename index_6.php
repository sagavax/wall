<?php include("include/dbconnect.php"); ?>
<?php include("include/functions.php"); ?>





<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sk" lang="sk">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <link rel="stylesheet" type="text/css" href="css/wall.css?<?php echo time(); ?>">
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <script src="http://maps.google.com/maps/api/js"></script>
      <link rel='shortcut icon' href='brick_wall.ico'>

      
      <title>wall</title>
      <link rel='shortcut icon' href='eis.ico'>
      <script language="JavaScript">  
         function checklength(i){  
                if (i<10){  
                 i="0"+i;}  
                 return i;  
         }  
         function clock(){  
           var now = new Date();  
           var hours = checklength(now.getHours());  
           var minutes = checklength(now.getMinutes());  
           var seconds = checklength(now.getSeconds());  
           var format = 1;  //0=24 hour format, 1=12 hour format  
           var time;  
          
           if (format == 1){  
             if (hours >= 12){  
               if (hours ==12){  
                 hours = 12;  
               }else {  
                 hours = hours-12;  
               }  
              time=hours+':'+minutes+':'+seconds+' PM';  
             }else if(hours < 12){  
                  if (hours ==0){  
                    hours=12;  
                  }  
              time=hours+':'+minutes+':'+seconds+' AM';  
             }  
           }  
          if (format == 0){  
             time= hours+':'+minutes+':'+seconds;  
          }  
          document.getElementById("txt").innerHTML=time;  
          setTimeout("clock();", 500);  
         }  

         
      </script>
   </head>
   <body onload="clock(); ">

    <div id="header"> <!--header -->
      <div class="header-logo"><a href="." id="logo"></a></div> <!--logo -->
      <div id="txt"></div>
    </div><!-- header -->
    


      <div id="layout">
        <div id="wall-wrap">
               
               <div id="date"></div>
               <!--- aktualny datum  -->
               
                  <div id="wall-comment">
                    <form accept-charset="utf-8" method="post" action="" id="send_feed_form">
                     <script type="text/javascript">
                           function validateForm(){
                            if ((document.send_feed_form.comment.value=="") || (document.send_feed_form.feed.value=="")){
                                alert("You must fill in all of the required fields!")
                                return false
                            }
                            else
                                return true
                        }
                        </script>

                      <textarea name="comment" id="comment" placeholder="What do you think right now?"></textarea>
                      <div class="autocomplete" style="display: none;"></div>
                     <div id="wall-comment-footer">
                        <div id="wall-comment-marker"><i class="fa fa-map-marker"></i></div><div id="wall-comment-val"></div><div id="wall-comment-loc"></div>
                        <div id="wall-comment-button"><button type="submit" name="Add" class="send_button">Send</button></div>
                     </div>    
                   </form>
                  </div>
                  
                  <div class='diary_content'></div><!--diary content, loads feeds --> 
                  <script>
                    
                         

                      $(document).ready(function(){
                        
                            jQuery('.diary_content').load('load_content.php');
                                                               
                      });

                      $(document).ready(function(){
                          $('#send_feed_form').submit(function(){
                              var comment=$("#comment").val();
                              if (comment=="" || comment==null){
                                alert("Na nieco si zabudol :)");
                                return false;
                             } else {
                                                        
                              // show that something is loading
                              $('.diary_content').html("<b>Loading response...</b>");
                               
                              /*
                               * 'post_receiver.php' - where you will pass the form data
                               * $(this).serialize() - to easily read form data
                               * function(data){... - data contains the response from post_receiver.php
                               */
                              $.post('commentajax.php', $(this).serialize(), function(data){
                                   
                                  // show the response
                                  $('.diary_content').html(data);
                                  
                                  $('#comment').val('');
                                  $('#comment').focus();
                                   
                              }).fail(function() {
                               
                                  // just in case posting your form failed
                                  alert( "Posting failed." );
                                   
                              });
                       
                              // to prevent refreshing the whole page page
                              return false;
                            }
                          });
                          
                      });
                      </script>
                      
           </div><!--wall wrap -->  
           <div style="clear:both"></div>    
      </div><!--layout -->
           

   </body>
                  
</html>
