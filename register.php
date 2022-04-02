<?php 
//session_start(); 
//ob_start();

 /*if submit button is hitting*/ 
 if (isset($_POST['submit'])) 
 {  $error=""; 
//----------------------------------------- 
 if (!empty($_POST['lastname'])) 
 { $lastname = $_POST['lastname']; } 
 else 
 { $error .= "You didn't type in your lastname. <br />";  } 

 //----------------------------------------- 
  if (!empty($_POST['firstname'])) 
 { $firstname = $_POST['firstname']; } 
 else 
 { $error .= "You didn't type in your firstname. <br />";  } 


//----------------------------------------- 
 if (!empty($_POST['gender'])) 
 { $gender = $_POST['gender']; } 
 else 
 { $error .= "You didn't select your gender. <br />";  } 

//----------------------------------------- 
 if (!empty($_POST['employed'])) 
 { $employed = $_POST['employed']; } 
 else 
 { $error .= "You didn't indicate if you Earn a Salary. <br />";  } 

//----------------------------------------- 
 if (!empty($_POST['sponsor'])) 
 { $sponsor = $_POST['sponsor']; } 
 else 
 { $error .= "You didn't enter your Sponsors Name <br />";  } 

//----------------------------------------- 
 if (!empty($_POST['sponsorearns'])) 
 { $sponsorearns = $_POST['sponsorearns']; } 
 else 
 { $error .= "You didn't enter  if your Sponsor Earn's a Salary <br />";  } 

//----------------------------------------- 
 if (!empty($_POST['program'])) 
 { $program = $_POST['program']; } 
 else 
 { $error .= "You didn't enter the Program of Interest <br />";  } 
 //----------------------------------------- 
  if (!empty($_POST['phone'])) 
 { $phone = $_POST['phone']; } 
 else 
 { $error .= "You didn't type in your phone number. <br />";  } 
 //----------------------------------------- 
if (!empty($_POST['email'])) 
 {  $email = $_POST['email']; 
if(!preg_match("/^[_a-z0-9]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
 $email))
 { $error .= "The e-mail address you entered is not valid. <br/>"; }
 } 
 else 
 {  $error .= "You didn't type in an e-mail address. <br />"; } 

//----------------------------------------- 
 if (!empty($_POST['sponsorearns'])) 
 { $sponsorearns = $_POST['sponsorearns']; } 
 else 
 { $error .= "You didn't enter  if your Sponsor Earn's a Salary <br />";  } 

//----------------------------------------- 
 if (!empty($_POST['comments'])) 
 { $recruiter = $_POST['recruiter']; } 
 else 
 { $error .= "You didn't select Recuiter Code. Choose N/A if you don't have one <br />";  } 
  if (empty($_POST['url'])) 
{ 


//----------------------------------------- 
 if (!empty($_POST['comments'])) 
 { $comments = $_POST['comments']; } 
 else 
 { $error .= "You didn't select Comments <br />";  } 


//----------------------------------------- 
//if(($_POST['code']) == $_SESSION['code']) 
//{  $code = $_POST['code'];} 
//else
// {$error .= "The captcha code you entered does not match. Please try again. <br />" . $_SESSION['code'];}
// test if error is empty mean we have nothing to send else we send the
 if (empty($error)) 
{ 
 $from = "From: " . $firstname . " " . $lastname . " <" . $email . ">"; 
$to = "info@bootstrapconsulting.net";
// $to = "damiokuneye@yahoo.com";
 $subject = "Financing EOI form"; 
 $content = "Last Name: " . $lastname . " \n First Name: " . $firstname . "\n Gender: " . $gender . "\n Salary Earner?: " . $employed . "\n Sponsor Name: " . $sponsor . "\n Sponsor Earns?: " . $sponsorearns . "\n Program: " . $program . "\n Phone: " . $phone . "\n Email: " . $email . "\n Recruiter Code: " . $recruiter . "\n Comments: " . $comments;

 $success = "<h3>Thank you! Your details have been sent.</h3> <br/>"; 
 mail($to,$subject,$content,$from); 
echo $success; } 
 else { echo '<p class="error"><strong>Your details have  not been sent<br/> 
 The following error(s) occurred:</strong><br/>' . $error . ' Please retry.</p>'; 
} 
} 
 }
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bootstrap Consulting</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<div>
   


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0 text-uppercase text-primary"><i class="far fa-smile text-primary me-2"></i><img src="img/favicon.png" class="img-responsive" alt=""></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 me-n3">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About Us</a>
                <a href="service.html" class="nav-item nav-link">Services</a>
                
                <a href="career.html" class="nav-item nav-link">Careers</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Financing</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">Financing</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4"> <span class="text-primary"></span></h1>
               
                <h4 class="text-primary mb-4">
                    <strong>Tuition Loan Application form</strong>
               </h4>
                <p class="mb-4"> Zero Interest Loans are available to Applicants in Nigeria, through Finquest Finance</p>
                <h4 class="text-primary mb-4">
                    <strong>Eligibility Criteria:</strong>
               </h4>
                <p class="mb-4">
                    Applicants must be Salary earners (or must have a verifiable means of regular Income)<br>
OR <br>
Applicants must have a Sponsor who is a Salary Earner (or has a verifiable means of regular Income)
(Specify "Not Applicable" in Sponsors name field, below, only if you do not require a Sponsor.)
                </p>
               
            </div>
            <div class="col-lg-6 py-6 px-5">
                <form id="contact-form" method="post" enctype="multipart/form-data" action="register.php">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" name="lastname"  class="form-control" id="form-floating-1" placeholder="John Doe">
                                <label for="form-floating-1">Last Name</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="firstname"  id="form-floating-1" placeholder="John Doe">
                                <label for="form-floating-1">First Name</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control" id="form-floating-2" placeholder="name@example.com">
                                <label for="form-floating-2">Email address</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <select name="gender" class="form-control" id="select">
                                    <option value="Male" selected>Male</option>
                                    <option value="Female">Female</option>
                              </select>
                                <label for="form-floating-3">Subject</label>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-floating">
                                  <select name="employed" class="form-control" id="select">
                                    <option value="No" selected>No</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No,  but I have a verifiable means of regular income">No,  but I have a verifiable means of regular income</option>
                              </select>
                                <label for="form-floating-3">Salary Earner?</label>
                            </div>
                        </div>


                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" name="sponsor"  class="form-control" id="select" placeholder="John Doe">
                                <label for="form-floating-4">Sponsor Name (Specify N/A if you don't require one:</label>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-floating">
                                <select name="sponsorearns"  class="form-control" id="select">
                                    <option value="No" selected>No</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No,  but sponsor has a verifiable means of regular income">No,  but sponsor has a verifiable means of regular income</option>
                             <option value="Not Applicable">Not Applicable</option>
                            </select>
                                <label for="form-floating-3">Sponsor Earns?</label>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-floating">
                                <select name="program" class="form-control" id="select">
                                    <option value="Cyber Security" selected>Cyber Security</option>
                                    <option value="GRC">GRC</option>
<option value=" IT Business Analysis">IT Business Analysis</option>
<option value="UI/UX">UIUX</option>
                                     </select>
                                <label for="form-floating-3">Program</label>
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="phone"  id="form-floating-2" placeholder="">
                                <label for="form-floating-2">Phone Number</label>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-floating">
                                <select name="recruiter" class="form-control" id="select">
                                    <option value="Not Applicable" selected>Not Applicable</option>
                                    <option value="REC_WIT">REC_WIT</option>
                                   
                               </select>
                                <label for="form-floating-3">Recruiter Code</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input name="url" type="hidden">
                                <textarea class="form-control" name="comments" placeholder="Message" id="form-floating-4" style="height: 150px"></textarea>
                                <label for="form-floating-4">Comments</label>
                              </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Submit</button>
                        </div>
                    </div>
                </form> 
               
            </div>
        </div>
    </div>
    <!-- About End -->


    
    

    <div class="container-fluid bg-dark text-secondary p-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="index.html"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-secondary mb-2" href="about.html"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                    <a class="text-secondary mb-2" href="service.html"><i class="bi bi-arrow-right text-primary me-2"></i>Services</a>
                    <a class="text-secondary mb-2" href="career.html"><i class="bi bi-arrow-right text-primary me-2"></i>Careers</a>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Contact Links</h3>
                <div class="d-flex flex-column justify-content-start">
                   <a class="text-secondary" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Get In Touch</h3>
                <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>294, Herbert Macaulay Way, Sabo-Yaba, Lagos, Nigeria.</p>
                <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@bootstrapconsulting.net</p>
                <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+234 806 7415659</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Follow Us</h3>
                <div class="d-flex">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://twitter.com/BootstrapCons"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://www.facebook.com/Bootstrap-Consulting-231139140384632"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <!-- <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-instagram fw-normal"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-secondary text-center border-top py-4 px-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <p class="m-0">&copy; <a class="text-secondary border-bottom" href="#">Bootstrap Consulting © 2022</a>. All Rights Reserved. Designed by <a class="text-secondary border-bottom" href="https://htmlcodex.com">HTML Codex</a></p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>