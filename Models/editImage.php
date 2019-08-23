<?php
function editImage($path, $titleNum){
echo '<br/>
<div class="headerCard row">
    <div class="col s2">
        <input class="hovering" style="width:200px;height:200px;" type="image" src="images/'.$path.'.jpg" alt="'.$path.'">
    </div>
    <div class="col s10">
        <label for="'.$path.'">Grouping Title</label>
        <input placeholder="'.$path.'" id="title'.$titleNum.'" type="text" value="'.$path.'">
    </div>
</div>';
unset($titleNum);
}

?>




