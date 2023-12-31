function toggleDiv() {
  var div = document.getElementById("myDiv");
  
  if (div.style.display === "none") {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
}
 
window.onload = function() {
  var div = document.getElementById("myDiv");
  var visibilityState = localStorage.getItem("divVisibility");
  
  if (visibilityState === "visible") {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
}
 
window.onbeforeunload = function() {
  var div = document.getElementById("myDiv");
  var visibilityState = div.style.display;
  
  if (visibilityState === "block") {
    localStorage.setItem("divVisibility", "visible");
  } else {
    localStorage.setItem("divVisibility", "hidden");
  }
}

function toggle() {
  var div = document.getElementById("myDiv");
  
  if (div.style.display === "none") {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
}
 
window.onload = function() {
  var div = document.getElementById("myDiv");
  var visibilityState = localStorage.getItem("divVisibility");
  
  if (visibilityState === "visible") {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
}
 
window.onbeforeunload = function() {
  var div = document.getElementById("myDiv");
  var visibilityState = div.style.display;
  
  if (visibilityState === "block") {
    localStorage.setItem("divVisibility", "visible");
  } else {
    localStorage.setItem("divVisibility", "hidden");
  }
}


