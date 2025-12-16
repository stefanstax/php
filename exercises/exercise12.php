<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 12</title>
</head>

<body>
    <?php
    $name = "stefan stax";
    $emailContent = "Dear {$name}  ,\n\nWe hope this message finds you well.\n\nThis month, we are focusing on personal growth and innovation. Don't miss out on our exclusive insights!\n\nBest wishes,\nYour Discovery Network Team\nP.S. Check out our latest blog post!";

    $emailPreview = substr($emailContent, 0, 30);
    var_dump("Email preview: " . $emailPreview . "...");
    // Email Salutation
    $emailSalutation = substr($emailContent, 0, 5 + strlen($name)); // 0 - 9
    var_dump($emailSalutation);
    $emailSignature = substr($emailContent, 158, 235); // 158 - 235
    var_dump($emailSignature);

    // Uppercase Name
    $emailSalutation[5] = strtoupper($emailSalutation[5]);
    var_dump($emailSalutation);

    // Calculate count without entry and signature
    $charCount = strlen($emailContent) - (strlen($emailSalutation) + strlen($emailSignature));
    var_dump($charCount);


    var_dump(str_replace("?", "!", $emailContent));
    ?>

    <p><?php nl2br(htmlspecialchars("PHP\nis amazing!")); ?></p>
</body>

</html>