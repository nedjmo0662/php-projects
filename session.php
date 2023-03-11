<?php
   session_start();
   
   if (isset($_SESSION['counter'])) {
      $_SESSION['counter']  += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
   
   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= "in this session.";
   
   echo ( $msg );

?>

<p>
   To continue  click following link <br />
   <h1> that :<?php echo (PHP_SESSION_DISABELD);  ?><h1>
</p>
