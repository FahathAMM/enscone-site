 <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

 <!-- Carousel Start -->
 <div class="container-fluid p-0 mb-5">
     <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-inner">
             <div class="carousel-item active">
                 <img class="w-100" src="img/banner/22.png" alt="Image">
                 <div class="carousel-caption">
                     <div class="container">
                         <div class="row justify-content-center">
                             <div class="col-lg-7 pt-5">
                                 <h1 class="display-4 text-white mb-4 animated slideInDown">
                                     Enscone Technical and Cleaning Services LLC
                                 </h1>
                                 <p class="fs-5 text-body mb-4 pb-2 mx-sm-5 animated slideInDown">
                                     recognizes that Quality service with highest safety are essential for the company's long-term success and prosperity that we maintain for years and continued
                                 </p>
                                 <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Explore More</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="carousel-item">
                 <img class="w-100" src="img/banner/3.png" alt="Image">
                 <div class="carousel-caption">
                     <div class="container">
                         <div class="row justify-content-center">
                             <div class="col-lg-7 pt-5">
                                 <h1 class="display-4 text-white mb-4 animated slideInDown">Enscone was established in 2012</h1>
                                 <p class="fs-5 text-body mb-4 pb-2 mx-sm-5 animated slideInDown">our employees are well trained and experienced in the field of technical, cleaning and moving services</p>
                                 <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Explore More</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
         </button>
     </div>
 </div>
 <!-- Carousel End -->

 <!-- About Start -->
 <div class="container-xxl py-5">
     <div class="container">
         <div class="row g-5 align-items-center">
             <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                 <div class="h-100">
                     <h1 class="display-6 mb-5">Welcome To Best Enscone Technical and Cleaning Services</h1>
                     <div class="row g-4 mb-4">
                         <div class="col-sm-6">
                             <div class="d-flex align-items-center">
                                 <img class="flex-shrink-0 me-3" src="img/icon/icon-07-primary.png" alt="">
                                 <h5 class="mb-0">Expert Technician</h5>
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="d-flex align-items-center">
                                 <img class="flex-shrink-0 me-3" src="img/icon/icon-09-primary.png" alt="">
                                 <h5 class="mb-0">Best Quality Services</h5>
                             </div>
                         </div>
                     </div>
                     <p class="mb-4">We specialize in providing top-tier technical and cleaning solutions.
                         Our team is committed to delivering excellence, reliability, and care in every service we offer.
                         Your satisfaction is our priority, and we are here to meet all your needs with professionalism and expertise.</p>
                     <div class="border-top mt-4 pt-4">
                         <div class="row">
                             <div class="col-sm-6">
                                 <div class="d-flex align-items-center">
                                     <div class="btn-lg-square bg-primary rounded-circle me-3">
                                         <i class="fa fa-phone-alt text-white"></i>
                                     </div>
                                     <h5 class="mb-0">+971 50 327 1551, <br> 04 342 1004</h5>
                                 </div>
                             </div>
                             <div class="col-sm-6">
                                 <div class="d-flex align-items-center">
                                     <div class="btn-lg-square bg-primary rounded-circle me-3">
                                         <i class="fa fa-envelope text-white"></i>
                                     </div>
                                     <h5 class="mb-0">enscones@gmail.com</h5>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="row g-3">
                     <div class="col-6 text-end">
                         <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.1s" src="img/home/1.jpeg"
                             style="margin-top: 15%;">
                     </div>
                     <div class="col-6 text-start">
                         <img class="img-fluid w-100 wow zoomIn" data-wow-delay="0.3s" src="img/home/2.jpg">
                     </div>
                     <div class="col-6 text-end">
                         <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/home/4.jpeg">
                     </div>
                     <div class="col-6 text-start">
                         <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.7s" src="img/home/6.jpg">
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- About End -->

 <!-- Facts Start -->
 <div class="container-fluid facts my-5 py-5" data-parallax="scroll1" 1data-image-src="img/carousel-1.jpg"
     data-image-src="img/home/77-min.jpg">
     <div class="container py-5">


         <div class="container py-5">
             <?php
                $stats = [
                    ['count' => 200, 'label' => 'Happy Clients', 'delay' => '0.1s'],
                    ['count' => 500, 'label' => 'Projects Succeed', 'delay' => '0.3s'],
                    ['count' => 13, 'label' => 'Active Year', 'delay' => '0.5s'],
                    ['count' => 50, 'label' => 'Team Members', 'delay' => '0.7s']
                ];

                ?>

             <div class="row g-5">
                 <?php foreach ($stats as $stat): ?>
                     <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="<?= $stat['delay'] ?>">
                         <h1 class="display-4 text-white">
                             <span data-toggle="counter-up"><?= $stat['count'] ?></span> +
                         </h1>
                         <span class="text-primary"><?= $stat['label']; ?></span>
                     </div>
                 <?php endforeach; ?>
             </div>
         </div>
     </div>
 </div>
 <!-- Facts End -->

 <!-- Features Start -->
 <div class="container-xxl py-5">
     <div class="container">
         <div class="row g-5">


             <?php
                $features = [
                    [
                        'icon' => 'img/icon/icon-08-light.png',
                        'title' => 'Trusted Service Center',
                        'description' => 'Your trusted service center for all your technical and cleaning needs. Providing reliable solutions with a commitment to excellence and customer satisfaction.'
                    ],
                    [
                        'icon' => 'img/icon/icon-10-light.png',
                        'title' => 'Reasonable Price',
                        'description' => 'Offering high-quality services at a reasonable price. We believe in providing exceptional value without compromising on quality.'
                    ],
                    [
                        'icon' => 'img/icon/icon-06-light.png',
                        'title' => '24/7 Supports',
                        'description' => 'Available 24/7 to assist with all your technical and cleaning needs. Our dedicated team is always ready to provide prompt and reliable support.'
                    ]
                ];
                ?>

             <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                 <h1 class="display-6 mb-5">Few Reasons Why People Choosing Us!</h1>
                 <p class="mb-5">our expert and reliable technical and cleaning services.
                     Our experienced team ensures top-quality results with great attention to detail.
                     We offer affordable, customized solutions to meet your specific needs.
                     Customer satisfaction is our priority, and we deliver with professionalism and care.
                 </p>

                 <?php foreach ($features as $feature): ?>
                     <div class="d-flex mb-5">
                         <div class="flex-shrink-0 btn-square bg-primary rounded-circle"
                             style="width: 90px; height: 90px;">
                             <img class="img-fluid" src="<?php echo $feature['icon']; ?>" alt="">
                         </div>
                         <div class="ms-4">
                             <h5 class="mb-3"><?php echo $feature['title']; ?></h5>
                             <span><?php echo $feature['description']; ?></span>
                         </div>
                     </div>
                 <?php endforeach; ?>
             </div>

             <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                 <div class="position-relative rounded overflow-hidden h-100" style="min-height: 500px;">
                     <img class="position-absolute w-100 h-100" src="img/addv/1.jpg" alt=""
                         stylfe="object-fit: cover;">
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Features End -->

 <!-- Clients Section -->
 <section id="clients" class="clients section">

     <div class="container" data-aos="fade-up" data-aos-delay="100">
         <div class="swiper init-swiper">
             <script type="application/json" class="swiper-config">
                 {
                     "loop": true,
                     "speed": 600,
                     "autoplay": {
                         "delay": 5000
                     },
                     "slidesPerView": "auto",
                     "pagination": {
                         "el": ".swiper-pagination",
                         "type": "bullets",
                         "clickable": true
                     },
                     "breakpoints": {
                         "320": {
                             "slidesPerView": 2,
                             "spaceBetween": 40
                         },
                         "480": {
                             "slidesPerView": 3,
                             "spaceBetween": 60
                         },
                         "640": {
                             "slidesPerView": 4,
                             "spaceBetween": 80
                         },
                         "992": {
                             "slidesPerView": 6,
                             "spaceBetween": 120
                         }
                     }
                 }
             </script>
             <div class="swiper-wrapper align-items-center">
                 <div class="swiper-slide"><img src="img/clients/client-1.png" class="img-fluid" alt=""></div>
                 <div class="swiper-slide"><img src="img/clients/client-2.png" class="img-fluid" alt=""></div>
                 <div class="swiper-slide"><img src="img/clients/client-3.png" class="img-fluid" alt=""></div>
                 <div class="swiper-slide"><img src="img/clients/client-4.png" class="img-fluid" alt=""></div>
                 <div class="swiper-slide"><img src="img/clients/client-5.png" class="img-fluid" alt=""></div>
                 <div class="swiper-slide"><img src="img/clients/client-6.png" class="img-fluid" alt=""></div>
                 <div class="swiper-slide"><img src="img/clients/client-7.png" class="img-fluid" alt=""></div>
                 <div class="swiper-slide"><img src="img/clients/client-8.png" class="img-fluid" alt=""></div>
             </div>
             <div class="swiper-pagination"></div>
         </div>

     </div>

 </section><!-- /Clients Section -->

 <!-- Testimonial Start -->
 <div class="container-xxl py-5">
     <div class="container">
         <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
             <h1 class="display-6 mb-5">What They Say About Our Services</h1>
         </div>
         <div class="row g-5">
             <div class="col-lg-3 d-none d-lg-block">
                 <div class="testimonial-left h-100">
                     <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="">
                     <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="">
                     <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="">
                 </div>
             </div>
             <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                 <div class="owl-carousel testimonial-carousel">
                     <div class="testimonial-item text-center">
                         <img class="img-fluid mx-auto mb-4" src="img/testimonial-1.jpg" alt="">
                         <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore
                             lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                         </p>
                         <h5>Client Name</h5>
                         <span>Profession</span>
                     </div>
                     <div class="testimonial-item text-center">
                         <img class="img-fluid mx-auto mb-4" src="img/testimonial-2.jpg" alt="">
                         <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore
                             lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                         </p>
                         <h5>Client Name</h5>
                         <span>Profession</span>
                     </div>
                     <div class="testimonial-item text-center">
                         <img class="img-fluid mx-auto mb-4" src="img/testimonial-3.jpg" alt="">
                         <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore
                             lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                         </p>
                         <h5>Client Name</h5>
                         <span>Profession</span>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 d-none d-lg-block">
                 <div class="testimonial-right h-100">
                     <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="">
                     <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="">
                     <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="">
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Testimonial End -->

 <!-- Template Javascript -->
 <script src="vendor/swiper/swiper-bundle.min.js"></script>

 <script src="js/main.js"></script>

 <script>

 </script>