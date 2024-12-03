<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="icon" type="image/x-icon" href="images/icconnn.jpg">
    <link rel="stylesheet" href="styleM.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="nav.css">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/menu.css' rel='stylesheet'>
    <link rel="stylesheet" href="about.css">
    <style>
        #browse {
            padding-top: 110px;
            text-align: center;
            font-family: Arial, sans-serif;
            font-size: 2em;
            color:#60514D;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin: 0;
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
        }
      
    </style>
</head>

<body>
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
    <h2 style="  text-align: center;" id="browse">&mdash; Browse the menu  &mdash; </h2>
    <div class="menu" >
        <div class="heading">
            <h3>&mdash; Cold Appetizers &mdash; </h3>
        </div>
        <div class="food-items">
            <img src="images/hummus_1.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Hummos</h5>
                    <h5 class="price"> $5.00 </h5>
                </div>
                <p></p>



            </div>
        </div>

        <div class="food-items">
            <img src="images/hummus-pesto_1.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Pesto Hummus</h5>
                    <h5 class="price"> $5.50 </h5>
                </div>
                <p>Hummus with our special pesto sause.</p>

            </div>
        </div>

        <div class="food-items">
            <img src="images/vine-leaves_1.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Vine Leaves </h5>
                    <h5 class="price"> $6.00 </h5>
                </div>
                <p> Served with Lemon and green onion Slices </p>

            </div>
        </div>
    </div>
    <div class="menu">
        <div class="heading">
            <h1>AKEED</h1>
            <h3>&mdash; Hot Appetizers &mdash; </h3>
        </div>
        <div class="food-items">
            <img src="images/sawda_2.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Chicken Liver With Pomegranate</h5>
                    <h5 class="price"> $8.50</h5>
                </div>
                <p>Serived with our special spices , lemon juice , Debes remen and butter .</p>

            </div>
        </div>

        <div class="food-items">
            <img src="images/makanek_1.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Makanek</h5>
                    <h5 class="price"> $10.00 </h5>
                </div>
                <p> lemon juice, debes remen</p>

            </div>
        </div>

        <div class="food-items">
            <img src="images/sojouks.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Sojouk</h5>
                    <h5 class="price"> $10.00</h5>
                </div>
                <p>cherry tomato and lemon juice.</p>

            </div>
        </div>

        <div class="food-items">
            <img src="images/kibbeh-blaban_1.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Kebbeh B Laban</h5>
                    <h5 class="price"> $9.00</h5>
                </div>
                <p>Garlic and mint sauce </p>

            </div>
        </div>

        <div class="food-items">
            <img src="images/shishbarak.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Shish Barak</h5>
                    <h5 class="price"> $6.00 </h5>
                </div>
                <p>Garlic and mint sauce</p>

            </div>
        </div>

        <div class="food-items">
            <img src="images/hummus-fatteh.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Hummus fatteh</h5>
                    <h5 class="price"> $5.50</h5>
                </div>
                <p>Bread crumps , fatteh nuts </p>

            </div>
        </div>
        <div class="food-items">
            <img src="images/fatte-la7mi.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Beef fatteh</h5>
                    <h5 class="price"> $11.50</h5>
                </div>
                <p>Bread crumps , fatteh nuts </p>

            </div>
        </div>
        <div class="food-items">
            <img src="images/batata-harra_1.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Battata hara </h5>
                    <h5 class="price"> $5.00</h5>
                </div>
                <p>Garllic,parsley,spices </p>

            </div>
        </div>

        <div class="food-items">
            <img src="images/kabab-karaz.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Kabab with Cherry</h5>
                    <h5 class="price"> $11.50</h5>
                </div>
                <p>5 peices </p>

            </div>
        </div>
        <div class="food-items">
            <img src="images/beef-sambousek_2.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Beef Sambousek</h5>
                    <h5 class="price"> $4.50</h5>
                </div>
                <p>5 peices </p>

            </div>
        </div>
        <div class="food-items">
            <img src="images/cheeseroll_1.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Cheese Rolls </h5>
                    <h5 class="price"> $6.00</h5>
                </div>
                <p>5 peices </p>

            </div>
        </div>
        <div class="food-items">
            <img src="images/fries.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>French Fries</h5>
                    <h5 class="price"> $4.50</h5>
                </div>
                <p>Salt </p>

            </div>
        </div>
    </div>
    <!--Section3-->
    <div class="menu">
        <div class="heading">
            <h3>&mdash; Salad &mdash; </h3>
        </div>
        <div class="food-items">
            <img src="images/tabbouleh_3.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Tabbouleh</h5>
                    <h5 class="price"> $5.50 </h5>
                </div>
                <p></p>


            </div>
        </div>

        <div class="food-items">
            <img src="images/fattouche_3.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Fattoush</h5>
                    <h5 class="price"> $5.50 </h5>
                </div>
                <p></p>

            </div>
        </div>

        <div class="food-items">
            <img src="images/betroot-rocca.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Rocca BeetRoot</h5>
                    <h5 class="price"> $5.00 </h5>
                </div>
                <p> </p>

            </div>
        </div>
    </div>
    <!--Section4-->
    <div class="menu">
        <div class="heading">
            <h3>&mdash;Raw Meat &mdash; </h3>
        </div>
        <div class="food-items">
            <img src="images/frakeh_2.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Frakeh</h5>
                    <h5 class="price"> $14.50 </h5>
                </div>
                <p></p>


            </div>
        </div>

        <div class="food-items">
            <img src="images/malseh_3.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Malseh</h5>
                    <h5 class="price"> $14.50 </h5>
                </div>
                <p></p>

            </div>
        </div>

        <div class="food-items">
            <img src="images/kibbe-nayyi.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Kibbeh Nayyi</h5>
                    <h5 class="price"> $14.00 </h5>
                </div>
                <p> </p>

            </div>
        </div>
        <div class="food-items">
            <img src="images/law7a-nayyi.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Selection of Raw Meat</h5>
                    <h5 class="price"> $20.00 </h5>
                </div>
                <p> kibbeh nayye , frakeh, kebeh joron, white onion , Pistachio </p>

            </div>
        </div>
    </div>

    <!--Section5-->
    <div class="menu">
        <div class="heading">
            <h3>&mdash;Mashawi &mdash; </h3>
        </div>
        <div class="food-items">
            <img src="images/msahab.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Boneless Chicken</h5>
                    <h5 class="price"> $16.00 </h5>
                </div>
                <p> Toum , Toum har , kabbes , Fries</p>


            </div>
        </div>

        <div class="food-items">
            <img src="images/jawane7.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Grilled Chicken Wings </h5>
                    <h5 class="price"> $12.00 </h5>
                </div>
                <p> Bewaz , bassal , toum</p>

            </div>
        </div>

        <div class="food-items">
            <img src="images/kafat-mashewe.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Grilled Kafta </h5>
                    <h5 class="price"> $14.50 </h5>
                </div>
                <p> Bewaz , bassal , bandoura </p>

            </div>
        </div>
        <div class="food-items">
            <img src="images/la7mi-mashewe.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Grilled Beef Fillet </h5>
                    <h5 class="price"> $23.00 </h5>
                </div>
                <p>Bewaz , bassal , bandoura</p>

            </div>
        </div>
        <div class="food-items">
            <img src="images/tawouk_4.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Red or White Tawouk </h5>
                    <h5 class="price"> $16.00 </h5>
                </div>
                <p>toum , banadours, bassal</p>

            </div>
        </div>
        <div class="food-items">
            <img src="images/mix-mashewe.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Mixed Grilled </h5>
                    <h5 class="price"> $20.00 </h5>
                </div>
                <p>taouk abyad , taouk ahmar , lahme ,kafta , toum , khbz ,banadoura , bassal </p>

            </div>
        </div>
    </div>
    <!--Section6-->
    <div class="menu">
        <div class="heading">
            <h3>&mdash; Rice &mdash; </h3>
        </div>
        <div class="food-items">
            <img src="images/mansaf-la7mi_1.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Mansaf Beef Rice</h5>
                    <h5 class="price"> $15.00 </h5>
                </div>
                <p> Salad , laban </p>


            </div>
        </div>

        <div class="food-items">
            <img src="images/chicken-mansaf.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Mansaf Chicken Rice</h5>
                    <h5 class="price"> $14.50 </h5>
                </div>
                <p>Salad laban</p>

            </div>
        </div>

        <div class="food-items">
            <img src="images/chicken-saffron.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Saffron Rice with Chicken </h5>
                    <h5 class="price"> $6.00 </h5>
                </div>
                <p> Salad , laban </p>

            </div>
        </div>
    </div>


    <!--Dessert-->
    <div class="menu">
        <div class="heading">
            <h3>&mdash; Dessert &mdash; </h3>
        </div>
        <div class="food-items">
            <img src="images/baklava-rolls.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>baklawa Rolls</h5>
                    <h5 class="price"> $10.00 </h5>
                </div>
                <p></p>


            </div>
        </div>

        <div class="food-items">
            <img src="images/em-ali.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Em Ali</h5>
                    <h5 class="price"> $9.00 </h5>
                </div>
                <p></p>

            </div>
        </div>
        <div class="food-items">
            <img src="images/ghazli.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Ghazli</h5>
                    <h5 class="price"> $7.00 </h5>
                </div>
                <p></p>

            </div>
        </div>
        <div class="food-items">
            <img src="images/nutella-crepe.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Nuttella Crepe </h5>
                    <h5 class="price"> $7.00 </h5>
                </div>
                <p></p>

            </div>
        </div>
    </div>
    <!--Beverage-->
    <div class="menu">
        <div class="heading">
            <h3>&mdash; Beverage &mdash; </h3>
        </div>
        <div class="food-items">
            <img src="images/panama.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Panama</h5>
                    <h5 class="price"> $4.00 </h5>
                </div>
                <p>Pinapple, mango, mango juice </p>

            </div>
        </div>


        <div class="food-items">
            <img src="images/tahiti.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Tahiti</h5>
                    <h5 class="price"> $3.00 </h5>
                </div>
                <p> Banana , Pinapple, strawberry, strawberry juice, kashta, icecream ball</p>

            </div>
        </div>
        <div class="food-items">
            <img src="images/hawii.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Hawii</h5>
                    <h5 class="price"> $5.00 </h5>
                </div>
                <p> kiwii,nuts, strawberry, strawberry juice, kashta, icecream ball</p>

            </div>
        </div>
        <div class="food-items">
            <img src="images/custom-resized-0b65cd1e-efbd-42c0-b24e-9120fa750324.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Via Water</h5>
                    <h5 class="price"> $4.00 </h5>
                </div>
                <p> </p>

            </div>
        </div>
    </div>
</body>

</php>