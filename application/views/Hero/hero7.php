<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <!--=== Favicon ===-->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/images/favicon.png">
    <title> Maoju Online Store <?= $page_title ?> </title>
    <!--=== All Plugins CSS ===-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">

    <link href="<?= base_url() ?>assets/hero/3/css/plugins.css" rel="stylesheet">
    <!--=== All Vendor CSS ===-->
    <link href="<?= base_url() ?>assets/hero/3/css/vendor.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?= base_url() ?>assets/hero/3/css/style.css" rel="stylesheet">
    <!-- Modernizer JS -->
    <script src="<?= base_url() ?>assets/hero/3/js/modernizr-2.8.3.min.js"></script>
    <style>
        .detail-action {
            position: fixed;
            width: 100%;
            background: #fff;
            z-index: 99999999;
            bottom: 0px;
            padding: 0;
            margin: 0;
            border-top: 1px solid #ccc;
            left: 0;
        }

        .cart {
            margin: 10px 0 10px 0;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .whatsapp-link {
            border-radius: 5px;
            background: #5ffb7b !important;
            background: linear-gradient(180deg, #5ffb7b 0%, #22d340 100%) !important;
            font-size: 2.5rem;
            width: 20% !important;
            display: inline-block !important;
            cursor: pointer !important;
            text-align: center !important;
            text-align: center;
            color: #fff;
            padding: 7px 0;
            line-height: 25px;
            vertical-align: middle;
            display: flex !important;
            justify-content: center;
        }

        .btn-order-now {
            background:linear-gradient( 135deg , #E41D92 0%, #FF7A00 100.64%);
            display: block;
            width: 75% !important;
            padding: 4px 10px !important;
            font-size: 18px !important;
            border-radius: 5px !important;
            line-height: 0;
            margin-top: 0 !important;
            box-shadow: none;
            padding: 0px;
            color: #ffffff;
            font-weight: 400;
        }
    </style>

</head>

<body style="background: #ffffff">
    <!-- Start Header Area -->
    <header class="header-area">
        <!-- main header start -->
        <div class="main-header d-none d-lg-block">
            <!-- header middle area start -->
            <div class="header-main-area sticky">
                <div class="container">
                    <div class="row align-items-center position-relative">
                        <!-- start logo area -->
                        <div class="col-lg-2">
                            <div class="logo"> <a href="#">
                                    <img width="100" src="<?= base_url() ?>assets/images/favicon.png" alt="">
                                </a> </div>
                        </div>
                        <!-- start logo area -->
                        <!-- main menu area start -->
                        <div class="col-lg-8 position-static">
                            <div class="main-menu-area">
                                <div class="main-menu">
                                    <!-- main menu navbar start -->
                                    <nav class="desktop-menu">
                                        <ul>
                                            <li class="active"><a href="#">Home </a> </li>
                                            <li><a href="#products">Similar Products</a> </li>
                                            <li><a href="#">shop </a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#contactUsModal">Contact
                                                    us</a></li>
                                        </ul>
                                    </nav>
                                    <!-- main menu navbar end -->
                                </div>
                            </div>
                        </div>
                        <!-- main menu area end -->
                    </div>
                </div>
            </div>
            <!-- header middle area end -->
        </div>
        <!-- main header start -->
        <!-- mobile header start -->
        <div class="mobile-header d-lg-none d-md-block sticky">
            <!--mobile header top start -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mobile-main-header">
                            <div class="mobile-logo"> <a href="#">
                                    <img width="60" src="<?= base_url() ?>assets/images/favicon.png" alt="Brand Logo">
                                </a> </div>
                            <div class="mobile-menu-toggler">
                                <div class="mobile-menu-btn">
                                    <div class="off-canvas-btn"> <i class="ion-navicon"></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile header top start -->
        </div>
        <!-- mobile header end -->
    </header>
    <!-- end Header Area -->
    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas"> <i class="ion-android-close"></i> </div>
            <div class="off-canvas-inner">
                <!-- search box start -->
                <div class="search-box-offcanvas">
                    <form>
                        <input type="text" placeholder="Search Here...">
                        <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                    </form>
                </div>
                <!-- search box end -->
                <!-- mobile menu start -->
                <div class="mobile-navigation">
                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class=""><a href="#">Home</a> </li>
                            <li class=""><a href="#products">Similar Products</a> </li>
                            <li class=" "><a href="#">Shop</a> </li>
                            <li><a href="#" data-toggle="modal" data-target="#contactUsModal">Contact us</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->
                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <ul>
                            <li><i class="fa fa-mobile"></i> <a href="#"><?=  $this->config->item('site_phone'); ?></a>
                            </li>
                            <li><i class="fa fa-envelope-o"></i> <a
                                    href="#"><?=  $this->config->item('site_email'); ?></a> </li>
                        </ul>
                    </div>
                    <div class="off-canvas-social-widget"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i
                                class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-pinterest-p"></i></a> <a
                            href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i
                                class="fa fa-youtube-play"></i></a> </div>
                </div>
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->
    <?php
            $product_main = $this->crud_model->getProduct($page['encrypted_id']);
            $similar_products = $this->crud_model->getHeroSimilarProducts($page['encrypted_id']);
        ?>
    <!-- main wrapper start -->
    <main>
        <!-- hero slider section start -->
        <section class="">
            <div class="container">
                <div class="row py-5 align-items-center">
                    <div class="col-lg-12">
                        <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
                            <?php
                                for($i=0; $i<$page['images']; $i++):
                            ?>
                            <!-- single slider item start -->

                            <div class="hero-single-slide">
                                <div class="hero-slider-item">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <div class="hero-slider-content slide-1">
                                                < <h5 class="slide-subtitle" style="color: #000000;">Top Selling!</h5>
                                                    <h2 class="slide-title"
                                                        style="color: #000000; font-family:Poppins;">
                                                        <?= $product_main['name'] ?></h2>
                                                    <p class="slide-desc" style="color: #000000;">
                                                        <?= $product_main['description'] ?></p>
                                                    <div class="price mt-4">
                                                        <h3 style="color: #000000;">
                                                            <?= '$'.number_format($product_main['price'],2) ?>
                                                        </h3>
                                                    </div>
                                                    <a href="#" data-toggle="modal" data-target="#show-cart-modal"
                                                        class="btn shop-now"
                                                        style="background: linear-gradient( 135deg , #E41D92 0%, #FF7A00 100.64%); border: 2px solid; color:#FFFFFF; border-radius: 30px;">SHOP
                                                        NOW <i class="fa fa-arrow-right"></i></a>
                                                    <p class="items-sold" style="color: #000000;">* No. of Item(s) Sold:
                                                        <?= $product_main['sold_out'] ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-center">
                                            <img class="img-fluid" width="100%"
                                                src="<?= $this->crud_model->get_image_url('product', $product_main['id'].'_'.$i) ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- single slider item end -->
                            <?php endfor; ?>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- our product area start -->
        <!-- hero slider section end -->
        <?php if($similar_products): ?>
        <!-- our product area start -->
        <section id="products" class="our-product section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h1 class="title text-white">Similar Products</h1>
                            <p class="sub-title text-white">Other users also checked out this products here.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-carousel-4 mbn-50 slick-row-15 slick-arrow-style shadow-hover h-100">
                            <?php foreach($similar_products as $product): ?>
                            <!-- product single item start -->
                            <div class="product-item mb-50 bg-white bg-white">
                                <div class="product-thumb"> <a
                                        href="<?= base_url('/' . $this->crud_model->getPageSlug($product['landing_page'])) ?>">
                                        <img width="220" height="250"
                                            src="<?= $this->crud_model->get_image_url('product', $product['id'].'_'."0") ?>"
                                            alt="">
                                    </a> </div>
                                <div class="product-content">
                                    <h4 class="product-name text-break">
                                        <a
                                            href="<?= base_url('/' . $this->crud_model->getPageSlug($product['landing_page'])) ?>"><?= $product['name'] ?></a>
                                        <p class="mb-2 mt-1 text-gray">
                                            <?= $this->crud_model->getCategoryName($product['category']) ?></p>
                                    </h4>

                                    <div class="price-box">
                                        <p class="price-regular mb-2">
                                            <strong>Price:</strong>$<?= number_format($product['price'],2) ?></p>
                                        <p class="price-regular"><strong>Sold Out:
                                            </strong><?= $product['sold_out'] ?>
                                        </p>
                                    </div>

                                    <div class="product-action-link">
                                        <a href="<?= base_url('/' . $this->crud_model->getPageSlug($product['landing_page'])) ?>"
                                            class="shop-now" data-toggle="tooltip" title="Shop Now"><i
                                                class="ion-bag"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item start -->
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our product area end -->
        <?php endif; ?>
        <!-- our product area end -->

        <!-- hero slider section end -->
        <!-- service features start -->
        <section class="service-policy-area section-padding" style="margin-bottom: 2rem;">
            <div class="container">
                <div class="row mtn-30">
                    <!-- single policy item start -->
                    <div class="col-lg-4">
                        <div class="service-policy-item mt-30 bg-1">
                            <div class="policy-icon"> <img src="<?= base_url() ?>assets/hero/3/img/icon/policy-1.png"
                                    alt="policy icon"> </div>
                            <div class="policy-content">
                                <h5 class="policy-title">FREE SHIPPING</h5>
                                <p class="policy-desc">Free shipping on all order</p>
                            </div>
                        </div>
                    </div>
                    <!-- single policy item start -->
                    <!-- single policy item start -->
                    <div class="col-lg-4">
                        <div class="service-policy-item mt-30 bg-2">
                            <div class="policy-icon"> <img src="<?= base_url() ?>assets/hero/3/img/icon/policy-2.png"
                                    alt="policy icon"> </div>
                            <div class="policy-content">
                                <h5 class="policy-title">ONLINE SUPPORT</h5>
                                <p class="policy-desc">Online support 24 hours a day</p>
                            </div>
                        </div>
                    </div>
                    <!-- single policy item start -->
                    <!-- single policy item start -->
                    <div class="col-lg-4">
                        <div class="service-policy-item mt-30 bg-3">
                            <div class="policy-icon"> <img src="<?= base_url() ?>assets/hero/3/img/icon/policy-3.png"
                                    alt="policy icon"> </div>
                            <div class="policy-content">
                                <h5 class="policy-title">MONEY RETURN</h5>
                                <p class="policy-desc">Back guarantee under 5 days</p>
                            </div>
                        </div>
                    </div>
                    <!-- single policy item start -->
                </div>
            </div>
        </section>
        <!-- service features end -->
    </main>
    <!-- main wrapper end -->
    <!-- Scroll to top start -->
    <div class="detail-action">
        <div class="cart">
            <button href="#" data-toggle="modal" data-target="#show-cart-modal" class="btn btn-order-now shop-now">SHOP
                NOW FOR <?= '$'.number_format($product_main['price'],2) ?></button>
            <a href="https://wa.me/905527389901/?text=Hello%2C%20I%20am%20contacting%20you%20for%20this%20product%20<?= urlencode(current_url())?>"
                class="whatsapp-link">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
    </div>
    <!-- Scroll to Top End -->
    <!--=======================Javascript============================-->
    <!--=== All Vendor Js ===-->
    <script src="<?= base_url() ?>assets/hero/3/js/vendor.js"></script>
    <!--=== All Plugins Js ===-->
    <script src="<?= base_url() ?>assets/hero/3/js/plugins.js"></script>
    <!--=== Active Js ===-->
    <script src="<?= base_url() ?>assets/hero/3/js/active.js"></script>
    <!-- Contact Us modal start -->
    <div class="modal" id="contactUsModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- contact us inner end -->
                    <div class="contact-area section-padding">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contact-message">
                                        <h2 class="contact-title mb-1">Always Keep Touch With Us</h2>
                                        <p class="mb-2">Fill the form below to get started.</p>
                                        <form action="<?= base_url('send-message') ?>" method="post"
                                            class="contact-form">
                                            <div class="row">
                                                <input name="slug" value="<?= $page['slug'] ?>" type="hidden"
                                                    required />
                                                <input name="product" value="<?= $product['encrypted_id'] ?>"
                                                    type="hidden" required />
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <input name="contact_name" placeholder="Name *" type="text"
                                                        required />
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <input name="contact_phone" placeholder="Phone *" type="text"
                                                        required />
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <input name="contact_email" placeholder="Email *" type="text"
                                                        required />
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <input name="contact_subject" placeholder="Subject *" type="text" />
                                                </div>
                                                <div class="col-12">
                                                    <div class="contact2-textarea text-center">
                                                        <textarea placeholder="Message *" name="contact_message"
                                                            class="form-control2" required=""></textarea>
                                                    </div>
                                                    <div class="contact-btn">
                                                        <button class="btn" type="submit">Send Message</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-info pt-0">
                                        <h2 class="contact-title">contact us</h2>
                                        <p>
                                            Send Us a message. We'll keep your email address private and get back to you
                                            quickly.
                                        </p>
                                        <ul>
                                            <li>
                                                <i class="fa fa-fax"></i> Address :
                                                <?= $this->config->item('site_address') ?>
                                            </li>
                                            <li><i class="fa fa-phone"></i> <?= $this->config->item('site_email') ?>
                                            </li>
                                            <li><i class="fa fa-envelope"></i>
                                                <?= $this->config->item('site_phone') ?></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- contact us inner end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Us modal end -->

    <!-- Quick view modal start -->
    <div class="modal" id="show-cart-modal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider mb-20">
                                    <div class="pro-large-img img-zoom">
                                        <img id="product_image"
                                            src="<?= $this->crud_model->get_image_url('product', $product_main['id'].'_0') ?>"
                                            alt="product thumb" />
                                    </div>

                                </div>
                                <div class="pro-nav slick-row-5">
                                    <div class="pro-nav-thumb"><img id="product_image2" src="" alt="" /></div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des">
                                    <h3 class="pro-det-title" id="product_name"><?= $product_main['name'] ?></h3>
                                    <div class="pro-review">
                                        <span>Sold Out: </span><span><?= $product_main['sold_out'] ?></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price"
                                            id="product_price">$<?= number_format($product_main['price'],2) ?></span>
                                    </div>
                                    <div class="availability mb-10 mt-2">
                                        <h5 class="cat-title">Availability:</h5>
                                        <span>In Stock</span>
                                    </div>
                                    <p id="product_desc"><?= $product_main['description'] ?></p>
                                    <div class="form mb-5">
                                        <form action="<?= base_url('confirm-order') ?>" method="post">
                                            <input type="hidden" name="product_id"
                                                value="<?= $product_main['encrypted_id'] ?>" required="">
                                            <input type="hidden" name="project"
                                                value="<?=  $this->config->item('site_project'); ?>" required>
                                            <div class="single-input-item">
                                                <input type="text" name="fullname" placeholder="Fullname" required="">
                                            </div>
                                            <div class="single-input-item">
                                                <input type="email" name="email" placeholder="Email" required="">
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="single-input-item">
                                                        <input name="phone" id="tel" type="tel" placeholder="Phone"
                                                            required="">
                                                        <span style="font-size: x-small;">Include Country Code (e.g
                                                            +1)</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="single-input-item">
                                                        <input name="qty" type="number" placeholder="Quantity"
                                                            required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="single-input-item">
                                                        <textarea required placeholder="Enter Delivery Address"
                                                            name="address"></textarea>
                                                    </div>
                                                </div>
                                                <?php if($product_main['has_color'] == 1): ?>
                                                <div class="col-lg-6">
                                                    <div class="single-input-item">
                                                        <select class="form-control" name="color" required>
                                                            <option value="">Select Color</option>
                                                            <?php
                                                                $colors = explode(',', $product_main['colors']);
                                                                foreach($colors as $color):
                                                            ?>
                                                            <option><?= $color ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <?php if($product_main['has_size'] == 1): ?>
                                                <div class="col-lg-6">
                                                    <div class="single-input-item">
                                                        <select class="form-control" name="size" required>
                                                            <option value="">Select Size</option>
                                                            <?php
                                                                $sizes = explode(',', $product_main['sizes']);
                                                                foreach($sizes as $size):
                                                            ?>
                                                            <option><?= $size ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                            </div>

                                            <div class="single-input-item">
                                                <button class="btn">Confirm Order</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="share-icon">
                                        <h5 class="cat-title">Share:</h5>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js"
        integrity="sha512-8pHNiqTlsrRjVD4A/3va++W1sMbUHwWxxRPWNyVlql3T+Hgfd81Qc6FC5WMXDC+tSauxxzp1tgiAvSKFu1qIlA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- SHOW TOASTR NOTIFICATION -->
    <?php if ($this->session->flashdata('flash_message') != "") : ?>

    <script type="text/javascript">
        toastr.success('<?php echo $this->session->flashdata("flash_message"); ?>');
    </script>

    <?php endif; ?>

    <!-- SHOW TOASTR NOTIFICATION -->
    <?php if ($this->session->flashdata('flash_error') != "") : ?>

    <script type="text/javascript">
        toastr.error('<?php echo $this->session->flashdata("flash_error"); ?>');
    </script>

    <?php endif; ?>

    <!-- SHOW TOASTR NOTIFICATION -->
    <?php if ($this->session->flashdata('flash_warning') != "") : ?>

    <script type="text/javascript">
        toastr.warning('<?php echo $this->session->flashdata("flash_warning"); ?>');
    </script>

    <?php endif; ?>

    <script>
        const tel = document.getElementById('tel');

        tel.addEventListener('input', function () {
            let start = this.selectionStart;
            let end = this.selectionEnd;

            const current = this.value
            const corrected = current.replace(/([^+0-9]+)/gi, '');
            this.value = corrected;

            if (corrected.length < current.length) --end;
            this.setSelectionRange(start, end);
        });
    </script>


</body>

</html>