<?php 
  if(!is_dir('videos/'.$_GET['current'].'/'.$file)): ?>
    <div class="col s12 m4">
    <div class="card small hovering">
      <!--Use this line to link back to top href='#'
        While using onclick to setup the video-->
      <a href="#" onclick="myFunction('<?php echo($file); ?>','<?php echo $_GET['current']; ?>')">
          <div class="card-image">
            <img src="images/<?php echo $_GET['current']; ?>.jpg" alt="<?php echo($file); ?>">
          </div>
          <div class="card-content">
            <p><?php echo($file); ?></p>
          </div>
      </a>
        </div>
  </div>
  <?php endif ?>