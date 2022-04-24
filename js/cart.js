/* Set rates + misc */
var taxRate = 0.05;
var shippingRate = 15.00; 
var fadeTime = 300;
var total = 0;


$(window).load(()=>{

  recalculateCart();

  /* Assign actions */
$('.product-quantity input').change( function() {
  updateQuantity(this);
});

$('.product-removal button').click( function() {
  removeItem(this);
});



/* Recalculate cart */
function recalculateCart()
{
  var subtotal = 0;
  
  /* Sum up row totals */
  $('.product').each(function () {
    subtotal += parseFloat($(this).children('.product-line-price').text());
  });
 
  
  /* Calculate totals */
  var tax = subtotal * taxRate;
  var shipping = (subtotal > 0 ? shippingRate : 0);
  total = subtotal + tax + shipping;
  
  /* Update totals display */
  $('.totals-value').fadeOut(fadeTime, function() {
    $('#cart-subtotal').html(subtotal.toFixed(2));
    $('#cart-tax').html(tax.toFixed(2));
    $('#cart-shipping').html(shipping.toFixed(2));
    $('#cart-total').html(total.toFixed(2));
    if(total == 0){
      $('.checkout').fadeOut(fadeTime);
    }else{
      $('.checkout').fadeIn(fadeTime);
    }
    $('.totals-value').fadeIn(fadeTime);
  });
}


/* Update quantity */
function updateQuantity(quantityInput)
{
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.product-price').text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;
  
  /* Update line price display and recalc cart totals */
  productRow.children('.product-line-price').each(function () {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });  
}


/* Remove item from cart */
function removeItem(removeButton)
{
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton).parent().parent();
  removefromDB();
  productRow.slideUp(fadeTime, function() {
 // for get the name of the product 
    productRow.remove();
    recalculateCart();
  });
}
})

// remove product from db

function removefromDB() {
  // console.log("Yahatn is here")
  let product = document.querySelectorAll('.product');
  product.forEach(element => {
    $(element).click(()=>{
      element = element.innerText.split('\n');
      let data  = {pname : element[0],cname : element[1],request : "removeItem"};
      $.ajax({
        type: "post",
        url: "http://localhost/College%20Project/server.php",
        data: data,
        success: function (response) {
          alert(response);
          
        }
      });
    })
  });
  
}


// fetching all cart data from db

function getCartItem() {
  console.log(localStorage.getItem('email'));
  let data  ={request:"cartDetails",email : localStorage.getItem('email')}
  $.ajax({
    type: "post",
    data:data,
    url: "http://localhost/College%20Project/server.php",
    success: function (response) {
      console.log(response)
      let cart = document.getElementById('cart-container');
      cart.innerHTML += response;
      
    }
  });
  
}

function checkout() {
  let data  ={total : total, email : localStorage.getItem('email'),request: "checkout"}

  $.ajax({
    url: "http://localhost/College%20Project/server.php",
    type: "post",
    data:data,
    success: function (response) {
      window.location = response;
    }
  });
}

getCartItem();

