<?php

setcookie("Zero", "Test", time() + 3600, "/");  // "/" means that the cookie is available in the all my website

// Check about cookies in the browser if it supported or not
if (count($_COOKIE) > 0) {
  echo "Good the cookies are enabled on this website";
} else {
  echo "Sorry the cookies are not enabled Please enable it for best browsing";
}

/*
Set cookie :     Syntax:
                         setcookie(name, value, expire time, path, domain, secure, httponly);
                  Name = Name of the cookie
                  Value = content of the cookie
                  Expire = Expiration date
                  Domain
                  secure = Boolean => If True means send the cookie using secure https (SSL)
*/


setcookie("School", "Channel", time() + 86400, "/", "localhost", true, false ); // 1DAY

echo "<pre>";
print_r($_COOKIE);  // print the cookies array and it associated
echo "</pre>";
