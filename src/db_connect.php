<?php
try{
    $dbHost = getenv('DB_HOST');
    $dbPort = getenv('DB_PORT');
    $dbName = getenv('DB_NAME');
    $dbUser = getenv('DB_USER');
    $dbPass = getenv('DB_PASS');
    $dsn = "mysql:dbname={$dbName};host={$dbHost};port={$dbPort}";
    $dbh = new PDO($dsn, $dbUser, $dbPass); 
} catch (PDOException $e) {
    echo 'データベース接続失敗: ' . $e->getMessage();
exit();
}
