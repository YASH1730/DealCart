function Check(redirectURL,desiredURL){
    let check =  localStorage.getItem('isLogin'); 
    if( check !== null)
    {
        window.location = desiredURL;
    }
    else{        
        window.location = redirectURL ;
    }
}

function logout() {
    let data = {email : localStorage.getItem('email'),request : 'logout'} ;
    console.log(data)
    $.ajax({
        url: 'http://localhost/College%20Project/server.php',
        type: 'post',
        data : data,
        success:function (result) {
            
            if(result == "http://localhost/College%20Project/php/home.php")
            {
                localStorage.clear()
                alert("You are loged out !!!")
                window.location = result;   
            }
            else{
                alert(result);
            }
        }
        
    })
    
}
