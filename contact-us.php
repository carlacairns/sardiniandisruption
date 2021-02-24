<?php
    $name =$_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "admin@sardiniandisruption.com";
    $body= " ";

    $body .= "From: " .$name. "\r\n";
    $body .= "Email: " .$email. "\r\n";
    $body .= "Message: " .$message. "\r\n";

    mail($to, $subject,$body); 
?>

<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;800;900&display=swap" rel="stylesheet">
<meta charset="utf-8">
<meta name="description" **TODO**>
<title>The Sardinian Disruption</title>
</head>
<body>
<div class="page-container">
    <div class="content-wrap">
    <header>
        <div class="container d-flex header-content">

        <div class="logo ">
            <a class="logo" href="https://www.sardiniandisruption.com">
            The Sardinian Disruption
            </a>
        </div>

        <div>
            <ul class = "d-flex header-right">
                <li>
                    <a href="donate.html" class="donate" >
                        <span>Donate</span>
                    </a>
                </li>
                <li>
                    <a href="about.html" class="links">
                        <span>About</span>
                    </a>
                </li>
                <li>
                    <a href="contact-us.php" class="links">
                        <span>Contact Us</span>
                    </a>
                </li>
            </ul>
        </div>

        </div>
    </header>
    <nav>
        <div class="container d-flex">
                <ul class="d-flex nav-bar">
                    <li>
                        <a href="#" class="links">
                            <span>Why the Nuraghi Were Built</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="links">
                            <span>Colluvium</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="links">
                            <span>Caves and Man</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="links">
                            <span>Death of the Megafauna</span>
                        </a>
                    </li>
                </ul>

        </div>
    </nav>


<div class="container contact-content ">
    
        <div class="contact-title">
            <h1> Leave Us a Message!</h1>
            <p> Leave a message if you have a question, comment or suggestion.</p>
            <p> If you would like a response, don't forget to leave your email.</p>
        </div>
    
    <form id="contact-form" method="POST" action="contact-us.php">
        <div class="divider spacing">

        </div>
        <div class="form-group">
            <label for="inputName" class="col-sm control-label">Name</label>
            <div class="col-lg">
                <input type="text" name="name" value="" class="form-control" id="inputName">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-sm control-label">Email</label>
            <div class="col-lg">
                <input type="text" name="email" value="" class="form-control" id="inputEmail">
            </div>
        </div>
        <div class="form-group">
            <label for="inputSubject" class="col-sm control-label">Subject</label>
            <div class="col-lg">
                <input type="text" name="subject" value="" class="form-control" id="inputSubject">
            </div>
        </div>
        <div class="form-group">
            <label for="inputMessage" class="col-sm control-label input-message" required>Message</label>

            <div class="col-lg">
                <textarea name="message" rows="7" class="form-control" id="inputMessage"></textarea>
            </div>
        </div>
        <div class="form-group submit-btn">
                <input type="submit" class="btn-primary " value="Send Message"></input>
        </div>
    </form>
</div>

</div>

<footer>
    <p>Hosted by <a href="https://www.1776hosting.com"> 1776 Hosting. </a></p>
    <p> Developed by <a href="https://github.com/carlacairns">cstraya</a></p>
</footer>
</div>


</body>
</html>