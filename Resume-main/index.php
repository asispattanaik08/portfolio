<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Personal Portfolio Website</title>
  <link rel="stylesheet" href="css/style.css">

  <!-- box icons -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- custom css -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!-- header design -->
  <header class="header">
    <a href="#" class="logo">Portfolio</a>
    <i class='bx bx-menu' id="menu-icon"></i>

    <nav class="navbar">
      <a href="#home" class="active">Home</a>
      <a href="#about">About</a>
      <a href="#services">Services</a>
      <a href="https://drive.google.com/file/d/1OMCkKpDRbRPGozHSJx1Iq2N5owfHI76x/view?usp=sharing">Resume</a>
      <a href="contact.php" target="__main">Contact</a>
      <span id="current-time" style="margin-left: 20px; color: #fff; font-weight: bold;"></span>
    </nav>
  </header>

  <!-- home section design -->
  <section class="home" id="home">
    <div class="home-content">
      <h3>Hello, It's Me</h3>
      <h1>ASIS PATTANAIK</h1>
      <h3>And <span class="multiple-text"></span></h3>
      <p>I'm a web Designer with extensive experience for over 1 years. <br> experties is to create and website design,
        Frontend design, and<br> many more...</p>
      <div class="social-media">
        <a href="https://www.facebook.com/asis.pattanaik.758/"><i class='bx bxl-facebook'></i></a>
        <a href="https://www.hackerrank.com/profile/asispattanaik11" target="_blank" title="HackerRank">
          <img src="https://cdn.worldvectorlogo.com/logos/hackerrank.svg" alt="HackerRank" style="width: 24px; height: 24px;">
        </a>
        <a href="https://www.instagram.com/mr.bearr__/"><i class='bx bxl-instagram-alt'></i></a>
        <a href="https://www.linkedin.com/in/pattanaik-asis/"><i class='bx bxl-linkedin'></i></a>
      </div>
      <a href="https://drive.google.com/file/d/1LXzXXeK-E6KmtsN9em5C0zvToKSEXpSl/view?usp=drive_link" class="btn">More About Me</a>
    </div>

    <div class="home-img">
      <img src="P1.PNG" alt="">
    </div>
  </section>

  <!-- about section design -->
  <section class="about" id="about">
    <div class="about-img">
      <img src="P2.png" alt="">
    </div>
    <div class="about-content">
      <h2 class="heading">About <span>Me</span></h2>
      <h3>Full Stack Developer!</h3>
      <p>A Full Stack Developer is a versatile professional skilled in both front-end and back-end development, capable of building and maintaining entire web applications from start to finish. With a deep understanding of various programming languages, frameworks, and tools, they are adept at designing user-friendly interfaces as well as implementing complex server-side logic. My expertise as a Full Stack Developer allows me to seamlessly integrate databases.</p>
    </div>
  </section>

  <!-- services section design -->
  <div class="services" id="services">
    <h2 class="heading"> My<span> Services</span></h2>
  </div>
  <div class="services-container">
    <div class="services-box">
      <i class="fa-solid fa-crop-simple"></i>
      <h3>Web Design</h3>
      <p>Web design is the art and science of crafting visually appealing and user-friendly websites that effectively communicate a brand's message and engage its audience.</p>
      <a href="https://github.com/asispattanaik" class="btn">Read More</a>
    </div>
  </div>

  <!-- progress line -->
  <h2 class="heading"> My<span> Skills</span></h2>

  <section class="skills-section">
    <div class="skills-container">
      <!-- Left: Technical Skills -->
      <div class="technical-skills">
        <h1 class="heading1">Technical Skills</h1>
        <h2><strong>Frontend Skill</strong></h2>
        <ul>
          <li>HTML</li>
          <li>CSS</li>
          <li>JavaScript</li>
          <li>BootStrap</li>
        </ul>
        <h2><strong>Backend Skill</strong></h2>
        <ul>
          <li>Python</li>
          <li>Django</li>
          <li>PHP</li>
          <li>Laravel</li>
          <li>JavaScript</li>
        </ul>
        <h2><strong>Databases and Data Sciences</strong></h2>
        <ul>
          <li>SQL</li>
          <li>DBMS</li>
          <li>Excel</li>
          <li>PowerBi</li>
        </ul>
      </div>

      <!-- Right: Professional Skills -->
      <div class="professional-skills">
        <h1 class="heading1">Professional Skills</h1>
        <div class="circles-row">
          <div class="radial-bars">
            <svg viewBox="0 0 200 200">
              <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
              <circle class="path path-1" cx="100" cy="100" r="80"></circle>
            </svg>
            <div class="percentage">90%</div>
            <div class="text">Creativity</div>
          </div>
          <div class="radial-bars">
            <svg viewBox="0 0 200 200">
              <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
              <circle class="path path-2" cx="100" cy="100" r="80"></circle>
            </svg>
            <div class="percentage">75%</div>
            <div class="text">Communication</div>
          </div>
        </div>

        <div class="circles-row">
          <div class="radial-bars">
            <svg viewBox="0 0 200 200">
              <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
              <circle class="path path-3" cx="100" cy="100" r="80"></circle>
            </svg>
            <div class="percentage">65%</div>
            <div class="text">Problem Solving</div>
          </div>
          <div class="radial-bars">
            <svg viewBox="0 0 200 200">
              <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
              <circle class="path path-4" cx="100" cy="100" r="80"></circle>
            </svg>
            <div class="percentage">95%</div>
            <div class="text">Teamwork</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- portfolio section design -->
  <section class="portfolio" id="portfolio">
    <h2 class="heading">Latest <span>Project</span></h2>
    <div class="portfolio-container">
      <div class="portfolio-box">
        <img src="images/portfolio2.avif" alt="">
        <div class="portfolio-layer">
          <h4>Web Design</h4>
          <p>Web design is the art and science of crafting visually appealing and user-friendly websites</p>
          <a href="https://github.com/asispattanaik"><i class='bx bx-link-external'></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- footer design -->
  <footer class="footer">
    <div class="footer-text">Copyright &copy; 2024 by ASIS PATTANAIK | All Rights Reserved.</div>
    <div class="footer-text">ASIS PATTANAIK</div>
    <div class="footer-text">asispattanaik11@gmail.com</div>
    <a href="contact.php" target="__main"><div class="footer-text">Contact</div></a>
    <div class="footer-iconTop">
      <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
    </div>
  </footer>

  <!-- scroll reveal -->
  <script src="https://unpkg.com/scrollreveal"></script>

  <!-- typed js -->
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

  <!-- custom js -->
  <script>
    // Toggle navbar icon
    let menuIcon = document.querySelector('#menu-icon');
    let navbar = document.querySelector('.navbar');

    menuIcon.onclick = () => {
      menuIcon.classList.toggle('bx-x');
      navbar.classList.toggle('active');
    };

    // Scroll active links
    let sections = document.querySelectorAll('section');
    let navLinks = document.querySelectorAll('header nav a');

    window.onscroll = () => {
      sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if (top >= offset && top < offset + height) {
          navLinks.forEach(links => {
            links.classList.remove('active');
            document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
          });
        }
      });

      // Sticky navbar
      let header = document.querySelector('header');
      header.classList.toggle('sticky', window.scrollY > 100);

      // Remove toggle on scroll
      menuIcon.classList.remove('bx-x');
      navbar.classList.remove('active');
    };

    // Scroll reveal
    ScrollReveal({
      distance: '80px',
      duration: 2000,
      delay: 200
    });

    ScrollReveal().reveal('.home-content, .heading', { origin: 'top' });
    ScrollReveal().reveal('.home-img, .services-container, .portfolio-box, .contact form', { origin: 'bottom' });
    ScrollReveal().reveal('.home-content h1, .about-img', { origin: 'left' });
    ScrollReveal().reveal('.home-content p, .about-content', { origin: 'right' });

    // Typed.js
    const typed = new Typed('.multiple-text', {
      strings: ['Frontend Developer', 'Backend Developer', 'Fullstack Developer', 'Data Analyst'],
      typeSpeed: 50,
      backSpeed: 20,
      backDelay: 100,
      loop: true
    });

    // Current Time in Navbar
    function updateTime() {
      const timeElement = document.getElementById("current-time");
      if (timeElement) {
        const now = new Date();
        const timeString = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', second: '2-digit' });
        timeElement.textContent = timeString;
      }
    }

    setInterval(updateTime, 1000);
    updateTime();
  </script>
</body>

</html>
