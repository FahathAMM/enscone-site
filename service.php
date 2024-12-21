 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
     <div class="container text-center py-5">
         <h1 class="display-4 text-white animated slideInDown mb-4">Services</h1>
         <nav aria-label="breadcrumb animated slideInDown">
             <span>
                 Offering expert cleaning and technical services to ensure your space and systems are in top condition.
                 Our dedicated team combines professionalism, reliability, and advanced solutions to meet all your needs.
             </span>
         </nav>
     </div>
 </div>
 <!-- Page Header End -->

 <?php
    // Array of items
    $items = [
        [
            'title' => 'General Cleaning',
            'description' => 'Comprehensive cleaning to maintain a spotless and organized environment.',
            'image' => 'assets/images/10.png',
            'delay' => '0.3s'
        ],
        [
            'title' => 'Floor & Common Area Cleaning',
            'description' => 'Detailed cleaning of floors and shared spaces for a welcoming atmosphere.',
            'image' => 'assets/images/10.png',
            'delay' => '0.4s'
        ],
        [
            'title' => 'Pressure Washing',
            'description' => 'High-powered cleaning to remove dirt, grime, and stains from surfaces.',
            'image' => 'assets/images/10.png',
            'delay' => '0.5s'
        ],
        [
            'title' => 'Dusting',
            'description' => 'Efficient removal of dust from surfaces, ensuring a clean and allergen-free space.',
            'image' => 'assets/images/10.png',
            'delay' => '0.6s'
        ],
        [
            'title' => 'Remove Debris from Landscape',
            'description' => 'Clearing debris to keep outdoor areas neat and appealing.',
            'image' => 'assets/images/10.png',
            'delay' => '0.6s'
        ],
        [
            'title' => 'Restroom Cleaning and Sanitizing',
            'description' => 'Thorough cleaning and sanitization for hygiene and freshness.',
            'image' => 'assets/images/10.png',
            'delay' => '0.6s'
        ],
        [
            'title' => 'Install & Maintain Water Urinators',
            'description' => 'Professional installation and upkeep of water-saving urinals.',
            'image' => 'assets/images/10.png',
            'delay' => '0.6s'
        ],
        [
            'title' => 'Carpet Vacuum & Shampooing',
            'description' => 'Deep cleaning to keep carpets fresh, clean, and free of stains.',
            'image' => 'assets/images/10.png',
            'delay' => '0.6s'
        ],
        [
            'title' => 'Furniture Polishing',
            'description' => 'Restoring shine and protecting furniture with expert polishing services.',
            'image' => 'assets/images/10.png',
            'delay' => '0.6s'
        ],
        [
            'title' => 'Water Tank cleaning and conduct annual contracts',
            'description' => 'Professional cleaning of water tanks to ensure hygiene and safety, with options for annual maintenance contracts for consistent care.',
            'image' => 'assets/images/10.png',
            'delay' => '0.6s'
        ],
        [
            'title' => 'Well established and proofed cleaning services',
            'description' => 'Trusted cleaning solutions backed by experience and a proven track record of excellence and customer satisfaction.',
            'image' => 'assets/images/10.png',
            'delay' => '0.6s'
        ],
    ];

    $services = [
        [
            'title' => 'Building Facade Cleaning',
            'description' => 'Building facade cleaning methods',
            'icon' => 'service-icon-01.png',
            'delay' => '0.5s'
        ],
        [
            'title' => 'Facade Cleaning',
            'description' => 'Facade cleaning services involve the professional clean',
            'icon' => 'service-icon-02.png',
            'delay' => '0.7s'
        ],
        [
            'title' => 'Pest Control',
            'description' => 'We provide various pest control-related services',
            'icon' => 'service-icon-03.png',
            'delay' => '0.9s'
        ],
        [
            'title' => 'One Time',
            'description' => 'Enscone is operating a separate team for one-time',
            'icon' => 'service-icon-04.png',
            'delay' => '1.1s'
        ]
    ];
    ?>

 <!-- Service Start -->
 <div id="portfolio" class="our-portfolio section">
     <div class="container">
         <div class="row">
             <div class="col-lg-10 offset-lg-1">
                 <div class="section-heading  wow bounceIn animated" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                     <h2>See What Our professional Technical & Cleaning <em>Offers</em> &amp; What We <span>Provide</span></h2>
                 </div>
             </div>
         </div>
         <div class="row">
             <?php foreach ($items as $item): ?>
                 <div class="col-lg-3 col-sm-6 mb-2">
                     <a href="#">
                         <div class="item wow bounceInUp animated"
                             data-wow-duration="1s"
                             data-wow-delay="<?= $item['delay']; ?>"
                             style="visibility: visible; 
                            -webkit-animation-duration: 1s; 
                            -moz-animation-duration: 1s; 
                            animation-duration: 1s; 
                            -webkit-animation-delay: <?= $item['delay']; ?>; 
                            -moz-animation-delay: <?= $item['delay']; ?>; 
                            animation-delay: <?= $item['delay']; ?>;">
                             <div class="hidden-content">
                                 <h4><?= htmlspecialchars($item['title']); ?></h4>
                                 <p><?= htmlspecialchars($item['description']); ?></p>
                             </div>
                             <div class="showed-content">
                                 <img src="<?= htmlspecialchars($item['image']); ?>" alt="<?= htmlspecialchars($item['title']); ?>">
                                 <h6 class="my-2"><?= htmlspecialchars($item['title']); ?></h6>
                             </div>
                         </div>
                     </a>
                 </div>
             <?php endforeach; ?>
         </div>
     </div>
 </div>
 <!-- Service End -->

 <div id="about" class="about-us section">
     <div class="container">
         <div class="row">
             <div class="col-lg-4">
                 <div class="left-image wow fadeIn animated" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                     <img src="assets/images/about-left-image.png" alt="person graphic">
                 </div>
             </div>
             <div class="col-lg-8 align-self-center">
                 <div class="services1">
                     <div class="row">
                         <?php foreach ($services as $index => $service): ?>
                             <div class="col-lg-6">
                                 <div class="item wow fadeIn animated"
                                     data-wow-duration="1s"
                                     data-wow-delay="<?php echo $service['delay']; ?>"
                                     style="visibility: visible; animation-duration: 1s; animation-delay: <?php echo $service['delay']; ?>;">
                                     <div class="icon">
                                         <img src="assets/images/<?php echo $service['icon']; ?>" alt="<?php echo strtolower(str_replace(' ', '-', $service['title'])); ?>">
                                     </div>
                                     <div class="right-text">
                                         <h4><?php echo $service['title']; ?></h4>
                                         <p><?php echo $service['description']; ?></p>
                                     </div>
                                 </div>
                             </div>
                         <?php endforeach; ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>



 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/js/owl-carousel.js"></script>
 <script src="assets/js/animation.js"></script>
 <script src="assets/js/imagesloaded.js"></script>
 <script src="assets/js/templatemo-custom.js"></script>