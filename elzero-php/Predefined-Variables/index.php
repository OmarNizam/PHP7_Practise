<?php
require 'test.php';
  /*
    Predefined variables:
                          [1] superglobal       $GLOBALS[variable name];
  */


// Global Scope
$name = "Omar";
function testFunc() {
  // function scope
  echo $GLOBALS['name'] . "<br />"; // call global variables using globales array.
  // If i want to make function's variable golbal
  $GLOBALS['name1'] = "Osama";
}
testFunc();
echo $name1 . "<br />";

/*
  Predefined variables:
                        [2] Server        $_SERVER[''];
*/

echo $_SERVER['SERVER_NAME'] . "<br />";

//echo $_SERVER['QUERY_STRING'] . "<br />";

echo $_SERVER['HTTP_REFERER'] . "<br />";

echo "My server port is: " .$_SERVER['SERVER_PORT'] . "<br />";

echo "My document root is :" . $_SERVER['DOCUMENT_ROOT'] . "<br />";  // give me the root until the folder.


/*
  Predefined variables:
                        [3] GET        
*/
