<?php
function buildBackgroundImage($image)
{
    return ROOT_URL . "/images/{$image}";
}

class BannerTextColor
{
    const WHITE = "white";
    const BLACK = "black";
    const GRAY = "gray";
}

class BannerBgImage
{
    const BUSINESS = "citrus_salmon.jpg";
}

function banner($contentFallback, $bgImage = BannerBgImage::BUSINESS, $textColor = BannerTextColor::WHITE)
{ ?>
    <section class="full-w p-notDesktop px--20 py--50 ch-text--<?php echo $textColor; ?>" style="background:url('<?php echo buildBackgroundImage($bgImage); ?>')">
        <?php $contentFallback(); ?>
    </section>
<?php }
