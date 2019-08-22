function openNav(){document.getElementById("mySidenav").style.height = "180px";}
function closeNav(){document.getElementById("mySidenav").style.height = "0";}

function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}