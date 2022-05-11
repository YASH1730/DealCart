function getCartItem() {
    // console.log('i am in');
    let data  ={request:"order",email: localStorage.getItem('email')}
    $.ajax({
      type: "post",
      data:data,
      url: "http://localhost/College%20Project/server.php",
      success: function (response) {
          console.log(response);
          JSON.parse(response).map((data)=>{
            document.getElementById('table-content').innerHTML += `<tr>
            <th scope="row">${data.orderId}</th>
            <td>${data.pname}</td>
            <td>${data.qty}</td>
            <td>${data.price}</td>
            <td>${data.GST}%</td>
            <td>${data.afterGST}</td>
          </tr>`

          })
      }
    });
    
  }

  getCartItem()
