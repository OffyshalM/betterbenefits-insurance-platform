<?php require_once "Sendmail.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L&J Better Benefits</title>

    <link rel="stylesheet" href="../css files/loginQuote.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container">
         <a href="../html files/index.html"  class="home-btn"> <i class="fas fa-arrow-left"></i>  Home</a>

        <h2 style="text-align: center; color:rgb(12, 6, 99) ;">Get A Quote</h2>
        <?php if (isset($_POST['getdata'])) {
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $phoneNumber = $_POST['phoneNumber'];
            $location = $_POST['location'];
            $email = $_POST['email'];
            $dob = $_POST['dob'];
            $healthQuestions = addslashes($_POST['healthQuestions']);
            $fullname = $firstName . " " . $lastName;
            $receiveremail = 'Jestinda@yahoo.com';

            //process the email...
            $subject = "A QUOTE BY CLIENT";
            $body = "<html>
            <head>
                <title>$subject</title>
            </head>
            <body>
            <div style='font-family:arial;border:1px solid #c0c0c0;padding:15px;border-radius:5px;'>
                <div style='font-size:40px;color:darkblue;font-weight:bold;'>QUOTE DETAILS!</div>
                <br><br>
                Please Find the below information submitted by a client useful. <br><br>
                <b>Full Name :</b> $fullname<br><br/>
                <b>Phone Number :</b> $phoneNumber<br><br/>
                <b>location :</b> $location<br><br/>
                <b>Email Address:</b> $email<br><br/>
                <b>Date of Birth:</b> $dob<br><br/>
                <b>Health Questions:</b> $healthQuestions<br><br/>

                <br>
                Regards,<br>
                <br><br>
                <hr>
                <small><i>This is an auto-generated email, do not reply!</i></small>
            </div>
            </body>
            </html>";
            
            $altBody = "Please Find the below information submitted by a client useful. \n\nFull Name: $fullname\n\nPhone Numbere: $phoneNumber\n\nLocation: $location\n\nEmail Address: $email\n\nDate of Birth: $dob\n\nHealth Questions: $healthQuestions\n\n.\n\nRegards.\n\nThis is an auto-generated email, do not reply!";

            $mailSender = new Sendmail();
            $mailSender->sendMail($receiveremail, $fullname, $subject, $body, $altBody);

            echo "Form Submitted Succesffuly, you will receive a feedback shortly";
        }
        ?>
        <form method="post">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" required>
            </div>
            <div class="form-group">
                <label for="phoneNumber">Phone Number</label>
                <input type="text" id="phoneNumber" name="phoneNumber" required>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" id="location" name="location" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="healthQuestions">Health Questions</label>
                <textarea id="healthQuestions" name="healthQuestions" required></textarea>
            </div>
            <button type="submit" name="getdata">Get Quote</button>
        </form>
    </div>
   
</body>
<script src="../js files/loginQuote.js"></script>
</html>