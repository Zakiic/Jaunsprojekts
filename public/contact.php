<?php

include("dbconnect.php");

?>
<!DOCTYPE htmlPUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Koka izstrādājumi</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <link href="css/modern-business.css" rel="stylesheet">

    
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  

</head>

<body>

    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Navigators</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Koka izstrādājumi</a>
            </div>
    
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="portfolio-1-col.html">Portfolio</a>
                    </li>
                    
                    <li>
                        <a href="blog-home-1.html">Blogs</a>
                    </li>
                   
                    
                    <li>
                        <a href="about.html">Par mani</a>
                    </li>
                    <li>
                        <a href="comment.php">Atsauksmes</a>
                    </li>
                    <li>
                        <a href="contact.php">Kontakti</a>
                    </li>
                     <li class="page-scroll">
                        <a href="logout.php">Iziet</a>
                    </li>
                </ul>
            </div>
    
        </div>
    
    </nav>

    
    <div class="container">

    
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Kontakti
                    
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Sākums</a>
                    </li>
                    <li class="active">Kontakti</li>
                </ol>
            </div>
        </div>
    

    
        <div id="page-wrap">
   
        <div class="row">
    
            <div class="col-md-8">
    
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?hl=en&q=2.linija&ie=UTF8&t=m&z=11&iwloc=B&output=embed"></iframe>
            </div>
    
            <div class="col-md-4">
                <h3>Kontakti</h3>
                <p>
                    2.līnija 2a<br>Jelgava, Latvija LV-3003<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                   Telefons: +37126985905</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <a href="Krox2008@inbox.lv">Krox2008@inbox.lv</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    PIRMDIEN-PIEKTDIEN: 9:00- 17:00</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=100009478046868"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/nezinamais2015"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    

    
        <div id="page-wrap">
  
        <div id="contact-area">

        <form method="post" action="user_process.php">
            <div class="control-group form-group">
            <div class="controls">
            
            <label for="Name">Vārds:</label>
            <input type="text" class="form-control" name="name" id="Name" required data-validation-required-message="Lūdzu ievadiet savu vārdu." />
<p class="help-block"></p>
            </div>
           </div>
            
             <div class="control-group form-group">
                        <div class="controls">
            <label for="City">Numurs:</label>
            <input type="text" name="city" id="City" class="form-control" required data-validation-required-message="Lūdzu ievadiet savu numuru."/>
</div>
                    </div>
            
            <div class="control-group form-group">
                        <div class="controls">
            <label for="Email">Epasts:</label>
            <input type="text" name="email" id="Email" class="form-control" required data-validation-required-message="Lūdzu ievadiet savu epastu." />
 </div>
                    </div>
            
            <div class="control-group form-group">
                        <div class="controls">
            <label for="Message">Ziņojumi:</label><br />
            <textarea name="message" rows="20" cols="20" id="Message" class="form-control" rows="10" cols="100" required data-validation-required-message="Uzrakstiet ziņojumu" maxlength="999" style="resize:none" ></textarea>
</div>
                    </div>
            <input type="submit" name="submit" value="Sūtīt" class="btn btn-primary" />
        </form>

        <div style="clear: both;"></div>
    </div>
    

        <hr>

    
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Kristaps Legzdiņš KL14023</p>
                </div>
            </div>
        </footer>

    </div>
    
    <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>

   <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
