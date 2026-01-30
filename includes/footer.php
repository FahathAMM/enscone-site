<?php
// Dynamic values for footer
$companyName = "Enscone";
$companyDescription = "We specialize in providing top-tier technical and cleaning solutions. Our team is committed to delivering excellence, reliability, and care in every service we offer. Your satisfaction is our priority, and we are here to meet all your needs with professionalism and expertise.";

$address = "284, The Bristol hotel, Al Muraqqabat, UAE";
$phone = "971 50 327 1551, 04 342 1004";
$email = "enscones@gmail.com";

$services = [
    "General Cleaning",
    "Floor & Common area cleaning",
    "Pressure washing",
    "Dusting",
    "Remove debris from landscape",
    "Restroom cleaning and sanitizing",
    "Install & maintain water urinators",
    "Carpet vacuum & shampooing",
    "Furniture polishing",
];

$quickLinks = [
    "About Us",
    "Contact Us",
    "Our Services",
    "Terms & Condition"
];

$socialLinks = [
    "twitter" => "#",
    "facebook" => "#",
    "youtube" => "#",
    "linkedin" => "#"
];
?>


<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6">
                <h1 class="text-white mb-4">
                    <img class="img-fluid me-3" src="img/icon/icon-02-light.png" alt="">
                    <?php echo $companyName; ?>
                </h1>
                <span><?php echo $companyDescription; ?></span>
            </div>
            <div class="col-md-6">
                <h5 class="text-light mb-4">Newsletter</h5>
                <!-- <p>Clita erat ipsum et lorem et sit, sed stet lorem sit clita.</p> -->
                <div class="position-relative">
                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="text-light mb-4">Get In Touch</h5>
                <p class="text-light"><i class="fa fa-map-marker-alt me-3"></i><?php echo $address; ?></p>
                <p class="text-light"><i class="fa fa-phone-alt me-3"></i><?php echo $phone; ?></p>
                <p class="text-light"><i class="fa fa-envelope me-3"></i><?php echo $email; ?></p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Our Services</h5>
                <?php foreach ($services as $service): ?>
                    <a class="btn btn-link" href=""><?php echo $service; ?></a>
                <?php endforeach; ?>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                <?php foreach ($quickLinks as $link): ?>
                    <a class="btn btn-link" href=""><?php echo $link; ?></a>
                <?php endforeach; ?>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5 class="text-light mb-4">Follow Us</h5>
                <div class="d-flex">
                    <?php foreach ($socialLinks as $platform => $url): ?>
                        <a class="btn btn-square rounded-circle me-1" href="<?php echo $url; ?>">
                            <i class="fab fa-<?php echo $platform; ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#"><?php echo $companyName; ?></a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->