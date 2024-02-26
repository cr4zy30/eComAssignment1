<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<head>
  <title>
    <?= $name ?> view
  </title>

  <style>
    .container {
      margin-left: 0px;
      display: flex;
      gap: 20px;
    }

    .content {
      display: flex;
      flex-direction: column;
      gap: 10px;
      width: 1000px;
    }

    .pageVisits {
      margin-left: auto;
    }
  </style>

</head>

<body>

  <div class="container">

    <ul>
      <li><a href="/Main/index">Landing page</a></li>
      <li><a href="/Main/about_us">About us</a></li>
      <li><a href="/Contact/index">Contact us</a></li>
      <li><a href="/Contact/read">See the messages we get</a></li>
    </ul>

    <div class="content">
      <?php include($contentView); ?>
      <p class="pageVisits">test</p>
    </div>
  </div>

  <script>
    function loadCounter() {
      $.getJSON("/Count/index", function (data) {
        $(".pageVisits").text(`${data.count} page visits`);
      }).fail(function (jqXHR, textStatus, errorThrown) {
        console.error('Failed to load count: ' + textStatus);
      });
    }
    loadCounter();
  </script>

</body>

</html>