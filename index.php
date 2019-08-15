<?php include 'includes/db.php' ?>
<?php require_once("includes/sessions.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php //confirm_logged_in(); ?>

<div class="container-fluid" id="whole">
    <?php include 'includes/header.php'; ?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="background_container">
            <div id="background">
                <h1 id="typewriter">
                    <p>I'm Buwaneka Sudheera Thisarasinghe <br/> and I am a </p>
                    <a href="" class="typewrite" data-period="2000"
                       data-type='[ "Back-end developer.", "Frontend developer.", "Full stack developer.", "Hybrid Mobile App developer.", "Problem solver.", "Designer.", "Pencil Artist.", "Blogger.", "..." ]'>
                        <span class="wrap"></span>
                    </a>
                </h1>
                <br/>
            </div>
            <div id="linkContainer">
                <a href="#aboutMe" class="btn btn-info" id="getToKnowMe">Get to Know Me</a>
            </div>
        </div>
    </div>
    <div class="row" id="aboutMe">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container" id="myTechnicalInfo">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="text-center titleDetails">ABOUT ME</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="details">
                        I'm B.S.Thisarasinghe, a PHP developer in Sri Lanka. I'm working as a software engineer in one
                        of the leading software companies in Sri Lanka. My main responsibilities are solving the
                        technical issues of PHP applications and ensuring successful project delivery on time. I work
                        with both local and foreign developers helping them with programming and other technical
                        matters. I am able to customize PHP applications that are based on simple architectures or those
                        that follow the MVC architecture. I have good experience working with diverse software
                        development tools and frameworks including Core PHP, Laravel,Yii, Codeigniter, Zend Framework
                        and Symfony.
                        <br/><br/>AND.... ..
                        <br/><br/>
                        I designed this site so you can get to know me on a personal level.My facination with experience
                        developments, some fun works, my photography, my blog, my favorite quotes, and so much more.
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="text-left" id="techInfo">Let's get to know my technical knowledge...</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="text-center subtitle">Web Programming</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                        <span>PHP</span>
                        <div class="progress progressBar">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                        <span>JAVA EE</span>
                        <div class="progress progressBar">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                        <span>HTML/CSS</span>
                        <div class="progress progressBar">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                        <span>JavaScript</span>
                        <div class="progress progressBar">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                        <span>JSON/XML</span>
                        <div class="progress progressBar">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 40%" aria-valuenow="40"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="text-center subtitle">Frameworks</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                        <span>Bootstrap</span>
                        <div class="progress progressBar">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 85%" aria-valuenow="85"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                        <span>React Native</span>
                        <div class="progress progressBar">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                        <span>Laravel</span>
                        <div class="progress progressBar">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                        <span>Yii</span>
                        <div class="progress progressBar">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="30"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                        <span>Hibernate</span>
                        <div class="progress progressBar">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="text-center subtitle">OS Platforms</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                        <span>Windows</span>
                        <div class="progress progressBar">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 85%" aria-valuenow="85"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="text-center subtitle">Design Tools</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                        <span>Adobe Photoshop CS6, CC</span>
                        <div class="progress progressBar">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="text-center subtitle">Database Tools</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                        <span>phpMyAdmin</span>
                        <div class="progress progressBar">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="text-center subtitle">Database</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                        <span>MySQL</span>
                        <div class="progress progressBar">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="text-center subtitle">IDEs and Editors</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                        <span>NetBeans</span>
                        <div class="progress progressBar">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                        <span>Eclipse</span>
                        <div class="progress progressBar">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                        <span>Android Studio</span>
                        <div class="progress progressBar">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="30"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                        <span>PhpStorm</span>
                        <div class="progress progressBar">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 40%" aria-valuenow="40"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                        <span>VSCode</span>
                        <div class="progress progressBar">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                        <span>Sublime</span>
                        <div class="progress progressBar">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                        <span>Notepad++</span>
                        <div class="progress progressBar">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 technologies">
                    </div>
                </div>
            </div>
            <div class="jumbotron downloadCv">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h1>Download My CV as Pdf</h1>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="downloadButtonContainer">
                        <button class="btn btn-danger">DOWNLOAD</button>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h1 class="text-center titleDetails">MY WORK</h1>
                            </div>
                        </div>
                        <div class="row" id="projectRow">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 parent">
                                <div class="bgOne child">
                                    <a href="#">Los Angeles</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 parent">
                                <div class="bgTwo child">
                                    <a href="#">Los Angeles</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 parent">
                                <div class="bgThree child">
                                    <a href="#">Los Angeles</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 parent">
                                <div class="bgFour child">
                                    <a href="#">Los Angeles</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 parent">
                                <div class="bgFive child">
                                    <a href="#">Los Angeles</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 parent">
                                <div class="bgSix child">
                                    <a href="#">Los Angeles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="text-center titleDetails">Experience</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="text-right dateGap">
                            <span class="label label-danger">2017 Sept 09 To 2018 April 27</span>
                            <!--                           <h1 class="text-right"> 2017 Sept 09 To 2018 April 27</h1>-->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <p class="text-left">I worked at Omobio as a Full Stack developer. While I was working there, I
                            worked with React
                            Native, Yii and ExtJs technologies. I contributed to Dialog Sales app, DigiReach and KYC
                            projects.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="text-center titleDetails">Favorite Quotes</h1>
                    </div>
                </div>
                <div class="row" style="margin: 0 auto; width: 100%;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="container">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">

                                    <div class="item active">
                                        <div class="quotes">
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <img src="images/gandi.jpg" class="img-thumbnail img-circle">
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"
                                                 style="padding-top: 50px;">
                                                <p class="quote">Be the change you want to see in the world. - Mahatma
                                                    Gandhi</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="quotes">
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <img src="images/gates.jpg" class="img-thumbnail img-circle">
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"
                                                 style="padding-top: 50px;">
                                                <p class="quote">If you are born poor it’s not your mistake, but if you
                                                    die
                                                    poor it’s your mistake. - Bill Gates</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="quotes">
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <img src="images/steve.jpg" class="img-thumbnail img-circle">
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"
                                                 style="padding-top: 50px;">
                                                <p class="quote">Stay hungry, stay foolish. - Steve Jobs</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="background_container2">
            <div id="background2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="text-center titleDetails" style="color: #ffffff !important;">FIND ME</h1>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 150px;">
                        <div class="col-lg-2 col-md-2 col-sm-2"></div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <a href="https://www.linkedin.com/in/buwaneka-thisarasinghe/"
                                       class="btn btn-default social_icons"><i class="fa fa-linkedin"
                                                                               style="font-size: 50px; color: #ffffff"></i></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <a href="https://www.facebook.com/BuwanekaSudheera"
                                       class="btn btn-default social_icons"><i class="fa fa-facebook"
                                                                               style="font-size: 50px; color: #ffffff"></i></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <a href="https://github.com/BSThisarasinghe" class="btn btn-default social_icons"><i
                                                class="fa fa-git" style="font-size: 50px; color: #ffffff"></i></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <a href="https://stackoverflow.com/users/6574784/buwaneka-sudheera"
                                       class="btn btn-default social_icons"><i class="fa fa-stack-overflow"
                                                                               style="font-size: 50px; color: #ffffff"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="contact">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container" style="padding-left: 150px; margin-bottom: 50px;">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="text-center titleDetails">CONTACT ME</h1>
                    </div>
                </div>
                <div class="row" id="contactInfo">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>&nbsp;&nbsp;Godaparagaha
                            watta, Yatalamatta, Galle</p><br/>

                        <p><span class="glyphicon glyphicon-earphone"
                                 aria-hidden="true"></span>&nbsp;&nbsp;071 259 9198</p><br/>
                        <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp;sudheerabuwaneka@gmail.com
                        </p><br/>
                        <p><i class="fa fa-skype" style="font-size: 15pt;"></i>&nbsp;&nbsp;buwaneka.sudheera</p><br/>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h1 class="subtitle" style="margin-top: 0 !important;">Write to us</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <form method="post" action="">
                                        <input type="text" name="name" placeholder="Your Name"
                                               class="form-control inputField">
                                        <input type="email" name="email" placeholder="Email"
                                               class="form-control inputField"/>
                                        <input type="text" name="subject" placeholder="Subject"
                                               class="form-control inputField"/>
                                        <textarea class="form-control inputField" name="message" placeholder="Message"
                                                  rows="4" cols="50"></textarea>
                                        <input type="submit" name="submit" value="SEND" class="btn btn-info"
                                               id="submitbutton"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </div>

</div>

