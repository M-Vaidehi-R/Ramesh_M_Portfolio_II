
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mamatha Ramesh Portfolio</title>
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <h1 hidden>Mamatha Portfolio</h1>

    <section class="Nav">
        <nav>
            <div class="logo">
            <img src="public/images/logo.svg" alt="logo">
            </div>
        <ul class="MainNav">
            <li id="aboutSubNav"><a href="#" onclick="loadPage('about.php')">ABOUT</a>
                    <ul class="aboutSubShow">
                        <li><a href="#" onclick="loadPage('education.php')">EDUCATION</a></li>
                        <li><a href="#" onclick="loadPage('experience.php')">WORK EXPERIENCE</a></li>
                        <li><a href="#" onclick="loadPage('skills.php')">SKILLS</a></li>
                    </ul>
            </li>        
            <li><a href="#" onclick="loadPage('projects.php')">PROJECTS</a>
                    <ul>
                        <li><a href="view/projects.php?category=developing">DEVELOPING</a></li>
                        <li><a href="view/projects.php?category=designing">DESIGNING</a></li>
                        <li><a href="view/projects.php?category=motion">MOTION DESIGNING</a></li>
                    </ul>
            </li>        
            <li><a href="#" onclick="loadPage('contact.php')">CONTACT</a></li>
        </ul>

    <div class="social-medias">
        <a href=""><img src="" alt = "L"></a>
        <a href=""><img src="" alt = "I"></a>
        <a href=""><img src="" alt = "M"></a>
    </div>
    </nav>
    </section>

    <main id="app">
        <!--main Page should be dynamically loaded here -->
    </main>

    <footer class="footer">
    <a href="/public/resume.pdf" download class="button">RESUME</a>

    <p id="copyright">All rights reserved by Mamatha Ramesh</p>
    </footer>

    <script src="https://unpkg.com/vue@next"></script>

    <script src="public/js/main.js" type="module" defer></script>
    <script src="public/js/test.js"></script>
</body>
</html>