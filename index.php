<!DOCTYPE html>
<html>
<head>
    <title>THIS IS TEST</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <script src="css/bootstrap.min.js"></script> -->
</head>
<body>
    <div class="container">
        <h1 class="header">Send Mail</h1> 
        <div class="form-wrapper">
            <form class="needs-validation" name="send-mail" action="send-mail.php" method="POST" enctype="multipart/form-data" novalidate>
                <div class="form-row">
                    <div class="col-md-12 mb-12">
                        <label for="fName">Enter your Name</label>
                        <input type="text" class="form-control" name="fName" id="fName" placeholder="First Name">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="col-md-12 mb-12">
                        <label for="email">To: Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="col-md-12 mb-12">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="col-md-12 mb-12">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="col-md-12 mb-12">
                        <label for="phone">Enter your Contact number</label>
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="col-md-12 mb-12">
                        <label for="message">Message</label>
                        <textarea rows="4" class="form-control" name="msg" id="message" cols="100" name="message" placeholder="Message"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="col-md-12 mb-12">
                        <label for="attachment">Upload</label><br>
                        <input type="file" class="form-control" id="attachment" name="attachment">
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col-md-12 mb-12">
                        <input id="myBtn" name="send-mail-btn" type="submit" class="btn btn-primary btn-sm">
                    </div>
                </div>
            </form>

        </div>
    </div> <!--.container-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
<!--<form enctype="multipart/form-data" method="POST" action="">-->
<!--    <label>Your Name <input type="text" name="sender_name" /> </label> <br>-->
<!--    <label>Your Email <input type="email" name="sender_email" /> </label> <br>-->
<!--    <label>Subject <input type="text" name="subject" /> </label> <br>-->
<!--    <label>Message <textarea name="message"></textarea> </label> <br>-->
<!--    <label>Attachment <input type="file" name="my_file" /></label><br>-->
<!--    <label><input type="submit" name="button" value="Submit" /></label>-->
<!--</form>-->

<?php 
//echo "<pre>";print_r($_REQUEST);echo "</pre>"; //comment this line
//echo "<pre>";print_r($_FILES);echo "</pre>"; //comment this line
