<!doctype HTML>
<html>
    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A layout example that shows off a responsive product landing page.">

        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

        <link rel="stylesheet" href="css/formStyles.css">

        <title>FAQ</title>
    </head>    
        
    <body>
        <div class="header">
            <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
                <a class="pure-menu-heading" href=""><img src="assets/img/Controller-52.png"></a>
                
                <ul class="pure-menu-list">
                    <li class="pure-menu-item" ><a href="index.php" class="pure-menu-link">Home</a></li>
                    <li class="pure-menu-item"><a href="feed.php" class="pure-menu-link">Ads</a></li>
                     <?php
                    session_start();
                    if(isset($_SESSION['user'])) {
                        echo "<li class='pure-menu-item'><a href='adForm.php' class='pure-menu-link'>Create Ad</a></li>";
                        echo "<li class='pure-menu-item'><a href='profilePage.php' class='pure-menu-link'>My Profile</a></li>";
                        echo "<li class='pure-menu-item'><a id='' href='logout.php' class='pure-menu-link'>Log Out</a></li>";
                    } else {
                        echo "<li class='pure-menu-item'><a href='index.php#register' class='pure-menu-link'>Register</a></li>";
                        echo "<li class='pure-menu-item'><a id='modal_trigger' href='index.php#openModal' class='pure-menu-link'>Log In</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
        
        <div clas="banner">
            <h1 class="banner-head"> FAQ</h1>
        </div>
        
        
        
        <div class="l-content">
            <div class="games-table pure-g">
                    <div class="side-box pure-u-1 pure-u-md-1-6">

                    </div>
                    
                    <div class="info-box pure-u-1 pure-u-md-16-24">
                        <div class="FAQ is-center">
                            <p>FAQ</p>
                            <form class="pure-form pure-form-stacked">
                                <fieldset> 
                                    <legend></legend>
                                        <p>We are a fun website that connects gamers with eachother! To join our community you must follow our rules:</p>
                                        <p>Be atleast 13 years old</p>
                                        <p>Your profile must represent yourself</p>
                                        <p>You may only have one profile</p>
                                        <p>All information you share must be truthful</p>
                                        <p>You are not allowed to share political ideologies, racist opinios or other harrasing comments.</p>
                                        <p>You are nor allowed to harras other gamers via spam or insults</p>
                                        <p>Breaking these rules WILL result in a ban</p>
                                </fieldset>
                            </form>
                            
                            
                        </div>
                    </div>
                    
                    <div class="side-box pure-u-1 pure-u-md-1-6">

                    </div>
            </div>
        </div>
        
        <div class="footer l-box is-center">
            <div class="pure-menu pure-menu-horizontal">
            <a href="FAQ.html" class="pure-menu-heading pure-menu-link">FAQ</a>
            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="contactUs.html" class="pure-menu-link">CONTACT US</a></li>
            </ul>
            </div>
        </div>
        
    </body>
</html>
