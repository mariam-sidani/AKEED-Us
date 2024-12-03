<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddToCart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="images/icconnn.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="style2.css">


</head>

<body>

    <header>

        <nav class="navbar">

            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="gg-menu"></i>
            </label>
            <label class="logo"><img src="images/akeed.jpg" alt="" width="200"></label>
            <ul style="margin-right: 90px;">
                <li><a href="index.php">Home</a></li>
                <li><a href="us.php">About</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a id="cart-Icon" href="#"><i style="font-size: 24px" class="fa">&#xf07a;</i></a></li>
            </ul>
        </nav>

        <div class="cart">
            <h2 class="cart-title">Your Cart</h2>
            <div class="cart-content">

            </div>

            <div class="total">
                <div class="total-title">Total</div>
                <div class="total-Price">$0</div>
            </div>
            <button type="button" class="btn-Buy">Buy Now</button>
            <i class="fa-sharp fa-solid fa-xmark" id="cart-close"></i>
        </div>



    </header>

    <section>


        <div id="desserts-menu">
            <div class="Container">



                <div class="desserts-menu_Container">

                    <div class="Menus_Items_Container">
                        <div class="Img_Cards Cakes">
                            <img src="images/hummus_1.jpg" class="product-img">
                            <h1 class="product-title">Hummos</h1>
                            <span class="price">$5</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cakes">
                            <img src="images/hummus-pesto_1.jpg" class="product-img ">
                            <h1 class="product-title">Pesto Hummus</h1>
                            <span class="price">$5.50</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cookies">
                            <img src="images/vine-leaves_1.jpg" class="product-img ">
                            <h1 class="product-title">Vine Leaves</h1>
                            <span class="price">$6.00</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Breads">
                            <img src="images/sawda_2.jpg" class="product-img">
                            <h1 class="product-title">Chicken Liver With Pomegranat</h1>
                            <span class="price">$8.50</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cookies">
                            <img src="images/makanek_1.jpg" class="product-img">
                            <h1 class="product-title">Makanek</h1>
                            <span class="price">$10.00</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cakes">
                            <img src="images/sojouks.jpg" class="product-img">
                            <h1 class="product-title">Sojouk</h1>
                            <span class="price">$10</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cakes">
                            <img src="images/kibbeh-blaban_1.jpg" class="product-img">
                            <h1 class="product-title">Kebbeh B Laban</h1>
                            <span class="price">$9</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cakes">
                            <img src="images/shishbarak.jpg" class="product-img">
                            <h1 class="product-title">Shish Barak </h1>
                            <span class="price">$11.50</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cookies">
                            <img src="images/hummus-fatteh.jpg" class="product-img">
                            <h1 class="product-title">Hummus fatteh</h1>
                            <span class="price">$5.50</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>

                        <div class="Img_Cards Cookies">
                            <img src="images/fatte-la7mi.jpg" class="product-img">
                            <h1 class="product-title">Beef fatteh</h1>
                            <span class="price">$11.50</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cakes">
                            <img src="images/batata-harra_1.jpg" class="product-img Freshly Roasted Coffee">
                            <h1 class="product-title">Battata hara</h1>
                            <span class="price">$5</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cookies">
                            <img src="images/kabab-karaz.jpg" class="product-img">
                            <h1 class="product-title">Kabab with Cherry</h1>
                            <span class="price">$11.50</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cookies">
                            <img src="images/beef-sambousek_2.jpg" class="product-img">
                            <h1 class="product-title">Beef Sambousek</h1>
                            <span class="price">$4.50</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cakes">
                            <img src="images/cheeseroll_1.jpg" class="product-img">
                            <h1 class="product-title">Cheese Rolls</h1>
                            <span class="price">$6</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cookies">
                            <img src="images/fries.jpg" class="product-img">
                            <h1 class="product-title">French Fries</h1>
                            <span class="price">$4.50</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cakes">
                            <img src="images/tabbouleh_3.jpg" class="product-img">
                            <h1 class="product-title">Tabbouleh</h1>
                            <span class="price">$5.50</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Pies">
                            <img src="images/fattouche_3.jpg" class="product-img">
                            <h1 class="product-title">Fattoush</h1>
                            <span class="price">$5.50</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cookies">
                            <img src="images/betroot-rocca.jpg" class="product-img">
                            <h1 class="product-title">Rocca BeetRoot</h1>
                            <span class="price">$5</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cakes">
                            <img src="images/frakeh_2.jpg" class="product-img">
                            <h1 class="product-title">Frakeh</h1>
                            <span class="price">$14.50</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cakes">
                            <img src="images/malseh_3.jpg" class="product-img">
                            <h1 class="product-title">Malseh</h1>
                            <span class="price">$14.50</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>

                        <div class="Img_Cards Cookies">
                            <img src="images/law7a-nayyi.jpg" class="product-img">
                            <h1 class="product-title">Selection of Raw Meat</h1>
                            <span class="price">$20</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cookies">
                            <img src="images/msahab.jpg" class="product-img">
                            <h1 class="product-title">Boneless Chicken</h1>
                            <span class="price">$16</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Pies">
                            <img src="images/jawane7.jpg" class="product-img">
                            <h1 class="product-title">Grilled Chicken Wings </h1>
                            <span class="price">$12</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cakes">
                            <img src="images/kafat-mashewe.jpg" class="product-img">
                            <h1 class="product-title">Grilled Kafta</h1>
                            <span class="price">$14.50</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cookies">
                            <img src="images/mashwe.jpg" class="product-img">
                            <h1 class="product-title">Grilled Beef Fillet</h1>
                            <span class="price">$23</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cheesecakes">
                            <img src="images/tawouk_4.jpg" class="product-img">
                            <h1 class="product-title">Red or White Tawouk</h1>
                            <span class="price">$16</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Breads">
                            <img src="images/mix-mashewe.jpg" class="product-img">
                            <h1 class="product-title">Mixed Grilled</h1>
                            <span class="price">$20</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Breads">
                            <img src="images/mansaf-la7mi_1.jpg" class="product-img">
                            <h1 class="product-title">Mansaf Beef Rice</h1>
                            <span class="price">$15</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cookies">
                            <img src="images/chicken-mansaf.jpg" class="product-img">
                            <h1 class="product-title">Mansaf Chicken Rice</h1>
                            <span class="price">$14.50</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cheesecakes">
                            <img src="images/chicken-saffron.jpg" class="product-img">
                            <h1 class="product-title">Saffron Rice with Chicken</h1>
                            <span class="price">$6.00</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Breads">
                            <img src="images/baklava-rolls.jpg" class="product-img">
                            <h1 class="product-title">baklawa Rolls</h1>
                            <span class="price">$10</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Cakes">
                            <img src="images/em-ali.jpg" class="product-img">
                            <h1 class="product-title">Em Ali</h1>
                            <span class="price">$9</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Pies">
                            <img src="images/ghazli.jpg" class="product-img">
                            <h1 class="product-title">Ghazli</h1>
                            <span class="price">$7</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Breads">
                            <img src="images/nutella-crepe.jpg" class="product-img">
                            <h1 class="product-title">Nuttella Crepe</h1>
                            <span class="price">$7</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Breads">
                            <img src="images/panama.jpg" class="product-img">
                            <h1 class="product-title"> Panama</h1>
                            <span class="price">$4</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Pies">
                            <img src="images/tahiti.jpg" class="product-img">
                            <h1 class="product-title">Tahiti</h1>
                            <span class="price">$3</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Pies">
                            <img src="images/hawii.jpg" class="product-img">
                            <h1 class="product-title">Hawii</h1>
                            <span class="price">$5</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>
                        <div class="Img_Cards Breads">
                            <img src="images/custom-resized-0b65cd1e-efbd-42c0-b24e-9120fa750324.jpg"
                                class="product-img">
                            <h1 class="product-title">Via water</h1>
                            <span class="price">$4</span>
                            <button class="btn" id="add-cart">Add To cart</button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



    <script src="script2.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script type="text/javascript"> $(document).ready(function () {
            $('.List').click(function () {
                const value = $(this).attr('data-filter');
                if (value == 'All') {
                    $('.Img_Cards').show('1000');
                }
                else {
                    $('.Img_Cards').not('.' + value).hide('1000');
                    $('.Img_Cards').filter('.' + value).show('1000');
                }
            })
            $('.List').click(function () {
                $(this).addClass('active').siblings().removeClass('active');
            })
        })</script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('fetchButto').addEventListener('click', fetchD);
        });

        function fetchD() {
            fetch('https://jsonplaceholder.typicode.com/todos/1')
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>
    <script src="script.js"></script>
</body>

</php>