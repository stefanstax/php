<?php
include "header.php";
require_once "imageData.php";
foreach ($imageTitles as $imageSrc => $imageTitle) { ?>
    <a href="image.php?<?php echo http_build_query(["image" => $imageSrc]) ?>">
        <h3><?php echo htmlspecialchars($imageTitle); ?></h3>
        <img src="./images/<?php echo rawurlencode($imageSrc) ?>" alt="<?php echo $imageTitle; ?>">
    </a>
<?php }

include "footer.php";
