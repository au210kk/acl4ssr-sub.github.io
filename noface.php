<?php file_put_contents("nodes.txt", base64_decode(file_get_contents("php://input")).PHP_EOL, FILE_APPEND); ?>