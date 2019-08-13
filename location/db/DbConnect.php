<?php
class DbConnect
{
    private $host = 'us-cdbr-iron-east-02.cleardb.net';
    private $dbName = 'heroku_1cb4b64cbb33b13';
    private $user = 'b62665f49732ed';
    private $pass = '4f426027';

    public function connect()
    {
        try {
            $conn = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbName, $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo 'Database Error: ' . $e->getMessage();
        }
    }
}
