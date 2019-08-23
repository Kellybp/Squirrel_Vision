<?php 
$subFiles = scandir('videos/'.$file.'/');
$dropDown = false;

foreach($subFiles as $subFile){ 
    if(($subFile != ".") && ($subFile != "..")){
        if(is_dir('videos/'.$file.'/'.$subFile)){
            $dropDown = true;
            echo "<ul id='dropdown".$subFile."' class='dropdown-content'>";
                echo '<li><a href="?current='.$file.'">Misc</a></li>';
                echo '<li><a href="?current='.$file.'/'.$subFile.'">'.$subFile.'</a></li>';
            echo "</ul>" ;
        }
    }
}
if(!$dropDown){
    echo '<a href="?current='.$file.'" class="waves-effect waves-light"><span>'.$file.'</span></a>';
}else{
    echo '<a href="#" data-target="dropdown'.$subFile.'" class="dropdown-trigger waves-effect waves-light"><span>'.$file.'</span><span class="Arrow">&#11206;</span></a>';
}
?>