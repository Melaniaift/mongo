<?php
require_once 'connection.php';
$query = new MongoDB\Driver\Query([]);
$rows = $client->executeQuery("elevi.Negruzzi",$query);

foreach($rows as $doc){
    echo $doc->nume."<br/>";
}
?>