<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">Admin</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <span>
                Get in touch with us for reliable cleaning and technical services! Whether you have inquiries, need assistance, or wish to discuss your requirements, our team is here to help. Reach out today and let us provide advanced solutions tailored to your needs.
            </span>
        </nav>
    </div>
</div>

<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 justify-content-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-6 mb-5">If You Have Any Query, Please Contact Us</h1>
                <p class="mb-4"> Get in touch with us for reliable cleaning and technical services! Whether you have inquiries, need assistance, or wish to discuss your requirements, our team is here to help. Reach out today and let us provide advanced solutions tailored to your needs.
                </p>
                <!-- <form>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="file" multiple class="form-control" id="name" placeholder="Your image">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary py-3 px-5" type="submit">Submit</button>
                        </div>
                    </div>
                </form> -->

                <form enctype="multipart/form-data" method="POST" action="">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="file" multiple class="form-control" name="name[]" id="name" placeholder="Your image">
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary py-3 px-5" type="submit">Submit</button>
                        </div>
                    </div>
                </form>

                <form method="POST" action="" class="mt-4">
                    <input type="text" name="removeFile" placeholder="Enter file name to remove" class="form-control mb-3">
                    <button class="btn btn-danger py-2 px-4" type="submit">Remove File</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['name'])) {
    $result = uploadMultipleImages($_FILES['name']);
    if (!empty($result['uploaded'])) {
        echo "Uploaded files: " . implode(', ', $result['uploaded']);
    }
    if (!empty($result['errors'])) {
        echo "Errors: " . implode(', ', $result['errors']);
    }
}

// Handle removal request (example: via POST or GET)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['removeFile'])) {
    $fileName = $_POST['removeFile'];
    echo removeImage($fileName);
}

function removeImage($fileName, $uploadPath = 'img/gallery/')
{
    // Construct the full file path
    $filePath = $uploadPath . $fileName;

    // Check if the file exists
    if (file_exists($filePath)) {
        // Delete the file
        if (unlink($filePath)) {
            return "File '$fileName' removed successfully.";
        } else {
            return "Failed to remove file '$fileName'.";
        }
    } else {
        return "File '$fileName' does not exist.";
    }
}

// Function to handle multiple image uploads
function uploadMultipleImages($files, $uploadPath = 'img/gallery/')
{
    // Ensure the upload path exists
    if (!is_dir($uploadPath)) {
        mkdir($uploadPath, 0777, true); // Create directory if not exists
    }

    $uploadedFiles = [];
    $errors = [];

    foreach ($files['name'] as $key => $name) {
        // Generate a unique file name to avoid overwriting
        $uniqueName = uniqid() . '_' . basename($name);

        // Full path for the file
        $targetFile = $uploadPath . $uniqueName;

        // Check for upload errors
        if ($files['error'][$key] === UPLOAD_ERR_OK) {
            // Validate file type (optional, e.g., images only)
            $fileType = mime_content_type($files['tmp_name'][$key]);
            if (strpos($fileType, 'image/') === 0) {
                // Move the uploaded file to the target directory
                if (move_uploaded_file($files['tmp_name'][$key], $targetFile)) {
                    $uploadedFiles[] = $uniqueName; // Add to the list of uploaded files
                } else {
                    $errors[] = "Failed to move file: $name";
                }
            } else {
                $errors[] = "Invalid file type: $name";
            }
        } else {
            $errors[] = "Error uploading file: $name";
        }
    }

    // Return the uploaded file list and errors
    return [
        'uploaded' => $uploadedFiles,
        'errors' => $errors,
    ];
}

?>