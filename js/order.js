// view more feed

function getProduct() {
    
    let data = {request: "dashboardOrder"};
    $.ajax({
      type: "post",
      url: "http://localhost/College%20Project/server.php",
      data: data,
      success: function (response) {
        response = JSON.parse(response);
        console.log(response)
        let table_body = document.getElementById('table-body')
        
        
        response.map((data)=>{

            // totalPrice += parseInt(data.price);

            table_body.innerHTML += `
            <tr>
                <th scope="row">${data.orderId}</th>
                <td>${data.pname}</td>
                  <td>${data.qty}</td>
                  <td>${data.price}</td>
                  <td>${data.GST}</td>
                  <td>${data.afterGST}</td>
                  <td>${data.reg_date.split(' ')[0]}</td>
            </tr> `
            
        })
  
      },
    });
  }

  getProduct();

  function getSearchVal() {
      let searchVal = document.getElementById('search-bar').value;
    //   console.log(searchVal)

      let data = {request: "searchOrder",searchVal};
      $.ajax({
        type: "post",
        url: "http://localhost/College%20Project/server.php",
        data: data,
        success: function (response) {
            console.log(JSON.parse(response))
          response = JSON.parse(response);
          let table_body = document.getElementById('table-body')
          
          table_body.innerHTML = " " 
          
          response.map((data)=>{
              
  
              table_body.innerHTML +=`
              <tr>
                  <th scope="row">${data.orderId}</th>
                  <td>${data.pname}</td>
                    <td>${data.qty}</td>
                    <td>${data.price}</td>
                    <td>${data.GST}</td>
                    <td>${data.afterGST}</td>
                    <td>${data.reg_date.split(' ')[0]}</td>
              </tr> `
              
          })
    
        },
      });
      
  }