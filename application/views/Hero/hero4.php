<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <!--=== Favicon ===-->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/images/favicon.png">
    <title>Maoju Online Store
        <?= $page_title ?>
    </title>
    <!--=== All Plugins CSS ===-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">

    <link href="<?= base_url() ?>assets/hero/3/css/plugins.css" rel="stylesheet">
    <!--=== All Vendor CSS ===-->
    <link href="<?= base_url() ?>assets/hero/3/css/vendor.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?= base_url() ?>assets/hero/3/css/style.css" rel="stylesheet">
    <!-- Modernizer JS -->
    <script src="<?= base_url() ?>assets/hero/3/js/modernizr-2.8.3.min.js"></script>
</head>

<body style="background: #CD061D">
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
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->
                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <ul>
                            <li><i class="fa fa-mobile"></i> <a href="#">0123456789</a> </li>
                            <li><i class="fa fa-envelope-o"></i> <a href="#">info@maojud.net</a> </li>
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
    <!-- main wrapper start -->
    <main>
        <!-- hero slider section start -->
        <section class="">
            <div class="container">
                <div class="row py-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-slider-active">
                            <div class="">
                                <div class="">
                                    <div class="hero-slider-content slide-1">
                                        <h5 class="slide-subtitle">Top Selling!</h5>
                                        <h2 class="slide-title">New Collection</h2>
                                        <p class="slide-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor incidid</p>
                                        <div class="price mt-4">
                                            <div class="line"><hr></div>
                                            <h3>$ 100.00</h3>
                                        </div>
                                        <a href="#" class="btn btn-hero shop-now">SHOP NOW</a>
                                        <p class="items-sold">* No. of Item(s) Sold: 10</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid" src="<?= base_url() ?>assets/hero/3/img/product/1.png">
                    </div>
                </div>
            </div>
        </section>
        <!-- our product area start -->
        <div class="our-product">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2 class="title text-white">Similar Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-carousel-4 mbn-50 slick-row-15 slick-arrow-style">
                            <!-- product single item start -->
                            <div class="product-item mb-50 bg-white">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= base_url() ?>assets/hero/3/img/product/product-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name">
                                        <a href="product-details.html">Leather Mens Slipper</a>
                                    </h5>
                                    <div class="price-box">
                                        <span class="price-regular">$80.00</span>
                                        <span class="price-old"><del>$70.00</del></span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-android-favorite-outline"></i></a>
                                        <a href="#" data-toggle="tooltip" title="Add To Cart"><i
                                                class="ion-bag"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i
                                                    class="ion-ios-eye-outline"></i></span> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item start -->

                            <!-- product single item start -->
                            <div class="product-item mb-50 bg-white">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= base_url() ?>assets/hero/3/img/product/product-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name">
                                        <a href="product-details.html">Quickiin Mens shoes</a>
                                    </h5>
                                    <div class="price-box">
                                        <span class="price-regular">$80.00</span>
                                        <span class="price-old"><del>$70.00</del></span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-android-favorite-outline"></i></a>
                                        <a href="#" data-toggle="tooltip" title="Add To Cart"><i
                                                class="ion-bag"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i
                                                    class="ion-ios-eye-outline"></i></span> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item start -->

                            <!-- product single item start -->
                            <div class="product-item mb-50 bg-white">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= base_url() ?>assets/hero/3/img/product/product-3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name">
                                        <a href="product-details.html">Rexpo Womens shoes</a>
                                    </h5>
                                    <div class="price-box">
                                        <span class="price-regular">$80.00</span>
                                        <span class="price-old"><del>$70.00</del></span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-android-favorite-outline"></i></a>
                                        <a href="#" data-toggle="tooltip" title="Add To Cart"><i
                                                class="ion-bag"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i
                                                    class="ion-ios-eye-outline"></i></span> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item start -->

                            <!-- product single item start -->
                            <div class="product-item mb-50 bg-white">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= base_url() ?>assets/hero/3/img/product/product-4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name">
                                        <a href="product-details.html">Primitive Mens shoes</a>
                                    </h5>
                                    <div class="price-box">
                                        <span class="price-regular">$80.00</span>
                                        <span class="price-old"><del>$70.00</del></span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-android-favorite-outline"></i></a>
                                        <a href="#" data-toggle="tooltip" title="Add To Cart"><i
                                                class="ion-bag"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i
                                                    class="ion-ios-eye-outline"></i></span> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item start -->

                            <!-- product single item start -->
                            <div class="product-item mb-50 bg-white">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= base_url() ?>assets/hero/3/img/product/product-5.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name">
                                        <a href="product-details.html">Leather Mens Slipper</a>
                                    </h5>
                                    <div class="price-box">
                                        <span class="price-regular">$80.00</span>
                                        <span class="price-old"><del>$70.00</del></span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-android-favorite-outline"></i></a>
                                        <a href="#" data-toggle="tooltip" title="Add To Cart"><i
                                                class="ion-bag"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i
                                                    class="ion-ios-eye-outline"></i></span> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item start -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our product area end -->

        <!-- hero slider section end -->
        <!-- service features start -->
        <section class="service-policy-area section-padding">
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
    <div class="scroll-top not-visible"> <i class="fa fa-angle-up"></i> </div>
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
                                        <h2 class="contact-title">tell us about your product</h2>
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
                                            Claritas est etiam processus dynamicus, qui sequitur
                                            mutationem consuetudium lectorum. Mirum est notare quam
                                            littera gothica, quam nunc putamus parum claram anteposuerit
                                            litterarum formas human.
                                        </p>
                                        <ul>
                                            <li>
                                                <i class="fa fa-fax"></i> Address : No 40 Baria Sreet 133/2
                                                NewYork City
                                            </li>
                                            <li><i class="fa fa-phone"></i> info@yourdomain.com</li>
                                            <li><i class="fa fa-envelope-o"></i> +88013245657</li>
                                        </ul>
                                        <div class="working-time">
                                            <h3>Working Hours</h3>
                                            <p class="pb-0"><span>Monday – Saturday:</span>08AM – 22PM</p>
                                        </div>
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
    <div class="modal" id="showNowModal">
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
                                        <img id="product_image" src="" alt="product thumb" />
                                    </div>

                                </div>
                                <div class="pro-nav slick-row-5">
                                    <div class="pro-nav-thumb"><img id="product_image2" src="" alt="" /></div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des">
                                    <h3 class="pro-det-title" id="product_name">Primitive Mens Premium Shoes</h3>
                                    <div class="pro-review">
                                        <span>Sold Out: </span><span id="sold_out"></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price" id="product_price">$70.00</span>
                                    </div>
                                    <div class="availability mb-10 mt-2">
                                        <h5 class="cat-title">Availability:</h5>
                                        <span>In Stock</span>
                                    </div>
                                    <p id="product_desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                        diam voluptua.</p>
                                    <div class="form mb-5">
                                        <form action="<?= base_url('confirm-order') ?>" method="post">
                                            <input type="hidden" name="product_id" id="product_id" required="">
                                            <div class="single-input-item">
                                                <input type="text" name="fullname" placeholder="Fullname" required="">
                                            </div>
                                            <div class="single-input-item">
                                                <input type="email" name="email" placeholder="Email" required="">
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="single-input-item">
                                                        <input name="phone" type="tel" placeholder="Phone" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="single-input-item">
                                                        <input name="qty" type="number" placeholder="Quantity"
                                                            required="">
                                                    </div>
                                                </div>
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




    <script>
        $(document).ready(function () {
            $('.shop-now').on('click', function () {
                $('#showNowModal').modal('show');
                var id = $(this).data('id');
                var name = $(this).data('name');
                var price = $(this).data('price');
                var description = $(this).data('description');
                var sold_out = $(this).data('sold');
                var product_image = $(this).data('image');

                console.log($(this).data('image'));

                $('#product_id').val(id);
                $('#product_name').text(name);
                $('#product_price').text(price);
                $('#product_desc').text(description);
                $('#sold_out').text(sold_out);
                document.getElementById("product_image").src = product_image;

            })
        })
    </script>

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


</body>

</html>