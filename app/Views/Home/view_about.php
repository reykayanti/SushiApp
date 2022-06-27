<?= $this->extend('Home/template_view.php'); ?>
<?= $this->section('content_front'); ?>


<!-- INI BUAT MASUKIN BAGIAN ISI YANG NON NAVIGASI SAMA NON FOOTER -->
<section class="produk">
        <div class="container produk-wrapper">
            <div class="row1">
                <div class="title-produk" data-aos="fade-right">
                    <p class="label-produk">Restaurant</p>
                    <h1 class="heading-produk">Our Galery</h1>
                </div>
                <div class="toggle-slider" data-aos="fade-left">
                    <i class='bx bxs-chevron-left-circle'></i>
                    <i class='bx bxs-chevron-right-circle'></i>
                </div>
            </div>
            <div class="row2">
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide card-produk">
                            <img src="/Sushistreet/assets/img/tmpt2.jpg" alt="" width="400" height="400">
                        </div>
                        <div class="swiper-slide card-produk">
                            <img src="/Sushistreet/assets/img/tmpt1.jpg" alt="" width="400" height="400">
                        </div>
                        <div class="swiper-slide card-produk">
                            <img src="/Sushistreet/assets/img/tmpt3.jpg" alt="" width="400" height="400">
                        </div>
                        <div class="swiper-slide card-produk">
                            <img src="/Sushistreet/assets/img/tmpt4.jpg" alt="" width="400" height="400">
                        </div>
                        <div class="swiper-slide card-produk">
                            <img src="/Sushistreet/assets/img/tmpt5.jpg" alt="" width="400" height="400">
                        </div>
                        <div class="swiper-slide card-produk">
                            <img src="/Sushistreet/assets/img/tmpt6.jpg" alt="" width="400" height="400">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistk start -->
    <section class="statistik">
        <div class="container statistik-wrapper">
            <div class="content-img" data-aos="fade-right">
                <img src="/Sushistreet/assets/img/1651670555656.png" alt="">
            </div>
            <div class="content-statis" data-aos="fade-left">
                <p class="label-statis">OUR PERFORMANCE</p>
                <h1 class="heading-statis">Most people are satisfied
                    with our service</h1>
                <p class="subheading-statis">We always provide the best service to customers, we will direct you from ordering menus to payment.    </p>

                <div class="angka-wrapper">
                    <div class="bx-flashing box-angka">
                        <h1>10</h1>
                        <p>Years
                            Experience</p>
                    </div>
                    <div class="bx-flashing box-angka">
                        <h1>10++</h1>
                        <p>Many Menu</p>
                    </div>
                    <div class="bx-flashing box-angka">
                        <h1>4k++</h1>
                        <p>Customers
                            Happy</p>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- statistik end -->

    <!-- TESTI START -->
    <section class="testi">
        <div class="container testi-wrapper">
            <div class="col-heading" data-aos="fade-right">
                <p class="label-testi">WHAT THEY SAID ?</p>
                <h1 class="heading-testi">What customers say
                    about their experience with us</h1>
                <p class="subheading-testi">They said what they felt, most of them said they were very satisfied, especially satisfied with the taste of the food here and also the comfortable place.</p>
            </div>
            <div class="col-slider-testi" data-aos="fade-left">
                <!-- Swiper -->
                <div class="swiper mySwiperTesti">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide card-testi">
                            <img src="/Sushistreet/assets/img/testi3.jpg" alt="" height="100" width="200">
                            <div class="text-testi">
                                <i class='bx bxs-quote-left'></i>
                                <p>Sushi and Sashimi are quite fresh and taste authentic. The nabe is delicious, the sushi portion is also delicious & big for the size,the price is very affordable.</p>
                                <i class='bx bxs-quote-right'></i>
                            </div>
                            <p class="username">by Pascal</p>
                            <p class="status">Barista</p>
                        </div>
                        <div class="swiper-slide card-testi">
                            <img src="/Sushistreet/assets/img/testi1.jpg" alt="" height="100" width="100">
                            <div class="text-testi">
                                <i class='bx bxs-quote-left'></i>
                                <p>Want to try Japanese food, but limited money? Sushi Street is the answer. an affordable price. I guess Japanese food is expensive.</p>
                                <i class='bx bxs-quote-right'></i>
                            </div>
                            <p class="username">by RaihanAbdi</p>
                            <p class="status">ProPlayer ML</p>
                        </div>
                        <div class="swiper-slide card-testi">
                            <img src="/Sushistreet/assets/img/testi2.jpg" alt="" height="100" width="100">
                            <div class="text-testi">
                                <i class='bx bxs-quote-left'></i>
                                <p>Not bad, the portions are large, the taste is also good, the location is near the house too. and most importantly the price is cheap.</p>
                                <i class='bx bxs-quote-right'></i>
                            </div>
                            <p class="username">by Ferdi</p>
                            <p class="status">Photographer</p>
                        </div>
                       
                        <div class="swiper-slide card-testi">
                            <img src="/Sushistreet/assets/img/testi4.jpg" alt="" height="100" width="200">
                            <div class="text-testi">
                                <i class='bx bxs-quote-left'></i>
                                <p>The menu is cheap, everything is fresh and tastes really good. maybe you will be a little surprised by the taste with a human price.</p>
                                <i class='bx bxs-quote-right'></i>
                            </div>
                            <p class="username">by Nanda.S</p>
                            <p class="status">Selebgram</p>
                        </div>
                        <div class="swiper-slide card-testi">
                            <img src="/Sushistreet/assets/img/testi5.jpg" alt="" height="100" width="100">
                            <div class="text-testi">
                                <i class='bx bxs-quote-left'></i>
                                <p>All fresh, hygienic, clean, good taste, fast and friendly service. the price is friendly and also the place is comfortable, 10/10 would come back again.</p>
                                <i class='bx bxs-quote-right'></i>
                            </div>
                            <p class="username">by RetnoEka</p>
                            <p class="status">Traveller</p>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTI END -->
<!-- INI BUAT MASUKIN BAGIAN ISI YANG NON NAVIGASI SAMA NON FOOTER -->


<?= $this->endSection(); ?>