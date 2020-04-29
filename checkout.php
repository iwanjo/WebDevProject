<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/ico" href="images/logo.png"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">


    <link rel="stylesheet" href="css-checkout/style-checkout.css">


    <title>Checkout - AfricaExplored</title>
</head>
<body>
<!--Nav Bar-->

<h2 style="text-align: center">AfricaExplored - Payment Checkout Form</h2>


            <form action="./checkout_form.php" method="post">
                <?php
                if (isset($_GET['payment'])) {
                    if ($_GET['payment'] == "success") {
                        echo '<p class = "empty">Check your email for your receipt</p>';
                    }
                }
                ?>
                <div class="container">
                    <div class="price">
                        <h1>Awesome, that's $599.99!</h1>
                    </div>
                    <div class="card__container">
                        <div class="card">
                            <div class="row paypal">
                                <div class="left">
                                    <input id="pp" type="radio" name="payment" />
                                    <div class="radio"></div>
                                    <label for="pp">Paypal</label>
                                </div>
                                <div class="right">
                            <img src="https://image.flaticon.com/icons/svg/2424/2424596.svg" alt = "paypal">
                                </div>
                            </div>
                            <div class="row credit">
                                <div class="left">
                                    <input id="cd" type="radio" name="payment" />
                                    <div class="radio"></div>
                                    <label for="cd">Debit/ Credit Card</label>
                                </div>
                                <div class="right">
                                    <img src="https://image.flaticon.com/icons/svg/179/179457.svg" alt = "visa">
                                    <img src="https://image.flaticon.com/icons/svg/825/825466.svg" alt="mastercard" />
                                    <img src="https://image.flaticon.com/icons/svg/196/196560.svg" alt="maestro" />
                                </div>
                            </div>
                            <div class="row cardholder">
                                <div class="info">
                                    <label for="cardholdername">Full Name</label>
                                    <input name="usersname" placeholder="John Doe" id="cardholdername" type="text" required/>
                                </div>
                            </div>
                            <div class="row number">
                                <div class="info">
                                    <label for="cardnumber">Card number</label>
                                    <input  name="card" id="cardnumber" type="text" pattern="[0-9]{16,19}" maxlength="19" placeholder="8888-8888-8888-8888" required/>
                                </div>
                            </div>
                            <div class="row details">
                                <div class="left">
                                    <label for="expiry-date">Expiry</label>
                                    <select id="expiry-date" required>
                                        <option>MM</option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                        <option value="6">06</option>
                                        <option value="7">07</option>
                                        <option value="8">08</option>
                                        <option value="9">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                    <span>/</span>
                                    <select id="expiry-date">
                                        <option>YYYY</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                    </select>
                                </div>
                                <div class="right">
                                    <label for="cvv">CVC/CVV</label>
                                    <input type="number" maxlength="3" placeholder="123" required/>
                                    <span data-balloon-length="medium" data-balloon="The 3 or 4-digit number on the back of your card." data-balloon-pos="up">i</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button">
                        <button name="submit-pay" type="submit"><i class="ion-locked"></i> Confirm and Pay</button>
                    </div>
                </div>


            </form>

</body>
</html>
