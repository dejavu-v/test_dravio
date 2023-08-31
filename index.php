<?php

$q = "Select * from mytable where id=3;";

$qw = "Select * from mytable as m left join mytables as s on m.id=s.mid where m.id=20;";

$mysqli = new mysqli("example.com", "user", "password", "database");

$result = $mysqli->query($qw);
$row = $result->fetch_assoc();
echo $row['_msg'];
