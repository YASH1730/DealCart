// function for add to cart

function addToCart(params) {

    let quentity = document.getElementById('quentity').value
    let price = document.getElementById('price').value

    console.log(params)


    if (localStorage.getItem('email') !== null) {

        let data = { pimg: params.image, pname: params.pname, price: price, coustomer: localStorage.getItem('email'), request: "addtocart", qty: quentity, category : params.category  };

        console.log(data)
        $.ajax({
            type: "post",
            url: "http://localhost/College%20Project/server.php",
            data: data,
            success: function (response) {
                return alert(response);
            }
        });
    }
    else
        window.location.href = 'http://localhost/College%20Project/php/log.php'

}

async function buyNow(params) {
    if (localStorage.getItem('email') !== null) {
        addToCart(params);
        window.location.href = 'http://localhost/College%20Project/php/cart.php'
    }
    else {
        window.location.href = 'http://localhost/College%20Project/php/log.php'

    }

}
