<?php

$conn  = mysqli_connect('localhost', 'root', 'fanira', 'astrindo');
mysqli_set_charset($conn, 'utf8');
$query = mysqli_query($conn, 'SELECT * FROM tb_user');
while($row = mysqli_fetch_assoc($query)) {
	$data[] = $row;
}
			
$json = json_encode($data);
echo $json;
?>
