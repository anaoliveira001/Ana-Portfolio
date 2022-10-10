<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/code_Ana1.png" type="image/x-icon">
    <!--CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <!--CND link - font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <title>Ana_Dev</title>
</head>

<body>

<?php
if (isset($_GET['r'])) {
    $r = $_GET['r'];
    if ($r == 'notsend') { ?>
       <div class="message" data-aos="zoom-out">
         <span>'Message not send, please try again'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
    <?php
    } else if ($r == 'send') { ?>
         <div class="message" data-aos="zoom-out">
         <span>'Message send, thank you for you contact'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
<?php
    }
} ?>


<!--Animation Starts -->
<div id="particle-container">
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
</div>
<!--Animation ends -->


<!--header starts -->
<header class="header">
    <div id="menu-btn" class="fas fa-bars"></div>
    <a href="#home" class="logo">AnaDev</a>
    <!--navbar starts -->
    <nav class="navbar">
      <a href="#home" class="active">Home</a>
      <a href="#about">About</a>
      <a href="#services">Services</a>
      <a href="#portfolio">Portfolio</a>
      <a href="#contact">Contact</a>
   </nav>

   <div class="follow">
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-github"></a>
   </div>
    <!--navbar end -->
</header>
<!--header end -->

<!--home section starts -->
    <section class="home" id="home">
        <div class="image" data-aos="fade-rigth">
            <img src="images/picture_ana.jpeg" alt="">
        </div>
        <div class="content">
           <h3 data-aos="fade-up">Hi, I am Ana Oliveira</h3>
           <span data-aos="fade-up">Frontend Web Developer and UI/UX Designer</span>
           <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptatem dolore nostrum veritatis officiis deserunt facilis corrupti at, dicta ducimus quaerat reiciendis soluta illum rem cupiditate vitae, ea tempora itaque!</p>
           <a data-aos="fade-up" href="#about" class="btn">About Me</a>
        </div>
    </section>
<!--home section end-->

<!--about section start-->
    <section class="about" id="about">

        <h1 class="heading" data-aos="fade-up"><span>Biography</span></h1>
        <div class="biography">
            <p>
            I started studying programming when I was 17. 
            I have a few projects and I want to work in a technology company that allows me to grow and develop my skills together with a team.</p>

            <div class="bio">
                <h3 data-aos="zoom-in"><span>Name : </span>Ana Paula Oliveira</h3>
                <h3 data-aos="zoom-in"><span>Age: </span>32 years</h3>
                <h3 data-aos="zoom-in"><span>Email : </span>anaestefanodeoliveira@outlook.com</h3>
                <h3 data-aos="zoom-in"><span>Adress : </span>Aveiro, Portugal</h3>
                <h3 data-aos="zoom-in"><span>Phone : </span>+351 935 839 449</h3>
                <h3 data-aos="zoom-in"><span>Experince : </span>3+ years</h3>
            </div>
            <a href="images/CV - Ana Oliveira.pdf" class="btn" target="_blank" data-aos="fade-up">Download my CV</a>
        </div> 

        <div class="skills">
            <h1 class="heading"><span>Skills</span></h1>
            <div class="progress">
                <div class="bar" data-aos="fade-left"><h3><span>HTML5</span> <span>90%</span></h3></div>
                <div class="bar" data-aos="fade-left"><h3><span>CSS3</span> <span>65%</span></h3></div>
                <div class="bar" data-aos="fade-left"><h3><span>JavaScript</span> <span>55%</span></h3></div>
                <div class="bar" data-aos="fade-left"><h3><span>Bootstrap</span> <span>45%</span></h3></div>
                <div class="bar" data-aos="fade-left"><h3><span>VUE</span> <span>45%</span></h3></div>
                <div class="bar" data-aos="fade-left"><h3><span>React</span> <span>45%</span></h3></div>
                <div class="bar" data-aos="fade-left"><h3><span>Python</span> <span>40%</span></h3></div>
                <div class="bar" data-aos="fade-left"><h3><span>Go</span> <span>40%</span></h3></div> <br>
            
                <div class="edu-exp">
                    <h1 class="heading" data-aos="fade-up"><span> Education & Experince</span></h1>
                    <div class="row">
                        <div class="box-container">
                            <h3 class="title">Education</h3>

                            <div class="box" data-aos="fade-right">
                                <span>(2007 - 2008)</span>
                                <h3>Senai - Web Designer</h3>
                                <p>
                                    HTML, CSS, Dw, Ps, Ai, Flash, JS
                                </p>
                            </div>

                            <div class="box" data-aos="fade-right">
                                <span>(2019-2020)</span>
                                <h3>Udemy Web Development - Frontend</h3>
                                <p>
                                    ES(6), Vue, React
                                </p>
                            </div>

                            <div class="box" data-aos="fade-right">
                                <span>(2020)</span>
                                <h3>Data Analyst - Google Coursera</h3>
                                <p>
                                    R langague, Table, Data manipulation, plots
                                </p>
                            </div>

                            <div class="box" data-aos="fade-right">
                                <span>(2021)</span>
                                <h3>UX/UI Desing - Google Coursera</h3>
                                <p>
                                   Advanced techniques in UX/UI, personas and accessibility
                                </p>
                            </div>

                            <div class="box" data-aos="fade-right">
                                <span>(2021)</span>
                                <h3>Bootcamp Frontend - IGTI</h3>
                                <p>
                                    HTML, CSS, JS, Vue,advanced query handling techniques.
                                </p>
                            </div>
                            <div class="box" data-aos="fade-right">
                                <span>(2021 - 2022)</span>
                                <h3>Formação Frontent - Alura</h3>
                                <p>
                                    HTML, CSS, JS, Vue, Angular, React.
                                </p>
                            </div>

                            <div class="box" data-aos="fade-right">
                                <span>(2021 - 2022)</span>
                                <h3>Formação Python - Microsoft</h3>
                                <p>
                                    Fundamentals, Advanced, OPP.
                                </p>
                            </div>

                            <div class="box" data-aos="fade-right">
                                <span>(2022-2023)</span>
                                <h3>Formação Web Development (Frontend/Backend) - Cesae</h3>
                                <p>
                                    Java, HTML, CSS, Bootstrap, PHP, Laravel, Angular, Android Mobile
                                </p>
                            </div>
                            <div class="box" data-aos="fade-right">
                                <span>(2022-2023)</span>
                                <h3>Formação Azure Cloud - Microsoft</h3>
                                <p>
                                   Cloud Services
                                </p>
                            </div>
                        </div>

                        <div class="box-container">
                            <h3 class="title" data-aos="fade-left">Experince</h3>

                            <div class="box" data-aos="fade-left">
                                <span>(2013 - 2022)</span>
                                <h3>Web Designer/ Frontend Developer</h3>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--about section end--> 

<!--services section starts--> 
    <section class="services" id="services">
        <h1 class="heading" data-aos="fade-up"><span>Services</span></h1>

        <div class="box-container">

            <div class="box"  data-aos="zoom-in">
                <i class="fas fa-code"></i>
                <h3>Web Development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore facere veniam aut aspernatur sint temporibus illo atque laboriosam. Voluptates ipsam modi aliquam corrupti. Voluptate perspiciatis quo cupiditate quia! Neque, perspiciatis!</p>
            </div>

            <div class="box"  data-aos="zoom-in">
                <i class="fas fa-paint-brush"></i>
                <h3>Graphic Desing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore facere veniam aut aspernatur sint temporibus illo atque laboriosam. Voluptates ipsam modi aliquam corrupti. Voluptate perspiciatis quo cupiditate quia! Neque, perspiciatis!</p>
            </div>

            <div class="box"  data-aos="zoom-in">
                <i class="fab fa-bootstrap"></i>
                <h3>Bootstrap</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore facere veniam aut aspernatur sint temporibus illo atque laboriosam. Voluptates ipsam modi aliquam corrupti. Voluptate perspiciatis quo cupiditate quia! Neque, perspiciatis!</p>
            </div>

            <div class="box"  data-aos="zoom-in">
                <i class="fab fa-wordpress"></i>
                <h3>Wordpress</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore facere veniam aut aspernatur sint temporibus illo atque laboriosam. Voluptates ipsam modi aliquam corrupti. Voluptate perspiciatis quo cupiditate quia! Neque, perspiciatis!</p>
            </div>
        </div>
    </section>
<!--services section ends--> 

<!--work section starts-->
<section class="portfolio" id="portfolio">
    <h1 class="heading"><span>My work</span></h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
        <img src="images/anadev.png" alt="">
         <h3>Graphic Designer</h3>
      </div>

      <div class="box" data-aos="zoom-in">
        <img src="images/programming.png" alt=""> 
         <h3>Web Development</h3>
         <span>5 Tips</span>
      </div>

      <div class="box" data-aos="zoom-in">
        <img src="images/html.png" alt="">
         <h3>Web Development</h3>
         <span>HTML</span>
      </div>

      <div class="box" data-aos="zoom-in">
        <  <img src="images/css.png" alt="">
         <h3>Web Development</h3>
         <span>CSS</span>
      </div>

      <div class="box" data-aos="zoom-in">
        <img src="images/js.png" alt="">
         <h3>Web Development</h3>
         <span>JavaScript</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/frameworl.png" alt="">
         <h3>Web Development</h3>
         <span>Frameworks and Libraries</span>
      </div>
   </div>
</section>
<!--work section ends--> 

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="email.php" method="GET">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" id="form-from" type="email" name="form-from" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up"  id= "form-message" name="form-message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>Phone</h3>
         <p>+351 935 839 449</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>Email</h3>
         <p>ana_dev@sapo.pt</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>Address</h3>
         <p>Aveiro, Portugal</p>
      </div>
   </div>
</section>

<div class="credit">
    <div class="code">
        <img src="images/code_Ana1.png" alt="">
    </div>&copy; copyright @ <?php echo date('Y'); ?> 
    <br> All rights reserved to: <span>Ana Paula Oliveira</span><br>
</div>

    <!--JS file -->
    <script src="js/main.js"></script>
   
    <!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>
   AOS.init({
      duration:800,
      delay:300
   });

</script>
</body>
</html>