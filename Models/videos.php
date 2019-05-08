<div class="col s12 m4">
	<div class="card small hoverable" onclick="myFunction('<?php echo($file); ?>','<?php echo $_GET['current']; ?>')">
        <div class="card-image">
          <img src="images/<?php echo $_GET['current']; ?>.jpg" alt="<?php echo($file); ?>">
        </div>
        <div class="card-content">
          <p><?php echo($file); ?></p>
        </div>
      </div>
</div>