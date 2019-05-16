function myFunction(imgs, current) {
  // Get the expanded image
  var expandImg = document.getElementById("expandedImg");
  // Get the image text
  var imgText = document.getElementById("videoText");
  var source = document.getElementById("source");
  // Use the same src in the expanded image as the image being clicked on from the grid
  source.src = "videos/"+ current +"/" + imgs;
  // Use the value of the alt attribute of the clickable image as text inside the expanded image
  imgText.innerHTML = imgs;
  // Show the container element (hidden with CSS)
  expandImg.parentElement.style.display = "block";
  expandImg.load();
  expandImg.play();
}