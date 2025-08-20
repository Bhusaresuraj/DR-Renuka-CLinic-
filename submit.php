<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $fullName = htmlspecialchars(trim($_POST['fullName']));
    $date     = htmlspecialchars(trim($_POST['date']));
    
    // Where to send the email
    $to = "enquiry@drrennukasskinclinic.com"; // <-- Change this to your email
    $subject = "New Appointment Booking from $fullName";

    // Email message formatting
    $message = "A new appointment has been booked:\n\n".
               "Name: $fullName\n".
               "Email: $email\n".
               "Preferred Date: $date\n".
               "Service: $service\n";

    // Email headers
    $headers = "From: enquiry@drrennukasskinclinic.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Try sending email
    if (mail($to, $subject, $message, $headers)) {
        header("Location: thankyou.php"); // redirect to your thank-you page
        exit();
    } else {
        echo "❌ Error: Appointment booking could not be sent. Please try again later.";
    }
} else {
    header("Location: index.php");
    exit();
}
?>
