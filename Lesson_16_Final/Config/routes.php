<?php

use Library\Route;

return  array(
    // site routes
    'default' => new Route('/', 'Default', 'index'),
    'index' => new Route('/index.php', 'Default', 'index'),
    'books_list' => new Route('/books', 'Book', 'index'),
    'books_page' => new Route('/book-{id}\.html', 'Book', 'show', array('id' => '[0-9]+') ),
    'feedback_page' => new Route('/feedback', 'Default', 'feedback'),
    'login' => new Route('/login', 'Security', 'login'),
    'logout' => new Route('/logout', 'Security', 'logout'),
    'cart' => new Route('/cart', 'Cart', 'index'),
    'cart_add' => new Route('/cart/add/{id}', 'Cart', 'add', array('id' => '[0-9]+')),
    
    
    'admin_default' => new Route('/admin', 'Admin\\Default', 'index'),
    'admin_books_list' => new Route('/admin/books', 'Admin\\Book', 'index'),
    'admin_book_edit' => new Route('/admin/book/edit/{id}', 'Admin\\Book', 'edit', array('id' => '[0-9]+') ),   

    'api_add_to_cart' => new Route('/api/cart/add/{id}', 'API\\Cart', 'add', array('id' => '[0-9]+')),
    'api_save_feedback' => new Route('/api/feedback', 'API\\Feedback', 'save'),
    'api_books_list' => new Route('/api/books', 'API\\Book', 'index'),
    'api_book_item' => new Route('/api/book/{id}', 'API\\Book', 'show', array('id' => '[0-9]+')),
);