function getCartItem() {
    // console.log('i am in');
    let data  ={request:"order",email: localStorage.getItem('email')}
    $.ajax({
      type: "post",
      data:data,
      url: "http://localhost/College%20Project/server.php",
      success: function (response) {
          console.log(response)
        alert('All Order Are added')
      }
    });
    
  }

  getCartItem()
