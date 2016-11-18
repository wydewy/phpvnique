<?php
namespace app\models;
use vnique\db\Model;
/**
 * model User
 * */
class User extends Model{
	 public $id;
	 public $name;
	 public $age;
	 public static function tableName(){
        return 'user';
    }
	
}
