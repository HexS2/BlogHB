<?php
/**
 * Created by PhpStorm.
 * User: damien
 * Date: 2019-03-08
 * Time: 13:23
 */

require_once "vendor/autoload.php";

$dotenv = new \Symfony\Component\Dotenv\Dotenv();
$dotenv->load(__DIR__ . '/.env');

$db = new \mysqli(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASSWORD'), getenv('DB_NAME'), getenv('DB_PORT'));
if ($db->connect_errno) {
    throw new \Exception($db->connect_error, $db->connect_errno);
}

$db->query('CREATE TABLE IF NOT EXISTS user(id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, firstname VARCHAR(255), lastname VARCHAR(255)) ');
$db->query('CREATE TABLE IF NOT EXISTS article(id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, title VARCHAR(255), content TEXT) ');

$db->close();
