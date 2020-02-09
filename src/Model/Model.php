<?php
 class Model {
    protected $dsn = 'mysql:dbname=kyodokoiku;host=mysql';
    protected $user = 'root';
    protected $password = 'secret';

    protected $pdo;

    public function __construct() {
        $this->pdo = new PDO($this->dsn, $this->user, $this->password);
    }
 }