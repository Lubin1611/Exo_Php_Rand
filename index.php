<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 18/12/2018
 * Time: 14:13
 */
$recup1 = $_GET["chiffre"];
$recup2 = $_GET["chiffre2"];


$rand = mt_rand($recup1, $recup2);

echo $rand;