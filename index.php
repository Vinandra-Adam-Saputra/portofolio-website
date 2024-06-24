<?php
require 'db.php';

// Ambil data skill dari database
$skills = $conn->query("SELECT * FROM skills");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portofolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">
      <h1><a href="index.php">Vinandra Adam Saputra</a></h1>
      <h2>I'm a passionate <span>software engineer</span> from Bintan Regency</h2>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#news">News</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
          <li><a class="nav-link" href="login.html">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/vinandradam/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="www.linkedin.com/in/vinandra-adam-saputra-8babaa288" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

       <!-- ======= About Me ======= -->
    <div class="about-me container">
      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>
      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/me.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Software Engineer</h3>
          <p class="fst-italic">
            Enthusiastic and passionate Informatics Engineering student. Proficient in programming fundamentals with languages such as Python, Java, and PHP. Skilled in front-end web development using HTML and CSS. Actively involved in academic projects focused on web and mobile application development. Keen on enhancing skills in the software development domain to become a well-rounded Software Engineer.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>19 October 2003</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 85363619829</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Bintan Regency, Riau Islands</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>20</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>adamvinandra767@gmail.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End About Me -->

  <!-- ======= Skills  ======= -->
  <div class="skills container">
     <div class="section-title">
       <h2>Skills</h2>
     </div>
     <div class="row skills-content">
       <div class="col-lg-6">
         <?php $i = 0; while($row = $skills->fetch_assoc()): ?>
           <?php if ($i < 4): ?>
             <div class="progress">
               <span class="skill"><?php echo $row['name']; ?> <i class="val"><?php echo $row['level']; ?>%</i></span>
               <div class="progress-bar-wrap">
                 <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $row['level']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
             </div>
           <?php $i++; endif; ?>
         <?php endwhile; ?>
       </div>
       <div class="col-lg-6">
         <?php $skills->data_seek(4); while($row = $skills->fetch_assoc()): ?>
           <div class="progress">
             <span class="skill"><?php echo $row['name']; ?> <i class="val"><?php echo $row['level']; ?>%</i></span>
             <div class="progress-bar-wrap">
               <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $row['level']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
             </div>
           </div>
         <?php endwhile; ?>
       </div>
     </div>
   </div><!-- End Skills -->


  

    <!-- ======= Projects ======= -->
<div class="projects container">
  <div class="section-title">
    <h2>Projects</h2>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <div class="project-item">
        <div class="project-container">
          <div class="project-info">
            <h4>Virtual Assistant “NURAGA” - Certified Independent Study Capstone Project (August 2023 - December 2023)</h4>
            <p>● Developing an AI-based virtual assistant. Nuraga is designed to assist Indonesia's young generation in self-development and quality of life improvement. 
            </p>
            <p>● Implementing IBM Watsonx.ai and Watson Assistant. Using generative AI technology and llama-2-70b-chat models, Nuraga can provide relevant and personalized responses. The process involves training the AI model with various instructions and input-output examples to generate intuitive and responsive interactions. </p>
            <p>● Integrated into a web platform, allowing users to access it easily through a browser. The project also involved team collaboration in designing, developing and testing the system to ensure the virtual assistant provides effective and efficient support.</p>
          </div>
        </div>
      </div>

      <div class="project-item">
        <div class="project-container">
          <div class="project-info">
            <h4>Interactive Learning “WIDYANTARA” - Project Development System Course (August 2023 - December 2023)</h4>
            <p>● Developed an intelligent chatbot using generative AI to assist learning 
              students at the Faculty of Maritime Engineering and Technology, Raja Ali Haji Maritime University.</p>
            <p>● Implementing GPT (Generative Pre-trained Transformer) technology with the model of 
              llama-2-70b-chat model for responsive text generation and Integrating the chatbot into a website with an intuitive look and easy access for students. </p>
            <p>● Collaborated in a 5-person team for the design, development, and implementation of an interactive 
              interactive learning system.</p>
          </div>
        </div>
      </div>
    
      <div class="project-item">
        <div class="project-container">
          <div class="project-info">
            <h4>Game Engine “Brinary” - Computer Graphics Course (March 2023 - June 2023)</h4>
            <p>● Develop a simple Java-based game engine with a graphical interface using the Swing library.</p>
            <p>● Implement functionality to create geometric objects such as rectangle, circle, and square with color selection. </p>
            <p>● Collaborate in a team for game engine design, development, and implementation.</p>
          </div>
        </div>
      </div>
    </div>

      

    <div class="col-lg-6">
      <div class="project-item">
        <div class="project-container">
          <div class="project-info">
            <h4>Analysis of the Effect of Using Generative AI on FTTK UMRAH Student Learning Performance - Data Mining Course (August 2023 - December 2023)</h4>
            <p>● Investigate the impact of using generative AI on FTTK UMRAH students' learning performance using data mining techniques.</p>
            <p>● Implemented a complete data mining process, including data cleaning, selection, transformation, validation, and visualization.</p>
            <p>● Implemented correlation analysis to test the significance of the relationship between generative AI usage and learning performance.</p>
          </div>
        </div>
      </div>


      <div class="project-item">
        <div class="project-container">
          <div class="project-info">
            <h4>“Hide and Seek” Game Project - Design and Analysis of Algorithm Course (March 2023 - June 2023)</h4>
            <p>● Developed an interactive “Hide and Seek” game with a graphical interface using Java programming language, involving two types of droids (red and green) moving inside a randomly generated maze.</p>
            <p>● Implemented Breadth-First Search (BFS) algorithm to find the shortest route for the red droid to the green droid, as well as special movement logic for the green droid to avoid the red droid.</p>
            <p>● Provide an interactive user interface with buttons and sliders to control the game, such as starting, stopping, randomizing the maze, randomizing the droid positions, increasing or decreasing the number of red droids, setting the visibility of the green droids, and setting the visibility of the droids' views.</p>
          </div>
        </div>
      </div>

      <div class="project-item">
        <div class="project-container">
          <div class="project-info">
            <h4>KeyGang - Password Encryption and Decryption Application - Security Systems Course (March 2023 - June 2023)</h4>
            <p>● Uses the Kivy framework to help users secure their passwords through encryption and decryption using the Vigenere Cipher method.</p>
            <p>● Provides an intuitive user interface, allowing users to enter text and encryption/decryption keys, as well as view encrypted or decrypted output results and integrates with MongoDB database to store encryption and decryption activity history.</p>
            <p>● Includes user registration and login, encryption and decryption of text using Vigenere Cipher, management of encryption and decryption activity history, and a help display to guide users in using the application.</p>
          </div>
        </div>
      </div>

      
    </div>      
  </div>
</div>
<!-- End Projects -->
</section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>S1 Informatics Engineering</h4>
            <h5>2021 - Present</h5>
            <p><em>Raja Ali Haji Maritime University, Riau Islands</em></p>
          </div>

          <h3 class="resume-title">Experience</h3>
          <div class="resume-item">
            <h4>Certified Independent Study: Red Hat Certified System Administrator & IBM AI and Cybersecurity</h4>
            <h5>August 2023 - December 2023</h5>
            <p><em>Infinite Learning, Batam</em></p>
            <p>
              <ul>
                <li>Obtain Red Hat Certified System Administrator certification, mastering Linux system administration such as installation, networking, storage, and basic security</li>
                <li>Become an IBM Artificial Intelligence (AI) Practitioner, understand enterprise needs and apply AI technologies such as NLP, machine learning, neural networks, and computer vision</li>
                <li>Obtain IBM Cybersecurity Practitioner certification, enhancing enterprise cybersecurity with the right methods and tools</li>
                <li>Become a tech-savvy business professional, with the ability to apply technology to solve company challenges</li>
              </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>Practicum Assistant for Computer Networking Course</h4>
            <h5>February 2024 - June 2024</h5>
            <p>
              <ul>
                <li>Provide guidance and instruction to students in using network simulation software such as Cisco Packet Tracer and Wireshark</li>
                <li>Assist students in solving problems and overcoming obstacles encountered during the practicum process, by providing solutions and detailed explanations</li>
                <li>Ensure students understand the basic concepts of computer networks and can implement them in the given practicum scenario</li>
                <li>Evaluate and provide feedback to students on their performance in completing practicum assignments, as well as provide suggestions for improvement</li>
              </ul>
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Organizational Experience</h3>
          <div class="resume-item">
            <h4>Informatics Engineering Student Association of Raja Ali Haji Maritime University</h4>
            <h5>2022 - 2023</h5>
            <p><em>Member of Interest and Talent Aspiration Division</em></p>
            <p>
            <ul>
              <li>Participate in designing and developing interest and talent development activities for Informatics Engineering students</li>
              <li>Contribute to the planning and implementation of events such as fungame sport and e-sport, 
                and competitions that aim to hone students' skills outside of academics</li>
              <li>Develop communication, team collaboration, and project management skills through 
                involvement in the organization</li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>PKKMB (Pengenalan Kehidupan Kampus bagi Mahasiswa Baru) Mentor Division Committee</h4>
            <h5>August 2023</h5>
            <p><em>Informatics Engineering Study Program, Faculty of Maritime Engineering and Technology</em></p>
            <p>
            <ul>
              <li>Planning and developing a mentor program to assist new students in adapting to the campus environment</li>
              <li>Facilitating mentoring sessions and sharing experiences from mentors to new students regarding campus life, academics, and organizations</li>
              <li>Coordinate mentor activities in providing direction, motivation, and support to new students during the orientation period</li>
            </ul>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

   <!-- ======= News Section ======= -->
<section id="news" class="services">
  <div class="container">

    <div class="section-title">
      <h2>News</h2>
      <p>Latest News and Articles</p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="icon-box">
          <div class="icon">
            <img src="assets/img/php.png" alt="Article Image" width="200" height="100">
          </div>
          <h4><a href="https://www.php.net/releases/8.3/en.php">PHP 8.3 Released with New Features</a></h4>
          <p>It contains many new features, such as explicit typing of class constants, deep-cloning of readonly properties and additions to the randomness functionality. As always it also includes performance improvements, bug fixes, and general cleanup.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
        <div class="icon-box">
          <div class="icon">
            <img src="assets/img/python.jpg" alt="Article Image" width="200" height="100">
          </div>
          <h4><a href="https://www.infoworld.com/article/3669232/python-popularity-still-soaring.html#:~:text=In%20the%20just-published%20August%202022%20rankings%2C%20Python%20once,share%2C%20an%20all%20time%20high%20for%20the%20language.">Python popularity still soaring</a></h4>
          <p>‘Unstoppable’ Python once again ranked No. 1 in the August updates of both the Tiobe and Pypl indexes of programming language popularity.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
        <div class="icon-box">
          <div class="icon">
            <img src="assets/img/flutter.jpg" alt="Article Image" width="200" height="100">
          </div>
          <h4><a href="https://medium.com/@siddharthmakadiya/flutter-2-0-vs-flutter-3-0-whats-new-and-what-s-improved-adb33c5994b7#:~:text=Flutter%203.0%20includes%20many%20improvements%20to%20web%20support%2C,responsive%2C%20faster%2C%20and%20more%20accessible%20than%20ever%20before.">Flutter 2.0 vs Flutter 3.0: What’s New and What’s Improved?</a></h4>
          <p>A Comprehensive Comparison of the Latest Flutter Versions, including New Features, Improvements, and Platform Support.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon">
            <img src="assets/img/java.jpg" alt="Article Image" width="200" height="100">
          </div>
          <h4><a href="https://medium.com/nerd-for-tech/7-reasons-why-java-development-is-so-popular-for-enterprise-software-1f896efc28a7">7 Reasons Why Java Development is so Popular for Enterprise Software</a></h4>
          <p>Java continues to be a popular choice for enterprise applications due to its stability, security, and large ecosystem of libraries and frameworks.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon">
            <img src="assets/img/linux.jpg" alt="Article Image" width="200" height="100">
          </div>
          <h4><a href="https://linuxhall.org/how-linux-is-revolutionizing-the-cloud-computing-industry/#:~:text=In%20fact%2C%20several%20statistics%20highlight%20the%20dominance%20and,cloud%20environments%2C%20demonstrating%20its%20widespread%20adoption%20and%20trust.">How Linux is Revolutionizing the Cloud Computing Industry</a></h4>
          <p>Linux is becoming increasingly popular in cloud computing environments due to its scalability, security, and open-source nature.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon">
            <img src="assets/img/generative-ai.jpg" alt="Article Image" width="200" height="100">
          </div>
          <h4><a href="https://www.taskade.com/blog/generative-ai-transforming-content-creation/">How Generative AI Is Transforming Content Creation in 2024</a></h4>
          <p>Generative AI models like GPT-3 are revolutionizing content creation, enabling the generation of human-like text, images, and even code.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon">
            <img src="assets/img/Nongsa-digital-park-400x225.png" alt="Article Image" width="200" height="100">
          </div>
          <h4><a href="https://www.infinitelearning.id/post/perfect-scores-every-batch-make-il-s-graduates-in-demand-a-new-milestone-achieved-in-red-hat-certif">Perfect Scores Every Batch Make Infinite Learning's Graduates In Demand: A New Milestone Achieved in Red Hat Certification</a></h4>
          <p>Infinite Learning has once again proven its commitment to excellence in tech education by successfully hosting a short bootcamp and examination for the Red Hat Certified System Administrator (RHCSA) certification. This bootcamp is participated by 78 dedicated students, eager to enhance their skills and achieve this certification.</p>
        </div>
      </div>


    </div>

  </div>
</section><!-- End News Section -->
  
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>Sri Bayintan Housing, Block E No.3, Kijang City</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/vinandradam/" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>adamvinandra767@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-dollar-circle"></i>
            <h3>Value</h3>
            <p>$10 - $30 /hr</p>
          </div>
        </div>
      </div>

      <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

   <!-- Vendor JS Files -->
   <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
