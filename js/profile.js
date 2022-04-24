// ajax details rendering

//services 

function show(params) {
    let tab = params;
    $.ajax({
        url: 'http://localhost/College%20Project/ajaxPHP/details.php',
        type: 'post',
        data : `tab=`+tab,
        success:function (result) {
            let info = document.getElementById('info');
            let back = document.getElementById('modal');
            
            info.style.animation = "none";
            setTimeout(() => {
                info.style.animation = "";
                info.style.display = "block";
                back.style.display = "block";
                
                info.innerHTML = result;
                
            }, 3);
            
        }
        
    })
    
}

function order(params) {
    let data  ={request:"getOrder",email : localStorage.getItem('email')}
  $.ajax({
    type: "post",
    data:data,
    url: "http://localhost/College%20Project/server.php",
    success: function (response) {
      console.log(response)
      let cart = document.getElementById('details');
      cart.innerHTML += response;
      
    }
  });
    
}

function c(){
    let info = document.getElementById('info');
    let back = document.getElementById('modal');
    back.style.display = "none";
    info.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    let back = document.getElementById('modal');
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

 

//wallet

function addmore() {
    let addmore = document.getElementById('addmore').style.display = "none";
    let addmoreform = document.getElementById('addmore-form').style.display = "flex";
    
}
