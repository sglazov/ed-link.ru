<?php

$config = require( __DIR__ . "/config.php" );

/**
 * Функция для проверки текущего урла
 *
 * Использование:
 * if ( is_page('upage') ) :
 *  echo "URL == upage";
 * endif;
 */
function is_page($page)
{
    $current_page = $_SERVER['REQUEST_URI'];

    if ( $page === 'index.html' )
    {
        $check = $current_page == "/" || $current_page == '/index.html';
    } else {
        $check = $current_page == "/" . $page;
    }

    return $check;
}