// view more feed

function getOrders() {
    
    let data = {request: "dashboardOrder"};
    $.ajax({
      type: "post",
      url: "http://localhost/College%20Project/server.php",
      data: data,
      success: function (response) {
        response = JSON.parse(response);

        let table_body = document.getElementById('table-body')
        document.getElementById('totalOrder').innerHTML = response[response.length-1].id;
        let totalPrice = 0;
        
        response.map((data)=>{

            totalPrice += parseInt(data.price);

            table_body.innerHTML += `
            <tr>
                <th scope="row">${data.id}</th>
                <td>${data.pname}</td>
                <td>${data.qty}</td>
                <td>${data.reg_date}</td>
                <td>${data.customer}</td>
                <td>${data.price}</td>
                <td>@mdo</td>
            </tr> `
            
        })
        
        document.getElementById('totalPrice').innerHTML = `Rs.${totalPrice}`;
        document.getElementById('totalPrice2').innerHTML = `Rs.${totalPrice-1000}`;
        document.getElementById('totalPrice3').innerHTML = `Rs.${totalPrice}`;
  
      },
    });
  }

  getOrders();