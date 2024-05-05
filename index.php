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
$books = [[
 'name' => 'Do Androids Dream of Electric Sheep',
 'author' => 'Philip K Dick',
 'purchaseUrl' => 'www.example.com'
],

[
  'name' => 'Project hail mary',
  'author' => 'Andy Weir',
  'purchaseUrl' => 'www.example.com'
],
];
?>

<ul>
  <?php foreach ($books as $book) : ?>
    <li> <?= $book['name']; ?></li>
    <?php endforeach; ?> 
</ul>
  </body>
</html>
