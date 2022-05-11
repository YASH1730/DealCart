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
        let totalSeals = 0;
        let totalMonth = 0;
        let todayTotal = 0;
        
        response.map((data)=>{

          // console.log(data.reg_date.split(' ')[0].split('-')[1])
          // console.log(new Date().toLocaleDateString().split('/')[0])

          if(data.reg_date.split(' ')[0].split('-')[2] === new Date().toLocaleDateString().split('/')[1])
          {
            todayTotal += parseInt(data.afterGST); 
            // console.log(todayTotal)
          }
          if(data.reg_date.split(' ')[0].split('-')[1] === '0'+new Date().toLocaleDateString().split('/')[0])
          {
            totalMonth += parseInt(data.afterGST); 
            // console.log(totalMonth)
          }
          
          totalSeals += parseInt(data.afterGST);

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
        
        document.getElementById('totalPrice').innerHTML = `Rs.${todayTotal}`;
        document.getElementById('totalPrice2').innerHTML = `Rs.${totalMonth}`;
        document.getElementById('totalPrice3').innerHTML = `Rs.${totalSeals}`;
  
      },
    });
  }

  getOrders();