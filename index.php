<?php
   //Header
	include("Models/indexHeader.php");
	include("Models/HeadNav.php");
	include("Models/rowGenerator.php");
	function deleteDir($dir) {
		$it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
		$files = new RecursiveIteratorIterator($it,
             RecursiveIteratorIterator::CHILD_FIRST);
		foreach($files as $file) {
			if ($file->isDir()){
					rmdir($file->getRealPath());
			} else {
					unlink($file->getRealPath());
			}
		}
		rmdir($dir);
	}
?>
<!--Icon-->
<a id="squirrel" href="/squirrelVision/"><img  src="images/icons/squirrel.png" ></a>

<!--SideNav-->
<div id="sideNav">
   <a id="close" href="javascript:void(0)" class="sideNavBtn" onclick="closeNav()">&#8592;</a>
   <a id="open" href="javascript:void(0)" class="sideNavBtn" onclick="openNav()">&#8594; </a>
   <div id="sideMenu">
      <?php 
		$files = scandir('videos/');
		rowGenerator($files,"Models/sideNav",true);
     ?>
   </div>
</div>

<div id="main">
	<?php if(isset($_GET['current'])): ?>
	 <!--Viewing Menu-->
		<div id="location"><p><?php echo($_GET['current']); ?></p></div>
		<div class="container">
				<video  id="expandedImg" width="100%" height="100%" controls="controls">
					<source id="source" src="" type="video/mp4">
				</video>
				<div id="videoText"></div>
				<!--<div id="videoTarget"></div>-->
		</div>
		<br/>
   		<br/>
		<?php 
			$files = scandir('videos/'.$_GET['current']); 
			rowGenerator($files,"Views/videos");
		?>
	<?php elseif (isset($_GET['edit'])): include('Views/editView.php');?>
	<?php elseif (isset($_GET['delete'])): ?>
	 <!--Delete Menu-->
			<div id="location"><p>Delete: <?php echo $_GET['delete']; ?></p></div>
			<p>Are you sure?</p>
			<form action="delete.php">
			<input type="checkbox">
			</form>
	<?php else: ?>
	 <!--Main Edit Menu/Default-->
		<div id="location"><p>Edit Menu</p></div>
		<?php rowGenerator($files,"Views/editMenuCards");?>
	<?php endif ?>
</div>

<?php
  //Footer
  include("Models/indexFooter.php");
?>