<?php

if (isset($_POST['submit'])) {
   $name = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $mailFrom = $_POST['Email'];
   $message = $_POST['subject'];

   $mailTo = "marureso@unlv.nevada.edu";
   $headers = "From: ".$mailFrom;
   $txt = "You have received an email from ".$name.".\n\n".$message;

   mail($mailTo,$subject, $txt, $headers );
   header("Location: contact.ejs?mailsend");

}