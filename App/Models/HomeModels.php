<?php 
namespace App\Models;
use PDO;
class HomeModels extends \Core\Model{
 public static function getAll()
 {
    $conn=static::getDB();// this is connection from database
 }
}
?>