function openNav() {
  document.getElementById("sideNav").style.width = "15%";
  document.getElementById("main").style.marginLeft = "20%";
  document.getElementById("close").style.display = "block";
  document.getElementById("open").style.display = "none";
}

function closeNav() {
  document.getElementById("sideNav").style.width = "1%";
  document.getElementById("main").style.marginLeft = "5%";

  document.getElementById("open").style.display = "block";
  document.getElementById("close").style.display = "none";
}