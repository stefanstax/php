<?php

// Assume $totalCost and $loyaltyPoints are predefined (as per instructions)
// For testing, you can temporarily set them:
// $totalCost = 20;
// $loyaltyPoints = 3500;

$taxRate = 0.08;

if ($loyaltyPoints < 3000) {
    // No discount
    $finalPrice = $totalCost * (1 + $taxRate);
    $newBalance = $loyaltyPoints + round($finalPrice * 100); // earn points on full amount
    echo "You have fewer than 3000 Loyalty Points. No discount is available. Your final price (after taxes) would be $" . number_format($finalPrice, 2, '.', '') . ". Your new Loyalty Balance would be: {$newBalance}.";
} else {
    // Option 1: 5% discount (costs 3000 points)
    if ($loyaltyPoints >= 3000) {
        $discounted1 = $totalCost * (1 - 0.05); // 5% off
        $finalPrice1 = $discounted1 * (1 + $taxRate);
        $newBalance1 = ($loyaltyPoints - 3000) + round($finalPrice1 * 100);
        echo "You can spend 3000 Loyalty Points for a discount of 5%. Your final price (after discount and taxes) would be $" . number_format($finalPrice1, 2, '.', '') . ". Your new Loyalty Balance would be: {$newBalance1}.\n";
    }

    // Option 2: 15% discount (costs 6000 points)
    if ($loyaltyPoints >= 6000) {
        $discounted2 = $totalCost * (1 - 0.15); // 15% off
        $finalPrice2 = $discounted2 * (1 + $taxRate);
        $newBalance2 = ($loyaltyPoints - 6000) + round($finalPrice2 * 100);
        echo "You can spend 6000 Loyalty Points for a discount of 15%. Your final price (after discount and taxes) would be $" . number_format($finalPrice2, 2, '.', '') . ". Your new Loyalty Balance would be: {$newBalance2}.\n";
    }
}
