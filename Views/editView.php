<!--Edit Menu-->
<div id="location"><p>Edit :  <?php echo $_GET['edit']; ?></p></div>
<!--Need to change js for sortableessssssss-->
<form action="videoManager/moveFile.php" method="POST" id="editForm">
	<input type="hidden" name="artist" value="<?php echo $_GET['edit']; ?>">
	<?php 
		$counter = 0;//For sortable Ids
		$subCounter = 0;
		include("Models/editImage.php");
		editImage($_GET['edit'], $counter);
		$files = scandir('videos/'.$_GET['edit']);
		echo('<input type="hidden" name="sortable'.$counter.'Path" value="'.'videos/'.$_GET['edit'].'">');
		echo('<ul id="sortable'.$counter.'" class="connectedSortable">');
		echo('<li>Name<div style="float:right;"><img src="images/icons/trash.png" style="height:32px; width: 32px;"></div></li>');
		foreach($files as $file) { 
			if(($file!=".")&&($file!="..")){
				//If is directory
				if(!is_dir('videos/'.$_GET['edit'].'/'.$file)){
					include("Views/videosEdit.php");
				}
			}
		}
		$counter++;
		echo('</ul>');

		foreach($files as $file) { 
			if(($file!=".")&&($file!="..")){
				//If is directory
				if(is_dir('videos/'.$_GET['edit'].'/'.$file)){
					echo('<input type="hidden" name="sortable'.$counter.'Path" value="'.'videos/'.$_GET['edit'].'/'.$file.'">');
					editImage($_GET['edit'].'/'.$file, $counter);
					echo('<ul id="sortable'.$counter.'" class="connectedSortable">');
					$subFiles = scandir('videos/'.$_GET['edit'].'/'.$file);
					rowGenerator($subFiles,"Views/videosEdit", true, $counter, $subCounter);
					$counter++;
					echo('</ul>');
				}
			}
		}
	?>
	<input type="submit">
</form>