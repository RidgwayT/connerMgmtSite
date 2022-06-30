<?php  
 
if(isset($_POST['submit'])) {
 $mailto = "ridgwaytravis@gmail.com";
 //getting data
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $rooms = $_POST['rooms'];
 $prange = $_POST['prange'];
 $curadd = $_POST['curadd'];
 $currpm = $_POST['currpm'];
 $pmphone = $_POST['pmphone'];
 $hlcurr = $_POST['hlcurr'];
 $nameall = $_POST['nameall'];
 $pets = $_POST['pets'];
 $occu = $_POST['occu'];
 $spoccu = $_POST['spoccu'];
 $othinc = $_POST['othinc'];
 $refphone = $_POST['refphone'];
 $fromEmail = $_POST['email']; 
 $subject = "Rental Application";
 $subject2 = "Confirmation: Application was submitted successfully";
 
 //my message
 $message = "Applicant Name: " . $name . "\n\n"
 . "Phone Number: " . $phone . "\n\n"
 . "Email Address:" . $fromEmail . "\n\n"
 . "Number of BR's | Bathrooms Needed: " . $rooms . "\n\n"
 . "Price Range:" . $prange . "\n\n"
 . "Current Address:" . $curradd . "\n\n"
 . "Currently Renting From:" . $currpm . "\n\n"
 . "Current Prop Mgr Phone:" . $pmphone . "\n\n"
 . "Time at Current Address:" . $hlcurr . "\n\n"
 . "Names of All Occupants:" . $nameall . "\n\n"
 . "Pets:" . $pets . "\n\n"
 . "Evicted?:" . $evict . "\n\n"
 . "Occupation | How Long:" . $occu . "\n\n"
 . "Spouse Occupation | How Long:" . $spoccu . "\n\n"
 . "Other Income:" . $othinc . "\n\n"
 . "Personal Reference:" . $perref . "\n\n"
 . "Personal Reference Phone:" . $refphone . "\n\n"
 

 //applicant message
 . $message2 = "Dear" . $name . ",\n"
 . "Thank you for submitting your application. Please allow 24 to 48 hours for processing.\r\n"
 . "You submitted the following: " . "\n\n"
 . "Applicant Name: " . $name . "\n\n"
 . "Phone Number: " . $phone . "\n\n"
 . "Email Address:" . $fromEmail . "\n\n"
 . "Number of BR's | Bathrooms Needed: " . $rooms . "\n\n"
 . "Price Range:" . $prange . "\n\n"
 . "Current Address:" . $curradd . "\n\n"
 . "Currently Renting From:" . $currpm . "\n\n"
 . "Current Prop Mgr Phone:" . $pmphone . "\n\n"
 . "Time at Current Address:" . $hlcurr . "\n\n"
 . "Names of All Occupants:" . $nameall . "\n\n"
 . "Pets:" . $pets . "\n\n"
 . "Evicted?:" . $evict . "\n\n"
 . "Occupation | How Long:" . $occu . "\n\n"
 . "Spouse Occupation | How Long:" . $spoccu . "\n\n"
 . "Other Income:" . $othinc . "\n\n"
 . "Personal Reference:" . $perref . "\n\n"
 . "Personal Reference Phone:" . $refphone . "\n\n"
 . "\n\n"
 . "- Conner Mgmt";
 
 //Email headers
 $headers = "From: " . $fromEmail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client
 
 //PHP mailer function
 
  $send1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
 
}
 
?>