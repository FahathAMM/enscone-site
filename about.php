<link rel="stylesheet" href="assets1/css/templatemo-digimedia-v1.css">

<?php
// Define the menu items and their icons
$menuItems = [
    ['icon' => 'assets/images/service-icon-01.png', 'label' => 'Facade', 'class' => 'first-thumb active'],
    ['icon' => 'assets/images/service-icon-02.png', 'label' => 'Building'],
    ['icon' => 'assets/images/service-icon-03.png', 'label' => 'Pest'],
    ['icon' => 'assets/images/service-icon-04.png', 'label' => 'One Time']
];

$listItems = [
    [
        'class'       => 'active',
        'title'       => 'Building Facade Cleaning',
        'description' => 'Facade cleaning services involve the professional cleaning and maintenance of the exterior surfaces of buildings, including walls, windows, and other architectural elements, to enhance their appearance, remove dirt, grime, and stains, and preserve the structure integrity.',
        'ticks'       => ['Cleaning', 'Maintenance', 'Enhance', 'Remove Dirt', 'Structure Integrity'],
        'image'       => 'img/addv/1.jpg'
    ],
    [
        'title'       => 'Common Building Facade Cleaning Services ',
        'description' => 'Building facade cleaning methods include pressure washing, which uses high-pressure water to remove dirt, and soft washing, a gentler technique with low-pressure water and biodegradable agents for delicate surfaces. Window cleaning involves squeegees and solutions for glass, while abseiling or rope access allows cleaners to reach high areas. Aerial lifts provide stable platforms for cleaning tall buildings, and dry ice blasting cleans without residue.',
        'ticks'       => ['Water cleaning', 'Chemical cleaning', 'Abrasive cleaning', 'Window Cleaning', 'Facade Cleaning', 'Pressure Washing'],
        'image'       => 'img/addv/2.jpg'
    ],
    [
        'title' => 'Pest Control Services',
        'description' => 'We provide various pest control-related services including general pest control services, termite control, fumigation services, and gel application (municipality approved).',
        'ticks' => ['TermiteControl', 'Fumigation', 'GelApplication', 'MunicipalityApproved', 'Services'],
        'image'       => 'img/addv/3.jpg'
    ],
    [
        'title' => 'One Time Post Construction Cleaning for all buildings',
        'description' => 'Enscone is operating a separate team for one-time cleaning and post-construction cleaning for new or renovated buildings/villas. The team is well-versed in the job and uses appropriate chemicals to ensure the cleaning is eco-friendly and meets customer needs',
        'ticks' => ['Cleaning', 'PostConstruction', 'EcoFriendly', 'Team', 'Renovated', 'CustomerSatisfaction'],
        'image'       => 'img/addv/4.jpg'
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

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">About</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <span>
                Offering expert cleaning and technical services to ensure your space and systems are in top condition.
                Our dedicated team combines professionalism, reliability, and advanced solutions to meet all your needs.
            </span>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h6>Our Services</h6>
                    <h4>What Our Agency <em>Provides</em></h4>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="naccs">
                    <div class="grid">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="menu">
                                    <?php foreach ($menuItems as $item): ?>
                                        <div class="<?= $item['class'] ?? '' ?>">
                                            <div class="thumb">
                                                <span class="icon">
                                                    <img src="<?= htmlspecialchars($item['icon']) ?>" alt="">
                                                </span>
                                                <?= htmlspecialchars($item['label']) ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>


                            </div>
                            <div class="col-lg-12">
                                <ul class="nacc">
                                    <?php foreach ($listItems as $item): ?>
                                        <li class="<?= $item['class'] ?? '' ?>">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4><?= htmlspecialchars($item['title']) ?></h4>
                                                                <p><?= htmlspecialchars($item['description']) ?></p>
                                                                <div class="ticks-list">
                                                                    <?php foreach ($item['ticks'] as $tick): ?>
                                                                        <span><i class="fa fa-check"></i> <?= htmlspecialchars($tick) ?></span>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                                <p><?= htmlspecialchars($item['description']) ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="<?= htmlspecialchars($item['image']) ?>" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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


<script src="vendor1/jquery/jquery.min.js"></script>
<script src="vendor1/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets1/js/owl-carousel.js"></script>
<script src="assets1/js/animation.js"></script>
<script src="assets1/js/imagesloaded.js"></script>
<script src="assets1/js/custom.js"></script>