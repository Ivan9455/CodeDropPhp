<?php
echo "200";
class DataBase implements DataBaseDao{
    private $host = 'task.log'; // адрес сервера
    private $database = 'CodeDrop'; // имя базы данных
    private $user = 'root'; // имя пользователя
    private $password = 'enot1147'; // пароль
    private $connect;
    public function __construct()
    {
        $this->connect = mysqli_connect(
            $this->host, $this->user, $this->password, $this->database);
        echo "1";
    }

    public function getConnect()
    {
        return $this->connect;
    }
}