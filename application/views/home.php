<!DOCTYPE html>
<html lang="en"><head>
	<meta charset="utf-8">
	<title>Ben Hayward</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="The personal website of Ben Hayward, showcasing my programming projects in a variety of languages.">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!--Let the browser know that the website is optimized for mobile-->
	<meta name="viewport" content="width=device-width">
	<!-- Latest compiled CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="/res/css/indexcss.css">
    <link rel="stylesheet" type="text/css" href="/res/css/showmorecontainer.css">
    <link rel="stylesheet" type="text/css" href="/res/css/aboutme.css">
    <link rel="stylesheet" type="text/css" href="/res/css/buttons.css"> -->
    <link rel="stylesheet" type="text/css" href="/res/css/core.css"> 

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- 	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>res/css/core.css">
 -->  <script>
      $(document).ready(function(){
          $("#scrollbtn").on('click', function(event) {
           if (this.hash !== "") {
             event.preventDefault();
             var hash = this.hash;
             $('html, body').animate({
               scrollTop: $(hash).offset().top
             }, 1300, function(){
               window.location.hash = hash;
             });
           } 
         });
       });
    </script>
</head>
  <body>
    <div id="home" class="container-fluid home">
      <div class="row">
        <div class="container-fluid parallax">
          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
              <h1>
                Ben Hayward
              </h1>            
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="container-fluid bottom-center">
          <div class="col-12">
              <p><a href="#aboutMe"><span class="fa fa-chevron-down chevron-wide"></span></a></p>
          </div>
        </div>
      </div>
    </div> 
    
    <!--Nav bar-->
        <div class="fixed-top">
          <?php $this->load->view('nav.php')?>
        </div>
        
    <div id="aboutMe" class="container-fluid about-me">
        <div class="container-fluid parallax">
          <div class="row">
            <div class="col-lg-12">
             <div class="card align-center">
              <div class="card-body">
                <h5 class="card-title">ABOUT ME</h5>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text">
                <p>
                  Appologies if there is not much here; this website is currently in development. In future I will be adding a personal blog, a 'real' portfolio section and more.
                </p>

                <p>I am adaptable and responsible Web developer with a BSc (Hons) in Computer Science (Teesside University) and experience in a non-junior Web development position at a well-
                    established online Pharmaceutical health care organization, working remote and accomplishing a lot in my time there.</p>
                <p> I've also spent time as an Android Developer, creating a medically valid Android application that effectively cuts the appointment time for posterial assessments from 30 minutes to under 10. The intent is for this app to be trialed across the United Kingdom, generating data that will be used to support academic medical research into Chiropracty. </p>

                <p>Currently I am searching for a new project to dedicate myself to, as either a Web developer or as Blockchain developer which will utilise my technical and problem 
                    solving skills, and challenge me in new ways. In my spare time I program as a hobby, and enjoy learning new languages and new technologies. I am fascinated by Cryptocurrencies and have been for many years, Ethereum in particular has caught my attention as a developer platform for personal projects in the future, or a career path; conversely however I enjoy the style of full-stack Web development.</p>
             <!--    <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
   <!--    <div class="row">
        <div class="home-contents align-bottom col-12">

        </div>
      </div> -->
    </div>
    <script type="text/javascript">
      $(document).ready(function(){
    //       $("#navBar").hide(); //Hide the nav
    //       $(window).scroll(function () {  
    //           if(isAfter("#aboutMe")) {
    //             $('#navBar').fadeIn();  //Show nav
    //           } else {
    //             console.log("hide");
    //               $('#navBar').fadeOut(); //Hide nav
    //           }
    // });

    // function isAfter(elem) {
    //     var $e = $(elem);
    //     var $window = $(window);
    //     var docViewTop = $window.scrollTop();
    //     var docViewBottom = docViewTop + $window.height();
    //     var elemTop = $e.offset().top;
    //     return elemTop <= docViewBottom;
    // }

    /* https://stackoverflow.com/questions/28934736/why-are-my-bootstrap-btn-inverted-buttons-showing-up-as-grey-instead-of-a-black */
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
          anchor.addEventListener('click', function (e) {
              e.preventDefault();
              document.querySelector(this.getAttribute('href')).scrollIntoView({
                 behavior: 'smooth'
              });
          });
      });
  });
    </script>
    </body>
<!--     <div class="outeraboutme" id="outeraboutme">
        <aside class="leftbanner"></aside>
        <div class="page" id="aboutme">
            <div class="inner" id="inneraboutme">
                <div class="aboutme">
                    <hr>
                    <h3 class="title">About Me:</h3>
                    <hr>
                </div>
                <img src="images/methumbnail.png" class="photo">
                <p> Hi there! I am a 24 year old Computer Science graduate of Teesside University, currently based in Middlesbrough, and looking for new challenges to overcome in the field of software development. I have particular interest in Android and Web development, but am open to all areas of the software development industry, given time to learn and develop further. </p>

                <p>With the exception of programming, I am also a keen guitarist, DJ and have a secondary passion for music technology. At some point in the future I would like to find ways to combine these skills and my programming to create open-source VSTs and VSTis, so if anybody reading this is interested in working on anything, get in touch!. </p>


                <p>Some of my skills gained from University include:</p>
                <ul>
                    <li>ASP.NET C#, creating web applications, APIs, WCF Services etc.</li>
                    <li>Android/Java SE.</li>
                    <li>Database's with SQL, and SMSS. </li>
                    <li>HTML5/CSS3/Razor</li>
                    <li>Javascript; which I am learning properly with the creation of this website.</li>
                    <li>Ada for Embedded Systems; meeting the demands of critical real-time systems.</li>
                    <li>Linux; My primary boots are Ubuntu for work and Arch-Linux for fun, though I do still consider myself a novice compared to many Linux users. I am also skilled with Windows.</li>
                    <li>Azure/Cloud Hosting Platforms.</li>
                </ul>

            </div>
            <div class="showmorecontainer">
                <button class="fullw-green-button" id="showmore" onClick="toggleShowMore()">
                More...
            </button>
            </div>

        </div>
        <aside class="rightbanner"></aside>

    </div>
    <div class="portfoliofs" id="portfoliofs">
        <div class="portfolioinner">
        </div>
    </div>
  <div class="outeraboutme" id="outercontactform">
    <aside class="leftbanner"></aside>
    <div class="page" id="contactcontainer">
      <hr>
      <div class="inner" id="contactme">
        <form class="contactform" name="contactform" method="post" action="/benhayward/application/core/send_email.php">
          <table width="450px" class="contacttable">
            <tr>
              <td valign="center">
                <label for="first_name">First Name *</label>
              </td>
              <td valign="center">
                <input  class="inputBox" type="text" name="first_name" maxlength="50" size="30">
              </td>
            </tr>
            <tr>
              <td valign="center">
                <label for="last_name">Last Name *</label>
              </td>
              <td valign="center">
                <input  class="inputBox" type="text" name="last_name" maxlength="50" size="30">
              </td>
            </tr>
            <tr>
              <td valign="center">
                <label for="email">Email Address *</label>
              </td>
              <td valign="center">
                <input class="inputBox"  type="text" name="email" maxlength="80" size="30">
              </td>
            </tr>
            <tr>
              <td valign="center">
                <label for="telephone">Telephone</label>
              </td>
              <td valign="center">
                <input class="inputBox"  type="text" name="telephone" maxlength="30" size="30">
              </td>
            </tr>
            <tr>
              <td valign="top">
                <label for="comments">Comments *</label>
              </td>
              <td valign="center">
                <textarea class="inputBox"  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
              </td>
            </tr>
            <tr>
              <td colspan="2" style="text-align:center">
                <input class="small-green-button" type="submit" value="Submit">
              </td>
            </tr>
          </table>
        </form>
        <hr>
        <div class="row">
          <div class="columns">
            <p class="thumbnail_align">
              <a href="http://www.github.com/bhayward93">
                <img src="images/github-round.png" alt="GitHub" class="thumbnail">
                <h4>GitHub</h4>
              </a>
            </p>

          </div>
          <div class="columns">
            <p class="thumbnail_align">
              <a href="https://www.linkedin.com/in/ben-hayward/">
                <img src="images/linkedin-icon.png" alt="LinkedIn" class="thumbnail">
                <h4>LinkedIn</h4>
              </a>
            </p>
          </div>
          <div class="columns">
            <p class="thumbnail_align">
              <a href="http://www.twitter.com/nemoben">
                <img src="images/twitter_circle_color-512.png" alt="Twitter" class="thumbnail">
                <h4>Twitter</h4>
              </a>
            </p>
          </div>
          <div class="columns">
            <p class="thumbnail_align">
              <a href="mailto:benhayward.ben@gmail.com">
                <img src="images/email.svg" alt="Email" class="thumbnail">
                <h4>Email</h4>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <aside class="rightbanner"></aside>
  </div>
    <footer class="secondary_header footer">
        <div class="copyright"><a href="#top">Back To Top</a></div>
        <div class="copyright">&copy;2017 - <strong>Ben Hayward</strong> </div>
    </footer> -->
</body>