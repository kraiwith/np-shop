<?php

class configDB
{
    private $hostName = "localhost";
    private $userName = "root";
    private $password = "";
    private $dbName = "shop";

    function __construct()
    {
        $this->conn = new mysqli($this->hostName, $this->userName, $this->password, $this->dbName);
    }
}
