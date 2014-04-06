<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SF Citi Registration</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="site-frame">
    <div>
    <?php
      // display form if user has not clicked submit
      if (!isset($_POST["submit"]))
      {
    ?>
      <h1>Register for sf.citi</h1>
      <form role="form" name="signup-form" action="/" method="POST">
        <div class="form-group">
          <label for="first-name">First name</label>
          <input type="text" class="form-control" id="first-name" placeholder="First name">
        </div>
        <div class="form-group">
          <label for="last-name">Last name</label>
          <input type="text" class="form-control" id="last-name" placeholder="Last name">
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="company">Company</label>
          <input type="text" class="form-control" id="company" placeholder="Company">
        </div>
        <div class="form-group">
          <label for="company-url">Company URL</label>
          <input type="url" class="form-control" id="company-url" placeholder="Company URL">
        </div>
        <div class="form-group">
          <label for="company-description">Company Description</label>
          <input type="text" class="form-control" id="company-description" placeholder="Company Description">
        </div>
        <div class="form-group">
          <label for="zip-code">Zip Code</label>
          <input type="number" min="0" max="99999" class="form-control" id="zip-code" placeholder="Zip Code">
        </div>
        <div class="form-group">
          <label for="comments">Other Comments</label>
          <input type="text" class="form-control" id="comments" placeholder="Other Comments">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>

    <?php 
      }
      else
      // the user has submitted the form
      {
      // Check if the "from" input field is filled out
      if (isset($_POST["email"]))
        {
        $from = $_POST["email"]; // sender
        $comments = $_POST["comments"];
        // message lines should not exceed 70 characters (PHP rule), so wrap it
        $comments = wordwrap($comments, 70);
        // send mail
        mail("kaiyuan.neo@gmail.com", $comments, "From: $from\n");
        echo "Thank you for sending us feedback";
        }
      }
    ?>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>