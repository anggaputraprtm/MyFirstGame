<?php
echo "\n============= Welcome To My First Game =============\n";
while (true) {
    echo "                  Game Tebak Angka \n\n";
    echo "Rules : Tebak sebuah angka antara 1 sampe 9!\n";
    $computer = rand(1,9);
    echo "Masukan Tebakanmu : ";
    $player = trim(fgets(STDIN));
    if ($player == $computer) {
        echo "\n###################################################\n";
        echo "#          MENANG,ANGKA KOMPUTER ADALAH $computer         #\n";
        echo "###################################################\n";
        exit;
    }else {
        echo "\n###################################################\n";
        echo "#          KALAH,ANGKA KOMPUTER ADALAH $computer          #\n";
        echo "###################################################\n";
    }
}