<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/head.php"); ?>
</head>

<body>

    <!-- Spinner Start -->
    <!-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div> -->
    <!-- Spinner End -->

    <?php include("includes/header.php"); ?>

    <?php
    $pageName = $_GET['page'] ?? 'index';
    include("includes/foot.php");
    require "$pageName.php";
    ?>

    <?php include("includes/footer.php"); ?>
    <?php ?>

</body>

</html>