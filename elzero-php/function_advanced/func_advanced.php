<?php

function getTicket( $user, $age ) {
  $ticket = rand(5000, 1000000);

  if ( $age >= 30 ) {
    $msg = "Hello " . $user . " your age is " . $age . "<br>";
    $msg .= "You are Qualified to get a ticket congratz :)" . "<br>";
    $msg .= "Your ticket id is [ <span>" . $ticket . "</span> ]";
  } else {
    $msg = "Hello " . $user . " your age is " . $age . "<br>";
    $msg .= "You are not Qualified to get a ticket Sorry !!";
  }
  return $msg;
}
$id = getTicket("Omar", 33);

function makeFrame($element) {
 $frame = "<div class='nice-frame'>";
 $frame .= $element;
 $frame .= "</div>";
 return $frame;
}

$myElement = makeFrame($id);
