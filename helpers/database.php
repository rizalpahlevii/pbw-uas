<?php

class Database
{
    function __construct()
    {
        $this->con = new PDO("mysql:host=localhost;dbname=pbw_uas", "root", "");
    }

    function get($column = null, $table = null, $property = null)
    {
        $qw = "SELECT $column FROM $table $property";
        return $this->con->query($qw);
    }

    function create($table = null, $value = null)
    {
        $qw = "INSERT INTO $table VALUES($value)";
        return $this->con->query($qw);
    }


    function delete($table = null, $condition = null)
    {
        $qw = "DELETE FROM $table WHERE $condition";
        return $this->con->query($qw);
    }

    function update($table = null, $value = null, $property = null)
    {
        $qw = "UPDATE $table SET $value WHERE $property";
        return $this->con->query($qw);
    }
}

$db = new Database();
