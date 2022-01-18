<?php

class Database
{
    function __construct()
    {
        $this->con = new PDO("mysql:host=localhost;dbname=pbw_uas", "root", "");
        // $this->con = new PDO("mysql:host=localhost;dbname=u1422143_rizal_pbw_uas", "u1422143_rizal", "");
    }

    function get($column = null, $table = null, $property = null)
    {
        $query = "SELECT $column FROM $table $property";
        return $this->con->query($query);
    }

    function create($table = null, $value = null)
    {
        $query = "INSERT INTO $table VALUES($value)";
        return $this->con->query($query);
    }


    function delete($table = null, $condition = null)
    {
        $query = "DELETE FROM $table WHERE $condition";
        return $this->con->query($query);
    }

    function update($table = null, $value = null, $property = null)
    {
        $query = "UPDATE $table SET $value WHERE $property";
        return $this->con->query($query);
    }
}

$db = new Database();
