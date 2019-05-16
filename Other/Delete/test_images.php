 
<html>
	<body>
	<?php 
	
	$dirs = scandir('../videos');
	$counter = 0;
	foreach($dirs as $dir) { 
		if(($dir!=".")&&($dir!="..")){
			//$fi = new FilesystemIterator('../videos/'.$dir, FilesystemIterator::SKIP_DOTS);
			//printf("There were %d Files in ".$dir, iterator_count($fi));
			//$counter = iterator_count($fi);
			//Create Directory
			if (!file_exists('../images/'.$dir)) {
			    mkdir('../images/'.$dir, 0777, true);
			}
			$videos = scandir('../videos/'.$dir);
			foreach($videos as $video) { 
				//printf('<p>How many left:'.$counter--."</p>");

				if(($video!=".")&&($video!="..")){
					$HTMLcounter++;
					include('mainImage.php');
					sleep(1);
				}
			}
		}
	}	*/
?>	</body>
<script src="../js/jquery2.1.1.min.js"></script>
</html>