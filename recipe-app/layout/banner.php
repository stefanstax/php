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
    const SALMON = "citrus_salmon.jpg";
    const PASTA = "mediterranian_pasta.jpg";
    const RISOTTO = "sunset_risotto.jpg";
    const TACOS = "tropical_tacos.jpg";
}

function banner($contentFallback, $bgImage = BannerBgImage::SALMON, $textColor = BannerTextColor::WHITE)
{ ?>
    <section
        class="full-w p-notDesktop px--20 py--50 rounded--sm background--cover background--center ch-text--<?php echo $textColor; ?>"
        style="background-image: linear-gradient(transparent 0%, rgba(0,0,0,0.7) 50%), url('<?php echo buildBackgroundImage($bgImage); ?>');">
        <?php $contentFallback(); ?>
    </section>
<?php }
