<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisan Marketplace - Make payments</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .path {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .svg-container {
            width: 5vw;
            height: 5vh;
            position: absolute;
            top: 35px;
            left: 15px;
            opacity: 1.0;
            animation: pulse 1.5s ease-in-out infinite;
            z-index: 5;
            /* Set a higher z-index to make sure it's on top */
        }

        .svg-container img {
            width: 80%;
            /* Use 100% width to fill the container */
            height: 80%;
            /* Use 100% height to fill the container */
            display: block;
            object-position: 100% 50%;
            transform: translate(-50%, -50%) rotate(0deg);
        }

        .wrapper {
            background-color: #fff;
            width: 500px;
            padding: 25px;
            margin: 25px auto 0;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
        }

        .wrapper h2 {
            background-color: #fcfcfc;
            color: #7ed321;
            font-size: 24px;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
            border: 1px dotted #333;
        }

        .input-group {
            margin-bottom: 8px;
            width: 100%;
            position: relative;
            display: flex;
            flex-direction: row;
            padding: 5px 0;
        }

        .input-box {
            width: 100%;
            margin-right: 12px;
            position: relative;
        }

        .input-box:last-child {
            margin-right: 0;
        }

        .name {
            padding: 14px 10px 14px 50px;
            width: 100%;
            background-color: #fcfcfc;
            border: 1px solid #00000033;
            outline: none;
            letter-spacing: 1px;
            transition: 0.3s;
            border-radius: 3px;
            color: #333;
        }

        .name:focus,
        .dob:focus {
            -webkit-box-shadow: 0 0 2px 1px #7ed32180;
            -moz-box-shadow: 0 0 2px 1px #7ed32180;
            box-shadow: 0 0 2px 1px #7ed32180;
            border: 1px solid #7ed321;
        }

        .input-box .icon {
            width: 48px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 0px;
            left: 0px;
            bottom: 0px;
            color: #333;
            background-color: #f1f1f1;
            border-radius: 2px 0 0 2px;
            transition: 0.3s;
            font-size: 20px;
            pointer-events: none;
            border: 1px solid #00000033;
            border-right: none;
        }

        .name:focus+.icon {
            background-color: #7ed321;
            color: #fff;
            border-right: 1px solid #7ed321;
            border: none;
            transition: 1s;
        }

        .dob {
            width: 30%;
            padding: 14px;
            text-align: center;
            background-color: #fcfcfc;
            transition: 0.3s;
            outline: none;
            border: 1px solid #c0bfbf;
            border-radius: 3px;
        }

        .radio {
            display: none;
        }

        .input-box label {
            width: 50%;
            padding: 13px;
            background-color: #fcfcfc;
            display: inline-block;
            float: left;
            text-align: center;
            border: 1px solid #c0bfbf;
        }

        .input-box label:first-of-type {
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;
            border-right: none;
        }

        .input-box label:last-of-type {
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
        }

        .radio:checked+label {
            background-color: #7ed321;
            color: #fff;
            transition: 0.5s;
        }

        .input-box select {
            display: inline-block;
            width: 50%;
            padding: 12px;
            background-color: #fcfcfc;
            float: left;
            text-align: center;
            font-size: 16px;
            outline: none;
            border: 1px solid #c0bfbf;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .input-box select:focus {
            background-color: #7ed321;
            color: #fff;
            text-align: center;
        }

        button {
            width: 100%;
            background: transparent;
            border: none;
            background: #7ed321;
            color: #fff;
            padding: 15px;
            border-radius: 4px;
            font-size: 16px;
            transition: all 0.35s ease;
        }

        button:hover {
            cursor: pointer;
            background: #5eb105;
        }

        .svg-container {
            width: 5vw;
            height: 5vh;
            position: absolute;
            top: 35px;
            left: 15px;
            opacity: 1.0;
            animation: pulse 1.5s ease-in-out infinite;
            z-index: 5;
            /* Set a higher z-index to make sure it's on top */
        }

        .svg-container img {
            width: 80%;
            /* Use 100% width to fill the container */
            height: 80%;
            /* Use 100% height to fill the container */
            display: block;
            object-position: 100% 50%;
            transform: translate(-50%, -50%) rotate(0deg);
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET['item'])) {
        $url = 'pay.php?item=' . $_GET['item'] . '&qty=' . $_GET['qty'] . '&unit_price=' . $_GET['unit_price'];
        // echo '' . $url . '';
    }
    ?>
    <div class="svg-container" onclick="window.location.href='art on coconut shell buy goods.html'">
        <img src="phootos\16de2cf5b18de6caa3c501441a8da300.svg" alt="previous sarrow icon" loading="lazy">
    </div>
    <div class="header">
        <div class="path">Dashboard / Artisan Marketplace / Buy Goods/make payment</div>
        <h1>ARTISAN MARKETPLACE</h1>
    </div>
    <div class="wrapper">
        <h2>Payment Form</h2>

        <form method="POST" action="<?php echo $url; ?>">
            <div class="input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Card Number" required class="name" name="cardno">
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Card CVC" required class="name" name="cvc">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input-box">
                    <select>
                        <option>01 jun</option>
                        <option>02 jun</option>
                        <option>03 jun</option>
                    </select>
                    <select>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                    </select>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <button type="submit" name="pay">PAY NOW</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>