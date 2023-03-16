<?php
//  echo "php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mamatha Ramesh Portfolio</title>
    <link rel="stylesheet" ahref="public/css/main.css">
</head>
<body>
    <h1 hidden>Mamatha Portfolio</h1>

    <section class="MainNav">
        <ul>
            <li><a href="#" onclick="loadPage('about.php')">ABOUT</a></li>
            <li><a href="#" onclick="loadPage('projects.php')">PROJECTS</a></li>
            <li><a href="#" onclick="loadPage('contact.php')">CONTACT</a></li>
        </ul>
    </section>

    <main id="app">
        <!--main Page should be dynamically loaded here -->
    </main>

    <footer>
    <a href="/public/resume.pdf" download class="button">RESUME</a>

    <p id="copyright">All rights reserved by Mamatha Ramesh</p>
    </footer>

    <script src="public/js/main.js"></script>
</body>
</html>