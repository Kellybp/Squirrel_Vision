<div class="col s12 m4">
  <div class="card small hovering editMenu">
    <div class="card-image edit">
      <img src="images/<?php echo$file ?>.jpg">
    </div>
    <div class="card-content">
        <a href="?edit=<?php echo$file; ?>" class="btn hovering green">Edit</a>
        <a href="?delete=<?php echo$file; ?>" class="btn hovering red">Delete</a>
    </div>
  </div>
</div>