

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

        <nav>
            <ul class="top">
                <div class="button-indicator"></div>
                <li><button id="tableManagement" class="active"><img src="assets/imgs/menu.png" alt="icon" class="icon">Table Management</button></li>
                <li><button id="orderManagement"><img src="assets/imgs/menu.png" alt="icon" class="icon">Order Management</button></li>
                <li><button id="reports"><img src="assets/imgs/menu.png" alt="icon" class="icon">Reports</button></li>
                <li><button id="settings"><img src="assets/imgs/menu.png" alt="icon" class="icon">Settings</button></li>
            </ul>

            <ul class="bottom">
            <li><button id="logout"><img src="assets/imgs/menu.png" alt="icon" class="icon">Logout</button></li>
            </ul>
        </nav>
    </div>

    <div class="hero">
        <div class="container">
            <div class="burger"></div>

            <form action="" method="post">
                <input type="search" name="search" id="search" class="search" placeholder="Search...">
            </form>

            <section class="menu">
                <div class="box">
                    <div class="box-container">
                        <img src="assets/imgs/menu.png" alt="icon" class="icon">

                        <h1>All Menu</h1>
                    </div>
                </div>
                
                <div class="box">
                    <div class="box-container">
                        <img src="assets/imgs/menu.png" alt="icon" class="icon">

                        <h1>Breakfast</h1>
                    </div>
                </div>

                <div class="box">
                    <div class="box-container">
                        <img src="assets/imgs/menu.png" alt="icon" class="icon">

                        <h1>Soup</h1>
                    </div>
                </div>

                <div class="box">
                    <div class="box-container">
                        <img src="assets/imgs/menu.png" alt="icon" class="icon">

                        <h1>Drinks</h1>
                    </div>
                </div>

                <div class="box">
                    <div class="box-container">
                        <img src="assets/imgs/menu.png" alt="icon" class="icon">

                        <h1>Main Course</h1>
                    </div>
                </div>

            </section>

            <section class="list">
                <div class="box">
                    <div class="box-container">
                        <img src="assets/imgs/cluckinbig.jpg" alt="icon" class="icon">

                        <h1>Cluckin Big!</h1>
                        
                        <h2>₱ 50.00</h2>

                        <!-- <div class="addcartbtn">

                            </div> -->
                        <button class="addcartbtn">Add to Cart</button>


                    </div>
                </div>
                <div class="box">
                    <div class="box-container">
                        <img src="assets/imgs/cluckinbig.jpg" alt="icon" class="icon">

                        <h1>Cluckin Big!</h1>
                        
                        <h2>₱ 50.00</h2>

                        <div class="ordernum">
                            <div class="quantity">
                                <button class="minus" aria-label="Decrease">&minus;</button>
                                <input type="number" class="input-box" value="1" min="1" max="999">
                                <button class="plus" aria-label="Increase">&plus;</button>
                            </div>
                        </div>
                    </div>
                </div>


            </section>

            <section class="tables">
                
                <div class="table">
                    <div class="table-container">
                        <h1>T1</h1>
                        <p>Eunicys</p>
                    </div>
                </div>

                <div class="table">
                    <div class="table-container">
                        <h1>T2</h1>
                        <p>Joshua</p>
                    </div>
                </div>

                <div class="table">
                    <div class="table-container">
                        <h1>T3</h1>
                        <p>Menard</p>
                    </div>
                </div>

                <div class="table">
                    <div class="table-container">
                        <h1>T4</h1>
                        <p>Kim</p>
                    </div>
                </div>

                <div class="table">
                    <div class="table-container">
                        <h1>T5</h1>
                        <p>Vergel</p>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="orderqueue">
        <div class="container">
            <header>
                <h1>Table 6</h1>
                <p>Shairence</p>
            </header>

            <div class="method">
                <div class="indicator"></div>
                <button id="dineIn" class="active">Dine In</button>
                <button id="takeOut">Take Out</button>
            </div>

            <div class="queue">
                <div class="box">
                    <div class="box-container">
                        <img src="assets/imgs/cluckinbig.jpg" alt="icon" class="icon">

                        <div class="info">
                            <h1 class="itmname">Cluckin Big!</h1>
                            <div class="sub-info">
                                <h2 class="itmprice">₱ 50.00</h2>
                                <h2 class="itmquantity">1x</h2>
                                <h2 class="ttlprice">₱ 50.00</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-container">
                        <img src="assets/imgs/cluckinbig.jpg" alt="icon" class="icon">

                        <div class="info">
                            <h1 class="itmname">Cluckin Big!</h1>
                            <div class="sub-info">
                                <h2 class="itmprice">₱ 50.00</h2>
                                <h2 class="itmquantity">1x</h2>
                                <h2 class="ttlprice">₱ 50.00</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-container">
                        <img src="assets/imgs/cluckinbig.jpg" alt="icon" class="icon">

                        <div class="info">
                            <h1 class="itmname">Cluckin Big!</h1>
                            <div class="sub-info">
                                <h2 class="itmprice">₱ 50.00</h2>
                                <h2 class="itmquantity">1x</h2>
                                <h2 class="ttlprice">₱ 50.00</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-container">
                        <img src="assets/imgs/cluckinbig.jpg" alt="icon" class="icon">

                        <div class="info">
                            <h1 class="itmname">Cluckin Big!</h1>
                            <div class="sub-info">
                                <h2 class="itmprice">₱ 50.00</h2>
                                <h2 class="itmquantity">1x</h2>
                                <h2 class="ttlprice">₱ 50.00</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-container">
                        <img src="assets/imgs/cluckinbig.jpg" alt="icon" class="icon">

                        <div class="info">
                            <h1 class="itmname">Cluckin Big!</h1>
                            <div class="sub-info">
                                <h2 class="itmprice">₱ 50.00</h2>
                                <h2 class="itmquantity">1x</h2>
                                <h2 class="ttlprice">₱ 50.00</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-container">
                        <img src="assets/imgs/cluckinbig.jpg" alt="icon" class="icon">

                        <div class="info">
                            <h1 class="itmname">Cluckin Big!</h1>
                            <div class="sub-info">
                                <h2 class="itmprice">₱ 50.00</h2>
                                <h2 class="itmquantity">1x</h2>
                                <h2 class="ttlprice">₱ 50.00</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="itmpricecalc">
                <h2 class="sub-ttl">Sub-Total</h2>
                <h2 class="tax">Tax %</h2>
                <hr>
                <h2 class="ttlprice">Total Amount</h2>
            </div>

            <h1 class="placeorder">Place Order</h1>
        </div>
    </div>

    <script src="assets/js/scripts.js"></script>
</body>
</html>