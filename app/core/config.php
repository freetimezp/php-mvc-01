<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('ROOT', 'http://localhost/php-mvc-01/public');
} else {
    define('ROOT', 'https://www.yoursite.com');
}
