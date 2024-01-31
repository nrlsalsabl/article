<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
  include_once("../INCNews_Front-End/_config.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <script type="text/javascript" src="../_framework/_jquery-3.4.1/dist/jquery.js"></script>
  <script type="text/javascript" src="../_framework/jquery-ui.js"></script>
  <script type="text/javascript" src="../_framework/_semantic-ui-2.4.0/semantic.min.js"></script>
  <script type="text/javascript" src="../_framework/_sweetalert2-9.5.4/sweetalert2.min.js"></script>
  <script type="text/javascript" src="../_framework/jquery.redirect.js"></script>
  <link rel="stylesheet" type="text/css" href="../_framework/_semantic-ui-2.4.0/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="../_framework/_sweetalert2-9.5.4/sweetalert2.min.css">
  <style type="text/css">
    body {
      background-color: #DADADA;
    }

    body>.grid {
      height: 100%;
    }

    .image {
      margin-top: -100px;
    }

    .column {
      max-width: 450px;
    }

    .LoginDashbord {
      width: 120px !important;
      display: inline !important;
    }

    .BackDashbord {
      width: 120px !important;
      display: inline !important;
    }
  </style>
</head>

<body>

  <div class="ui middle aligned center aligned grid">
    <div class="column">
      <h2 class="ui blue image header">
        <div class="content">
          Log-in to your account
        </div>
      </h2>
      <form class="ui large form">
        <div class="ui stacked segment">
          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" name="email" placeholder="E-mail address" id="EmailUser">
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input type="password" name="password" placeholder="Password" id="PasswordUser">
            </div>
          </div>
          <div class="ui fluid small red button BackDashbord">Back</div>
          <div class="ui fluid small blue button LoginDashbord">Login</div>
        </div>

        <div class="ui error message"></div>

      </form>

      <div class="ui message">
        New to us? <a href="./signup.php">Sign Up</a>
      </div>
    </div>
  </div>
  <script src="../_js/global.js"></script>
  <script src="../INCNews_Front-End/_js/notif.js"></script>
  <script src="../INCNews_Front-End/_js/login.js"></script>
</body>

</html>