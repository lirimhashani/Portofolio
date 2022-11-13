<?php
$serverName = "127.0.0.1";
$userName = "root";
$password = "";
$db = "contact_db";

$conn = new mysqli($serverName, $userName,$password, $db);


if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }


  if(isset($_POST['send'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);
 
    $select_message = mysqli_query($conn, "SELECT * FROM contact_form WHERE name = '$name' AND email = '$email'  AND message = '$msg'") or die('query failed');
    
    if(mysqli_num_rows($select_message) > 0){
       $message[] = 'message sent already!';
    }else{
       mysqli_query($conn, "INSERT INTO `contact_form`(name, email,message) VALUES('$name', '$email','$msg')") or die('query failed');
       $message[] = 'message sent successfully!';
    }
 
 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio LH</title>
    <!-- Link To CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Box Icons -->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
 
</head>
<body>
    <!-- Navbar -->
    <header>
        <a href="#" class="logo">LH Code</a>
        
 
        <div class="bx bx-menu" id="menu-icon"></div>
 
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
            <div class="bx bx-moon" id="darkmode"></div>
        </ul>
    </header>
    <!-- Home -->
 
    <section class="home" id="home">
        <div class="social">
            <a href="https://github.com/lirimhashani"><i class='bx bxl-github'></i></a>
            
        </div>
        <div class="home-img">
            <img src="lilaa.png" alt="">
        </div>
        <div class="home-text">
            <span>Hello, I'm</span>
            <h1>Lirim Hashani</h1>
            <h2>Frontend Developer</h2>
            <p>A hard working Frontend Developer with 2+ years of experience in projects.<br>Equipped with ability to utilize skills gained in Frontend engineering.I love to <br>create beautiful and performant products with delightful user experiences.</p>
            <a href="#contact" class="btn">Contact Me</a>
        </div>
 
    </section>
    <!-- About -->
    <section class="about" id="about">
        <div class="heading">
            <h2>About Me</h2>
            <span>Introduction</span>
        </div>
        <!-- About Content -->
        <div class="about-container">
            <div class="about-img">
                <img src="lilaaaa.png" alt="">
            </div>
            <div class="about-text">
                <p>Hello I'm Lirim Hashani and I'm a student at Kadri Zeka's University in computer sciences degree.Previously I have worked at KPH Production House, where I was a videoeditor and now I work as a social media manager at ADA Hair Clinic and as a self-employed Frontend developer. </p>
                <div class="information">
                    <!-- Box 1 -->
                    <div class="info-box">
                        <i class='bx bxs-user' ></i>
                        <span>Lirim Hashani</span>
                    </div>
                    <!-- Box 2 -->
                    <div class="info-box">
                        <i class='bx bxs-phone' ></i>
                        <span>+383 49 144 604</span>
                    </div>
                    <!-- Box 3 -->
                    <div class="info-box">
                        <i class='bx bxs-envelope' ></i>
                        <span>lirimi123@outlook.de</span>
                    </div>
                </div>
                <a href="LH.pdf"  class="btn">Download Cv</a>
            </div>
        </div>
    </section>
    <!-- Skills -->
    <section class="skills" id="skills">
        <div class="heading">
            <h2>Skills</h2>
            <span>My Skills</span>
        </div>
        <!-- Skills Content -->
        <div class="skills-container">
            <div class="bars">
                <!-- Box 1 -->
                <div class="bars-box">
                    <h3>HTML / CSS</h3>
                    <span>95%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar html-bar"></div>
                </div>
                <!-- Box 2 -->
                <div class="bars-box">
                    <h3>Wordpress</h3>
                    <span>90%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar wp-bar"></div>
                </div>
                <!-- Box 3 -->
                <div class="bars-box">
                    <h3>JavaScript</h3>
                    <span>80%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar js-bar"></div>
                </div>
                <!-- Box 4 -->
                <div class="bars-box">
                    <h3>Graphic Design</h3>
                    <span>95%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar gd-bar"></div>
                </div>
            </div>
            <div class="skills-img">
                <img src="123.png" alt="">
            </div>
        </div>
 
    </section>
    <!-- Services -->
    <section class="services" id="services">
        <div class="heading">
            <h2>Services</h2>
            <span>Our Services</span>
        </div>
        <div class="services-content">
            <!-- Box 1 -->
            <div class="services-box">
                <i class='bx bx-code-alt' ></i>
                <h3>Web Development</h3>
                <a href="#">Learn More</a>
            </div>
            <!-- Box 2 -->
            <div class="services-box">
                <i class='bx bx-server' ></i>
                <h3>Video Editing</h3>
                <a href="#">Learn More</a>
            </div>
            <!-- Box 3 -->
            <div class="services-box">
                <i class='bx bx-brush' ></i>
                <h3>Graphic Design</h3>
                <a href="#">Learn More</a>
            </div>

            <div class="services-box">
                <i class='bx bxl-wordpress' ></i>
                <h3>Wordpress Developer</h3>
                <a href="#">Learn More</a>
            </div>
        </div>
    </section>
    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
        <div class="heading">
            <h2>Portfolio</h2>
            <span>Our Recent Work</span>
        </div>
        <div class="portfolio-content">
            <div class="portfolio-img">
            <a href="https://github.com/lirimhashani/WebApplication1.git">
                <img src="zhva.jpg" alt=""></a>
                <h3>Uebaplikacioni për menaxhimin e projekteve ndërtuese</h3>
                
            </div>
            <div class="portfolio-img">
            <a href="https://github.com/lirimhashani/ProjectAboutManegment.git">
                <img src="wda.jpg" alt=""></a>
                <h3>Uebaplikacioni për menaxhimin e shitjes së video lojrave</h3>
            
                
            
            </div>
        
        </div>
    </section>
    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="heading">
            <h2>Contact</h2>
            <span>Connect With Me</span>
        </div>
        <div class="contact-form">
            <form action="" method="post">
                <input type="text" name="name" placeholder="Your Name">
                <input type="email" name="email" id="" placeholder="Your Email">
                <textarea  cols="30" name="message" rows="10" placeholder="Write Message Here..."></textarea>
                <button type="submit" name="send" class="btn">Send</button>
            </form>
        </div>
    </section>
    <!-- Footer -->
    <div class="footer">
        <h2>Connect With Me in Social Media</h2>
        <div class="footer-social">
            <a href="https://www.facebook.com/lirim.hashani.5/"><i class='bx bxl-facebook' ></i></a>
            <a href="https://www.linkedin.com/in/lirim-hashani-a68921233/"><i class='bx bxl-linkedin' ></i></a>
            <a href="https://www.instagram.com/lirim.hashani/"><i class='bx bxl-instagram' ></i></a>
            
        </div>
 
    </div>
    
 
 
 
    <!-- Link To JS -->
    <script src="./js/script.js"></script>
</body>
</html>