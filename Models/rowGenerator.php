<?php 
function rowGenerator(/*$scanDir,*/$files, $location, $noRows=false, $counter=0, $subCounter=0){
 /*if(isset($scanDir)){
   $files = scandir($scanDir);
 } */
  $rowcounter=1;
  if ($noRows){
    foreach($files as $file) { 
      if(($file!=".")&&($file!="..")){
        include("$location.php");
      }
    }
  }
  else{
    echo "<div class='row'>";
    foreach($files as $file) { 
        if(($file!=".")&&($file!="..")){
          include("$location.php");
          if($rowcounter%3==0){
            echo "</div>";
            echo "<div class='row'>";
          }
          $rowcounter++;
        }
    }
    echo "</div>";
  }
}
?>