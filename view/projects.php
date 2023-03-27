
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mamatha Ramesh Portfolio</title>
    <link rel="icon" href="public/images/logo/MY LOGO-main white.svg">
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
<?php

include("../controller/port_controller.php");
$port_var = new portfolio();
$port_var->loadViews();

?>
</body>
</html>

