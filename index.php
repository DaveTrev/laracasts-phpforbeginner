<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Demo</title>
    <style>
      body {
        display: grid;
        place-items: center;
        height: 100vh;
        margin:0;
        font-family: sans-serif;
      }
    </style>
  </head>
  <body>
<h1>Recommended Books</h1>

<?php 
$books = [
  [
      'name' => 'Do Androids Dream of Electric Sheep',
      'author' => 'Philip K. Dick',
      'releaseYear' => 1968,
      'purchaseUrl' => 'http://example.com'
  ],
  [
      'name' => 'Project Hail Mary',
      'author' => 'Andy Weir',
      'releaseYear' => 2021,
      'purchaseUrl' => 'http://example.com'
  ],
  [
      'name' => 'The Martian',
      'author' => 'Andy Weir',
      'releaseYear' => 2011,
      'purchaseUrl' => 'http://example.com'
  ],
];


$filteredBooks = array_filter($books, function ($book) {
  return $book['releaseYear'] > 2000;
});
?>

<ul>
<?php foreach ($filteredBooks as $book) : ?>
    <li>
        <a href="<?= $book['purchaseUrl'] ?>">
            <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
        </a>
    </li>
<?php endforeach; ?>
</ul>
  </body>
</html>
