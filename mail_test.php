<?php
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    // $from = "nedjmonettari@gmail.com";
    // $to = "crazyboy0662@gmail.com";

    // $subject = "PHP Mail sending checking";
    // $message = "PHP Mail works fine.";
    // $headers = array(
    //     'From' => $from,
    //     'Reply-To' => $from,
    //     'X-Mailer' => 'PHP/' . phpversion()
    // );

  $success = mail("crazyboy0662@gmail.com", "test subject", "hello there", "From: nedjmonettari@gmail.com");
//    $success = mail($to, $subject, $message, $headers);

   if($success){
       echo "the mail message was successfully sent";
       echo "<br>thank you";
   }else {
       echo "mail function deosn't work oops";
   }
?>
