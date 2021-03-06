<?php
session_start();

$api_key = "rzp_test_mjCU29xGYzOeY1";
$total = ceil($_SESSION['total']);
$email = $_SESSION['email'];


?>
<form action="http://localhost/College%20Project/php/thanks.php" method="POST">
    <script    src="https://checkout.razorpay.com/v1/checkout.js"
        data-key=<?php echo $api_key; ?>   // Enter the Test API Key ID generated from Dashboard → Settings → API Keys    
        data-amount= <?php echo (intval($total) * 100) ;?>   // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.   
        data-currency="INR"   // You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account    
        data-id=<?php echo "OID".rand(10,100)."END"; ?>  // Replace with the order_id generated by you in the backend.    
        data-buttontext="Pay To Deal Cart"    
        data-name="Deal Cart"    
        data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"    
        data-image="https://res.cloudinary.com/dm69tqg8z/image/upload/v1644779877/logo_d3h0mj.png"    
        data-prefill.name="Yashwant Sahu"    
        data-prefill.email=<?php echo $email;?>    
        data-theme.color="#ff4d00">
    </script>
    <input type="hidden" custom="Hidden Element" name="hidden">
</form>

<style>
    .razorpay-payment-button{
        display:none;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {

        $('.razorpay-payment-button').click();
    });
</script> 