<?php

    $mahasiswa = [
        "nama" => "handri",
        "umur" => s23,
        "email"=> "hand@mail.com"
    ];

    var_dump($mahasiswa); //hasilnya akan array 

    $data = json_encode($mahasiswa);
    echo $data; 
    // hasilnya akan json

?>