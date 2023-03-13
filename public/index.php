<html>
<head><title>PHP TEST</title></head>
<link rel="icon" href="data:,">
<body>

<?php
$dsn = 'mysql:dbname=dbname;host=db-51';
$user = 'dbuser';
$password = 'dbpassword';
try{
    $dbh = new PDO($dsn, $user, $password);

    print('<div>接続に成功しました。</div>');

    $sql = 'select * from test_tb';
    foreach ($dbh->query($sql) as $row) {
        print('<p class="list">' . $row['name'].', '.$row['age'].', '.$row['sex'].'</p>');
    }
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}

$dbh = null;

?>

</body>
</html>
