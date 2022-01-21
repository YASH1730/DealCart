 //for password
  
 function show() {
    var x = document.getElementById("reg-password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
 function show() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }


// for registrotion

$("#reg-form").submit((e)=>{

  e.preventDefault()
  
  let fname = $('#reg-firstname').val();
  let lname = $('#reg-lastname').val();
  let email = $('#reg-email').val();
  let pass = $('#password').val();
  let repass = $('#reg-repassword').val();
  let address = $('#reg-address').val();

  if(fname != "" && lname != "" && email != "" && pass != "" &&repass != "" && address != "")
  {
    if(pass != repass)
      {
        $("#repass-block").append(`<small style = "color : red;"> Password doesn't match !!!</small>`);    
      }
    else{

      let data = {fname : fname,lname : lname,email : email,pass : pass,address : address,request : 'register'};
      $.ajax({
        type: "post",
        url: "http://localhost/College%20Project/server.php",
        data: data,
        success: function (response) {

          if(response != "http://localhost/College%20Project/php/home.php"){
            console.log(response);
            let al = document.getElementById('alert');
            al.style.display = "block";
            al.style.color = "red";
            al.innerText =  response;;
            
          }
          else
              window.location.href=response;
        }
      });
    }
  } 
  else
  {
    $('#afm').html(`<div id = "afm" class="alert alert-danger alert-dismissible fade show " role="alert">
    <strong>All feilds are mandatory!!!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>`);
  } 
})

// for login

$("#log-form").submit((e)=>{

  e.preventDefault();
  
  console.log("i am in ");

  let email = $('#log-email').val();
  let pass = $('#password').val();
  

  if(email != "" && pass != "")
  {

      let data = {email : email,pass : pass,request : 'login'};
      $.ajax({
        type: "post",
        url: "http://localhost/College%20Project/server.php",
        data: data,
        success: function (response) {
          if (response == "http://localhost/College%20Project/php/home.php")
            window.location.href = response;
          else
            alert(response);
         
        }
      });
  } 
  else
  {
    $('#afm').html(`<div id = "afm" class="alert alert-danger alert-dismissible fade show " role="alert">
    <strong>All feilds are mandatory!!!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>`);
  } 
})



