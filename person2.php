<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Person Info</h2>
    <p>Get array:</p>
    <?php

    $firstName = $_GET["fname"];
    $lastName = $_GET["lname"];
    $name = array('fname' => $firstName, 'lname' => $lastName);
    print_r($name);

    echo '<br/>'.'<br/>'."First name is " . $name['fname'].'<br/>'.'<br/>';
    echo "Last name is " . $name['lname'].'<br/>'.'<br/>';

     ?>
  </body>
</html>
