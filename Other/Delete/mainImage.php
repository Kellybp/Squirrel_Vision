<video  id="expandedImg<?php echo$HTMLcounter ?>" width="100%" height="100%" controls>
			 <source id="source" src="<?php echo('../videos/'.$dir.'/'.$video) ?>" type="video/mp4">
		</video> 
		<canvas id="myCanvas<?php echo$HTMLcounter ?>" style="width:100%; height:100%;" style="border:1px solid #d3d3d3;">
		Your browser does not support the HTML5 canvas tag.
		</canvas>
		<!--<button style="width:50%; height:50%;" onclick="ImageCap()">Fuck Da Police</button>-->
	
	
	<script type="text/javascript">
		window.onload  = ImageCap();
		function ImageCap(){
			var c = document.getElementById("myCanvas<?php echo$HTMLcounter ?>");
  var ctx = c.getContext("2d");
  var video = document.getElementById("expandedImg<?php echo$HTMLcounter ?>");
  ctx.drawImage(video, 10, 10, c.width, c.height);

var dataURI = c.toDataURL();
$.post("processing.php", {
	imageData : dataURI,
	dir : "<?php echo$dir ?>",
	video : "<?php echo$video ?>"
}, function(dataURI) {
	window.location = dataURI;
});
		}
	</script>