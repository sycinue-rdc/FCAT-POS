<!-- 
    FCAT Point Of Sales Front End
    Copyright (c) Dalumpines, Eunicys S.
    Date Developed : August 2024
    https://github.com/sycinue-rdc
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCAT POS</title>

    <!-- Favicon -->
     <link rel="shortcut icon" href="assets/imgs/fcat.png" type="image/x-icon">

    <!-- STYLE -->
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
    
    <div class="sidebar">
        <header>
            <img src="assets/imgs/fcat.png" alt="fcatlogo">
            <h1>FCAT POS</h1>
        </header>

        <!-- NAVIGATION LIST -->
        <nav>
            <ul class="top">
                <div class="button-indicator"></div>
                <li><button id="tableManagement" class="active"><img src="assets/imgs/menu.png" alt="icon" class="icon">Table Management</button></li>
                <li><button id="orderManagement"><img src="assets/imgs/menu.png" alt="icon" class="icon">Order Management</button></li>
                <li><button id="reports"><img src="assets/imgs/menu.png" alt="icon" class="icon">Reports</button></li>
                <li><button id="settings"><img src="assets/imgs/menu.png" alt="icon" class="icon">Settings</button></li>
            </ul>

            <!-- LOG OUT BUTTON -->
            <ul class="bottom">
            <li><button id="logout"><img src="assets/imgs/menu.png" alt="icon" class="icon">Logout</button></li>
            </ul>
        </nav>
    </div>

    <div class="hero" id="hero">
        <div class="container">

            <!-- SEARCH BAR -->
            <form action="" method="post">
                <input type="search" name="search" id="search" class="search" placeholder="Search...">
            </form>

            <!-- CATEGORIES MENU -->
            <section class="menu">

                <!-- CATEGORY MENU CONTAINER -->
                <button class="box">
                    <div class="box-container">
                        <img src="assets/imgs/menu.png" alt="icon" class="icon">

                        <h1>All Menu</h1>
                    </div>
                </button>
                
                <button class="box">
                    <div class="box-container">
                        <img src="assets/imgs/menu.png" alt="icon" class="icon">

                        <h1>Breakfast</h1>
                    </div>
                </button>
                
                <button class="box">
                    <div class="box-container">
                        <img src="assets/imgs/menu.png" alt="icon" class="icon">

                        <h1>Soup</h1>
                    </div>
                </button>
                
                <button class="box">
                    <div class="box-container">
                        <img src="assets/imgs/menu.png" alt="icon" class="icon">

                        <h1>Drinks</h1>
                    </div>
                </button>
                
                <button class="box">
                    <div class="box-container">
                        <img src="assets/imgs/menu.png" alt="icon" class="icon">

                        <h1>Main Course</h1>
                    </div>
                </button>

            </section>

            <!-- MENU TABLE LIST DISPLAY -->
            <section class="list">

                <!-- MENU CONTAINER -->
                <div class="box">
                    <div class="box-container">
                        <img src="assets/imgs/cluckinbig.jpg" alt="icon" class="icon">

                        <h1>Cluckin Big!</h1>
                        
                        <h2>₱ 50.00</h2>

                        <button class="addcartbtn" id="addcart" onclick='addcart();'>Add to Cart</button>

                        <div class="ordernum" id="ordrnum" style="display:none;">
                            <div class="quantity">
                                <button class="minus" aria-label="Decrease">&minus;</button>
                                <input type="number" class="input-box" value="1" min="1" max="999">
                                <button class="plus" aria-label="Increase">&plus;</button>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- TABLE QUEUE LIST DISPLAY -->
            <section class="tables">
                
                <!-- TABLE QUEUE LIST DISPLAY CONTAINER -->
                <div class="table">
                    <div class="table-container">
                        <h1>T1</h1>
                        <p>Eunicys</p>
                    </div>
                </div>

            </section>
        </div>
    </div>

    <div class="orderqueue" id="ordrlist" style="display: none;">
        <div class="container">
            <!-- TABLE INFORMATION -->
            <header>
                <h1>Table ${tablenumber}</h1>
                <p>${customername}</p>
            </header>

            <!-- ORDER ACTION / METHOD -->
            <div class="method">
                <div class="indicator"></div>

                <!-- DINE IN BUTTON-->
                <button id="dineIn" class="active">Dine In</button>

                <!-- TAKE OUT BUTTON -->
                <button id="takeOut">Take Out</button>
            </div>

            <!-- QUEUE BOX OR ORDER BASKET -->
            <div class="queue">
                <div class="box">
                    <div class="box-container">
                        <img src="assets/imgs/cluckinbig.jpg" alt="icon" class="icon">

                        <div class="info">
                            <h1 class="itmname">Cluckin Big!</h1>
                            <div class="sub-info">
                                <h2 class="itmprice">${itmvalue}</h2>
                                <h2 class="itmquantity">${itmquantity}</h2>
                                <h2 class="ttlprice">${price}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ITEM PRICE CALCULATION SECTION -->
            <div class="itmpricecalc">

                <div class="top">
                    <!-- HEADERS -->
                    <div class="left">
                        <h2 class="sub-ttl">Sub-Total</h2>
                        <h2 class="tax">Tax %</h2>
                    </div>

                    <!-- CALCULATION VALUES -->
                    <div class="right">
                        <h2>${subttlvalue}</h2>
                        <h2>${taxvalue}</h2>
                    </div>
                </div>
                <hr>

                <!-- TOTAL CALCULATION -->
                <div class="bottom">
                    <h2 class="ttlprice">Total Amount</h2>
                    <h2>${ttlamountvalue}</h2>
                </div>
            </div>

            <!-- PLACE ORDER BUTTON -->
            <button class="placeorder" id="placeOrder">Place Order</button>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/js/scripts.js"></script>
</body>
</html>