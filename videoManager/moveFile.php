<?php
$artist = $_POST["artist"];
$counter = 0;
//Foreach directory
/*while(isset($_POST["ch".$counter])){
    unlink($_POST["ch".$counter]
$counter++;
}*/
while(isset($_POST["title".$counter])){
    $newTitle = $_POST["title".$counter];
    
    if(($counter==0)&&(!file_exists('../videos/'.$newTitle))){
        rename('../videos/'.$artist);
    }
    //elseif(!file_exists('../videos/'.$artist.'/'.$newTitle))){
   //     rename();
   // }
    $counter++;
}
$counter = 0;
while(isset($_POST["sortable".$counter])){
    $path = $_POST["sortable".$counter."Path"];
    $videos = $_POST["sortable".$counter];

    foreach($videos as $video){
        if(!file_exists('../'.$path.'/'.$video)){
            $search = glob('../videos/'.$artist.'/'.$video);
            if(empty($search)){
                $search = searchFiles($search, '../videos/'.$artist.'/', $video);
            }
            foreach($search as $s){
                rename($s, '../'.$path.'/'.$video);
            }
        }
    }
    $counter++;
    header('Location: ../?edit=bob_ross');
}
//Function that searches subdirectories for video
//Returns array
 function searchFiles($search, $path, $video){
     $searchFiles = scandir($path);
        foreach($searchFiles as $sFile){
            if(($sFile!=".")&&($sFile!="..")){
                if(is_dir($path.$sFile)){
                    $search = glob($path.$sFile.'/'.$video);
                    if(!empty($search)){
                        return $search;
                    }
                }
            }
        }
        return array('did', 'not', 'work');
}

?>