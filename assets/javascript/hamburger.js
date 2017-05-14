
/**
  Function used to toggle the class for .hamburger
  Causes animation for hamburger
  Also used to check position of hamburger and adjust
  position when pressed
**/

function mobileNav(x) {
    x.classList.toggle("change");
    if(document.getElementById("nav-inner").style.right == ""){
        document.getElementById("nav-inner").style.right = "0px";
    }else if(document.getElementById("nav-inner").style.right == "-130px"){
        document.getElementById("nav-inner").style.right = "0px";
    }else if(document.getElementById("nav-inner").style.right == "0px"){
        document.getElementById("nav-inner").style.right = "-130px";
    }
    document.getElementById("nav-inner").style.transition = ".5s";
}
