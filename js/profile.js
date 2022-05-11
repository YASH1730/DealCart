// ajax details rendering

//services

function show(params) {
  let tab = params;
  $.ajax({
    url: "http://localhost/College%20Project/ajaxPHP/details.php",
    type: "post",
    data: `tab=` + tab,
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

function order(params) {
  let data = { request: "getOrder", email: localStorage.getItem("email") };
  $.ajax({
    type: "post",
    data: data,
    url: "http://localhost/College%20Project/server.php",
    success: function (response) {
      console.log(response);
      let info = document.getElementById("info-order");
      let back = document.getElementById("modal-order");

      info.style.animation = "none";
      setTimeout(() => {
        info.style.animation = "";
        info.style.display = "grid";
        back.style.display = "grid";

        JSON.parse(response).map((data) => {
          info.innerHTML += `
          <div class="card" style="width: 18rem;">
  <img src="../images/product/${data.pimg}" class="card-img img" alt="...">
  <div class="card-body">
    <h5 class="card-title">${data.pname}</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>OID : </strong> ${data.orderId} </li>
    <li class="list-group-item"><strong>Quentity : </strong> ${data.qty} </li>
    <li class="list-group-item"><strong>Price : </strong> ${data.afterGST} </li>
    <li class="list-group-item"><strong>Date : </strong> ${data.reg_date.split(' ')[0]} </li>
  </ul>

</div>
                `;
        });
      }, 3);
    },
  });
}

function c() {
  let info = document.getElementById("info");
  let back = document.getElementById("modal");
  let info_order = document.getElementById("info-order");
  let back_order = document.getElementById("modal-order");

  back.style.display = "none";
  info.style.display = "none";

  back_order.style.display = "none";
  info_order.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  let back = document.getElementById("modal");
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

//wallet

function addmore() {
  let addmore = (document.getElementById("addmore").style.display = "none");
  let addmoreform = (document.getElementById("addmore-form").style.display =
    "flex");
}
