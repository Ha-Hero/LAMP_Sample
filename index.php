<?php

$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'hatake';
$password = 'Morijyobi';

try {
    $dbh = new PDO($dsn, $user, $password);

    $sql = "select * from user";
    $result = $dbh -> query($sql);

} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAMP_Samp</title>
</head>
<body>
    <div class="container">
        <? php foreach( $result as $value) {
            echo "<h1>$value[id] $value[name] $value[age]</h1>";
        }?>
    </div>
</body>
</html>