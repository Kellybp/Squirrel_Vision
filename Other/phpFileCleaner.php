 <?php 
  	$dirs = scandir('../videos');
	foreach($dirs as $dir) { 
		if(($dir!=".")&&($dir!="..")){
			$videos = scandir('../videos/'.$dir);
			foreach($videos as $video) { 
				if(($video!=".")&&($video!="..")){
					echo $video;
					if(preg_match("(')",$video)){
						$path = '../videos/'.$dir.'/'.$person.'/';
						rename($path.$video, $path.preg_replace("(')","",$video));
					}
					if(preg_match("(#)",$video)){
						rename($path.$video, $path.preg_replace("(#)","",$video));
					}
				}
			}
		}
	}
?>