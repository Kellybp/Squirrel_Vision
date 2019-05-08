<?php
	//Header
	include("Models/indexHeader.php");
?>
<div id="headNav">
	<img src="images/download.jpg" style="width:20%; height:auto">
</div>
<div id="mySidenav" class="sidenav">
  <div id="sideMenu">
	  <?php 
	  	$files = scandir('videos/');
		foreach($files as $file) { 
			if(($file!=".")&&($file!="..")){
  				include("Models/sideNav.php");
  			}
		}
	  ?>
  </div>
</div>


<div id="main">
	<!-- The expanding image container -->
	<div class="container">
	  <!-- Expanded image -->
	 
	  <video  id="expandedImg" width="100%" height="100%" controls>
		  <source id="source" src="" type="video/mp4">
	  </video> 
	 <div id="imgtext"></div> 
	</div>
	<br/>
	<br/>
	<?php 
	if(!empty($_GET['current'])){
		$files = scandir('videos/'.$_GET['current']);
			  	$rowcounter=1;
			  	include("Models/row.php");
				foreach($files as $file) { 
					if(($file!=".")&&($file!="..")){
		  				include("Models/videos.php");
		  				$rowcounter++;
		  				if($rowcounter%3==0){
		  					include("Models/endDiv.php");
		  					include("Models/row.php");
		  				}
		  			}
				}
				include("Models/endDiv.php");
			}
	  ?> 	
</div>


<script type="text/javascript" src="js/videos.js">

<?php
//Footer
 include("Models/indexFooter.php");
?>