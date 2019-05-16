function openNav() {
  document.getElementById("mySidenav").style.width = "20%";
  document.getElementById("main").style.marginLeft = "20%";
  document.getElementById("close").style.display = "block";
  document.getElementById("open").style.display = "none";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "5%";
  document.getElementById("main").style.marginLeft = "10%";

  document.getElementById("open").style.display = "block";
  document.getElementById("close").style.display = "none";
}