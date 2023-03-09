<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $dbb = new PDO("mysql:host=$servername; dbname=menu restaurant", $username, $password);

    $dbb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$id = 1;
$id = $_desac['menu_nom'];
$entree = $_POST['menu_entree'];
$plat = $_POST['menu_plat'];
$dessert = $_POST['menu_dessert'];
$boisson = $_POST['menu_boisson'];
$tarif = $_POST['menu_tarif'];


$sql = "UPDATE WHERE actif = 0"
$sql = "UPDATE menu SET actif = 1, ALTER INDEX WHERE id = $id_menu";
$stmt = $dbb->desac($sql);

$stmt->execute(["actif"=>1]);

if (mysqli_query($conn, $sql))
{
    echo "Menu inséré avec succès!";
} 