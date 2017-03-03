<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Campbell Bros Guitar Shop</title>

   <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="index.html">Home</a></li>
            <li role="presentation"><a href="about.html">About</a></li>
            <li role="presentation" class="active"><a href="contact.php">Contact</a></li>
            <li role="presentation"><a href="gallery.html">Galery</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">CAMPBELL BROS GUITAR SHOP</h3>
      </div>
        
    <section id="title-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Contact Us</h1></div>
                </div><!-- /.row -->
            </div><!-- /.container -->
    </section>
    <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <form name="contactForm" method="post" action="contact.php">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="<?php if(isset($_POST['name'])){echo htmlspecialchars($_POST['name']);} ?>"><?php if(isset($errName)){echo "<p class='text-danger'>$errName</p>";} ?>
                            </div>
                            <div class="form-group">
                                <label for="company">Company Name:</label>
                                <input type="text" name="company" class="form-control" id="company" placeholder="Enter company name" value="<?php if(isset($_POST['company'])){echo htmlspecialchars($_POST['company']);} ?>"><?php if(isset($errCompany)){echo "<p class='text-danger'>$errCompany</p>";} ?>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address:</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email address" value="<?php if(isset($_POST['email'])){echo htmlspecialchars($_POST['email']);} ?>"><?php if(isset($errEmail)){echo "<p class='text-danger'>$errEmail</p>";} ?>
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea name="message" class="form-control" id="message"><?php if(isset($_POST['message'])){echo htmlspecialchars($_POST['message']);} ?></textarea><?php if(isset($errMessage)){echo "<p class='text-danger'>$errMessage</p>";} ?>
                            </div>
                            <button type="submit" name="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
        
        <footer class="footer">
        <p>&copy; 2016 Campbell Bros Guitar Shop, Inc.</p>
      </footer>

    </div>

    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>