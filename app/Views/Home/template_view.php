<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/SushiStreet/assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Sushi Street</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container nav-wrapper">
                <a href="#" class="logo">Sushi<span>Street</span></a>
                <div class="menu-wrapper">
                    <ul class="menu">
                        <li class="menu-item"><a href="/" class="menu-link">Home</a></li>
                        <li class="menu-item"><a href="/services" class="menu-link">Services</a></li>
                        <li class="menu-item"><a href="/aboutus" class="menu-link">About us</a></li>
                        <li class="menu-item"><a href="/contact" class="menu-link">Contact</a></li>
                    </ul>
                    <a href="/admin" class="btn-member">Login</a>
                </div>
                <div class="menu-toggle bx bxs-grid-alt">
                </div>
            </div>
        </nav>

<!-- =============== BAGIAN BUAT KONTEN ==============================-->
<!-- =============== BAGIAN BUAT KONTEN ==============================-->
<!-- =============== BAGIAN BUAT KONTEN ==============================-->
<?= $this->renderSection('content_front'); ?>
<!-- =============== BAGIAN BUAT KONTEN ==============================-->
<!-- =============== BAGIAN BUAT KONTEN ==============================-->
<!-- =============== BAGIAN BUAT KONTEN ==============================-->

    <footer class="footer" id="footer">
        <div class="container footer-wrapper">
            <div class="col-1-footer">
                <h1 class="logo-footer">Sushi<span>Street.</span></h1>
                <p class="subheading-footer">The best service to customers is
                    our top priority in building a business</p>
                <div class="sosmed-icon">
                    <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                    <a href="#"><i class='bx bxl-whatsapp'></i></a>
                    <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                </div>
                <p class="copy">&copy;Copyright 2022 All Right Reserved | Built by Raihan Abdi Negoro</p>
            </div>
            <div class="col-2-footer">
                <h3>About</h3>
                <ul>
                    <li><a href="About Us.html">About us</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="Menu.html">Menu</a></li>
                </ul>
            </div>
            <div class="col-3-footer">
                <h3>Company</h3>
                <ul>
                    <li><a href="About Us.html">Why SushiStreet ?</a></li>
                    <li><a href="#">Partners with us</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Blogs</a></li>
                </ul>
            </div>
            <div class="col-4-footer">
                <h3>Support</h3>
                <ul>
                    <li><a href="#">Account</a></li>
                    <li><a href="#">Support Center</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Accessbility</a></li>
                </ul>
            </div>
            <div class="col-5-footer">
                <h3>Get in touch</h3>
                <p>Questions or Feedback</p>
                <div class="form-input">
                    <input type="text" placeholder="Type your email">
                    <a href="#" class="btn-footer">Submit</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 3000
        });
    </script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="/SushiStreet/assets/js/main.js"></script>
</body>

</html>