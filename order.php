<?php
$name = htmlspecialchars($_POST['name'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$phone = htmlspecialchars($_POST['phone'] ?? '');
$message = htmlspecialchars($_POST['message'] ?? '');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Submitted</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="thankyou">
    <h1>Thank You, <?php echo $name; ?>!</h1>
    <p>Your order/contact request has been submitted successfully.</p>
    <p><b>Email:</b> <?php echo $email; ?></p>
    <p><b>Phone:</b> <?php echo $phone; ?></p>
    <p><b>Message:</b> <?php echo $message; ?></p>
    <a class="btn" href="index.php">Back to Home</a>
  </div>
</body>
</html>
