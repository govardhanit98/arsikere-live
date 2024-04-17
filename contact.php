<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if (isset($_POST['send'])) {
  $name = htmlentities($_POST['name']);

  $email = htmlentities($_POST['email']);
  $phone = htmlentities($_POST['phone']);
  $subject = htmlentities($_POST['subject']);
  $message = htmlentities($_POST['message']);






  $messageBody = "Name: $name<br>";

  $messageBody .= "Email: $email<br>";
  $messageBody .= "Mobile Number: $phone<br>";
  $messageBody .= "Subject: $subject<br>";
  $messageBody .= "Message: $message<br>";






  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'm2softtechnology@gmail.com';
  $mail->Password = 'mpqr emly msjm pxll';
  $mail->Port = 465;
  $mail->SMTPSecure = 'ssl';
  $mail->isHTML(true);
  $mail->setFrom($email, $name);
  $mail->addAddress('vcedn74@gmail.com');
  $mail->Subject = $subject;
  $mail->Body = $messageBody;

  $mail->send();

  header("Location: ./response.php");
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <title>VIVEKANANDA COLLEGE OF EDUCATION ARISIKERE
  </title>
  <link rel="icon" type="image/x-icon" href="Images/favicon.png">

  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Navbar starts here -->
 
<section>
    <div class="details">
      <div class="col-md-6">
        <span style='color: #fff; display: inline-block; '>
          NCTE
        </span>
        <span class="mx-1" style="display: inline-block; border-right: 1px solid #fff; height: 12px;">
        </span>

        <span style='color: #fff; display: inline-block; '>
          NAAC
        </span>
        <span class="mx-1" style="display: inline-block; border-right: 1px solid #fff; height: 12px;">
        </span>


        <span style='color: #fff; display: inline-block; '>
          BEST PRACTICES
        </span>
        <span class="mx-1" style="display: inline-block; border-right: 1px solid #fff; height: 12px;">
        </span>
        <span style='color: #fff; display: inline-block; '>
          RTI
        </span>
        <span class="mx-1" style="display: inline-block; border-right: 1px solid #fff; height: 12px;">
        </span>
        <span style='color: #fff; display: inline-block;'>
          SSR ENCLOSURE
        </span>






      </div>

      <div class="contact-details col-md-6">
        <div class="location">
          <img src="./Images/location.png" alt="location" />
          <p>Arsikere-573103</p>

        </div>
        <p style="display: inline-block; border-right: 1px solid #fff; height: 12px;margin-bottom: 0;padding-left: 0;">
        </p>

        <div class="location mx-3">
          <img src="./Images/telephone.png" alt="location" />
          <p>08174-232414</p>
        </div>
      </div>

    </div>


  </section>

  <div class="vce" style="padding: 10px 26px;">
    <img style="width: 100%;height: 100px;" src="./Images/VCE.png" alt="">

  </div>

  <!-- scrollable starts here -->

  <marquee behavior="scroll" direction="left" scrollamount="5" onmouseover="this.stop()" onmouseout="this.start()">
    <span style="color:#B70404; font-size:17px;">
      <strong style="color: #2b4556;"> <span style="color: #c1101a">OUR VISION : </span> An Enlightened world of citizens with perfect human values is created with confident and committed Teachers. &nbsp;&nbsp;&nbsp; <span style="color: #c1101a">OUR MISSION : </span> Stimulating academic environment promoting professional qualities accountability, commitment and excellence in teacher education. &nbsp;&nbsp;&nbsp;
        <span style="color: #c1101a">OUR MOTTO : </span> Our Worthy Students are Potential human resource for progressive Bharath</strong>
    </span>

  </marquee>
  <!-- scrollable ends here-->

  <section>

    <nav style="background-color:#2b4556;">

      <div class="nav-links" id="navLinks">
        <i class="fa-sharp fa-solid fa-xmark mark" onclick="hideMenu()"></i>
        <ul>
          <li><a href="index.html">HOME</a> </li>
          <li><a href="about.html">ABOUT</a> </li>
          <div class="dropdown">
            <a href="#">ADMISSION <i class="fa fa-caret-down"></i>
            </a>
            <div class="dropdown-content">
              <a href="admission-process.html">Admission Process</a>
              <a href="general-descipline.html">Code Of Conduct</a>
            </div>
          </div>


          <div class="dropdown">
            <a href="#">ACADEMICS <i class="fa fa-caret-down"></i>
            </a>
            <div class="dropdown-content">
              <a href="about-the-b-ed-programme.html">About the B.ED Programme</a>
              <a href="overview-the-b-ed-programme.html">Overview of the B.ED Programme</a>
              <a href="special-features-b-ed-programme.html">Special Features of the B.ED Programme</a>
              <a href="syllabus.html">Syllabus</a>

            </div>
          </div>

          <div class="dropdown">
            <a href="#">HUMAN RESOURCES <i class="fa fa-caret-down"></i>
            </a>
            <div class="dropdown-content">
              <a href="teaching-staff.html">Teaching Staff</a>
              <a href="non-teaching.html">Non-Teaching Staff</a>
            </div>
          </div>
          <div class="dropdown">
            <a href="#">IQAC <i class="fa fa-caret-down"></i>
            </a>
            <div class="dropdown-content">
              <a href="#">AQAR</a>
              <a href="calender_of_events.html">Calender Of Events</a>
              <a href="iqac_meeting.html">IQAC Meeting</a>
            <a href="student-satisfactory.html">Student Satisfaction Survey</a>
                        <a href="programme-outcome.html">Programme Outcomes</a>



            </div>
          </div>
          <li><a href="documents.html">DOCUMENTS</a> </li>

          <div class="dropdown">
            <a href="facilities.html">FACILITIES <i class="fa fa-caret-down"></i> </a>
            <div class="dropdown-content">
              <a href="library.html">Library</a>

            </div>
          </div>
          <li><a href="news.html">NEWS</a> </li>
          <li><a href="gallery.html">GALLERY</a> </li>
          <li><a style="color: #fff" href="contact.php
">CONTACT US</a> </li>


        </ul>
      </div>
      <i class="fa-solid fa-bars mark" onclick="showMenu()" style="color: lightgreen;"></i>




    </nav>

  </section>
  <!-- Contact Us -->


  <section class="contact-us container mt-5">

    <h3 class="about1">Contact Form</h3>
    <div class="row">
      <div class="col-md-5">
        <div class="contact-col1">
          <i class="fa fa-home contact "></i>
          <p>Vivekananda College Of Education NH-206, <br> Opposite to Mini Vindhan soudha <br> Arisikere-573103 </span>
          </p>
        </div>
        <div class="contact-col1 ">
          <i class="fa fa-phone contact mb-1"></i>
          <p> 08174232414 <br> 08174231848 <br> 9448542305</p>



        </div>
        <div class="contact-col1 ">
          <i class="fa fa-envelope contact"></i>
          <p> vcedn@yahoo.co.in <br> vcedn74@gmail.com</p>


        </div>
      </div>
      <div class="col-md-7 contact-col">
        <form class="display-grid row-gap-1-rem" method="post">

          <input style="height: 51px; border-radius: 5px; width: 100%; padding-left: 10px;" class="box-shadow-primary" name="name" type="text" placeholder="Name" autocomplete="off" required pattern="[A-Za-z\s]+" title="Name should not contain numbers" />

          <br>

          <input style="margin-top: 20px; height: 51px; width: 100%; border-radius: 5px; padding-left: 10px;" class="box-shadow-primary" name="phone" type="tel" placeholder="Mobile Number" autocomplete="off" required pattern="[0-9]{10}" title="Please enter a valid 10-digit mobile number" />

          <input style="margin-top: 20px; height: 51px; width: 100%; border-radius: 5px; padding-left: 10px;" class="box-shadow-primary" name="email" type="email" placeholder="Email" autocomplete="off" required />

          <input style="margin-top: 20px; height: 51px; width: 100%; border-radius: 5px; padding-left: 10px;" class="box-shadow-primary" name="subject" type="text" placeholder="Subject" autocomplete="off" required />

          <input style="margin-top: 20px; height: 70px; width: 100%; border-radius: 5px; padding-left: 10px;" class="box-shadow-primary" name="message" type="text" placeholder="Message" autocomplete="off" required />

          <div class="button">
            <button class="hvr-sweep-to-right" style="margin-top: 20px; padding: 10px; border-radius: 5px; background: #fe4b15; color: #fff; border: none; width: 100%" type="submit" name="send">
              Send <i class="fa fa-arrow-right"></i>
            </button>
          </div>
        </form>


      </div>
    </div>

  </section>

  <!-- footer -->
  <div class="footer1">
    <div class="container">
      <div class="row ">
        <div class="col-md-4 mt-5">
          <div class="postal-address">
            <img src="./Images/location-1.png" alt="">
            <h3 class="mx-3">Postal Address</h3>

          </div>
          <p style="color: #fff;margin-left:3rem">Vivekananda College Of Education <br> NH-206,
            Opposite to Mini Vindhan Soudha
            Arsikere-573103</p>
        </div>
        <div class="col-md-4 mt-5">
          <div class="d-flex align-items-center justify-content-center">
            <div>
              <div class="postal-address">
                <img src="./Images/phone-1.png" alt="">
                <h3 class="mx-3">Phone</h3>

              </div>
              <p class="mx-5" style="color: #fff; ">08174-232414 <br> 08174-231848 <br>9448542305

              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-5">

          <div class="d-flex align-items-center justify-content-center">
            <div>
              <div class="postal-address">
                <img src="./Images/email.png" alt="">
                <h3 class="mx-3">Email </h3>

              </div>
              <p class="mx-5" style="color: #fff;">vcedn@yahoo.co.in
                <br> vcedn74@gmail.com

                <br>mbkrie@gmail.com

              </p>
            </div>
          </div>


        </div>
      </div>

    </div>


  </div>















  <script src="./javascript.js"></script>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>