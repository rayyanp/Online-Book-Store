<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- makes website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Books</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <h1 class="text-center">Best Books</h1>
    <section class="navbar">
        <section class="container">
            <figure class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Books Logo" class="img-responsive">
                </a>
            </figure>

            <nav class="menu text-right">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="#">Books</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </nav>
            <!-- Navbar Section ends Here -->
            
            <aside class="clearfix"></aside>
        </section>
    </section>
    <main class="book-menu">
    <form action="success.php" method="POST"> 
          <section class="payment-menu-box">
                <a>
                    <img src="images/mastercard.png" alt="mastercard" class="payment-menu-img">
                </a>
            </figure>
            <h2 class="text-left">Payment</h2>
            <p><label for="ccnum">Credit card number: </label></p>
            <p><input class="label-box" type="text" id="ccnum" name="ccnum" placeholder="1111-2222-3333-4444" size=16></p>           
            <p><label for="expmonth">Expiry date: </label></p>
            <p><input class="label-box" type="text" id="month" name="month" placeholder="09" size=16></p>
            <p><input class="label-box" type="text" id="year" name="year" placeholder="2022" size=16></p>
            <p><label for="cvv">Security code: </label></p>
            <p><input class="label-box"type="text" id="cvv" name="cvv" placeholder="352" size=16></p>
            <p class="book-price">£9.99</p>
            <input type="hidden" id="hidden" name="hidden">
            <input type="submit" value="send" id='btn' class="payment-btn" />
            
        </section>
</form>
</main>
</body>
<script src="payment.js"></script>
</html>