<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/icconnn.jpg">

    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/menu.css' rel='stylesheet'>
    <link rel="stylesheet" href="nav.css">
</head>

<body>
    <style>
        body,
        php {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100vh;
            font-family: sans-serif;
            background-color: #60514D;
        }

        .content {
            text-align: center;
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-transform: uppercase;
            z-index: 1;
        }

        .content a {
            background: #eec985;
            padding: 10px 24px;
            text-decoration: none;
            font-size: 18px;
            border-radius: 20px;
            color: white;
        }

        .content a:hover {
            background: #6e5002d3;
            color: #fff;

        }

        .content h1 {
            color: #a15a02;
            font-size: 60px;
            letter-spacing: 15px;
        }

        .content h1 span {
            color: #d69600;
        }

        .Section_top {
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: relative;
            background-image: url("images/atayef-dessert22-1.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            justify-content: center;
            animation: change 25s infinite ease-in-out;
        }

        @keyframes change {
            0% {
                background-image: url("images/kbeh.jpg");
            }

            25% {
                background-image: url("images/m3moul.jpg");
            }

            45% {
                background-image: url("images/knefeh.gif");
            }

            50% {
                background-image: url("images/atayef-dessert22-1.jpg");
            }

        }
    </style>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="gg-menu"></i>
        </label>
        <label class="logo"><img src="images/akeed.jpg" alt="" width="200"></label>
        <ul style="margin-right: 90px;">
            <li><a href="index.php">Home</a></li>
            <li><a href="us.php">About</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a id="cart-Icon" href="product.php"><i style="font-size: 24px" class="fa">&#xf07a;</i></a></li>
        </ul>
    </nav>

    <div class="Section_top">
        <div class="content">
            <h1>Check our <span>Menu</span></h1> <br>
            <a href="menu.php">Menu</a>
        </div>
    </div>
    </div>
    </div>
</body>

</php>