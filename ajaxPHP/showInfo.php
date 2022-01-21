<?php

if($_POST['mode'] == "payment")
    echo "<small onclick = 'c()'> &#x274C;</small><h5>Secure Payament</h5> As part of a secure payment, your credit card number, expiry date and cryptogram are encrypted in the transmission to protect you and ensure that no data flows in the clear via the internet.";
else if($_POST['mode'] == "support")
    echo "<small onclick = 'c()'> &#x274C;</small><h5>Support </h5>As part of a secure payment, your credit card number, expiry date and cryptogram are encrypted in the transmission to protect you and ensure that no data flows in the clear via the internet.";
else if($_POST['mode'] == "fastD")
    echo "<small onclick = 'c()'> &#x274C;</small><h5>Fast Delivery </h5> As part of a secure payment, your credit card number, expiry date and cryptogram are encrypted in the transmission to protect you and ensure that no data flows in the clear via the internet.";
else if($_POST['mode'] == "dealer")
    echo "<small onclick = 'c()'> &#x274C;</small><h5>Genuine Dealer</h5> As part of a secure payment, your credit card number, expiry date and cryptogram are encrypted in the transmission to protect you and ensure that no data flows in the clear via the internet.";

?>