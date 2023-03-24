
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
    <h1 hidden>Mamatha Portfolio</h1>


    <section class="Nav">
        <nav>
            <div class="logo">
            <a href="index.php"><img src="public/images/logo/MY LOGO-main white.svg" alt="logo"></a>
            </div>
        <ul class="MainNav">
            <li id="aboutSubNav"><a href="#" onclick="loadPage('about.php')">ABOUT</a>
                    <ul class="aboutSubShow">
                        <li><a href="#" onclick="loadPage('education.php')">EDUCATION</a></li>
                        <li><a href="#" onclick="loadPage('experience.php')">WORK EXPERIENCE</a></li>
                        <li><a href="#" onclick="loadPage('skills.php')">SKILLS</a></li>
                    </ul>
            </li>        
            <li><a href="#" onclick="loadPage('projects.php')">PROJECTS</a></li>        
            <li><a href="#" onclick="loadPage('contact.php')">CONTACT</a></li>
        </ul>

    <div class="social-medias">
        <a href="https://www.linkedin.com/in/mamatha-vaidehi-ramesh-a31a011b5/"><img src="./public/images/socials/linkedin.png" alt = "L"></a>
        <a href="https://github.com/M-Vaidehi-R"><img src="./public/images/socials/github.png" alt = "I"></a>
        <a href="https://www.instagram.com/mamatha_vaidehi_ramesh/"><img src="./public/images/socials/instagram.png" alt = "M"></a>
    </div>
    </nav>
    </section>

        <!--Mobile Nav -->
        <div>

<div class="mobile tablet">
    <input type="checkbox" id="overlay-input"/>
    <label for="overlay-input" id="overlay-button"><span></span></label>
    <div id="overlay">
    <ul class="MainNav-phone">
        <li id="aboutSubNav-phone"><a href="#" onclick="loadPage('about.php')">ABOUT</a>
                <ul class="aboutSubShow-phone">
                    <li><a href="#" onclick="loadPage('education.php')">EDUCATION</a></li>
                    <li><a href="#" onclick="loadPage('experience.php')">WORK EXPERIENCE</a></li>
                    <li><a href="#" onclick="loadPage('skills.php')">SKILLS</a></li>
                </ul>
        </li>        
        <li><a href="#" onclick="loadPage('projects.php')">PROJECTS</a></li>        
        <li><a href="#" onclick="loadPage('contact.php')">CONTACT</a></li>
    </ul>

    <div class="social-medias-phone">
    <a href="https://www.linkedin.com/in/mamatha-vaidehi-ramesh-a31a011b5/"><img src="./public/images/socials/linkedin.png" alt = "L"></a>
    <a href="https://github.com/M-Vaidehi-R"><img src="./public/images/socials/github.png" alt = "I"></a>
    <a href="https://www.instagram.com/mamatha_vaidehi_ramesh/"><img src="./public/images/socials/instagram.png" alt = "M"></a>
    </div>

    </div>
    </div>
</div>        

<!--End Mobile Nav-->

    <main id="app">

    <div class="intro">

        <!-- <h1>Hello World...</h1> -->

    <div class="content">
    <h2>MAMATHA's</h2>
    <h2>MAMATHA's</h2>
  </div>
<br> <br> <br> <br> <br> <br> <br> <br>
  <div class="content">
    <h2>PORTFOLIO</h2>
    <h2>PORTFOLIO</h2>
  </div>

  <!-- <h3>Junior Web Developer</h3>
  <h4>.:building expertize with each project:.</h4> -->

  <div class="main-img">
        <img src="./public/images/balloon.svg" alt="girl holding balloons">
  </div>

    <div>    
        
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