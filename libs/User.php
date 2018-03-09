<?php // file libs/User.php
namespace libs;

use libs\Db;

class User
{
    
    private $id;
    private $name;
    private $password;
    private $registeredOn;
    
    public function __construct($name, $password = null)
    {
        $this->name = $name;
        $this->password = hash('sha256', $password);
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {    
        $this->id = $id;
    }
    
    public function registeredOn()
    {
        return $this->registeredOn;
    }
    
    public function setRegisteredOn($registeredOn)
    {    
        $this->registeredOn = $registeredOn;
    }
    
    public function load()
    {
        $stmt = [];
        if ($this->id)
        {
            $stmt = (new Db())->getConn()->prepare("SELECT * FROM `users` WHERE id = ?");
            $result = $stmt->execute([$this->id]);
        }
        elseif ($this->name)
        {
            $stmt = (new Db())->getConn()->prepare("SELECT * FROM `users` WHERE name = ?");
            $result = $stmt->execute([$this->name]);
        }
        else
        {
            throw new \Exception('Cannot load user');
        }
        
        $dbUser = $stmt->fetch();
        
        $this->id           = $dbUser['id'];
        $this->name         = $dbUser['name'];
        $this->registeredOn = $dbUser['name'];
    }
    
    public function insert()
    {
        $stmt = (new Db())->getConn()->prepare("INSERT INTO `users` (name, password) VALUES (?, ?) ");
        return $stmt->execute([$this->name, $this->password]);
    }
    
    public static function fetchAll()
    {
        $stmt = (new Db())->getConn()->prepare("SELECT * FROM `users` ORDER BY registered_on DESC");
        
        $stmt->execute();
        
        $users = [];
        
        while ($user = $stmt->fetch())
        {
            $userObject = new User($user['name']);
            $userObject->setId($user['id']);
            $userObject->setRegisteredOn($user['registered_on']);
            $users[] = $userObject;
        }
        
        return $users;
    }
  }
?>