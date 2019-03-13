<?php
   if (isset($_POST['submit'])) {
        
        if (isset($_POST['submit'])) {
        
        $from = $_POST['email'];
        $to = 'claudechan_77@yahoo.com';
        $subject = 'Email signup';
        $body = 'Please sign me up to the mailing list';
        
        if (!$_POST['email']) {
            $emailError = '<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;Please enter a valid email address</div>';
        }
        
        if (!$emailError) {
            if (mail ($to, $subject, $body, $from)) {
                $result = '<div class="text-success"><i class="fa fa-check" aria-hidden="true"></i> &nbsp;thank you we\'ll keep you updated</div>';
            } else {
                $result = '<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;sorry there has been an error, please try again</div>';
            }
        }
        
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css" >
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">

    <title>Landing page </title
  </head>
  <body>
    <section id="logo">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <img src="img/my-logo.png" class="img-fluid" alt="mylogo">
          </div>
        </div>
      </div>
    </section>
    <section id="intro">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <p>we're working hard, we'll be ready to launch in...</p>
                </div>
           </div>
        </div>
      </section>
      <section id="counter">
       <div class="container">
           <div class="row">

               <div class="col-md-12">
                   <div class="countdown">

                   </div>
              </div>
          </div>
       </div>
     </section>
     <section id="icons">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <ul class="list-inline">
                        <a href="http://www.twitter.com" target="blank"><li class="list-inline-item"><i class="fa twitter fa-twitter-square fa-3x" aria-hidden="true"></i></li></a>
                        <a href="http://www.facebook.com" target="blank"><li class="list-inline-item"><i class="fa facebook fa-facebook-square fa-3x" aria-hidden="true"></i></li></a>
                        <a href="http://www.google.com" target="blank"><li class="list-inline-item"><i class="fa google fa-google-plus-square fa-3x" aria-hidden="true"></i></li></a>
                        <a href="http://www.instagram.com" target="blank"><li class="list-inline-item"><i class="fa instagram fa-instagram fa-3x" aria-hidden="true"></i></li></a>
                    </ul>
                </div>

            </div>
        </div>
      </section>
      <section id="signup">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <form class="form-inline" role="form" method="post" action="#signup">
                        <input type="email" class="form-control form-control-sm" name="email" placeholder="enter your email">
                        <button type="submit" class="btn btn-signup btn-sm" name="submit" value="send">find out more</button>
                    </form>
                  <?php  echo $emailError; ?>
                  <?php  echo $result; ?>
                </div>

            </div>
        </div>
      </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.js"></script>

    <script>
      $(function() {
    $('.countdown').countdown({
        date: "June 7, 2087 15:03:26"
    });
});
      </script>
  </body>
</html>
