<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // ✅ Simulated response (no email sent)
    echo "<script>
        alert('✅ Thank you, $name! Your message has been submitted successfully.');
        window.location.href = 'index.html';
    </script>";
}
?>
