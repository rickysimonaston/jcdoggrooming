<?php
// Message Vars
$msg = '';
$msgClass = '';
// Check for submit
if (filter_has_var(INPUT_POST, 'submit')) {
    // Get Form Data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Check Required Fields
    if (!empty($name) && !empty($email) && !empty($subject) && !empty($phone) && !empty($message)) {
        // Passed
        // Check Email
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            // Failed
            $msg = 'Please use a valid email';
            $msgClass = 'alert-error';
        } else {
            // Passed
            // Recipinet Email
            $toEmail = 'ricky.aston@hotmail.com';
            $subject = 'Contact Request regarding '. $subject;
            $body = '<h2>Contact Request</h2>
                    <h4>From</h4><p>'.$name.'</p>
                    <h4>Regarding</h4><p>'.$subject.'</p>
                    <h4>Contact Details</h4><p>'.$phone.' or '.$email.'</p>
                    <h4>Message</h4><p>'.$message.'</p>
            ';
            // Email Headers
            $headers = "MIMI-Version: 1.0" . "\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

            // Additional Headers
            $headers .= "From: " .$name. "<".$email.">". "\r\n";

            if (mail($toEmail, $subject, $body, $headers)) {
                // Email Sent
                $msg = 'Your request has been sent';
                $msgClass = 'alert-success';
                header("Location:contact.php");
            } else {
                $msg = 'Something has gone wrong please retry';
                $msgClass = 'alert-error';
            }
        }
    } else {
        // Failed
        $msg = 'Please fill in all fields';
        $msgClass = 'alert-error';
    }
}

?>
<?php include('includes/_header.php'); ?>

<body>
    <!-- Header -->
    <header id="header-inner">
        <div class="container">
            <?php include('includes/_navbar.php'); ?>
        </div>
    </header>

    <!-- Section A: Contact Form-->
    <section id="contact-a" class="text-center py-3">
        <div class="container">
            <h2 class="section-title">Contact Me</h2>
            <div class="bottom-line"></div>
            <p class="lead">Here is how you can reach me</p>
            <?php if($msg != '') : ?>
            <div class="alert <?php echo $msgClass; ?>">
                <p><?php echo $msg; ?></p>
            </div>
            <?php endif; ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="text-fields">
                    <input type="text" name="name" class="text-input name-input" placeholder="Name"
                        value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
                    <input type="text" name="subject" class="text-input subject-input" placeholder="Subject"
                        value="<?php echo isset($_POST['subject']) ? $subject : ''; ?>">
                    <input type="email" name="email" class="text-input email-input" placeholder="Email Address"
                        value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                    <input type="text" name="phone" class="text-input phone-input" placeholder="Phone Number"
                        value="<?php echo isset($_POST['phone']) ? $phone : ''; ?>">
                    <textarea name="message" class="text-input message-input"
                        placeholder="Enter Message"><?php echo isset($_POST['name']) ? $name : ''; ?></textarea>
                </div>
                <button type="submit" name="submit" class="btn-dark">Submit Message</button>
            </form>
        </div>
    </section>
    <!-- Main Footer -->
    <?php include('includes/_footer.php'); ?>
</body>

</html>