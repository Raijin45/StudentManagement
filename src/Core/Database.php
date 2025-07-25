<?php

namespace Docallos\StudentManagement\Core;

use mysqli;

class Database
{
    protected $conn;

    public function __construct()
    {
        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "oop2";

        $this->conn = new mysqli($host, $user, $password, $db);
        if($this->conn->connect_error) {
            die('Connection to Database failed! :'.$this->conn->connect_error);
        }
    }


}