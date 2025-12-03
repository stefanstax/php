<?php
$price = 100;
$discount = 0.3;
$flatDiscount = 10;
$tax = 0.2;
$discountedPrice = $price - ($price * .3) - $flatDiscount;
$priceAfterTax = ($discountedPrice * .2) + $discountedPrice;
$loyaltyPoints = $priceAfterTax * 100;
echo "After applying discounts and taxes, the item's price is reduced from \${$price} to \${$priceAfterTax}, and you've earned {$loyaltyPoints} loyalty points.";
