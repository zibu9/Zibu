<?php 

function HTMLElements($str) {
    $tag = explode("/",$str);
    var_dump($tag);

  return 1;

}
   
// keep this function call here  
echo HTMLElements("<div><div><b>bonjour</b></div></p>");

?>