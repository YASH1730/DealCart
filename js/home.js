//services
// console.log("i am in");
function showInfo(params) {
  let mode = params;
  console.log(params);
  $.ajax({
    url: "http://localhost/College%20Project/ajaxPHP/showInfo.php",
    type: "post",
    data: `mode=` + mode,
    success: function (result) {
      let info = document.getElementById("info");
      let back = document.getElementById("modal");

      info.style.animation = "none";
      setTimeout(() => {
        info.style.animation = "";
        info.style.display = "block";
        back.style.display = "block";

        info.innerHTML = result;
      }, 3);
    },
  });
}

function loader(){
  let supe = document.getElementById('super-container');
  
  console.log(typeof(sessionStorage.getItem("Load")))
  
  if(sessionStorage.getItem("Load") === null)
  {
    let Loader = document.getElementById('loader-container');
    console.log("i am loading !!!")
    Loader.style.visibility = "visible";
    setInterval(() => {
      Loader.style.visibility = "hidden";
      supe.style.visibility = "visible";
      sessionStorage.setItem("Load",true)
    }, 1500);
  }
  else{
  supe.style.visibility = "visible";}
}


window.onload = ()=>{
  loader();
}

function c() {
  let info = document.getElementById("info");
  // info.classList.add('animate__fadeOutUp');
  info.style.display = "none";
  modal.style.display = "none";

}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  let back = document.getElementById("modal");
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

// feed

function renderCat(catName, limit) {
  // console.log(catName,limit);
  localStorage.setItem('category',catName)
  let data = { catname: catName, request: "catname", limit: limit };
  $.ajax({
    type: "post",
    url: "http://localhost/College%20Project/server.php",
    data: data,
    success: function (response) {
      let feed = (document.getElementById("feed").innerHTML = response);

      let btn = document.getElementById('view more');
      btn.setAttribute("onclick", `viewmore("${catName}")`);
      btn.style.display = "block";
      btn.style.margin = "auto";

      
      document.getElementById("btn").appendChild(btn);

      addeventToProducts();
    },
  });
}

// view more feed

function viewmore(catName) {
  let limit = document.getElementById("limit").innerText;
  limit += 5;
  console.log(catName);
  let data = { catname: catName, request: "catname", limit: limit };
  $.ajax({
    type: "post",
    url: "http://localhost/College%20Project/server.php",
    data: data,
    success: function (response) {
      // console.log(response);
      let feed = (document.getElementById("feed").innerHTML = response);
      addeventToProducts();

    },
  });
}

// add to event to products

function addeventToProducts() {
  let elementsArray = document.querySelectorAll(".box-up");
  // let elements = document.querySelectorAll(".img");

  elementsArray.forEach(function (elem) {
    elem.addEventListener("click", function () {
      //this function does stuff
      let pname = elem.innerText.split("Offers")[0];

    //  pname = pname.replace('&'," & ");

      window.location.href = `http://localhost/College%20Project/php/productinfo.php?pname=${pname}`;
    });
  });
}

//addToCart

function addToCart(params) {

  if (localStorage.getItem('email') !== null) {

  let addToCart = document.querySelectorAll(".cart");
let count = 1;
  addToCart.forEach((element) => {
    element.addEventListener("click", (e) => {
        
        while(count > 0){
            let slice = element.innerText.split('&');
            let pname =slice[0];
            slice = slice[1];
            let pimg = slice.split('Rs.')[0];
            let price  = element.innerText.split('Rs.')[1];
            price = price.split('ADD')[0];
            console.log(slice,pname,pimg,price);
            let data  = {pimg,pname,price,coustomer : localStorage.getItem('email'),request : "addtocart",qty:1, category : localStorage.getItem('category')};
            $.ajax({
                type: "post",
                url: "http://localhost/College%20Project/server.php",
                data: data,
                success: function (response) {
                    alert(response);
                }
            });
            count--;
        }

    });
  });}
  else 
    window.location.href = 'http://localhost/College%20Project/php/log.php'
}
