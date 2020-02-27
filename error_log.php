<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error's</title>
</head>
<body>
<?php
function countDown() {
    $rts = rand(0, 20);
    
    error_log("error: Er is iets fout gegaan !", 0);
}
countDown();


?>
</body>
</html>