<DOCTYPE html>
<html>
   <body>
      <title>HTML WEBSITE</title>

      <h2>PHP TEST PAGE</h2>

<?php

$user=$_SERVER['REMOTE_USER'];

echo "The user should show up between the lines";
echo "\n";
echo ">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>";
echo "\n";
echo "$user";
echo "\n";
echo ">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>";

#This works and fetches the local user
//echo getenv("username");

//header('WWW-Authenticate: NTLM');
//$_SERVER['AUTH_USER'];

?>

   </body>
</html>
