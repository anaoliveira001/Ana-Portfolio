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
    <title>AnaDev</title>
</head>
<body>

<!--header starts -->
<header class="header">
    <div id="menu-btn" class="fas fa-bars"></div>
    <a href="#home" class="logo">AnaDev</a>
    <!--navbar starts -->
    <nav class="navbar">
        <a href="home" class="active">Home</a>
        <a href="about">About me</a>
        <a href="services">Services</a>
        <a href="portfolio">My work</a>
        <a href="contact">Contact</a>
    </nav>
    <div class="follow">
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-github"></a>
    </div>
    <!--navbar end -->
</header>
<!--header end -->

<!--home section starts -->
    <section class="home" id="home">
        <div class="image">
            <img src="images/picture_ana.jpeg" alt="">
        </div>
        <div class="content">
           <h3>Hi, I'am Ana Oliveira</h3>
           <span>Frontend Web Developer and UI/UX Designer</span>
           <p>I started studying programming when I was 17. 
                I have a few projects and I want to work in a technology company that allows me to grow and develop my skills together with a team.</p>
           <a href="#about" class="btn">About Me</a>
        </div>
    </section>
<!--home section end-->

<!--about section start-->
    <section class="about" id="about">

        <h1 class="heading"><span>Biography</span></h1>
        <div class="biography">
            <p>Where I studied: <br>
               IGTI, Alura, Senai, Udemy, Coursera and Microsoft.</p>

            <div class="bio">
                <h3><span>Name : </span>Ana Paula Oliveira</h3>
                <h3><span>Age: </span>32 years</h3>
                <h3><span>Email : </span>anaestefanodeoliveira@outlook.com</h3>
                <h3><span>Adress : </span>Aveiro, Portugal</h3>
                <h3><span>Phone : </span>+351 935 839 449</h3>
                <h3><span>Experince : </span>3+ years</h3>
            </div>
            <a href="images/CV - Ana Oliveira.pdf" class="btn" target="_blank">Download my CV</a>
        </div>

        <div class="skills">
            <h1 class="heading"><span>Skills</span></h1>
            <div class="progress">
                <div class="bar"><span>HTML5</span><span>90%</span></div>
                <div class="bar"><span>CSS3</span><span>80%</span></div>
                <div class="bar"><span>JavaScript</span><span>65%</span></div>
                <div class="bar"><span>Bootstrap</span><span>60%</span></div>
                <div class="bar"><span>VUE</span><span>55%</span></div>
                <div class="bar"><span>React</span><span>55%</span></div>
                <div class="bar"><span>Python</span><span>50%</span></div>
                <div class="bar"><span>Go</span><span>50%</span></div>
            </div>
        </div>
    </section>
<!--about section end--> 
















    <!--JS file -->
    <script src="js/main.js"></script>
</body>
</html>