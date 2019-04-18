<?php

include 'mysqlConnection.php';

// select params id
$id = $_GET['id'];

if ($id < 1)
    $id = 1;
else if ($id > 807)
    $id = 807;

$prevId = $id - 1;
$nextId = $id + 1;

$prev = "http://pokedb/website/?id=$prevId";
$next = "http://pokedb/website/?id=$nextId";

// make resquest
$query = "select * from pokemon where id=" . $id;

$result = $conn->query($query);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<label>numéro : </label> " . $row['id'];
        echo '<img src="../db/images/pkm_icons/'. $row['icon'] . '"></img><br/>';
        echo '<label>nom : </label> ' . $row['name'] . '<br/>';
        echo '<label>type 1 : </label> ' .$row['type_1'] . '<br/>';
        echo '<label>type 2 : </label> ' .$row['type_2'] . '<br/>';
        echo '<label>type 3 : </label> ' .$row['type_3'] . '<br/>';
        echo '<label>palier d\'évolution : </label> ' .$row['stage_evolution'] . '<br/>';
        echo '<label>méga évolution : </label> ' .$row['mega_evolution'] . '<br/>';
        echo '<label>légendaire : </label> ' .$row['legendary'] . '<br/>';
        echo '<label>starter : </label> ' .$row['starter'] . '<br/>';
        echo '<label>genre : </label> ' .$row['gender'] . '<br/>';
        echo '<label>génération : </label> ' .$row['generation'] . '<br/>';
        echo '<label>région d\'origine : </label> ' .$row['region'] . '<br/>';
        echo '<label>couleur principale : </label> ' .$row['color'] . '<br/>';
        echo '<label>détail caractéristique : </label> ' .$row['detail'] . '<br/>';
    }
} else {
    echo "no results";
}

$conn->close();
?>

<button><a href=<?php echo $prev ?>>precedent</a></button>
<button><a href=<?php echo $next ?>>suivant</a></button>