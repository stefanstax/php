<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>

<body>
    <pre>
    <?php

    $books = [
        "Harry Potter" => "J.K. Rowling",
        "Lord of the Rings" => "J.R.R Tolkien",
        "The Little Prince" => "Antoine de Saint-Exupery",
        "Don Quixote" => "Miguel de Cervantes",
        "Alice in Wonderland" => "Lewis Caroll"
    ];

    var_dump($books);
    var_dump(isset($books["Harry Potter"]));
    var_dump(!empty($books["Harry Potter"]));
    var_dump($books["Harry Potter"]);
    foreach ($books as $book => $author) {
        var_dump($book);
        var_dump($author);
    }

    var_dump(array_keys($books));
    var_dump(array_values($books));
    ?>

</body>

</html>