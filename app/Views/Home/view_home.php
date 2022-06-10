<?= $this->extend('Home/template_view.php'); ?>
<?= $this->section('content_front'); ?>

<!-- INI BUAT MASUKIN BAGIAN ISI YANG NON NAVIGASI SAMA NON FOOTER -->
<section class="home" id="home">
            <div class="container home-wrapper">
                <div class="content-left" data-aos="fade-right">
                    <h1 class="heading">Discover Restaurant
                        & Delicious Food With Sushi<span>Street</span></h1>
                    <p class="subheading">We hServe sushi with fresh ingredients and of course at a populist price</p>
                    <div class="box-wrapper">
                        <div class="box">
                            <i class='bx bxs-check-square'></i>
                            <p>Plan Your Visit</p>
                        </div>
                        <div class="box">
                            <i class='bx bxs-check-square'></i>
                            <p>Happy with us</p>
                        </div>
                    </div>
                    <div class="form-panel">
                        <img src="/SushiStreet/assets/img/form.png" alt="">
                        <div class="title-form">
                            <p>Book Now</p>
                        </div>
                        <div class="form-location">
                            <i class='bx bxs-map loc'></i>
                            <div class="location">
                                <p>Location <i class='bx bx-chevron-down'></i></p>
                                <select>
                                    <option value="">Jakarta, indonesia</option>
                                    <option value="">Depok, indonesia</option>
                                    <option value="">Tangerang Selatan, indonesia</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-date">
                            <i class='bx bxs-calendar-alt cal'></i>
                            <div class="date">
                                <p>Date <i class='bx bx-chevron-down'></i></p>
                                <input type="date">
                            </div>
                        </div>
                        <div class="btn-search">
                            <i class='bx bx-search'></i>
                        </div>
                    </div>
                    <p class="sugestion">Popular search : BSD City, Margonda City, Plaza Indonesia</p>
                </div>
                <div class="content-right" data-aos="fade-left">
                    <div class="img-wrapper">
                        <img src="/SushiStreet/assets/img/1651671583031.png" alt="" width="400" height="400">
                    </div>

                </div>

            </div>
        </section>
    </header>

    <!-- Service Start -->
    <section class="service">
        <div class="container service-wrapper">
            <div class="row1">
                <p class="label-service">What we serve</p>
                <h1 class="heading-service">Top Values For You</h1>
                <p class="subheading-service">The best service that will be with you every time</p>
            </div>
            <div class="row2" data-aos="fade-up">
                <div class="box-service">
                    <i class='bx bx-tada bx-globe'></i>
                    <h3>Lot of Choises</h3>
                    <p>Total more than 12 stores in Jakarta, Depok & Tangerang</p>

                    <div class="btn-learn">
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="box-service">
                    <i class='bx bx-tada bxs-food-menu'></i>
                    <h3>Menu</h3>
                    <p>A total of more than 20 sushi variants in each of our shop menus</p>

                    <div class="btn-learn">
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="box-service">
                    <i class='bx bx-tada bxs-cart-add'></i>
                    <h3>Easy Booking</h3>
                    <p>We provide all services online
                        which can be accessed easily
                        through our website</p>

                    <div class="btn-learn">
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="box-service">
                    <i class='bx bxs-like bx-tada bx-restaurant '></i>
                    <h3>Luxury Restaurant</h3>
                    <p>Strategic location of the restaurant, comfortable atmosphere with 5 star facilities</p>

                    <div class="btn-learn">
                        <a href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->

    <!-- Produk start -->
    <section class="produk">
        <div class="container produk-wrapper">
            <div class="row1">
                <div class="title-produk" data-aos="fade-right">
                    <p class="label-produk">TOP MENU</p>
                    <h1 class="heading-produk">Explore Our Foods</h1>
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
                    <?php foreach ($menu as $m) : ?>
                        <div class="swiper-slide card-produk">
                            <img src="/img/<?= $m['img']; ?>" alt="" width="400" height="400">
                            <div class="detail-produk">
                                <div class="kategori">
                                    <p class="label-kategori"><?= $m['jenis_menu']; ?></p>
                                    <p class="price">Rp <?= $m['harga']; ?></p>
                                </div>
                                <div class="title-card">
                                    <h1><?= $m['menu']; ?></h1>
                                </div>
                                <div class="review">
                                    <div class="star">
                                        <i class='bx bxs-star'></i> 5.0
                                    </div>
                                    <p>1.6k reviewer</p>
                                </div>
                                <div class="body-card">
                                    <p><?= $m['keterangan']; ?></p>
                                </div>
                                <div class="btn-produk">
                                    <a href="Menu.html">Detail</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Produk end -->

    <div class="banner1 container">
        <div class="content">
            <h1 class="bx-flashing heading">SPECIAL OFFER</h1>
            <h3>Family Weeked Package</h3>
            <p>Discount up to 30%</p>
        </div>
        <div class="btn-book">
            <a href="service.html">Book Now</a>
        </div>
    </div>

    <!-- Statistk start -->
    <section class="statistik">
        <div class="container statistik-wrapper">
            <div class="content-img" data-aos="fade-right">
                <img src="/SushiStreet/assets/img/1651670555656.png" alt="">
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
<!-- INI BUAT MASUKIN BAGIAN ISI YANG NON NAVIGASI SAMA NON FOOTER -->


<?= $this->endSection(); ?>