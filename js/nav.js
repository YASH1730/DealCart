/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  }
  
  /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "white";
  }
  
  if(window.location.href != "http://localhost/College%20Project/php/home.php")
  {
      let nav = document.getElementById('nav');
      nav.style.position = "relative";
      nav.style.backgroundColor = "rgb(4 21 31)";
      
    }
    else{
    let nav = document.getElementById('nav');
    nav.style.position = "absolute";
    nav.style.backgroundColor = "#04151f5e";

  }


  //for ppass