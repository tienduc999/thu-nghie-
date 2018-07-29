<?php
/**
 * Created by PhpStorm.
 * User: pekubu
 * Date: 7/28/2018
 * Time: 9:39 AM
 */


class Database
{
    private static $db;
    private static $dsn = 'mysql:host=localhost;dbname=course_db';
    private static $username = 'root';
    private static $password = '';


    public static function getDB()
    {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn, self::$username, self::$password);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$db;
    }
}
