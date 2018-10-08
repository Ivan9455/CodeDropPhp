<?php

class DataBase implements DataBaseDao
{
    private $host = "localhost"; // адрес сервера
    private $database = "CodeDrop"; // имя базы данных
    private $user = "root"; // имя пользователя
    private $password = "enot1147"; // пароль
    private $connect;

    public function __construct()
    {
        $this->connect = mysqli_connect(
            $this->host, $this->user, $this->password, $this->database);
    }

    public function getConnect()
    {
        return $this->connect;
    }
}