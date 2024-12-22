<?php
// $directory = 'img/gallery/';
// $images = array_diff(scandir($directory), array('..', '.'));
// $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
// $imagesPerPage = 100;
// $offset = ($page - 1) * $imagesPerPage;
// $paginatedImages = array_slice($images, $offset, $imagesPerPage);
// header('Content-Type: application/json');
// echo json_encode($paginatedImages);

$directory = 'img/gallery/';

// Fetch all files, excluding '.' and '..'
$images = array_diff(scandir($directory), array('..', '.'));

// Rename files with spaces to use underscores
foreach ($images as $key => $filename) {
    $newFilename = str_replace(' ', '_', $filename);
    if ($filename !== $newFilename) {
        rename($directory . $filename, $directory . $newFilename);
        $images[$key] = $newFilename; // Update the array with the new name
    }
}


// Pagination logic
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$imagesPerPage = 54;
$offset = ($page - 1) * $imagesPerPage;
$paginatedImages = array_slice($images, $offset, $imagesPerPage);

// Return JSON response
header('Content-Type: application/json');
echo json_encode($paginatedImages);
