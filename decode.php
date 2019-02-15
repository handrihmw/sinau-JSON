<?php
 
 $data = file_get_contents('satu.json');
 $data = file_get_contents('https://kodepos-2d475.firebaseio.com/list_propinsi.json?print=pretty');
 $user = json_decode($data, true);

var_dump($user);
echo $user[0]["atasan"]["atasan1"];
?>
