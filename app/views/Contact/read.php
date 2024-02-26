<!DOCTYPE html>
<html lang="en">

<head>
  <title>Messages sent</title>
</head>

<body>
  <div>

    <h1>Contact us - messages sent</h1>

    <?php

    foreach ($data as $index => $messageObj) {
      echo "<h6>$messageObj->email</h6>
                <p>$messageObj->message</p>";
      // <p>$messageObj->IP</P>";
    }

    ?>

  </div>
</body>

</html>