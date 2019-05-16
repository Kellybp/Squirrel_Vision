<?php
//Check to see if video is set 
if(isset($_POST['imageData'])){
	$videoTitle = explode(".mp4", $_POST['video']));
	$data = substr($_POST['imageData'], strpos($_POST['imageData'], ",") + 1);
	$decodedData = base64_decode($data);
	$fp = fopen("../images/".$_POST['dir']).'/'.$videoTitle[0].'.png', 'wb');
	fwrite($fp, $decodedData);
	fclose();
}
?>