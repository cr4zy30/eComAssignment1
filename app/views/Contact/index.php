<!DOCTYPE html>
<html lang="en">

<head>

  <title>Contact us</title>
  <style>
    .form-group {
      margin-bottom: 10px;
    }

    .submitBtn {
      margin-left: auto;
    }
  </style>


</head>

<body>
  <div>

    <h1>Contact us</h1>
    <p>Wanna reach us? Write your email information and message in the following form and then submit.</p>

    <form method="POST" action="/Contact/sendMessage">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" name="email" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Message</label>
        <div class="col-sm-10">
          <textarea type="text" class="form-control" name="message" required></textarea>
        </div>
      </div>

      <div class="col-sm-10 submitBtn">
        <button type="submit" class="form-control">Send!</button>
      </div>

    </form>


  </div>

</body>

</html>