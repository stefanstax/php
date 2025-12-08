<?php
require_once "imageData.php";
include "header.php";
?>


<?php if (!empty($_GET['image']) && !empty($imageTitles[$_GET['image']])) {

    $image = $_GET['image'];
    $imageTitle = $imageTitles[$image];
    $imageDescription = $imageDescriptions[$image]; ?>
    <h2><?php echo htmlspecialchars($imageTitle); ?></h2>
    <img src="./images/<?php echo rawurlencode($image) ?>" alt="<?php echo $title ?>">
    <p><?php echo htmlspecialchars($imageDescription) ?></p>
<?php } else {
    echo "Sorry but you can not manipulate this page.";
} ?>

<a href="imageGallery.php">Back to Gallery</a>

<?php include "footer.php"; ?>