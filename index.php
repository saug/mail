<!DOCTYPE html>
<html>
<head>
    <title>Send Attachment With E-mail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="header">Send Mail</h1> 
        <div class="form-wrapper">
            <?php
            if( isset( $_GET['status'] ) ):
                if( "success" == $_GET['status'] ):
            ?>
                    <div class="alert alert-success" role="alert">
                        E-mail has been successfull sent. Please check your inbox
                    </div>
            <?php elseif( "error" == $_GET['status'] ): ?>
                    <div class="alert alert-danger" role="alert">
                        Oops! Something wen wrong. Please check your code.
                    </div>
            <?php
                endif;
            endif;
            ?>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>