<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booleans</title>
</head>

<body>
    <pre>
        <?php
        var_dump(true);
        var_dump(false);
        $meaning = 42;
        var_dump($meaning > 13);

        $name = 'Stefan';
        var_dump($name === 'Stefan');

        $age = 30;
        var_dump($age === 30);
        var_dump($age === '30');
        var_dump($age == '30');
        var_dump(10 + '5');

        $enteredPin = 4567;
        $storedPin = '4567';
        var_dump($enteredPin != $storedPin);
        var_dump($enteredPin !== $storedPin);

        echo "-----\n";
        var_dump(true && true);
        var_dump(false && true);
        var_dump(true && false);
        var_dump(false && false);
        echo "-----\n";
        var_dump(true || true);
        var_dump(false || true);
        var_dump(true || false);
        var_dump(false || false);

        echo "-----\n";
        var_dump(true xor true);
        var_dump(false xor true);
        var_dump(true xor false);
        var_dump(false xor false);
        var_dump((!true) && false || true);
        ?>
    </pre>
</body>

</html>