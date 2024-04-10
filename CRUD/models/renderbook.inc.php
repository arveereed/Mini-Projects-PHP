<?php

declare(strict_types=1); // set strict types to True

function get_data(object $pdo) {
  $query = 'SELECT * FROM tbl_books;';
  $stmt = $pdo->prepare($query);
  $stmt->execute();

  return $stmt;
}