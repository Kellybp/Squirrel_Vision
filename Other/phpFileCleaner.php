 <?php 
  	$dirs = scandir('../videos');
	foreach($dirs as $dir) { 
		if(($dir!=".")&&($dir!="..")){
			$videos = scandir('../videos/'.$dir);
			foreach($videos as $video) { 
				if(($video!=".")&&($video!="..")){
					$path = '../videos/'.$dir.'/'.$video;
					if(preg_match("(')",$video)){
						rename($path, $path.preg_replace("(')","",$video));
					}
					if(preg_match("(#)",$video)){
						rename($path, $path.preg_replace("(#)","",$video));
					}
				}
			}
		}
	}
?>