

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodeJatra</title>
    
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
  
    <!-- <link rel="stylesheet" href="style/FAQs.css"> -->
    <link rel="stylesheet" href="style/landingpage.css">
    <link rel="stylesheet" href="https://toert.github.io/Isolated-Bootstrap/versions/3.3.7/iso_bootstrap3.3.7min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://toert.github.io/Isolated-Bootstrap/versions/3.3.7/iso_bootstrap3.3.7min.css">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
</head>

<body>


    <!-- navigation bar -->


    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="landingpage.php">
                <img src="image/LOGOBRIGHT.jpg" alt="notfound" style="max-height: 50px; max-width: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">At a Glance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <a href="LogIn.php" class="btn btn-brand ms-lg-3">Join Us</a>
            </div>
        </div>
    </nav>

    <!-- HOME -->

    <section id="hero" class="min-vh-100 d-flex align-items-center text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-white fw-semibold display-1">Welcome  to  CODEJATRA</h1>
                        <h5 class="text-white mt-3 mb-4">Track  Transform Triumph</h5>
                        <div>
                            <a href="LogIn.php" class="btn btn-brand me-2">GET STARTED</a>
                            <a href="#services" class="btn btn-light ms-2">Our Services</a>
                            <a href="#" class="btn btn-brand ms-2" data-bs-toggle="modal" data-bs-target="#faqModal">FAQs & Support</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>



    <!-- About -->

    <section id="about" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-title ">
                            <h1 class="display-4 fw-semibold">About Us</h1>
                            <div class="line"></div>
                            <p>We are a community who are trying to help you by tracking your progress in programming and serving you up-to-date news of programming contests</p>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <img src="./image/group_.jpg" alt="not found">
                    </div>
                    <div class="col-lg-5">
                        <h1>About CodeJatra</h1>
                        <p class="mt-3 mb-4">This platform tries to track your activity and interactions with different judges throughout the year</p>
                        <div class="d-flex pt-4 mb-3">
                            <div class="iconbox me-4">
                                <i class="ri-mail-send-fill"></i>
                            </div>
                            <div>
                                <h5>We are Unstopbble</h5>
                                <p>The more programming contests are held, the more we get stronger</p>

                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="iconbox me-4">
                                <i class="ri-user-5-fill"></i>
                            </div>
                            <div>
                                <h5>We are invincible</h5>
                                <p>We are alive with the best possible ways of getting info.Updated news comes to us with zero obstacle</p>

                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="iconbox me-4">
                                <i class="ri-rocket-2-fill"></i>
                            </div>
                            <div>
                                <h5>We are the best</h5>
                                <p>In your coding journey we are with you and helping you all the way.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- services -->

    <section id="services" class="section-padding border-top">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-title ">
                            <h1 class="display-4 fw-semibold">Awesome Services</h1>
                            <div class="line"></div>
                            <p>We provide almost all possible services to help you with tracking your journey.Let's enjoy the whole process together</p>

                        </div>
                    </div>
                </div>
                <div class="row g-4 text-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="service theme-shadow p-lg-5 p-4">
                            <div class="iconbox">
                                <i class="ri-stack-fill"></i>
                            </div>
                            <h5 class="mt-4 mb-2">IUPC Update</h5>
                            <p>We provide all types of information and updates of upcoming IUPCs.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="service theme-shadow p-lg-5 p-4">
                            <div class="iconbox">
                                <i class="ri-stack-fill"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Contest Update</h5>
                            <p>We provide information of upcoming contest of different online judges</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="service theme-shadow p-lg-5 p-4">
                            <div class="iconbox">
                                <i class="ri-stack-fill"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Progress tracking</h5>
                            <p>We track activity on different judges and notify overall progress of persons</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="service theme-shadow p-lg-5 p-4">
                            <div class="iconbox">
                                <i class="ri-stack-fill"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Solve trending problem</h5>
                            <p>One will get to know which problems are trending in the recent times</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="service theme-shadow p-lg-5 p-4">
                            <div class="iconbox">
                                <i class="ri-stack-fill"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Favourite problems</h5>
                            <p>We provide to-do-list service to save individuals favourite problems or contest</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="service theme-shadow p-lg-5 p-4">
                            <div class="iconbox">
                                <i class="ri-stack-fill"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Up to date</h5>
                            <p>Always gets the latest news of contest and all types of updates of contests</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- counter -->
    <section id="counter" class="section-padding">
        <div class="container text-center">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6">
                    <h1 class="text-white display-4">1000+</h1>
                    <h6 class="text-uppercase mt-3 text-white">Total Users</h6>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h1 class="text-white display-4">10000+</h1>
                    <h6 class="text-uppercase mt-3 text-white">Total problems</h6>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h1 class="text-white display-4">29957+</h1>
                    <h6 class="text-uppercase mt-3 text-white">Total contest</h6>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h1 class="text-white display-4">3+</h1>
                    <h6 class="text-uppercase mt-3 text-white">Team leads</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title ">
                        <h1 class="display-4 fw-semibold">At a Glance</h1>
                        <div class="line"></div>
                        <p>We are try to track your performance with the help of different online judges where you code.</p>

                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="portfolio-item image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./image/project-11.jpg" alt="">
                        </div>
                        <a href="./image/project-11.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                    <div class="portfolio-item image-zoom mt-4">
                        <div class="image-zoom-wrapper">
                            <img src="./image/project-22.jpg" alt="">
                        </div>
                        <a href="./image/project-22.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./image/project-33.jpg" alt="">
                        </div>
                        <a href="./image/project-33.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                    <div class="portfolio-item image-zoom mt-4">
                        <div class="image-zoom-wrapper">
                            <img src="./image/project-44.jpg" alt="">
                        </div>
                        <a href="./image/project-44.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./image/project-55.jpg" alt="">
                        </div>
                        <a href="./image/project-55.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                    <div class="portfolio-item image-zoom mt-4">
                        <div class="image-zoom-wrapper">
                            <img src="./image/project-66.jpg" alt="">
                        </div>
                        <a href="./image/project-66.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- team -->
    <section id="team" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title ">
                        <h1 class="display-4 fw-semibold">Team Members</h1>
                        <div class="line"></div>
                        <p>A strong backbone is present in our case.They are the pillars of this community.</p>

                    </div>
                </div>
            </div>
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./image/person-1.jpg" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Sojib Bhattacharjee</h4>
                            <p class="mb-0 text-white">A passionate programmer, developer, ML expert.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./image/sagor2.jpg" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">MD Sagor Chowdhury</h4>
                            <p class="mb-0 text-white">A simple person with a learning desire.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./image/person-3.jpg" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Adnan Faisal</h4>
                            <p class="mb-0 text-white">The lead of this community with great leadership quality</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- contact us -->


    <section class="section-padding bg-light" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 text-white fw-semibold">Get in touch</h1>
                        <div class="line bg-white"></div>
                        <p class="text-white">Let us know what's your thought about us.Help us to grow with your valuable insights and ideas.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-down" data-aos-delay="250">
                <div class="col-lg-8">
                    <form id="contactForm" method="POST" class="row g-3 p-lg-5 p-4 bg-white theme-shadow">
                        <div class="form-group col-lg-6">
                            <input type="text" name="Firstname" class="form-control" placeholder="Enter first name">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" name="Secondname"class="form-control" placeholder="Enter last name">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="email" name="Email" class="form-control" placeholder="Enter Email address">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" name="Subject" class="form-control" placeholder="Enter subject">
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea type="text" name="Message" rows="5" class="form-control" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="form-group col-lg-12 d-grid">
                            <button class="btn btn-brand" type="submit" name="FORM">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-dark">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-3 col-sm-6">
                        <a href="#"><img src="/image/LOGOBRIGHT.jpg" alt="" style="max-height: 50px; max-width: 50px;"></a>
                        <div class="line"></div>
                        <p>Waiting to grow and help individuals to grow</p>
                        <div class="social-icons">
                            <a href="#"><i class="ri-twitter-fill"></i></a>
                            <a href="#"><i class="ri-instagram-fill"></i></a>
                            <a href="#"><i class="ri-github-fill"></i></a>
                            <a href="#"><i class="ri-facebook-fill"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">SERVICES</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="#services">Contest Schedules</a></li>
                            <li><a href="#services">Progress track</a></li>
                            <li><a href="#services">Up to date problems</a></li>
                            <li><a href="#services">IUPC's track</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">ABOUT</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="#portfolio">At a glance</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#team">Members</a></li>
                            <li><a href="#about">Goal</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">CONTACT</h5>
                        <div class="line"></div>
                        <ul>
                            <li>Chittagong, ctg 3300</li>
                            <li>(414) 586 - 3017</li>
                            <li>www.codejatra.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">© Copyright Codejatra. All Rights Reserved</p>
                    </div>
                    <div class="col-auto">
                        <p class="mb-0">Designed with 💜 By <a href="#">Codejatra</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="faqModal" tabindex="-1" aria-labelledby="faqModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="bootstrap">
                    <!-- there Bootstrap works-->

                    <div class="">
                        <div class="">
                            <div class="">
                                <div class="section-title text-center wow zoomIn">
                                    <h1>Frequently Asked Questions</h1>
                                    <span></span>
                                    <p>Our Frequently Asked Questions here.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">				
                            <div class="col-md-12">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    What happens if I add a Custom User? 
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <p> Adding a custom user allows you to track and manage their contest-related information just like any other user on the platform. This feature is helpful for including friends or colleagues who may not have accounts but still want to participate or be tracked in contests.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    When can I update the submission?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <p>You can update submissions within the timeframe specified by the contest rules. Typically, submissions can be updated until the contest deadline or until the judges start evaluating the submissions.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    How many Custom Users can I add? 
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <p>The number of custom users you can add might be limited based on your account type or subscription plan. Typically, there might be a maximum number allowed per account, but this would depend on the specific policies of Codejatra.                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFour">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    What if my friend is not on CodeJatra?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                            <div class="panel-body">
                                                <p>If your friend is not on Codejatra, you can still add them as a custom user to track their contest-related activities. This allows you to include them in your contest management and compare their performance with other users on the platform.                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFive">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                    How is the CodeJatra rating determined?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                            <div class="panel-body">
                                                <p>The CodeJatra rating is likely determined based on various factors such as the user's performance in contests, the difficulty level of contests participated in, consistency in participation, and possibly other metrics like accuracy and speed in solving problems.                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--- END COL -->		
                        </div><!--- END ROW -->			
                    </div>


                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-brand" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>

    <script src="FAQs.js"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script>
$(document).ready(function(){
    $('#contactForm').submit(function(e){
        e.preventDefault(); // Prevent form submission

        // Get form data
        var formData = $(this).serialize();

        // Send AJAX request
        $.ajax({
            type: 'POST',
            url: 'process.php',
            data: formData,
            success: function(response){
                alert(response); // Show success or error message
                if(response=="Message sent successfully.You will be answered soon.") location.reload();
            }
        });
    });
});
</script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

</body>

</html>
