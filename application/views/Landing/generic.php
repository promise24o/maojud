<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/generic/index.css" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/images/favicon.png">
    <title>Maoju Online Store <?= $page_title ?></title>
</head>

<body>
    <header>
        <img width="100" class="heading" src="<?= base_url() ?>assets/images/favicon.png" alt="">
        <!-- <h1 class="heading">MAOJU <span>Online Store</span></h1> -->
        <nav></nav>
    </header>
    <main>

        <section class="standard-row section-one">
            <img src="<?= base_url() ?>assets/landing/generic/shapes/circleFive.png" class="shape circleFive">
            <img src="<?= base_url() ?>assets/landing/generic/shapes/circleFour.png" class="shape circleFour">
            <img src="<?= base_url() ?>assets/landing/generic/shapes/circleOne.png" class="shape circleOne">
            <img src="<?= base_url() ?>assets/landing/generic/shapes/circleThree.png" class="shape circleThree">
            <img src="<?= base_url() ?>assets/landing/generic/shapes/circleTwo.png" class="shape circleTwo">
            <img src="<?= base_url() ?>assets/landing/generic/shapes/star1.png" class="shape starOne">
            <img src="<?= base_url() ?>assets/landing/generic/shapes/star2.png" class="shape starTwo">
            <img src="<?= base_url() ?>assets/landing/generic/shapes/TriangleOne.png" class="shape tri">

            
            <?php 
                $firstProduct   = $this->landing_model->getFirstProduct($page['encrypted_id']); 
                $secondProduct  = $this->landing_model->getSecondProduct($page['encrypted_id']); 
                $thirdProduct  = $this->landing_model->getThirdProduct($page['encrypted_id']); 
                $fourthProduct  = $this->landing_model->getFourthProduct($page['encrypted_id']); 
                $fifthProduct  = $this->landing_model->getFifthProduct($page['encrypted_id']); 
                $sixthProduct  = $this->landing_model->getSixthProduct($page['encrypted_id']); 
                $seventhProduct  = $this->landing_model->getSeventhProduct($page['encrypted_id']); 

                $pieces = explode(' ', $firstProduct['name']);
                $last_word = array_pop($pieces);
            ?>
            <div class="section-one-statement">
                <h1 class="section-one-heading"><?= implode(' ',$pieces); ?>
                <span><?= $last_word ?></span></h1>
                <p class="section-one-paragraph">
                    <?= $firstProduct['description'] ?>
                </p>
                <button data-bs-toggle="modal" data-bs-target="#buyNowModal" class="section-one-button">
                        Buy Now
                    </button>
            </div>
           
            <div class="section-one-banner">
                <div class="section-one-circle">
                    <img class="section-one-image" src="<?= $this->crud_model->get_image_url('product', $firstProduct['id']) ?>" />
                </div>
            </div>

        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#FFF4F8" fill-opacity="1" d="M0,224L30,229.3C60,235,120,245,180,229.3C240,213,300,171,360,138.7C420,107,480,85,540,112C600,139,660,213,720,234.7C780,256,840,224,900,208C960,192,1020,192,1080,213.3C1140,235,1200,277,1260,266.7C1320,256,1380,192,1410,160L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
            </path>
        </svg>
        <section class="standard-row section-two">

            <div class="section-two-top">
                <h2 class="section-two-top-heading">
                    Special Experties From Us
                </h2>
                <p class="section-two-top-paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    In augue et pharetra dolor pharetra, convallis turpis euismod ultrices.
                    Netus nisl pretium sapien egestas vestibulum felis. Nisi orci.
                </p>

                <div class="section-two-top-grid">

                    <?php foreach($secondProduct as $secondProduct): ?>
                    <div class="section-two-top-card">
                        <img class="section-two-top-card-image" src="<?= $this->crud_model->get_image_url('product', $secondProduct['id']) ?>" alt="services-offered">
                        <h4 class="section-two-top-card-title"><?= $secondProduct['name'] ?></h4>
                        <p class="section-two-top-card-paragraph">
                            <?= $secondProduct['description'] ?>
                        </p>
                    </div>
                    <?php endforeach; ?>

                    <?php foreach($thirdProduct as $thirdProduct): ?>
                    <div class="section-two-top-card">
                        <img class="section-two-top-card-image" src="<?= $this->crud_model->get_image_url('product', $thirdProduct['id']) ?>" alt="services-offered">
                        <h4 class="section-two-top-card-title"><?= $thirdProduct['name'] ?></h4>
                        <p class="section-two-top-card-paragraph">
                            <?= $thirdProduct['description'] ?>
                        </p>
                    </div>
                    <?php endforeach; ?>

                    <?php foreach($fourthProduct as $fourthProduct): ?>
                    <div class="section-two-top-card">
                        <img class="section-two-top-card-image" src="<?= $this->crud_model->get_image_url('product', $fourthProduct['id']) ?>" alt="services-offered">
                        <h4 class="section-two-top-card-title"><?= $fourthProduct['name'] ?></h4>
                        <p class="section-two-top-card-paragraph">
                            <?= $fourthProduct['description'] ?>
                        </p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php foreach($fifthProduct as $fifthProduct): ?>
            <div class="section-two-bottom">
                <div class="section-two-bottom-left">
                    <img class="section-two-bottom-left-image" src="<?= $this->crud_model->get_image_url('product', $fifthProduct['id']) ?>">
                </div>
                <div class="section-two-bottom-right">
                    <h2 class="section-two-bottom-right-heading">
                       <?= $fifthProduct['name'] ?>
                    </h2>
                    <hr class="section-two-bottom-right-line-break">
                    <p class="section-two-bottom-left-paragraph">
                        <?= $fifthProduct['description'] ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </section>

        <?php foreach($sixthProduct as $sixthProduct): ?>
        <section class="standard-row section-three">
            <div class="section-three-left">
                <h2 class="section-three-left-heading">
                   <?= $sixthProduct['name'] ?>
                </h2>
                <hr class="section-three-left-line-break" />
                <p class="section-three-left-paragraph">
                    <?= $sixthProduct['description'] ?>
                </p>
            </div>

            <div class="section-three-right">
                <img class="section-three-right-image" src="<?= $this->crud_model->get_image_url('product', $sixthProduct['id']) ?>">
            </div>
        </section>
        <?php endforeach; ?>

        <?php foreach($seventhProduct as $seventhProduct): ?>
        <section class="standard-row section-four">
            <div class="section-four-left">
                <div class="section-four-left-image-container">
                    <div class="section-four-left-top"></div>
                    <div class="section-four-left-bottom"></div>
                    <img class="section-four-left-image" src="<?= $this->crud_model->get_image_url('product', $seventhProduct['id']) ?>">
                </div>
            </div>
            <div class="section-four-right">
                <h2 class="section-four-right-heading">
                    <?= $seventhProduct['name'] ?>
                </h2>
                <hr class="section-four-right-line-break">
                <p class="section-four-right-paragraph">
                    <?= $seventhProduct['description'] ?>
                </p>
                <button data-bs-toggle="modal" data-bs-target="#buyNowModal" class="section-one-button">
                        Buy Now
                    </button>
            </div>
        </section>
        <?php endforeach; ?>
        <section class="standard-row section-five">
                <h2 class="section-five-heading">
                    Contact Us
                </h2>

                <hr class="section-five-contact-line-break">
                <div class="container" style="padding:0 80px;">
                    <form action="<?= base_url('send-message') ?>" method="post">
                        <input name="slug" value="<?= $page['slug'] ?>" type="hidden" required />
                        <input name="product" value="<?= $page['encrypted_id'] ?>" type="hidden" required />
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Fullname</label>
                                    <input type="text" class="form-control" name="contact_name" placeholder="Fullname"
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Phone</label>
                                    <input type="text" class="form-control" name="contact_phone" placeholder="Phone No."
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="contact_email"
                                        placeholder="Email Address" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Subject</label>
                                    <input type="text" class="form-control" name="contact_subject" placeholder="Subject"
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <textarea type="text" class="form-control" name="contact_message"
                                        placeholder="Enter Message Here" required="" rows="6" cols="400"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="section-one-button">Send Message</button>
                    </form>
                </div>
            </section>
            <div class="modal fade" id="buyNowModal" tabindex="-1" aria-labelledby="buyNowModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="container mt-5 mb-5">
                            <div class="d-flex justify-content-center row">
                                <div class="col-md-12">
                                    <div class="row p-2 bg-white border rounded">
                                        <div class="col-md-3 mt-1"><img
                                                class="img-fluid img-responsive rounded product-image"
                                                src="<?= $this->crud_model->get_image_url('product', $firstProduct['id']) ?>">
                                        </div>
                                        <div class="col-md-6 mt-1">
                                            <h5><?= $page['title'] ?></h5>
                                            <p class="text-justify mb-0"><?= $firstProduct['description'] ?></p>
                                            <form action="<?= base_url('confirm-order') ?>" method="post">
                                                <input type="hidden" name="product_id"
                                                    value="<?= $page['encrypted_id'] ?>" required="">
                                                <input type="hidden" name="project"
                                                        value="<?=  $this->config->item('site_project'); ?>" required>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Fullname</label>
                                                    <input type="text" class="form-control" name="fullname"
                                                        placeholder="Fullname" required="">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Enter Email Address" required="">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Phone</label>
                                                            <input type="number" class="form-control" name="phone"
                                                                placeholder="Phone Number" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Quantity</label>
                                                            <input type="number" class="form-control" name="qty"
                                                                placeholder="Amount of Quantity" required="">
                                                        </div>
                                                    </div>
                                                </div>


                                                <button type="submit" class="btn btn-primary">Confirm Order</button>
                                                <button data-bs-dismiss="modal"
                                                    class="btn btn-outline-primary">Cancel</button>
                                            </form>
                                        </div>
                                        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                            <div class="d-flex flex-row align-items-center">
                                                <h4 class="mr-1">$<?= number_format($page['price'], 2) ?></h4>
                                            </div>
                                            <h6 class="text-success">Sold Out: <?= $page['sold_out'] ?></h6>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
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