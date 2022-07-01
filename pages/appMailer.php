<?php
header ('location: http://www.connermgmt.us/pages/confirm.php');

if(isset($_POST['submit'])) {
 $mailto = 'gconnermgmt@gmail.com';
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $rooms = $_POST['rooms'];
 $prange = $_POST['prange'];
 $curradd = $_POST['curradd'];
 $currpm = $_POST['currpm'];
 $pmphone = $_POST['pmphone'];
 $hlcurr = $_POST['hlcurr'];
 $nameall = $_POST['nameall'];
 $pets = $_POST['pets'];
 $evict = $_POST['evict'];
 $occu = $_POST['occu'];
 $spoccu = $_POST['spoccu'];
 $othinc = $_POST['othinc'];
 $perref = $_POST['perref'];
 $refphone = $_POST['refphone'];
 $email = $_POST['email'];
 $subject = "Rental Application - " . $name ;
 $subject2 = "Confirmation: Application was submitted successfully";

 $message = "An application has been submitted." . "\n\n"
 . "Applicant Name: " . $name . "\n\n"
 . "Phone Number: " . $phone . "\n\n"
 . "Email Address: " . $email . "\n\n"
 . "Number of BR's | Bathrooms Needed: " . $rooms . "\n\n"
 . "Price Range: " . $prange . "\n\n"
 . "Current Address: " . $curradd . "\n\n"
 . "Currently Renting From: " . $currpm . "\n\n"
 . "Current Prop Mgr Phone: " . $pmphone . "\n\n"
 . "Time at Current Address: " . $hlcurr . "\n\n"
 . "Names of All Occupants: " . $nameall . "\n\n"
 . "Pets: " . $pets . "\n\n"
 . "Evicted?: " . $evict . "\n\n"
 . "Occupation | How Long: " . $occu . "\n\n"
 . "Spouse Occupation | How Long: " . $spoccu . "\n\n"
 . "Other Income: " . $othinc . "\n\n"
 . "Personal Reference: " . $perref . "\n\n"
 . "Personal Reference Phone: " . $refphone . "\n\n";
 
 $message2 = "Dear " . $name . ",\n\n"
 . "Thank you for submitting your application. Please allow 24 to 48 hours for processing." . "\n\n"
 . "You submitted the following: " . "\n\n"
 . "Applicant Name: " . $name . "\n\n"
 . "Phone Number: " . $phone . "\n\n"
 . "Email Address: " . $email . "\n\n"
 . "Number of BR's | Bathrooms Needed: " . $rooms . "\n\n"
 . "Price Range: " . $prange . "\n\n"
 . "Current Address: " . $curradd . "\n\n"
 . "Currently Renting From: " . $currpm . "\n\n"
 . "Current Prop Mgr Phone: " . $pmphone . "\n\n"
 . "Time at Current Address: " . $hlcurr . "\n\n"
 . "Names of All Occupants: " . $nameall . "\n\n"
 . "Pets: " . $pets . "\n\n"
 . "Evicted?: " . $evict . "\n\n"
 . "Occupation | How Long: " . $occu . "\n\n"
 . "Spouse Occupation | How Long: " . $spoccu . "\n\n"
 . "Other Income: " . $othinc . "\n\n"
 . "Personal Reference: " . $perref . "\n\n"
 . "Personal Reference Phone: " . $refphone . "\n\n"
 . "\n\n"
 . "- Conner Mgmt" . "\n"
 . "620 231-7040" . "\n"
 . "108 W 5th St" . "\n"
 . "Pittsburg, KS 66762";

//emails
$headers = "From: " . $email;
$headers2 = "From: " . $mailto; 

 //mailer function
$send1 = mail($mailto, $subject, $message, $headers); 
$send2 = mail($email, $subject2, $message2, $headers2);

if ($send1 && $send2) {
    $success = "Your application was sent successfully!";
  } else {
    $failed = "Sorry, application was not sent. Please try again later.";
  }
}
?>