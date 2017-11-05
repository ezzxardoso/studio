<?php
namespace Project;
class Connection
{
  public static function open(){
    use Medoo\Medoo;
    $database = new Medoo([
        'database_type' => 'mysql',
        'database_name' => 'eadatabase',
        'server' => 'localhost',
        'username' => 'root',
        'password' => ''
    ]);
  return $database;
  }
}


?>
