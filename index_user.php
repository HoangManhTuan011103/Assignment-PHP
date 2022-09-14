<?php
    require_once "connectDBUser.php";
    $sql = "SELECT * FROM categories";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $sql2 = "SELECT * FROM products";
    $stmt = $conn->prepare($sql2);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index-user</title>
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <div class="container">
        <!-- Stat header -->
        <header>
            <div class="header-container">
                <!-- Start header on -->
                <div class="header-container-on">
                    <!-- Stat header left -->
                    <div class="header-left">
                        <label class="icon-menu" for="do-subMenu"> 
                            <i class="fa-solid fa-bars"></i>
                        </label>
                        <div class="logo-header">
                            <a href="index_user.php"><img src="./src/image/index/logo-website.png" alt=""></a>
                        </div>
                    </div>
                    <!-- Stat header main -->
                    <div class="menu-main">
                        <nav>
                            <ul>
                                <li><a href="index_user.php">Home</a></li>
                                <li><a href="devices.php">Devices</a></li>
                                <li><a href="">Delivery & Payment</a></li>
                                <li><a href="">Guarantee</a></li>
                                <li><a href="">About Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Stat header right -->
                    <div class="header-right">
                        <div class="cart">
                            <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                        </div>
                        <a href="cart.php">
                            <h4>Cart</h4>
                        </a>
                        <div class="btn-amount-cart">
                            <a href="cart.php"><button><h4>2</h4></button></a>
                        </div>
                        <div class="btn-submit">
                            <a href="signin.php"><button>Sign in</button></a>
                        </div>
                    </div>
                </div>
                <!-- End header on -->
            </div>
        </header>

        <input type="checkbox" class="show-hiden-subMenu" id="do-subMenu" checked>
        <div class="sub-header">
            <div class="header-container-second">
                <nav class="sub-menu-second">
                    <ul>
                        <?php foreach($categories as $v): ?>
                            <li><a href="devices.php"><?= $v['name'] ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </nav>
                <div class="find-support">
                    <div class="text-support">
                        <ul>
                            <li><a href="">Support</a></li>
                        </ul>
                    </div>
                    <form action="">
                        <div class="icon-find">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <div class="input-find">
                            <input type="text" placeholder="I'm looking for">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End header -->
        <!-- Start banner -->
        <div class="banner">
            <!-- Slider -->
            <div class="image-banner">
                <a href=""> <img src="src/image/index/banner1.png" alt=""></a>
            </div>
            <div class="image-banner">
                <a href=""> <img src="src/image/index/banner2.jpg" alt=""></a>
            </div>
            <div class="image-banner">
                <a href=""> <img src="src/image/index/banner3.jpg" alt=""></a>
            </div>
            <div class="image-banner">
                <a href=""> <img src="src/image/index/banner4.jpg" alt=""></a>
            </div>
            <!-- Slider -->
        </div>
        <!-- End banner -->
        <!-- Start Main -->
        <main>
            <!-- Start navigation rows -->
            <div class="navigation">
                <nav class="navigation-rows-left">
                    <ul>
                        <li><a href="">Sort By:</a></li>
                        <li><a href="">Best Match <i class="fa-solid fa-angle-down"></i></a></li>
                    </ul>
                </nav>
                <div class="navigation-rows-main">
                    <div class="keywords">
                        <form action="">
                            <label for="" class="title-key">Keywords</label>
                            <input type="text" placeholder="Tablet">
                        </form>
                    </div>
                    <div class="price">
                        <form action="">
                            <label for="" class="title-price">Price</label>
                            <input type="text" class="short"> -
                            <input type="text" class="height">
                        </form>
                    </div>
                    <div class="free-ship">
                        <div class="image-free-ship">
                            <a href=""><img src="src/image/index/free-ship.png" alt=""></a>
                        </div>
                        <p>Free Shipping</p>
                    </div>
                </div>
                <nav class="navigation-rows-right">
                    <ul>
                        <li class="ship"><a href="">Ship to:</a></li>
                        <li><a href="">USA <i class="fa-solid fa-angle-down"></i></a></li>
                    </ul>
                </nav>
            </div>
            <!-- End navigation rows -->
            <article class="content-main">
                <div class="navigation-column-left">
                    <nav class="menu-column-first">
                        <ul>
                            <li>
                                <div class="text-menu-column">
                                    <a href="">Technological</a>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-angle-right"></i>
                                </div>
                            </li>
                            <li>
                                <div class="text-menu-column">
                                    <a href="">Smart Phone</a>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-angle-right"></i>
                                </div>
                            </li>
                            <li>
                                <div class="text-menu-column">
                                    <a href="">Accessory</a>
                                </div>

                                <div class="icon">
                                    <i class="fa-solid fa-angle-right"></i>
                                </div>

                            </li>
                            <li>
                                <div class="text-menu-column">
                                    <a href="">Fashion</a>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-angle-right"></i>
                                </div>
                            </li>
                            <li>
                                <div class="text-menu-column">
                                    <a href="">
                                        Smart Watch</a>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-angle-right"></i>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <div class="form-menu-column">
                        <form action="">
                            <!-- Available -->
                            <div class="available-column">
                                <h3>Available</h3>
                                <!-- Storage -->
                                <div class="storage">
                                    <div class="radio-fisrt">
                                        <input type="radio" name="available" id="storage">
                                        <label for="storage">In storage</label>
                                    </div>
                                    <span>45</span>
                                </div>
                                <!-- Online-shop -->
                                <div class="online-shop">
                                    <div class="radio-second">
                                        <input type="radio" name="available" id="online">
                                        <label for="online">In Online-Shop</label>
                                    </div>
                                    <span>12</span>
                                </div>
                            </div>
                            <!-- Brand -->
                            <div class="brand-column">
                                <div class="brand-title">
                                    <h3>Brand</h3> <a href=""><span>All</span></a>
                                </div>

                                <!-- Apple -->
                                <div class="apple">
                                    <div class="check-box-first">
                                        <input type="checkbox" name="brand" id="apple-brand">
                                        <label for="apple-brand">Apple</label>
                                    </div>
                                    <span>32</span>
                                </div>
                                <!-- JBL -->
                                <div class="JBL">
                                    <div class="check-box-second">
                                        <input type="checkbox" name="brand" id="JBL-brand">
                                        <label for="JBL-brand">JBL</label>
                                    </div>
                                    <span>14</span>
                                </div>
                                <!-- Bose -->
                                <div class="Bose">
                                    <div class="check-box-third">
                                        <input type="checkbox" name="brand" id="Bose-brand">
                                        <label for="Bose-brand">Bose</label>
                                    </div>
                                    <span>3</span>
                                </div>
                                <!-- Nest -->
                                <div class="Nest">
                                    <div class="check-box-fourth">
                                        <input type="checkbox" name="brand" id="Nest-brand">
                                        <label for="Nest-brand">Nest</label>
                                    </div>
                                    <span>5</span>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="form-menu-column-second">
                        <form action="">
                            <!-- Condition -->
                            <div class="condition-column">
                                <div class="condition-title">
                                    <h3>condition</h3> <a href=""><span>See All</span></a>
                                </div>

                                <!-- New -->
                                <div class="New">
                                    <div class="check-box-first">
                                        <input type="checkbox" name="condition" id="New-condition">
                                        <label for="New-condition">New</label>
                                    </div>
                                </div>
                                <!-- Manufacturer Refurbished -->
                                <div class="Manufacturer">
                                    <div class="check-box-second">
                                        <input type="checkbox" name="condition" id="Manufacturer-condition">
                                        <label for="Manufacturer-condition">Manufacturer Refurbished</label>
                                    </div>
                                </div>
                                <!-- Seller Refurbished -->
                                <div class="Seller">
                                    <div class="check-box-third">
                                        <input type="checkbox" name="condition" id="Seller-condition">
                                        <label for="Seller-condition">Seller Refurbished</label>
                                    </div>
                                </div>
                                <!-- Used -->
                                <div class="Used">
                                    <div class="check-box-fourth">
                                        <input type="checkbox" name="condition" id="Used-condition">
                                        <label for="Used-condition">Used</label>
                                    </div>
                                </div>
                                <!-- For Parts or not Working -->
                                <div class="Parts">
                                    <div class="check-box-fourth">
                                        <input type="checkbox" name="condition" id="Parts-condition">
                                        <label for="Parts-condition">For Parts or not Working</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="form-menu-column-third">
                        <form action="">
                            <!-- Available -->
                            <div class="Delivery-column">
                                <h3>Delivery Options</h3>
                                <div class="delivery-options">
                                    <div class="radio-fisrt-delivery">
                                        <input type="radio" name="options" id="free">
                                        <label for="free">Free</label>
                                    </div>
                                    <div class="radio-second-delivery">
                                        <input type="radio" name="options" id="money">
                                        <label for="money">$4.99</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="content-right">
                    <!-- Product content -->
                    <?php foreach($products as $index=>$v): ?>
                        <?php if($index > 11): ?>
                            <?php break; ?>
                        <?php else: ?>
                            <div class="product-content">
                                <div class="image-product">
                                    <a href="detail.php?id=<?= $v['id'] ?>"><img src="manage-display/imageProduct/<?= $v['image'] ?>" alt=""></a>
                                </div>
                                <div class="title-product">
                                    <a href="detail.php?id=<?= $v['id'] ?>">
                                        <h3><?= $v['name'] ?></h3>
                                    </a>
                                </div>
                                <div class="discount-product">
                                    <p><?= $v['discount'] ?>$</p>
                                </div>
                                <div class="money-product">
                                    <p><?= $v['price'] ?>$</p>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>
                    <!-- Product content -->
                </div>

            </article>
            <section class="navigation-rows-down">
                <div class="arrow-left">
                    <a href=""><i class="fa-solid fa-angle-left"></i></a>
                </div>
                <nav class="navigation-number">
                    <ul>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                        <li><a href="">6</a></li>
                        <li><a href="">7</a></li>
                        <li><a href="">8</a></li>
                    </ul>
                </nav>
                <div class="arrow-right">
                    <a href=""><i class="fa-solid fa-angle-right"></i></a>
                </div>
            </section>
            <!-- Start Best seller -->
            <section class="bestSellers">
                <div class="title-bestsellers">
                    <a href="">
                        <h3>Best Sellers</h3>
                    </a>
                </div>
                <div class="products-seller">
                    <?php foreach($products as $index=>$v): ?>
                        <?php if($index == 18 || $index == 21 || $index == 23 || $index == 34): ?>
                            <div class="product-bestseller">
                                <div class="image-bestseller">
                                    <a href="detail.php?id=<?= $v['id'] ?>"><img src="manage-display/imageProduct/<?= $v['image'] ?>" alt=""></a>
                                </div>
                                <a href="detail.php?id=<?= $v['id'] ?>">
                                    <h3><?= $v['name'] ?></h3>
                                </a>
                                <p>Yellow</p>
                                <div class="price-bestseller">
                                    <h3 class="root"><?= $v['price'] ?>$</h3>
                                    <h3 class="discount"><?= $v['discount'] ?>$</h3>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>
                </div>
            </section>
            <!-- End Best seller -->
        </main>
        <!-- End Main -->
        <footer>
            <div class="footer-up">
                <div class="title-footer-up">
                    <h1>What Our Customers Have To Say</h1>
                    <p>Couple Of Words About Stories Section</p>
                </div>
                <section class="account">
                    <div class="cutomer-say">
                        <div class="acount-customer">
                            <div class="image-acount">
                                <a href=""><img src="src/image/index/account-1.png" alt=""></a>
                            </div>
                            <div class="infor-account">
                                <a href="">
                                    <h3>Celia Fields</h3>
                                </a>
                                <a href="">
                                    <p>UX Expert</p>
                                </a>
                            </div>
                        </div>
                        <div class="conntent-say">
                            <p>This I have produced as a scantling of Jack's great eloquence and the force of his reasoning upon such abstruse matterrs.</p>
                        </div>
                    </div>
                    <div class="cutomer-say">
                        <div class="acount-customer">
                            <div class="image-acount">
                                <a href=""><img src="src/image/index/account-2.png" alt=""></a>
                            </div>
                            <div class="infor-account">
                                <a href="">
                                    <h3>Alexander Lee</h3>
                                </a>
                                <a href="">
                                    <p>Founder</p>
                                </a>
                            </div>
                        </div>
                        <div class="conntent-say">
                            <p>This sounded a very good reason, and Alice was quite pleased to know it. 'I never thought of that before!' she said.</p>
                        </div>
                    </div>
                    <div class="cutomer-say">
                        <div class="acount-customer">
                            <div class="image-acount">
                                <a href=""><img src="src/image/index/account-3.png" alt=""></a>
                            </div>
                            <div class="infor-account">
                                <a href="">
                                    <h3>Lenova Sandoval</h3>
                                </a>
                                <a href="">
                                    <p>Product Manager</p>
                                </a>
                            </div>
                        </div>
                        <div class="conntent-say">
                            <p>This I have produced as a scantling of Jack's great eloquence and the force of his reasoning upon such abstruse matterrs</p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="footer-down">
                <div class="footer-navigation">
                    <div class="logo-footer">
                        <a href=""><img src="src/image/index/logo-white-footer.png" alt=""></a>
                    </div>
                    <nav class="sub-navigation">
                        <ul>
                            <li><a href="index_user.php">Home</a></li>
                            <li><a href="devices.php">Shop</a></li>
                            <li><a href="">Team</a></li>
                            <li><a href="">Aboout Us</a></li>
                            <li><a href="">Contacts</a></li>
                        </ul>
                    </nav>
                    <div class="icon-connect-outside">
                        <div class="icon">
                            <a href=""><i class="fa-brands fa-twitter"></i></a>
                        </div>
                        <div class="icon">
                            <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        </div>
                        <div class="icon">
                            <a href=""><i class="fa-brands fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
                <div class="footer-end">
                    <div class="content-end">
                        <p>She gave my mother such a turn, that I have always been convinced I am indebted to Miss Betsey for having been born on a Friday.</p>
                    </div>
                    <nav class="menu-footer-end">
                        <ul>
                            <li>
                                <a href="">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="">Terms and Conditions</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </footer>
    </div>
    <!-- Start javascript slider -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.banner').slick({
                dots: true,
                infinite: true,
                slidesToShow: 1,
                centerMode: true,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                slidesToScroll: 1
            });
        });
    </script>
    <!-- End javascript slider -->
</body>

</html>