<?php
declare(strict_types=1);

$username = 'plan';
$passwordHash = '$2y$10$ajXJzB0FOEJ0UXr6TgyY9uguUj8Z0QGKFBf7cKaQYAjUrxgUjo83C';
$providedUser = $_SERVER['PHP_AUTH_USER'] ?? '';
$providedPassword = $_SERVER['PHP_AUTH_PW'] ?? '';

if (
    !hash_equals($username, $providedUser) ||
    !password_verify($providedPassword, $passwordHash)
) {
    header('WWW-Authenticate: Basic realm="FerratPro Plan", charset="UTF-8"');
    header('HTTP/1.1 401 Unauthorized');
    exit('Требуется авторизация.');
}
