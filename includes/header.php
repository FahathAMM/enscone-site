<?php
$activePage = $_GET['page'] ?? 'home';

$menuItems = [
    ['name' => 'Home', 'link' => 'app.php?page=home', 'activeKey' => 'home', 'isActive' => true],
    ['name' => 'Our Services', 'link' => 'app.php?page=service', 'activeKey' => 'service', 'isActive' => true],
    ['name' => 'Our Gallery', 'link' => 'app.php?page=gallery', 'activeKey' => 'gallery', 'isActive' => true],
    ['name' => 'About Us', 'link' => 'app.php?page=about', 'activeKey' => 'about', 'isActive' => true],
    ['name' => 'Contact Us', 'link' => 'app.php?page=contact', 'activeKey' => 'contact', 'isActive' => true],
    // [
    //     'name' => 'Pages',
    //     'link' => '#',
    //     'dropdown' => [
    //         ['name' => 'Features', 'link' => 'feature.html'],
    //         ['name' => 'Free Quote', 'link' => 'quote.html'],
    //         ['name' => 'Our Team', 'link' => 'team.html'],
    //         ['name' => 'Testimonial', 'link' => 'testimonial.html'],
    //         ['name' => '404 Page', 'link' => '404.html'],
    //     ]
    // ],
];
?>

<!-- Topbar Start -->
<!-- <div class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block">
    <div class="row gx-0 align-items-center">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-phone-alt me-2"></small>
                <small>+012 345 6789</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="far fa-envelope-open me-2"></small>
                <small>info@example.com</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <ol class="breadcrumb justify-content-end mb-0">
                <li class="breadcrumb-item"><a class="text-white-50 small" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white-50 small" href="#">Terms</a></li>
                <li class="breadcrumb-item"><a class="text-white-50 small" href="#">Privacy</a></li>
                <li class="breadcrumb-item"><a class="text-white-50 small" href="#">Support</a></li>
            </ol>
        </div>
    </div>
</div> -->
<!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5" style="top: -100px;">
    <a href="app.php?page=home" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0"><img class="img-fluid me-3" src="img/logo.jpg" alt="">Enscone</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
        <div class="navbar-nav bg-white pe-4 py-3 py-lg-0">
            <?php foreach ($menuItems as $item): ?>
                <?php if (!$item['isActive']) continue; ?>
                <?php if (isset($item['dropdown'])): ?>
                    <div class="nav-item dropdown">
                        <a href="<?= $item['link']; ?>" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <?= $item['name']; ?>
                        </a>
                        <div class="dropdown-menu bg-light border-0 m-0">
                            <?php foreach ($item['dropdown'] as $dropdownItem): ?>
                                <a href="<?= $dropdownItem['link']; ?>" class="dropdown-item"><?= $dropdownItem['name']; ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <a href="<?= $item['link']; ?>"
                        class="nav-item nav-link <?= isset($item['activeKey']) && $activePage == $item['activeKey'] ? 'active' : '' ?>">
                        <?= $item['name']; ?>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</nav>
<!-- Navbar End -->