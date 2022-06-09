<?= $this->extend('Home/template_view.php'); ?>
<?= $this->section('content_front'); ?>


<!-- INI BUAT MASUKIN BAGIAN ISI YANG NON NAVIGASI SAMA NON FOOTER -->
<!-- Service Start -->
<section class="home" id="home">
            <div class="container home-wrapper">
                <div class="content-left" data-aos="fade-right">
                    <h1 class="heading"> Sushi<span>Street</span></h1>
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
                                    <option value="">Plaza Indonesia, Jakarta</option>
                                    <option value="">Aeon Mall, Tangerang Selatan</option>
                                    <option value="">Margocity, Depok</option>
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
                        <img src="/SushiStreet/assets/img/1651670555656.png" alt="" width="400" height="400">
                    </div>

                </div>

            </div>
        </section>
        
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

    <!-- Banner2 -->
    <section class="banner2">
        <div class="container banner2-wrapper">
            <div class="bx-fade-right content-banner2">
                <h1 class="heading">ARE YOU NEW MEMBER ? </h1>
                <p class="subheading">Let's register now and get cashback</p>

                <p class="disc">UP TO 20%</p>
            </div>
            <div class="btn-banner2">
                <a href="#" class="btn-regis">Register</a>
            </div>
        </div>
    </section>
<!-- INI BUAT MASUKIN BAGIAN ISI YANG NON NAVIGASI SAMA NON FOOTER -->


<?= $this->endSection(); ?>