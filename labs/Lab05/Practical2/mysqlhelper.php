<?php
class MySQLHelper
{
    private $server;
    private $user;
    private $pass;
    private $conn;
    function __construct($server = "127.0.0.1", $user = "root", $pass = "")
    {
        $this->server = $server;
        $this->user = $user;
        $this->pass = $pass;
    }
    public function OpenDB($db)
    {
        $this->conn = new mysqli($this->server, $this->user, $this->pass, $db, 3307);
        if ($this->conn->connect_error)
            echo "conncetion fail: " . $this->conn->connect_error;
    }
    public function CloseDB()
    {
        mysqli_close($this->conn);
    }
    public function MyQuery($query)
    {
        $result = $this->conn->query($query);

        if (!$result) {
            die(mysqli_error($this->conn));
        }
        $this->CloseDB();
        return $result;
    }
    public function GetAll($table)
    {
        $result = $this->conn->query("select * from " . $table);
        if (!$result) {
            die("Error");
        }
        $this->CloseDB();
        return $result;
    }
}
