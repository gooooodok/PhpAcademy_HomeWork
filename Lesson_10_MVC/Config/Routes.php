<?php

use Library\Route;

return  array(
    // site routes
    'default' => new Route('/', 'Default', 'index'),
    'index' => new Route('/index.php', 'Default', 'index'),
    'books_list' => new Route('/books', 'Book', 'index'),
    'book_page' => new Route('/book-{id}\.html', 'Book', 'show', array('id' => '[0-9]+') ),
    'contact_us' => new Route('/contact-us', 'Default', 'contact'),
);