<?php
header('Content-Type: application/json');
$res = [];

    $server = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbName = 'hotel';
    $conn = new mysqli($server, $username, $password, $dbName);
    if ($conn -> connect_errno) {
        echo $conn -> connect_errno;
        return;
    }
    $sql = "
        SELECT status, price
        FROM pagamenti
    ";
    $results = $conn -> query($sql);
    if ($results -> num_rows < 1) {
        echo "no result";
        return;
    }
    while ($row = $results -> fetch_assoc()) {
        $res[] = [
          'status' => $row['status'],
          'price' => $row['price']
        ];
    }

    $conn -> close();

    echo json_encode($res);







 ?>
