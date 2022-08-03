
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assets/hero/1/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bc4c4ce267.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Maoju Online Store <?= $page_title ?></title>
</head>
<body>
    <main class="main-container">

        <nav class="container main-nav">
        <img width="100" class="heading" src="<?= base_url() ?>assets/images/favicon.png" alt="">
            <ul class="nav-list">
                <li class="nav-list-item">Home</li>
                <li class="nav-list-item">Gallery</li>
                <li class="nav-list-item">Shop</li>
                <li class="nav-list-item">Contact</li>
            </ul>
            <div class="nav-icons">

            </div>
        </nav>
        <?php
            $product = $this->crud_model->getProduct($page['encrypted_id']);
        ?>
        <section class="container main-section-one">

            <div class="section-one-left">

                <h2 class="section-one-left-heading">
                   <?= $product['name'] ?>
                </h2>
                <p class="section-one-para">
                    <?= $product['description'] ?>
                </p>
                <button class="section-one-button">Shop Now</button>
            </div>

            <div class="section-one-right">
                <img class="eclipse" src="<?= base_url() ?>assets/hero/1/Images/Vertical.png">
                <img class="horizontal" src="<?= base_url() ?>assets/hero/1/Images/Horizontal.png">
                <img class="Banner" src="<?= base_url() ?>assets/hero/1/Images/Banner.png">
            </div>
        </section>

        <h3 class="products-title">Popular Products</h3>
        <section class="container prod-one">
            <div class="next-button">
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="products">
            <div class="card">
                <div class="product-image"><img src="<?= base_url() ?>assets/hero/1/Images/P-1.png"></div>
                <p class="category">Sneakers</p>
                <p class="product-name">Nike Running Shoes</p>
                <div class="germ">
                    <p class="prdouct-price">$ 100 <small>price</small></p>
                    <p class="product-quantity">500 <small>Sold Out</small></p>
                </div>
                <button class="buy-button">View Product</button>
            </div>

            <div class="card">
                <div class="product-image"><img src="<?= base_url() ?>assets/hero/1/Images/P-2.png"></div>
                <p class="category">Sneakers</p>
                <p class="product-name">Nike Running Shoes</p>
                <div class="germ">
                    <p class="prdouct-price">$ 100 <small>price</small></p>
                    <p class="product-quantity">500 <small>Sold Out</small></p>
                </div>
                <button class="buy-button">View Product</button>
            </div>

            <div class="card">
                <div class="product-image"><img src="<?= base_url() ?>assets/hero/1/Images/P-3.png"></div>
                <p class="category">Sneakers</p>
                <p class="product-name">Nike Running Shoes</p>
                <div class="germ">
                    <p class="prdouct-price">$ 100 <small>price</small></p>
                    <p class="product-quantity">500 <small>Sold Out</small></p>
                </div>
                <button class="buy-button">View Product</button>
            </div>

            <div class="card">
                <div class="product-image"><img src="<?= base_url() ?>assets/hero/1/Images/P-4.png"></div>
                <p class="category">Sneakers</p>
                <p class="product-name">Nike Running Shoes</p>
                <div class="germ">
                    <p class="prdouct-price">$ 100 <small>price</small></p>
                    <p class="product-quantity">500 <small>Sold Out</small></p>
                </div>
                <button class="buy-button">View Product</button>
            </div>
            
        </div><div class="next-button">
            <i class="fa-solid fa-arrow-left"></i>
        </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>