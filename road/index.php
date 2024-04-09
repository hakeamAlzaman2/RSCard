<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if form is submitted
if (isset($_POST['submit']) || isset($_POST['submit1'])) {
    $index_image = @imagecreatefrompng(__DIR__ . '/index.png'); // Image path
    require_once "functions.php"; // Include helper functions

    $White = imagecolorallocate($index_image, 21, 130, 88); // Text color (white)
    $fontsize = 90; // Font size
    $font_path = __DIR__ . '/Almadinah1.otf'; // Font path

    $text1 = isset($_POST['name1']) ? $_POST['name1'] : ''; // Get text from form

    // Print text on image
    textPrint($Arabic, $text1, $index_image, $fontsize-10, $font_path, 1240, 1450, $White);

    // Output image
    header('Content-Type: image/png');

    if (isset($_POST['submit'])) {
        // Display image inline
        header('Content-Disposition: inline; filename="card.png"');
    } elseif (isset($_POST['submit1'])) {
        // Force download image
        header('Content-Disposition: attachment; filename="card.png"');
    }

    // Output the image
    imagepng($index_image);
    imagedestroy($index_image);

    // Increment counter
    countMoment();
}

// Include interface file
require_once "interface.php";

?>
