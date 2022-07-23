<main>

    <section class="standard-row section-one">
        <?php
                $firstProduct = $this->crud_model->getFirstProduct($page['encrypted_id']);
            ?>
        <div class="section-one-statement">
            <h1 class="section-one-heading"><?= $firstProduct['name'] ?></h1>
            <p class="section-one-paragraph">
                <?= substr($firstProduct['description'],0,400) ?>
            </p>
            <button class="section-one-button">
                Get Started
            </button>
        </div>

        <div class="section-one-banner">
            <div class="section-one-circle">
                <img class="section-one-image"
                    src="<?= $this->crud_model->get_image_url('product', $firstProduct['id']) ?>" />
            </div>
        </div>

    </section>
    <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill-opacity="1"
            d="M0,224L30,229.3C60,235,120,245,180,229.3C240,213,300,171,360,138.7C420,107,480,85,540,112C600,139,660,213,720,234.7C780,256,840,224,900,208C960,192,1020,192,1080,213.3C1140,235,1200,277,1260,266.7C1320,256,1380,192,1410,160L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
        </path>
    </svg>
    <section class="standard-row section-two">

        <div class="section-two-top">
            <h2 class="section-two-top-heading">
                Our Amazing Products
            </h2>
            <p class="section-two-top-paragraph">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                In augue et pharetra dolor pharetra, convallis turpis euismod ultrices.
                Netus nisl pretium sapien egestas vestibulum felis. Nisi orci.
            </p>
            <!-- <h3><?= sizeof($this->crud_model->getThreeProducts($page['encrypted_id'])) ?></h3> -->
            <div class="section-two-top-grid">
                <?php 
                        $products = $this->crud_model->getThreeProducts($page['encrypted_id']); 
                        foreach($products as  $product):
                    ?>

                <div class="section-two-top-card">
                    <img width="200" height="180" class="section-two-top-card-image"
                        src="<?= $this->crud_model->get_image_url('product', $product['id']) ?>" alt="Our Products">
                    <h4 class="section-two-top-card-title"><?= $product['name'] ?></h4>
                    <p class="section-two-top-card-paragraph">
                        <?= substr($product['description'],0,180) ?>...
                    </p>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
        <?php
                $products = $this->crud_model->getFifthProduct($page['encrypted_id']);
                foreach($products as $product):
            ?>
        <div class="section-two-bottom">
            <div class="section-two-bottom-left">
                <img width="350" height="350" class="section-two-bottom-left-image"
                    src="<?= $this->crud_model->get_image_url('product', $product['id']) ?>">
            </div>
            <div class="section-two-bottom-right">
                <h2 class="section-two-bottom-right-heading">
                    <?= $product['name'] ?>
                </h2>
                <hr class="section-two-bottom-right-line-break">
                <p class="section-two-bottom-left-paragraph">
                    <?= substr($product['description'],0,400) ?>
                </p>
            </div>
        </div>
        <?php endforeach; ?>
    </section>
    <?php
            $products = $this->crud_model->getSixthProduct($page['encrypted_id']);
            foreach($products as $product):
        ?>
    <section class="standard-row section-three">
        <div class="section-three-left">
            <h2 class="section-three-left-heading">
                <?= $product['name'] ?>
            </h2>
            <hr class="section-three-left-line-break" />
            <p class="section-three-left-paragraph">
                <?= substr($product['description'],0,400) ?>
            </p>
        </div>

        <div class="section-three-right">
            <img width="350" height="350" class="section-three-right-image"
                src="<?= $this->crud_model->get_image_url('product', $product['id']) ?>">
        </div>
    </section>
    <?php endforeach; ?>
    <?php
            $products = $this->crud_model->getSeventhProduct($page['encrypted_id']);
            foreach($products as $product):
        ?>
    <section class="standard-row section-four">
        <div class="section-four-left">
            <div class="section-four-left-image-container">
                <!-- <div class="section-four-left-top"></div> -->
                <div class="section-four-left-bottom"></div>
                <img width="250" height="250" class="section-four-left-image"
                    src="<?= $this->crud_model->get_image_url('product', $product['id']) ?>">
            </div>
        </div>
        <div class="section-four-right">
            <h2 class="section-four-right-heading">
                <?= $product['name'] ?>
            </h2>
            <hr class="section-four-right-line-break">
            <p class="section-four-right-paragraph">
                <?= substr($product['description'],0,400) ?>
            </p>
            <button class="section-one-button">Get Started</button>
        </div>
    </section>
    <?php endforeach; ?>

    <section style="padding-top: 180px;" class="standard-row section-five">
        <h2 class="section-five-heading">
            Contact Us
        </h2>

        <hr class="section-five-contact-line-break">

        <form class="section-five-form">

            <div class="section-five-contact-form">
                <div class="dota">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="dota">
                    <label for message>Message</label>
                    <input type="text" id="message" name="meassage" class="special-input">
                </div>
            </div>

            <div class="section-five-contact-form">
                <div class="dota">
                    <label for="tel">Phone Number</label>
                    <input type="tel" id="tel" name="tel">
                </div>
                <div class="dota">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address">
                </div>
                <button class="section-one-button section-five-button">Get Started</button>
            </div>

        </form>
    </section>
    <!-- FOOTER -->
    <footer class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-2 col-md-6">
                    <h5 class=" mb-3">Navigate</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Other Products</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h5 class=" mb-3">Social</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Linkedin</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Twitter</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h5 class=" mb-3">Newsletter</h5>
                    <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt.</p>
                    <form action="#">
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" placeholder="Recipient's username"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h6 class="h1 ">Maoju Store</h6>
                    <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt.</p>
                    <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary"
                            target="_blank" href="https://maojud.net/">Maoju Online Store</a></p>
                </div>
            </div>
        </div>
    </footer>

</main>