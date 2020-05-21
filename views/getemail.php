<?php

if (isset($_POST['submit'])) {
   $name = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $mailFrom = $_POST['Email'];
   $message = $_POST['subject'];

   $mailTo = "erving.mar1@aol.com";
   $headers = "From: ".$mailFrom;
   $txt = "You have received an email from ".$name.".\n\n".$message;

   mail($mailTo,$subject, $txt, $headers );
   header("Location: contact.ejs?mailsend");

}

?>