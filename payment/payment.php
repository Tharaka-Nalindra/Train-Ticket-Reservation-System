<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Paypal Payment</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main id="cart-main">
        <div class="site-title text-center">
            <h1 class="font-title">Payment</h1>
        </div>

        <div class="container">

                        <h3>Price Details</h3>

                        <ul>
                            <li class="flex justify-content-between">
                                <label for="price">Your Price : </label>
                                <span>Example LKR 100.00</span>
                            </li>
                            <li class="flex justify-content-between">
                                <label for="price">Delivery Charges : </label>
                                <span>Free</span>
                            </li>
                            <hr>
                            <li class="flex justify-content-between">
                                <label for="price">Amout Payble : </label>
                                <span class="text-red font-title">LKR 100.00</span>
                            </li>
                        </ul>
                        <div id="paypal-payment-button" style="padding-top: 50px; text-align: center;" >

                        </div>

        </div>
    </main>


    <script src="https://www.paypal.com/sdk/js?client-id=AVsct7XGhLIZc9NiEQb6jYTIuoUBmAc1BBhzzMqIW4Sqno1dYQHz7VdJSStjiRbx8XKjmwohmIJXy-8D&disable-funding=credit,card"></script>
    <script src="paymentscript.js"></script>
</body>
</html>
