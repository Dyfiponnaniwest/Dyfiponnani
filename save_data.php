<?php
$data = json_decode(file_get_contents("php://input"), true);



file_put_contents("new_page.html", json_encode($data));


// Respond to the client-side JavaScript
http_response_code(200);
?>