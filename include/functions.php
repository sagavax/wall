<?php include("dbconnect.php");


  define('APPPATH', dirname(__FILE__) .'/');
  define('APPNAME', 'Wall');
  define('APPTITLE', 'E.I.S');
  define('APPVERSION', '1.0');
  


function convertHashtags_old($str){
    $regex = "/(#)+[a-zA-Z0-9]+/";
    $str = preg_replace($regex, '<a href="wall.php?tag=$2">#$2</a>', $str);
    return($str);
}

function convertHashtags($str){
  {
  $parsedMessage = preg_replace(array('/(?i)\b((?:https?:\/\/|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:\'".,<>?«»“”‘’]))/', '/(^|[^a-z0-9_])@([a-z0-9_]+)/i', '/(^|[^a-z0-9_])#([a-z0-9_]+)/i'), array('<a href="$1" target="_blank">$1</a>', '$1<a href="">@$2</a>', '$1<a class="hashtag" href="index.php?hashtag=$2">#$2</a>'), $str);
  return $parsedMessage;
}
}
