<?php 

include "../database/db.php";

header("Content-Type: application/json");

// stampiamo sulla pagina il risultato della funzione json_encode che sarà sempre una stringa
echo json_encode($db);

?>