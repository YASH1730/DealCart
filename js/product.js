// view more feed

function getProduct() {
  let data = { request: "productList" };
  $.ajax({
    type: "post",
    url: "http://localhost/College%20Project/server.php",
    data: data,
    success: function (response) {
      response = JSON.parse(response);
      console.log(response);
      let table_body = document.getElementById("table-body");

      response.map((data) => {
        // totalPrice += parseInt(data.price);

        table_body.innerHTML += `
            <tr>
                <th scope="row">${data.id}</th>
                <td>${data.pname}</td>
                <td>${data.QTY}</td>
                <td>${data.MRP}</td>
                <td>${data.dealer}</td>
            </tr> `;
      });
    },
  });
}

getProduct();

function getSearchVal() {
  let searchVal = document.getElementById("search-bar").value;
  //   console.log(searchVal)

  let data = { request: "productList", searchVal };
  $.ajax({
    type: "post",
    url: "http://localhost/College%20Project/server.php",
    data: data,
    success: function (response) {
      console.log(response);
      response = JSON.parse(response);
      let table_body = document.getElementById("table-body");

      table_body.innerHTML = " ";

      response.map((data) => {
        table_body.innerHTML += `
              <tr>
                  <th scope="row">${data.id}</th>
                  <td>${data.pname}</td>
                  <td>${data.QTY}</td>
                  <td>${data.MRP}</td>
                  <td>${data.dealer}</td>
              </tr> `;
      });
    },
  });
}
