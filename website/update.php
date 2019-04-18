<?php

$id = $_POST['id'];
$name = $_POST['name'];
$type_1 = $_POST['type_1'];
$type_2 = $_POST['type_2'];
$type_3 = $_POST['type_3'];
$stage_evolution = $_POST['stage_evolution'];
$gender = $_POST['gender'];
$generation = $_POST['generation'];
$region = $_POST['region'];
$color = $_POST['color'];
$detail = $_POST['detail'];

if ($type_2 == 'NULL')
    $type_2 = NULL;

if ($type_3 == 'NULL')
    $type_3 = NULL;

if (isset($_POST['mega_evolution']))
    $mega_evolution = $_POST['mega_evolution'];
else
    $mega_evolution = 0;

if (isset($_POST['legendary']))
    $legendary = $_POST['legendary'];
else
    $legendary = 0;

if (isset($_POST['starter']))    
    $starter = $_POST['starter'];
else
    $starter = 0;

include "mysqlConnection.php";

$select = $conn->query("select * from pokemon where id=$id");

$update = "UPDATE pokemon SET id=$id "; 

while($row = $select->fetch_assoc()) {
    if ($row['name'] !== $name)
        $update = $update . ", name='$name'";
    if ($row['type_1'] != $type_1)
        $update = $update . ", type_1='$type_1'";
    if ($row['type_2'] != $type_2)
        $update = $update . ", type_2='$type_2'";
    if ($row['type_3'] != $type_3)
        $update = $update . ", type_3='$type_3'";
    if ($row['stage_evolution'] != $stage_evolution)
        $update = $update . ", stage_evolution='$stage_evolution'";    
    if ($row['mega_evolution'] != $mega_evolution)
        $update = $update . ", mega_evolution='$mega_evolution'";
    if ($row['legendary'] != $legendary)
        $update = $update . ", legendary='$legendary'";
    if ($row['starter'] != $starter)
        $update = $update . ", starter='$starter'";
    if ($row['gender'] != $gender)
        $update = $update . ", gender='$gender'";
    if ($row['generation'] != $generation)
        $update = $update . ", generation='$generation'";
    if ($row['region'] != $region)
        $update = $update . ", region='$region'";
    if ($row['color'] != $color)
        $update = $update . ", color='$color'";
    if ($row['detail'] != $detail)
        $update = $update . ", detail='$detail'";
}
$update = $update . " WHERE id=" . $id;

if ($conn->query($update) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

header("Location: http://pokedb/website/?id=" . $id);
die();
?>