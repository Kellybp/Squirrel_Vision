<?php
	//Header
//To use PHP I have to include it in <?php and ? > much link brackets
//This tells the server that in between the <?s I want to run php code
//Include simply includes all of the text of the location onto this page
	include("Models/indexHeader.php");
	include("Models/HeadNav.php");
?>
<a id="squirrel" href="/squirrelVision/"><img  src="images/squirrel.png" ></a>
<div id="sideNav">
 <!--<a id="close" href="javascript:void(0)" class="sideNavBtn" onclick="closeNav()">&#8592;</a>
 <a id="open" href="javascript:void(0)" class="sideNavBtn" onclick="openNav()">&#8594; </a>-->
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
		
	<?php if(isset($_GET['current'])): ?>
		<div id="location"><p><?php if(isset($_GET['current'])){echo($_GET['current']);} ?></p></div>
		<!--Video Container-->
		<div class="container">
			<video  id="expandedImg" width="100%" height="100%" controls="controls">
				<source id="source" src="" type="video/mp4">
			</video> 
		<div id="videoText"></div> 
		<!--<div id="videoTarget"></div>-->
		</div>
		<?php else: ?>
		<div id="location"><p>Edit Menu</p></div>
		<?php
			$rowcounter=1;
			include("Models/row.php");
				foreach($files as $file) { 
					if(($file!=".")&&($file!="..")){
							include("Models/home.php");
							if($rowcounter%3==0){
		  					include("Models/endDiv.php");
		  					include("Models/row.php");
							}
							$rowcounter++;
		  			}
				} ?>
	<?php endif ?>
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
		  				if($rowcounter%3==0){
		  					include("Models/endDiv.php");
		  					include("Models/row.php");
							}
							$rowcounter++;
		  			}
				}
				include("Models/endDiv.php");
			}
	  ?> 	
</div>


<script type="text/javascript" src="js/videos.js"></script>
<script type="text/javascript" src="js/sideNav.js"></script>
<script type="text/javascript">


	/*$(document).on('scroll', function() {
    if($(this).scrollTop()>=$('#videoTarget').position().top){
       $('#expandedImg').attr("controls");
    }
	});

	window.setInterval(function(){
  	var video = document.getElementById('expandedImg');
	var curtime = video.currentTime;
	}, 5000);*/
	
</script>
<?php
//Footer
 include("Models/indexFooter.php");
?>